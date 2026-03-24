<!DOCTYPE HTML>
<HTML>
    <Head>
        <title> Variables </title>
        </head>
<body>

<?php
 echo "<h1> Variables  Task 1 </h1>";
$name = "Saurabh Yadav";
$place = "Gorakhpur";
$profession = "Web Developer";
define("QID", 2255555);
echo "<span style='color:red;'><h1> My name is $name</span><br> </h1>";
echo "<span style='color:yellow;'><h2>From $place</span><br></h2>";
echo "<span style='color:blue;'><h3>I am $profession</span><br></h3>";
echo "<span style='color:green;'><h4> My QID is " . QID . "</span></h4>";
echo '<img src="ph.jpg"alt="My Image">';

?>
 </body>
    </html>
 