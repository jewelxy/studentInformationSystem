<?php 
	$link=mysqli_connect('localhost','root','','db_student_info');
		require_once 'student.php';
		if(isset($_GET['status'])){
				delete_student_info();
		}
		
			require_once 'student.php';
			$query_result=select_all_student_info();
				/*echo '<pre>';
				print_r($student_info2);*/
				/*echo '<pre>';
				print_r($query_result);
				exit();*/
?> 





<!DOCTYPE html>
<html lang="en">
  <head>
  <title>View Student</title>
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
        <li class="active"><a href="view_student.php">View Student</a></li>
      
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
			
			<div class="col-sm-8 col-sm-offset-2"> 
			<div class="well"> 
			
			<h3 class="text-center text-success">All Student Info</h3>
			
			<br /> 
			<table class="table table-bordered"> 
			
			<thead> 
				<tr> 
					<th>Student Name</th>
					<th>Email Address</th>
					<th>Phone Number</th>
					<th>Address</th>
					<th>Action</th>
				
				</tr>
			</thead>
				
			<tbody> 
				<?php while($student_info2=mysqli_fetch_assoc($query_result)){  ?>
				<tr> 
					<td><?php echo $student_info2['student_name'];?></td>
					<td><?php echo $student_info2['email_address'];?></td>
					<td><?php echo $student_info2['phone_number'];?></td>
					<td><?php echo $student_info2['address'];?></td>
					<td>
						<a href="edit_student.php?student_id=<?php echo $student_info2['student_id'];?>" class="btn btn-info">
						<span class="glyphicon glyphicon-edit"></span>
						</a>
						
						<a href="?status=delete&&student_id=<?php echo $student_info2['student_id'];?>" class="btn btn-danger">
						<span class="glyphicon glyphicon-trash"></span>
						</a>
					
					</td>

				
				</tr>
				<?php }?>
			</tbody>
			</table>
			
			
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