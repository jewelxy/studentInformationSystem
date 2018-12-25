<?php 

//add_student php code

	function add_student(){
		$link=mysqli_connect('localhost','root','','db_student_info');
	$sql="INSERT INTO tbl_student_info (student_name, email_address, phone_number, address)VALUES('$_POST[student_name]', '$_POST[email_address]', '$_POST[phone_number]', '$_POST[address]')";
	
	if(mysqli_query($link,$sql)){
		 
		$message="Student info save successfully";
		return $message;
	}else{
		die('Query problem'.mysqli_error($link));
	}
}



//edi_student php code

	function select_student_info(){
				global $link;
				global $student_id;
				$student_id=$_GET['student_id'];
			$sql="SELECT*FROM tbl_student_info WHERE student_id='$student_id'";

			 if(mysqli_query($link,$sql)){
				$query_result=mysqli_query($link,$sql);
				$db_student_info=mysqli_fetch_assoc($query_result);
				//echo $db_student_info['student_name'];
			}else{
				die('Query problem'.mysqli_error($link));
			}
			return $db_student_info;
}


	function update_student_info(){
		global $link;
		global $student_id;
		
		$sql="UPDATE tbl_student_info SET student_name='$_POST[student_name]',email_address='$_POST[email_address]',phone_number='$_POST[phone_number]',address='$_POST[address]' where student_id='$student_id'";
	if(mysqli_query($link,$sql)){
		 header('Location:view_student.php');
		$message="Student info Update successfully";
	}else{
		die('Query problem'.mysqli_error($link));
	}

	}
	
	
	
//view_student php code	

				function delete_student_info(){
						global $link;
						$student_id=$_GET['student_id'];
						$sql="DELETE FROM tbl_student_info WHERE student_id='$student_id'";
							if(!mysqli_query($link,$sql)){
						die('Query Problem'.mysqli_error($link));
							}
				}
				
				
				
				
				
					function select_all_student_info(){
								global $link;
								$sql="SELECT*FROM tbl_student_info";
							if(mysqli_query($link,$sql)){
							$query_result=mysqli_query($link,$sql);
									return $query_result;
							$student_info2=mysqli_fetch_assoc($query_result);
							}else{
								die('Query Problem'.mysqli_error($link));
							}
					}
?>