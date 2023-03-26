<?php

if (isset($_POST['complete_name'])):
    echo "<hr />";
    echo "<h1>Your Profile</h1>";
    echo "Full name: " . $_POST['complete_name'];
    echo "<hr />";
    // Debug
    echo "<pre>";
    echo "Birthday: " .$_POST['birthdate'] . "\n";
    echo "Email: " .$_POST['email'] . "\n";
    echo "Program: " .$_POST['program'] . "\n";
    echo "Favorite Color: " .$_POST['favorite_color'] . "\n";
    echo "Super Power Level: " .$_POST['superpower_level'] . "\n";
    echo "</pre>";
else:
?>

<html lang="en-US">
<link href='https://fonts.googleapis.com/css?family=Lexend' rel='stylesheet'>
<head>
    <title> Profile Form</title>

    <style type="text/css">

.frame{
position: center;
width: 500px;
height: 500px;
background: #FFFFFF;
border: 7px solid #000000;
box-sizing: border-box;
}

h1{
position: absolute;
width: 295px;
height: 41px;
left: 102px;
top: 5px;
font-family: 'Lexend';
font-style: normal;
font-weight: 400;
font-size: 48px;
line-height: 60px;
color: #000000;
}

form{
position: absolute;
width: 400px;
height: 41px;
left: 50px;
top: 80px;
font-family: 'Lexend';
font-style: normal;
font-weight: 400;
font-size: 30px;
line-height: 50px;
color: #000000;
}

.button{
position: center;
width: 99px;
height: 29px;
background: #D9D9D9;
border-radius: 15px;
}


    </style>
</head>

<body class="frame" align = "center">
<h1>Enter Data</h1>

<form method="POST" action="profile-form.php" align = "left">
Name: <input size="30" type="text" name="complete_name" /><br />
Birthdate: <input size="30" type="date" name="birthdate" /><br />
Email Address: <input size="30" type="email" name="email" /><br />
Program:
<select name="program">
<option value="BSCS">B.S. Computer Science</option>
<option value="BSIT">B.S. Information Technology</option>
<option value="BSIS">B.S. Information Systems</option>
</select>
<br />
Favorite Color: <input size="30" type="color" name="favorite_color" /><br />
Superpower Level: <input type="range" name="superpower_level" min="1" max="1000000" step="5000" /><br />
    <div align="center">
        <button class="button">Submit</button>
    </div>
</form>
</body>
</html>
<?php
endif;
?>