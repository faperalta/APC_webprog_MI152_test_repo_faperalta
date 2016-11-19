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
    <label>Add Data Now</label>
    </div>
</div>
<br>
<br>
<tr>
    <td align="center"><a href="<?php echo base_url(); ?>index.php/users">back to main page</a></td>
    </tr>
    <br>
    <br>
         <?php 
            echo form_open('Users_controller/add_student');
            
            echo form_label('User Id'); 
            echo form_input(array('id'=>'user_id','name'=>'user_id')); 
            echo "<br/>"; 
            echo "<br/>"; 
			
            echo form_label('Complete Name'); 
            echo form_input(array('id'=>'complete_name','name'=>'complete_name')); 
            echo "<br/>"; 
            echo "<br/>"; 
            
            echo form_label('Nickname'); 
            echo form_input(array('id'=>'nick','name'=>'nick')); 
            echo "<br/>"; 
            echo "<br/>"; 
            
            echo form_label('Email Address'); 
            echo form_input(array('id'=>'eadd','name'=>'eadd')); 
            echo "<br/>"; 
            echo "<br/>"; 
            
			echo form_label('Home Address'); 
            echo form_input(array('id'=>'address','name'=>'address')); 
            echo "<br/>"; 
            echo "<br/>"; 
            
            echo form_label('Sex'); 
            echo form_input(array('id'=>'sex','name'=>'sex')); 
            echo "<br/>"; 
            echo "<br/>"; 
            
            echo form_label('Cellphone Number'); 
            echo form_input(array('id'=>'no','name'=>'no')); 
            echo "<br/>"; 
            echo "<br/>"; 
            
            echo form_submit(array('id'=>'submit','value'=>'Add')); 
            echo form_close(); 
         ?> 
   </body>
</html>