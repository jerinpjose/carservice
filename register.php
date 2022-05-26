<?php
include 'smbrsign.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CAR BUDDY- Registeration</title>
  <script>
    function validateForm() {
      var x = document.forms["myForm"]["uname"].value;
      if (x == "") {
        alert("Username must be Filled");
        return false;
      }

      var y = document.forms["myForm"]["psw"].value;
      if (y == "") {
        alert("Password must be Filled");
        return false;
      }
      var z = document.forms["myForm"]["cpsw"].value;
      if (z == "") {
        alert("Confirm Password must be Filled");
        return false;
      }
      if (z != y) {
        alert("Password & Confirm Password should match");
        return false;
      }


      var u = document.forms["myForm"]["phone"].value;
      if (u == "") {
        alert("Phone Number must be Filled");
        return false;
      }
    }


    function isnum1(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

      return true;


    }

    function isalph1(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32))
        return true;
      return false;
    }

    function validatefemail() {
      var fem = document.getElementById("femail").value;
      var atposition = fem.indexOf("@");
      var dotposition = fem.lastIndexOf(".");
      if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
        alert("Please enter a valid e-mail address");
        document.getElementById("femail").value = "";
        return false;
      }
    }

    function validatephone() {
      var phoneval = document.getElementById("phone").value;
      if (phoneval.length != 10) {
        alert("Enter a valid phone number");
        document.getElementById("phone").value = "";
        return false;
      }
    }

    function on() {
      window.location.href = 'Login.php';
    }
  </script>
  <style>
    body {
      font-family: Arial;
      color: white;
    }

    .split {
      height: 100%;
      width: 50%;
      position: fixed;
      z-index: 1;
      top: 0;
      overflow-x: hidden;
      padding-top: 20px;
    }

    .left {
      left: 0;
      background-color: #11012e;
    }

    .right {
      right: 0;

    }

    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    .centered img {
      width: 500px;

    }
  </style>
</head>

<body>

  <div class="split left">
    <div class="centered">
      <img src="img/2.png" alt="Avatar woman">
      <h3>CAR BUDDY.COM</h3>
      <p>WE will with you!!!.</p>
    </div>
  </div>

  <div class="split right">
    <div class="centered">

      <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
          body {
            font-family: Arial, Helvetica, sans-serif;
          }

          form {
            border: 3px solid #f1f1f1;
          }

          input[type=text],
          input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
          }

          button {
            background-color: #11012e;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
          }

          button:hover {
            opacity: 0.8;
          }

          .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
          }

          .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
          }

          img.avatar {
            width: 60%;
            height: 25%;
          }

          .container {
            padding: 16px;
          }

          span.psw {
            float: right;
            padding-top: 16px;
          }

          /* Change styles for span and cancel button on extra small screens */
          @media screen and (max-width: 300px) {
            span.psw {
              display: block;
              float: none;
            }

            .cancelbtn {
              width: 100%;
            }
          }

          label {
            color: black;
            float: left;
          }

          h2 {
            color: black;
          }
        </style>
      </head>

      <body>
        <br><br>
        <h2>Sign Up</h2>

        <form action="#" method="post" onsubmit="return validateForm()" name="myForm">

          <div class="imgcontainer">
            <a href="index.php">
              <img src="img/CARBUDDY.png" alt="Avatar" class="avatar">
            </a>
          </div>

          <div class="container">
            <label for="uname"><b>Name</b></label>
            <input type="text" id="fname" placeholder="Enter name" name="name" onkeypress="return isalph1(event)" required>
            <span id="name" class="er">

            </span>

            <label for="uname"><b>Mobile</b></label>
            <input type="text" id="phone" placeholder="Enter Phone no:" name="phone" onchange="return validatephone()" onkeypress="isnum1(evt)">

            <label for="uname"><b>E-mail</b></label>
            <input type="text" id="femail" placeholder="Enter the Email" name="mail" onchange="return validatefemail()" required>

            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Enter Password" name="cpsw" required>

            <button type="submit" name="submit">Sign Up </button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="on();" class="cancelbtn">Login</button>
            <span class="psw"> <a href="updateuser.php">Forgot password?</a></span>
          </div>
        </form>
    </div>
  </div>
  </div>

</body>

</body>

</html>