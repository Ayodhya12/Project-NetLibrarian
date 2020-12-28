<!DOCTYPE html>
<html>
<head>
	 <title>NetLibrarian.com</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="theme1.css">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <style>
     	*{
     		padding: 0;
     		margin: 0; 
     	}
     	.form-box{
     		width: 380px;
     		height: 570px;
     		position: relative;
     		margin: 2% auto; 
     		padding: 5px;
     		overflow: hidden;
     		color: #fff;
            background-color:rgba(255,255,255,0.1); 
            border-radius:20px; 
     	}
     	.form-box h2
        { 
           border-bottom: 6px solid #00b289 ;
           margin-bottom: 20px;
            padding: 8px 0; 
        }
     	.button-box{
     		width: 220px;
     		margin: 30px auto;
     		position: relative;
     		box-shadow: 0 0 20px 9px #ff61241f;
     		border-radius: 30px;
     		 
     	}
     	.toggle-btn{
     		padding: 8px 27px;
     		cursor:pointer;
     		background: transparent;
     		border: 0; 
     		position: relative;
     		color: #fff;  
            font-size: 17px;
     	}
     	 #btn{
     		top:0;
     		left: 0;
     		position: absolute;
     		width: 110px;
     		height: 100%;
     		background: linear-gradient(135deg,#0066B2FF 0%,#00b289 100%);
     		border-radius: 30px;
     		border: 2px solid #0066B2FF;
     		transition: .5s;
     	}
     	.input-group{
     		top:100px;
     		position: absolute;
     		width: 280px;
     		transition: .5s;
     	}
     	.input-field{
     		width: 100%; 
     		border-top: 0;
     		border-left: 0;
     		border-right: 0;  
            overflow: hidden;
            font-size: 20px;
            padding: 7px 0;
            margin: 7px 0;
            border-bottom: 2px solid #00b289 ; 
     	}
     	.input-field input
        {
            border: none;
            outline: none;
            background: none;
            color: white;
            font-size: 18px;
            width: 80%;
            float: center;
            margin: 0 10px;
        }
     	.submit-btn{ 
     		display: block;
     		margin: auto; 
     		border-radius: 30px;
     		width: 91%;
            background: none;
            border: 2px solid #00b289;
            color: #fff;
            padding: 5px;
            font-size: 18px;
            cursor: pointer;
     	}
     	::placeholder 
        {
         color: #fff;
        }
     	.checkbox{
     		margin: 20px 10px 20px 0;
     	}
     	#User{
     		left: 50px;
     	}
     	#Admin{
     		left: 450px;
     	}
     </style>
</head>
<body>
   <div class="form-box">
    		<div class="button-box">
    			<div id="btn"></div>
    			<button style="outline: none;" type="button" class="toggle-btn" onclick="login()">USER</button>
    			<button style="outline: none;" type="button" class="toggle-btn" onclick="register()">ADMIN</button>
    		</div>
    <div id="User" class="input-group">
    	 <h2 align="center">Registration Form</h2>
        <form method="post" action="user_signup.php">
          <div class="input-field"> 
            <input type="text" name="fname" placeholder="First Name" required="">
          </div>
          <div class="input-field">
            <input type="text" name="lname" placeholder="Last Name" required="">
          </div>
          <div class="input-field">
            <input id="email" type="email" name="mail" placeholder="Your e-mail address" required="">
          </div>
          <div class="input-field">
            <input id="password" name="pwd" type="password" placeholder="password" required="">
          </div>
          <div class="input-field">
            <input id="passconfirm" type="password" name="pwd" placeholder="Confirm Password" required="">
          </div> 
          <input type="checkbox" class="checkbox" name="agree" required=""> I Agree to the Terms of use.<br> 
          <input type="submit" name="sign" value="Sign Up" class="submit-btn" >
        </form>
    </div>
        <div id="Admin" class="input-group">
        	<h2 align="center">Registration Form</h2>
        <form method="post" action="admin_signup.php">
          <div class="input-field"> 
            <input type="text" name="fname" placeholder="First Name" required="">
          </div>
          <div class="input-field">
            <input type="text" name="lname" placeholder="Last Name" required="">
          </div>
          <div class="input-field">
            <input id="email" type="email" name="mail" placeholder="Your e-mail address" required="">
          </div>
          <div class="input-field">
            <input id="password" name="pwd" type="password" placeholder="password" required="">
          </div>
          <div class="input-field">
            <input id="passconfirm" type="password" name="pwd" placeholder="Confirm Password" required="">
          </div> 
          <input type="checkbox" class="checkbox" name="agree" required=""> I Agree to the Terms of use.<br> 
          <input type="submit" name="sign" value="Sign Up" class="submit-btn" >
        </form>
    </div>
    </div> 
 
</body>
<script>
	var x=document.getElementById("User");
	var y=document.getElementById("Admin");
	var z=document.getElementById("btn");

	function  register() {
		x.style.left="-400px";
		y.style.left="50px";
		z.style.left="110px"; 
	}
	function   login() {
		x.style.left="50px";
		y.style.left="450px";
		z.style.left="0"; 
	}
</script>
</html>