<?php

if (isset($_POST['complete_name'])):
    echo "<hr />";
    echo "<h1>Thank You!</h1>";
    echo "<hr />";
    // Debug
    echo "<pre>";
    echo "Received " . $_POST['type'] . " message from " . $_POST['complete_name'] . " (" . $_POST['email'] . ")\n";
    echo "Message:\n" .$_POST['message'] . "\n";
    echo "Satisfaction Level: " .$_POST['satisfaction_level'] . "\n";
    echo "</pre>";
else:
?>

<html lang="en-US">
<link href='https://fonts.googleapis.com/css?family=Lexend' rel='stylesheet'>
<head>
    <title> Feedback Form</title>

    <style type="text/css">

.frame{
position: center;
width: 500px;
height: 520px;
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
<h1>Feedback</h1>

<form method="POST" action="thankyou.php" align = "left">
Name: <input size="52" type="text" name="complete_name" /><br />
Email Address: <input size="52" type="email" name="email" /><br />
Type of Message:
<select name="type">
<option value="inquiry">Inquiry</option>
<option value="feedback">Feedback</option>
<option value="other">Others</option>
</select>
<br />
Satisfaction Level: <input type="range" name="satisfaction_level" min="0" max="10"/><br />
Message: <br />
<textarea rows="5" cols="52" type="text" name="message"></textarea><br />
    <div align="center">
        <button class="button">Submit</button>
    </div>
</form>
</body>
</html>
<?php
endif;
?>