<?php
if(isset($_POST['submit'])){
require('allconnection.php');
  $mail=$_POST['mail'];
  $password=$_POST['password'];
$sql="select * from nsti1 where mail='$mail' and password='$password'";
 if($result=mysqli_query($con,$sql)){
 if(mysqli_num_rows($result)>0){
    echo "<script>location.href='addproject.html'</script>";
 }
 else{echo "username password not matched";
}
}}

?>

<html>
    <head>
        <style>
            .error{color:red;}
            div{border:2px solid;
                background-color:black;
                color:white;
                height:auto;
                width:300px;
                text-align:center;
                }
                input[type='text'],input[type='password']{
                    height:30px;
                    width:250px;
                    font-size:20px;
                }
                input[type='submit']{height:30px;
                    width:250px;
                    font-size:20px;
                    background:green;
                }
                input[type='reset']{height:30px;
                    width:250px;
                    font-size:20px;
                    background:red;
                }
            </style>
    </head>
        <body>
            <div>
<h2>Login Form</h2>
<form action="" method="post" >
   <input type="text" name="mail" placeholder="Email_id" required><br><br>
   <input type="password" name="password" placeholder="Password" required><br><br>
    <input type="submit" value="Login" name="submit">
    <input type="reset" value="Reset" name="submit">

</form>
</div>
<br>
click here .......<a href="forgetpassword.php">Forget_Password</a>
</body>
</html>