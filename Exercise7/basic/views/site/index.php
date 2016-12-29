
<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<!DOCTYPE html> 
<html lang = "en">

<style>
body {
   font-family: cursive;
   background-image: url(http://localhost/Exercise7/basic/web/Pics/background2.jpg);
   background-size:100%;
   
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

h1 {

    font-size: 24px;
    text-align: center;
}

#dog{
position: absolute	;
left: 100px;
top: 1350px;
}

#laundry{
position: absolute;
left: 450px;
top: 1350px;}

#roller{
position: absolute;
left: 800px;
top: 1350px;
}

#pancake{
position: absolute;
left: 100px;
top: 1000px;
}

#condo{
position: absolute;
left: 450px;
top: 1000px;
}

#job{
position: absolute;
left: 800px;
top: 1000px;
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
	
<body>
<h1><a href= "http://localhost/Exercise7/basic/web/?r=users"> CRUD application </a></h1>
<center>
<img src = "http://localhost/Exercise7/basic/web/pics/doge.gif">
</center>
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

<h1 id = "prefer">Which do I prefer?</h1>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
    $("#show").click(function(){
        $("answers").toggle(500);
    });
});
</script>

<h1>Trivias</h1>
<p></p>
        <?php
			if (Yii::$app->user->isGuest) {
				
			} elseif(Yii::$app->user->identity->username) {
				echo Html::a('Edit a Trivia', ['trivia/index'], ['class' => 'btn btn-success']);
			}
			?>

<br></br>
<ul>
<?php foreach ($trivias as $trivia): ?>

    <li>
        <strong><?= Html::encode("{$trivia->question}") ?>:</strong>
		<br></br>	
		<answers style=display:none><?= $trivia->answer ?></answers>
		<br></br>	
    </li>	
<?php endforeach; ?>
<button class="btn btn-lg btn-success" id="show">Show all answer</button>
<p></p>
</ul>
   </body>
	
</html>