    <?php
    session_start();
    ?>


    <?php

    if (extract($_POST)) {

        include 'connect.php';
        $username = $_SESSION["uname"] = $_REQUEST["user"];
        $email = $_REQUEST['gmail'];
        $log = array($username, $email);
        foreach ($log as $field)
            $flag = 0;
        if ($log == "") {
            $flag = 1;
            echo "The fields are required";
        } else {

            $sql = "SELECT  `email`, `uname` FROM `register` WHERE `uname`= '{$username}'AND `email`='{$email}'";

            $results = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($results);

            $user = $row['uname'];
            $pas = $row['email'];


            if (($user == $username) && ($pas == $email)) {
                $subject = "Reset Password";
                $body = "Hi, $user Click here to reset your password http://localhost/miniproject/forgetpass.php";
                $sender_email = "From: jerinscarbuddy@gmail.com";
                if (mail($email, $subject, $body, $sender_email)) {
                    echo ("<script LANGUAGE='JavaScript'>
                                    window.alert('Verification has sent to your registered email');
                                    window.location.href='index.php';
                                    </script>");
                } else {
                    echo ("<script LANGUAGE='JavaScript'>
                                        window.alert('Email Sending failed');
                
                                        </script>");
                }
            } else {
                echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Username and Password Mismatch');
                     window.location.href='index.php';
                    </script>");
            }
        }
    }

    ?>

        
