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
<tr>
    <td align="center"><a href="<?php echo base_url(); ?>index.php/users">back to main page</a></td>
    </tr>
    <br>
    <br>
   <body> 
      <form method = "" action = "">
		
         <?php 
            echo form_open('Users_controller/update_student'); 
            echo form_hidden('old_user_id',$old_user_id); 
            
            echo form_label('User Id'); 
            echo form_input(array('id'=>'user_id',
               'name'=>'user_id','value'=>$records[0]->user_id)); 
            echo "<br/>"; 
			echo "<br/>"; 	
				
            echo form_label('Complete Name'); 
            echo form_input(array('id'=>'complete_name','name'=>'complete_name',
               'value'=>$records[0]->complete_name)); 
            echo "<br/>"; 
            echo "<br/>"; 
			
			echo form_label('Nickname');
			echo form_input(array('id'=>'nick','name'=>'nick',
               'value'=>$records[0]->nick)); 
			echo "<br/>"; 
            echo "<br/>"; 
            
             echo form_label('Email Address'); 
            echo form_input(array('id'=>'eadd','name'=>'eadd',
               'value'=>$records[0]->eadd)); 
            echo "<br/>"; 
            echo "<br/>"; 
				
				echo form_label('Home Address'); 
            echo form_input(array('id'=>'address','name'=>'address',
               'value'=>$records[0]->address)); 
            echo "<br/>"; 
            echo "<br/>"; 
            
            echo form_label('Sex'); 
            echo form_input(array('id'=>'sex','name'=>'sex',
               'value'=>$records[0]->sex)); 
            echo "<br/>"; 
            echo "<br/>"; 
            
              echo form_label('Cellphone Number'); 
            echo form_input(array('id'=>'no','name'=>'no', 'value'=>$records[0]->no)); 
            echo "<br/>"; 
            echo "<br/>"; 
            
            
            echo form_submit(array('id'=>'submit','value'=>'Edit')); 
            echo form_close();
         ?> 
			
      </form> 
   </body>
	
</html>