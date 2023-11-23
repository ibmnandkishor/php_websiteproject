<?php
if(isset($_POST['submit'])){
require('allconnection.php');
  $name=$_POST['text'];
  $mobile=$_POST['mobile'];
  $mail=$_POST['mail'];
  $password=$_POST['password'];
  $age=$_POST['age'];

$sql="insert into nsti1 values('$name','$mobile','$mail','$password','$age')";
 if(mysqli_query($con,$sql)){
    echo "<script>alert('Registration successfully')</script>";
    echo "<script>location.href='main.html'</script>";
 }
 else{echo "form not submited";
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
<h2>PHP Form Validation Example</h2>
<form action="" method="post" >

   <input type="text" name="text" placeholder="Name" required><br><br>
   <input type="text" name="mobile" placeholder="Mobile_Number" required><br><br>
   <input type="text" name="mail" placeholder="Email_id" required><br><br>
   <input type="password" name="password" placeholder="Password" required><br><br>
   <input type="text" name="age" placeholder="Age" required><br><br>

    <input type="submit" value="submit" name="submit">
    <input type="reset" value="Reset" name="submit">

</form>

</div>

</body>
</html>