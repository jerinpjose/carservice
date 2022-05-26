<?php
  if(isset($_POST["submit"]))
 {
    include 'connect.php';
    $username = $_SESSION["uname"];
    $password=$_POST['password'];
    $cpassword = $_POST["cpassword"];
      if($password != $cpassword)
    {
            echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Password and confirm password Mismatch');
        window.location.href='reset.php';
                        </script>");
    }
  else 
     {
        $sql="UPDATE `register` SET  `password`='$password' WHERE `uname`= '$username'";
        $result=mysqli_query($con,$sql);
  if($result)
       {
          echo ("<script LANGUAGE='JavaScript'>
            window.alert('Password Changed');
            window.location.href='index.php';
            </script>");
        }
   else
        {

            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Something went wrong');
                window.location.href='register.php';
                </script>");
        }
  }
 }
?>