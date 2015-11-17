# Auto detect text files and perform LF normalization
* text=auto

# Custom for Visual Studio
*.cs     diff=csharp

# Standard to msysgit
*.doc	 diff=astextplain
*.DOC	 diff=astextplain
*.docx diff=astextplain
*.DOCX diff=astextplain
*.dot  diff=astextplain
*.DOT  diff=astextplain
*.pdf  diff=astextplain
*.PDF	 diff=astextplain
*.rtf	 diff=astextplain
*.RTF	 diff=astextplain
<!DOCTYPE html>
<html>
<head>


<title>Elegant Login - Designscrazed</title>
<style>
body {
    background:green no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 213px;
    height: 36px;
    background: url('images/fd8Lcso.png') no-repeat;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('images/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('images/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('images\Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('images\Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}
 h2{
            text-align: center;
            color: blue;
			margin-bottom:10px;
         }

</style>
</head>

<body>
<h2>Please Enter Your Username & Password <h2>
<div class="logo"></div>
<div class="login-block">
 <?php
            $msg = '';
            
            if (isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'nachiket' && $_POST['password'] == '789456123') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'nachiket';
                  
                  echo 'You have entered valid use name and password';
               }
               else 
               {
                  $msg = 'Wrong Username or Password';
               }
            }
         ?>
		 		 
    <h1>Login</h1>
	
	<form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
       <h2><?php echo $msg;?></h2> 
    <input type="text" class="form-control" placeholder="nachiket" id="username" required autofocus/>
    <input type="password" class="form-control" placeholder="789456123" id="password" requried />
    <button>Submit</button>
	</form>
	
	Click here to <a href="logout.php" tite="Logout">Logout.
</div>
    
</body>

</html>
