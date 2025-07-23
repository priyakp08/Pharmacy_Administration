<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Pharmacy Administration</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    /* Styling for the larger heading and underline */
    h1 {
      color: white;
      text-align: center;
      font-size: 50px; /* Adjusted font size for a larger heading */
      border-bottom: 2px solid white; /* Underline effect */
      padding-bottom: 10px; /* Increased space between text and underline */
      margin-top: 50px; /* Added top margin for spacing */
    }

    /* Center aligning the login form */
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh; /* Full viewport height */
    }

    #login-form {
      text-align: center;
      margin-top: 30px; /* Adjusted top margin for spacing */
    }

    #form-login {
      width: 300px; /* Adjust form width as needed */
      margin: 0 auto; /* Center align the form horizontally */
      text-align: center; /* Ensure inputs are centered */
    }
  </style>
</head>

<body style="background: #262626;">
  <div class="container">
    <h1>PHARMACY ADMINISTRATION</h1>

    <div id="login-form">
      <h3>User Login</h3>

      <fieldset>
        <form id="form-login">
          <input type="text" autofocus id="un" placeholder="Username" required autocomplete="off">
          <br/><br/>
          <input type="password" id="up" placeholder="Password" required autocomplete="off">
          <br/><br/>
          <input type="submit" name="log" value="Login">
        </form>
      </fieldset>
    </div> <!-- end login-form -->
  </div>

  <script type="text/javascript" src="assets/js/jquery-1.12.3.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/regis.js"></script>
</body>
</html>
