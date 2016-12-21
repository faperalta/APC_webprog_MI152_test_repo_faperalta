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
      <table border='1' cellpadding='4'>
    <tr>
        <td><strong>Complete Name</strong></td>
        <td><strong>Nickname</strong></td>
        <td><strong>Email Address</strong></td>
		<td><strong>Address</strong></td>
		<td><strong>Sex</strong></td>
		<td><strong>Cell No.</strong></td>
		<td><strong>Comment.</strong></td>
    </tr>
<?php foreach ($news as $news_item): ?>
        <tr>
            <td><?php echo $news_item['complete_name']; ?></td>
            <td><?php echo $news_item['nick']; ?></td>
			<td><?php echo $news_item['eadd']; ?></td>
			<td><?php echo $news_item['address']; ?></td>
			<td><?php echo $news_item['sex']; ?></td>
			<td><?php echo $news_item['no']; ?></td>
			<td><?php echo $news_item['comment']; ?></td>
			
            <td>
                <a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View</a> |
                <a href="<?php echo site_url('news/edit/'.$news_item['id']); ?>">Edit</a> |
                <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
	 
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