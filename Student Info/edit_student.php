<?php 

	$link=mysqli_connect('localhost','root','','db_student_info');

		require_once 'student.php';

		$db_student_info=select_student_info();

/*$message='';
if(isset($_POST['btn'])){
	$link=mysqli_connect('localhost','root','','db_student_info');
	$sql="INSERT INTO tbl_student_info2 (student_name, email_address, phone_number, address)VALUES('$_POST[student_name]', '$_POST[email_address]', '$_POST[phone_number]', '$_POST[address]')";
	
	if(mysqli_query($link,$sql)){
		 
		$message="Student info save successfully";
	}else{
		die('Query problem'.mysqli_error($link));
	}

	}*/

	require_once 'student.php';
	
	$message='';
	if(isset($_POST['btn'])){
			update_student_info();
	}

?> 

 



<!DOCTYPE html>
<html lang="en">
  <head>
  <title>ADD Student</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
  <div class="container ">
	<div class="row">

<nav class="navbar navbar-default">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="add_student.php">বিচরণ</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="add_student.php">Add Student  </a></li>
        <li ><a href="view_student.php">View Student</a></li>
      
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


		<div class="container"> 
			<div class="row">
			
			<div class="col-sm-6 col-sm-offset-3"> 
			<div class="well"> 
			<h1 class="text-center text-danger"> <?php echo $message;?> </h1>
			<hr /> 
			
			<h3 class="text-center text-info">Edit Student Info</h3>
			<hr />
			
				<form class="form-horizontal" action="" method="post">
			  <div class="form-group">
				<label  class="col-sm-3 control-label">Student Name</label>
				<div class="col-sm-9">
				  <input type="text" name="student_name" value="<?php echo $db_student_info['student_name']; ?>" class="form-control" placeholder="Enter Student Name">
				</div>
			  </div>
			  
			   <div class="form-group">
				<label  class="col-sm-3 control-label">Email</label>
				<div class="col-sm-9">
				  <input type="email" name="email_address" value="<?php echo $db_student_info['email_address']; ?>" class="form-control" placeholder="Enter Email Address">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label  class="col-sm-3 control-label">Phone Number</label>
				<div class="col-sm-9">
				  <input type="number" name="phone_number" value="<?php echo $db_student_info['phone_number']; ?>" class="form-control"  placeholder="Enter Phone Number">
				</div>
			  </div>
			  <div class="form-group">
				<label  class="col-sm-3 control-label">Address</label>
				<div class="col-sm-9">
				<textarea name="address"  class="form-control"><?php echo $db_student_info['address']; ?></textarea>
				</div>
			  </div>

			  
			  <div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
				  <button type="submit" name="btn" class="btn btn-info btn-block">Update Student Info</button>
				</div>
			  </div>
			  
			</form>
		</div>
			</div>
			</div>	
		</div>


	</div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  </body>
</html>