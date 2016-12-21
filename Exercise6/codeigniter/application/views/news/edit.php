<!DOCTYPE html> 
<html lang = "en">
 
    <head> 
      <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Data Page</title>
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
</head>
   </head> 
	<body style="background-image: url(http://localhost/Exercise6/codeigniter/Pics/background2.jpg);">
<center>

<div id="header">
 <div id="content">
    <label>Edit Data Now</label>
    </div>
</div>
<br>
<br>
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['id']); ?>
    <table>
        <tr>
            <td><label for="title">Complete Name</label></td>
            <td><input type="input" name="complete_name" size="50" /></td>
        </tr>
        <tr>
            <td><label for="text">Nickname</label></td>
            <td><input type="input" name="nick" size="50" /></td>
        </tr>
        <tr>
		<tr>
            <td><label for="title">Email Address</label></td>
            <td><input type="input" name="eadd" size="50" /></td>
        </tr>
		<tr>
            <td><label for="title">Address</label></td>
            <td><input type="input" name="address" size="50" /></td>
        </tr>
		<tr>
            <td><label for="title">Sex</label></td>
            <td><input type="input" name="sex" size="50" /></td>
        </tr>
		<tr>
            <td><label for="title">Cell No.</label></td>
            <td><input type="input" name="no" size="50" /></td>
        </tr>
		<tr>
            <td><label for="title">Comment</label></td>
            <td><textarea name="comment"  cols="40"></textarea></td>
        </tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit news item" /></td>
        </tr>
    </table>
</form>
   </body>
	
</html>