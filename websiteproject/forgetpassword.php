<?php
$error="";
$fetchemail="";
$mailerror="";
if(isset($_POST['submit'])){
    $a=$_POST['password1'];
  $b=$_POST['password2'];
  if($a!=$b){
  $error="password not matched";}
require('allconnection.php');
$email=$_POST['email'];
$select="select mail from nsti1 where mail='$email'";
  $result=mysqli_query($con,$select);
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){
        $fetchemail=$row['mail'];
    }
  }
  if($email!=$fetchemail){
    $mailerror="this email id not register";
  }

$sql="update nsti1 set password='$a' where mail='$email'";
 if(mysqli_query($con,$sql)){
    echo "<script>alert('Password change successfully')</script>";
    echo "<script>location.href='login.php'</script>";
 }
 else{echo "Email_id not matched";
}
}

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
                input[type='email'],input[type='password']{
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
<h2>CREAT NEW PASSWORD</h2>
<form action="" method="post" >
   <input type="email" name="email" placeholder="email_id" required><br>
   <span class='error'><?php echo $mailerror;?><br><br>
   <input type="password" name="password1" placeholder="New_password" required><br>
   <span class='error'><?php echo $error;?><br>
   <input type="password" name="password2" placeholder="Confirm password" required><br><br>
    <input type="submit" value="submit" name="submit">

</form>
</div>
</body>
</html>