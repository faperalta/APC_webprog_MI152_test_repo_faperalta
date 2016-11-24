<!DOCTYPE html>
<html>
<head>

 <h1><center> This or That Questions </center></h1>
 
 <center>
<a href="test.php" target="_self">Home</a> |
<a href="about.html" target="_self">About Me</a> |
<a href="prefer.html" target="_self">This or That Questions</a> |
</center>


<style>

body {

   background-image : url("http://localhost/Exercise6/codeigniter/Pics/background2.jpg");
   font-family: cursive;
}
h1 {

    font-size: 24px;
    text-align: center;
}

#dog{
position: absolute	;
left: 100px;
}

#laundry{
position: absolute;
left: 450px;
}

#roller{
position: absolute;
left: 800px;
}

#pancake{
position: absolute;
left: 100px;
top: 500px;
}

#condo{
position: absolute;
left: 450px;
top: 500px;
}

#job{
position: absolute;
left: 800px;
top: 500px;
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
<h1 id = "prefer">Which do I prefer?</h1>

<div id = "dog">
<p>Dog or Cat?</p>

<p id="demo" style="display:none"><img src = "http://localhost/Exercise6/codeigniter/Pics/doge.jpg" style = "width: 250px;"></p>
<button type="button" onclick="document.getElementById('demo').style.display='block'">I prefer</button>
</div>

<div id="laundry">
<p>Washing dishes or Doing laundry?</p>

<p id="demo2" style="display:none"><img src = "http://localhost/Exercise6/codeigniter/Pics/laundry.png" style = "width: 250px;"></p>

<button type="button" onclick="document.getElementById('demo2').style.display='block'">I prefer</button>
</div>

<div id="roller">
<p>Ferris wheel or Roller Coaster?</p>

<p id="demo3" style="display:none"><img src = "roller.jpg" style = "width: 300px;"></p>

<button type="button" onclick="document.getElementById('demo3').style.display='block'">I prefer</button>
</div>

<div id="pancake">
<p>Bacon or Pancake?</p>

<p id="demo4" style="display:none"><img src = "pancake.jpg" style = "width: 250px;"></p>

<button type="button" onclick="document.getElementById('demo4').style.display='block'">I prefer</button>
</div>

<div id="condo">
<p>Condominium or House?</p>

<p id="demo5" style="display:none"><img src = "condo.jpg" style = "width: 250px;"></p>

<button type="button" onclick="document.getElementById('demo5').style.display='block'">I prefer</button>
</div>
<br>

<div id="job">
<p>Win the lottery or find your perfect job?</p>

<p id="demo6" style="display:none"><img src = "job.jpg" style = "width: 250px;"></p>

<button type="button" onclick="document.getElementById('demo6').style.display='block'">I prefer</button>
</div>