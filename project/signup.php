<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$phone_number = $_POST['phone_number'];
		$email = $_POST['email'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];


		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($first_name) && !empty($email) &&  !empty($phone_number))
		{

			//save to database
			$user_id = random_num(100);
			$query = "insert into users (first_name,last_name,phone_number,email,user_id,user_name,password) values ('$first_name','$last_name','$phone_number','$email','$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup-form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="signup.css">
</head>
<body>

	<style type="text/css">
	
    body{
    margin:0;
    padding:0;
    font-family: poppins;
    background-image: url(background_final.jpg);
    -webkit-background-size:cover;
    background-size: cover;
}
.wrapper{
    background-color:rgba(225, 225, 225, 0.5);
    width: 800px;
    height: 500px;
    position: absolute;
    top: 20%;
    left: 25%; 
    transform: translate (-50%, -50%);
}
.wrapper:before{
    content:'';
    width: 350px;
    height: 500px;
    background-color:rgba(0, 0, 0, 0.5);
    position: absolute;
}
.header-area h2{

    position: absolute;
    
    top: 10%;
    
    left: 7%;
    
    transform: translate (-50%, -50%);
    
    width: 25%;
    
    border: 12px inset #fff;
    
    text-align: center;
    
    color: #fff;
    
    font-size: 35px;
} 
.header-area p{

    position: absolute;
    
    top: 60%;
    
    left: 15%;
    
    transform: translate (-50%, -50%);
    
    color: #fff;
}  
.social-area{
    position: absolute;
    top: 70%;
    left: 14%;
    transform: translate (-50%, -50%);
}
.social-area { 
    padding: 2px;
    margin: 0 2px;
    box-shadow: 1px 1px 5px rgba (0,0,0,0.5);
    color: #fff; 
    font-size: 30px;
    }

.form-area{
    position: absolute;
    top:1%;
    left:50%;
    transform: translate (-50%, -50%);
    width: 350px;
    overflow: hidden;
}
.form-area input{
    outline:none;
    padding: 0 0 0 35px;
    border: 1px solid rgba(0, 0, 0, 0);
    border-bottom-color:#201e1e ;
    background: transparent;
    width:100%;
    height: 50px;
    margin-bottom: 10px;
}
.form-area i{
    width: 30px;
    position: absolute;
    margin-top: 15px;
}

.form-area button{
    width:350px;
    height: 50px;
    position:relative;
    top:70%;
    font-size: medium;
}
.header-area h3{

position: absolute;

top: 40%;

left: 7%;

transform: translate (-50%, -50%);

width: 25%;


text-align: center;

color: #fff;

font-size: 35px;
} 

}

	</style>

        <div class="wrapper">
            <div class="header-area">
                <h2>Blink  Rescue</h2>
                <h3>SIGN UP HERE<h3>
                
            </div>
            

            <div class="form-area">
                <form method="post">
					<i class="fa fa-user"></i>
					<input id="text" type="text" name="first_name" placeholder="Enter your first name">
					<i class="fa fa-user"></i>
					<input id="text" type="text" name="last_name" placeholder="Enter your last name">
					<i class="fa fa-user"></i>
					<input id="text" type="text" name="user_name" placeholder="Enter Username">
					<i class="fa fa-envelope"></i>
					<input id="text" type="text" name="email" placeholder="Enter your email address">
					<i class="fa fa-key"></i>
					<input id="text" type="password" name="password" placeholder="Enter password">
					<i class="fa fa-key"></i>
					<input type="password" placeholder="Confirm password">
					<i class="fa fa-phone"></i>
					<input id="text" type="text" name="phone_number" placeholder="Enter your phone number">
                    <button type="submit" value="Signup">Sign up</button>
                </form>
                
            </div>
            
        </div>
        <div class="loginop">
				
			    <p style="text-align:center;margin-top:650px;font-size:20px;">Already have an account? <a style="text-decoration:none;" href="http://localhost/login/login.php">Login Here</a><br></p>	
			</div>
</body>
</html>