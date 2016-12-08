<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 //mysql_query($sql_query);
 mysqli_query($link, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<!DOCTYPE html>
<html>
<head>

 <h1><center> About Me </center></h1>
 
 <center>
<a href="form.php" target="_self">Home</a> |
<a href="about.php" target="_self">About Me</a> |
<a href="prefer.php" target="_self">This or That Questions</a> |
<a href="index2.php" target="_self">Create Database</a> |
</center>

<style>



body {

   background-image : url("background2.jpg");
   font-family: cursive;
}

table {
    border-collapse: collapse;
    width: 100%;
    font-size: 24px;
	
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
a:link {
    color: blue;
    background-color: transparent;
    text-decoration: none;
}
a:visited {
    color: pink;
    background-color: transparent;
    text-decoration: none;
}
a:hover {
    color: red;
    background-color: transparent;
    text-decoration: underline;
}
a:active {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}

</style>
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>

</head>
<body>


<table>
  <tr>
    <th>Full Name</th>
    <th>Nickname</th>
    <th>Hobbies</th>
    <th>Interests</th>
    <th>Favorite Websites</th>
  </tr>
  <tr>
   <td>Francis Dodi Peralta</td>
    <td>Dodi / Dods</td>
    <td>Playing computer and Watching series</td>
    <td>Dogs, Movies and Anime</td>
    <td><p><a href="https://kissanime.to">https://kissanime.to </a> </p>
        <a href="http://boredpanda.com">http://boredpanda.com</a>
		<tr>
  </tr>
  

</table>
<center>

<div id="header">
 <div id="content">
    
    </div>
</div>

<div id="body">
 <div id="content">
    <table align="center">
	<tr>
    <th colspan="9"><a href="add_data.php">add data here.</a></th>
    </tr>
	<tr>
    <th>Complete Name</th>
	<th>Email</th>
	<th>Gender</th>
	<th>Nickname</th>
    <th>Home Address</th>
	<th>Cellphone No.</th>
	<th>Comment</th>
    <th colspan="2">Operations</th>
    </tr>
	
    <?php
 $sql_query="SELECT * FROM users";
 //$result_set=mysql_query($sql_query);
 //while($row=mysql_fetch_row($result_set))
	  $result_set=mysqli_query($link, $sql_query);
	  while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>
</center>
</body>
</html>