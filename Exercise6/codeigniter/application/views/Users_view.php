<!DOCTYPE html> 
<html lang = "en">

<style>



body {
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

img {
position: fixed;
top: 390px;
left: 430px;
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

</head>
	
<body style="background-image: url(http://localhost/Exercise6/codeigniter/Pics/background2.jpg);">
<center>
<h1><a href = "<?php echo base_url(); ?>index.php/users/add_view">Create Database</a></h1>
</center>
      
		
      <table border = "1"> 
         <?php 
            $i = 1; 
            echo "<tr>"; 
            echo "<td>User Id</td>"; 
            echo "<td>Complete Name</td>"; 
            echo "<td>Nickname</td>"; 
            echo "<td>Email Address</td>";
            echo "<td>Home Address</td>";
            echo "<td>Sex</td>"; 
            echo "<td>Cellphone No</td>"; 
            echo "<td>Edit</td>"; 
            echo "<td>Delete</td>"; 
            
            echo "<tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$r->user_id."</td>"; 
               echo "<td>".$r->complete_name."</td>"; 
               echo "<td>".$r->nick."</td>"; 
               echo "<td>".$r->eadd."</td>"; 
               echo "<td>".$r->address."</td>"; 
               echo "<td>".$r->sex."</td>"; 
               echo "<td>".$r->no."</td>"; 
               echo "<td><a href = '".base_url()."index.php/users/edit/"
                  .$r->user_id."'>Edit</a></td>"; 
               echo "<td><a href = '".base_url()."index.php/users/delete/"
                  .$r->user_id."'>Delete</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table><br><br> 
	 
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  
	  
			  <center>
		<a href="test.php" target="_self">Home</a> |
		<a href="about.html" target="_self">About Me</a> |
		<a href="<?php echo base_url(); ?>index.php/Users_controller/trivia" target="_self">This or That Questions</a> |
		</center>


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
   </body>
	
</html>