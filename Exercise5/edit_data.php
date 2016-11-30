<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $firstname = $_POST['firstname'];
 $midname = $_POST['midname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];
 $nickname = $_POST['nickname'];
 $homeadd = $_POST['homeadd'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE users SET firstname='$firstname',midname='$midname',lastname='$lastname',email='$email',gender='$gender',nickname='$nickname',homeadd='$homeadd', WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="firstname" placeholder="First Name" value="<?php echo $fetched_row['firstname']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="midname" placeholder="Middle Name" value="<?php echo $fetched_row['midname']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="lastname" placeholder="Last Name" value="<?php echo $fetched_row['lastname']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>" required /></td>
    </tr>
	<tr>
    <td>
	<input type="radio" name="gender"  <?php if (isset($gender) && $gender=="female") echo $fetched_row['gender']; ?> value="female">Female
	<input type="radio" name="gender"  <?php if (isset($gender) && $gender=="male") echo $fetched_row['gender']; ?> value="male">Male</td>
    </tr>
	<tr>
    <td><input type="text" name="nickname" placeholder="Nickname" value="<?php echo $fetched_row['nickname']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="homeadd" placeholder="Address" value="<?php echo $fetched_row['homeadd']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>