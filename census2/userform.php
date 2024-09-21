<?php

if(isset($_POST['submit'])){
    include 'connection.php';
    $member=$_POST['member'];
    $aadhar=$_POST['aadhar'];
    $age=$_POST['age'];
    $dob=$_POST['dob'];
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $caste=$_POST['caste'];
    $religion=$_POST['religion'];
    $gender=$_POST['gender'];
    $work=$_POST['work'];
    $home=$_POST['home'];
    $income=$_POST['income'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $sql="INSERT INTO `form` (`member`, `aadhar`, `age`, `dob`, `firstname`, `middlename`, `lastname`, `caste`, `religion`, `gender`, `work`, `home`, `income`, `phone`, `address`) VALUES ('$member', '$aadhar', '$age', '$dob', '$firstname', '$middlename', '$lastname', '$caste', '$religion', '$gender', '$work', '$home', '$income', '$phone', '$address')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "insert";
    }
    else{
        echo "not";
    }
    header('location:popup.html');
	
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Census System</title>
</head>
<link rel="stylesheet" href="style3.css">
<body>
    <div class="uform">
        <div class="form">
    <h2>User Login Form</h2>
    



    <br>
    <br>
    <form action="" method="post">

        <label>ENTER NO OF FAMILY MEMBERS</label>
        <input type="number" size="15" name="member"> <br> <br>

        <label>ENTER YOUR AADHAR NUMBER</label>
        <input type="AADHAR" placeholder="AADHAR NUMBER" name="aadhar"> <br> <br>

        <label>AGE</label>
        <input type="age" name="age"> <br> <br>

        <label for="DOB">DOB</label>
        <input type="date" name="dob" id="">
        <br><br>

        <label> FIRSTNAME </label>
        <input type="text" name="firstname" size="15"> <br> <br>
        <label> MIDDLE NAME: </label>
        <input type="text" name="middlename" size="15"> <br> <br>
        <label> LASTNAME: </label>
        <input type="text" name="lastname" size="15"> <br> <br>

        <label>
            CASTE :
        </label>
        <select name="caste">
            <option value="Open">caste</option>
            <option value="Open">Open</option>
            <option value="OBC">OBC</option>
            <option value="SC/ST">SC/ST</option>
            <option value="VJ/NT">VJ/NT</option>
            <option value="OTHER">OTHER</option>

        </select>
        <br><br>

        <label>
            RELIGION:
        </label>
        <select name="religion">
            <option value="Open">religion</option>
            <option value="Hindu">Hindu</option>
            <option value="Muslim">Muslim</option>
            <option value="SIKH">sikh</option>
            <option value="BUDDh">budh</option>
            <option value="OTHER">other</option>

        </select>
    
        <br><br>
        <label>
            GENDER :
            <br>

        <!-- </label><br>
        <input type="radio" name="male" gender value="male" /> Male <br>
        <input type="radio" name="female" gender value="female"/> Female <br>
        <input type="radio" name="other" gender value="other" /> Other
        <br> -->
        
        <input type="text" placeholder="Male/Female/Other" name="gender">


<br>


        EDUCATION/WORK :
        </label>
        <select name="work">
            <option value="Education/work">Education/work</option>
            <option value="Educated">Educated</option>
            <option value="Non-Educated">Non-Educated</option>
            <option value="Farming">Farming</option>
            <option value="Other work">Other work</option>

        </select>
        <br>
        <br>
        <label>
            HOME :
            <br>

            <input type="text" placeholder="yes/no" name="home">
           
            
            <br>
            
                   



        <!-- </label><br>
        <input type="radio" name="Yes" /> Yes <br>
        <input type="radio" name="No" /> No <br>
        <br> -->

        INCOME :
    </label>
    <select name="income">
        <option value="INCOME">INCOME</option>
        <option value="Below-25000">Below-25000</option>
        <option value="26000-50000">26000-50000</option>
        <option value="51000-75000">51000-75000</option>
        <option value="76000-100000">76000-100000</option>
        <option value="Above 100000">Above-100000</option>

    </select>


        <br>
        <br>
        
        <label>
            PHONE :
        </label>
        <input type="text" name="phone" value="+91" size="2" />
        <input type="text" name="phone" size="10" /> <br> <br>
        
            <label> address </label>
            <input type="text" name="address" size="50">

        <br> <br><br>

   
    
        <input type="submit" name="submit" values="submit" class="form-btn">
        </form>
    </div>

</body>

</html>