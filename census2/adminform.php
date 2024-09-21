<?php
include 'connection.php';
$res=mysqli_query($conn,"select * from `form` order by sno asc");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

*{
    box-sizing: border-box;
    
}
body{
    margin: 15px 34px;
    font-size: 17px;
    padding: 8px;
    background: url('bg.jpg');
    background-size: cover;   
}
.container{
   background-color: #f2f2f2;
   padding: 5px 24px 50px;
   border: 1px solid grey;
   border-radius: 4px;
   
   margin-left: 0px;
   margin-top: 15px;
}
		table, th, td {
			
  border: 3px solid black;
  border-collapse: collapse;
  margin-top:20px;
 
  
  padding:10px;
}
.table{
	width:100%;
}
.h1{
	font-weight:bold;
	text-align:center;
}
.h2{
	margin-top:20px;
}
.form-control{
	margin-left:10px;
}
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">

    <div class="form">
        
    <form action="" method="post">
    <h1 class="h1">All user form</h1>
    <table class="table">
        <thead>
            <th>family member</th>
            <th>aadhar</th>
            <th>age</th>
            <th>dob</th>
            <th>first name</th>
            <th>middle name</th>
            <th>last name</th>
            <th>caste</th>
            <th>religion</th>
            <th>gender</th>
            <th>education</th>
            <th>home</th>
            <th>income</th>
            <th>phone</th>
            <th>address</th>
        </thead>
        <tbody>
            <?php
                                    $i=1;
									while($row=mysqli_fetch_assoc($res)){?>
									<tr>
									
									<td><?php echo $row['member']?></td>
									<td><?php echo $row['aadhar']?></td>
										<td><?php echo $row['age']?></td>
									   <td><?php echo $row['dob']?></td>
									   <td><?php echo $row['firstname']?></td>
                                       <td><?php echo $row['middlename']?></td>
                                       <td><?php echo $row['lastname']?></td>
									   <td><?php echo $row['caste']?></td>
                                       <td><?php echo $row['religion']?></td>
                                       <td><?php echo $row['gender']?></td>
                                       <td><?php echo $row['work']?></td>
                                       <td><?php echo $row['home']?></td>
                                       <td><?php echo $row['income']?></td>
                                       <td><?php echo $row['phone']?></td>
                                       <td><?php echo $row['address']?></td>
                                    </tr>
                                    <?php
									$i++;
									} ?>
        </tbody>
    </div>
    </div>
</body>
</html>