<?php
require("connect.php");
session_start();
if(isset($_SESSION["UserID"])){
  header("location:index.php");
}
?>
<html>
<head>
<title>ThaiCreate.Com Tutorials</title>
</head>
<body>
<form name="form1" method="post" action="check_login.php">
  Login<br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td> &nbsp;Username</td>
        <td>
          <input name="txtUsername" type="text" id="txtUsername">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
    </tbody>
  <br>
  </table>

  <input type="submit" name="Submit" value="Login">
</form>
</body>
