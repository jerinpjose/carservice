<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>
    function on() {
      window.location.href = 'register.php';
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

          h3 {
            color: White;
          }

          h2 {
            color: Black;
          }
        </style>
      </head>

      <body>

        <h2>Sign In</h2>

        <form action="fetch.php" method="post">
          <div class="imgcontainer">
            <a href="index.php">
              <img src="img/CARBUDDY.png" alt="Avatar" class="avatar">
            </a>
          </div>

          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" name="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="on();" class="cancelbtn">Register</button>
            <span class="psw"> <a href="updateuser.php">Forgot password?</a></span>
          </div>
        </form>

      </body>

    </div>
  </div>

</body>

</html>