<?php
	session_start();
	$host = "127.0.0.1";
	$user = "root";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Game</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
</head>
<body>
    <header id="gameTitle" class="montserrat">JS Community Game</header>
    <br>
    <div id="mainGame">
    	<div id="skillSection" class="montserrat">
    		<h3>Skills</h3>
    		<p><strong>Mining</strong> : 100</p>
    		<p><strong>Forging</strong>: 100</p>
    		<p><strong>Chemicals</strong>: 100</p>
    		<p><strong>Level</strong>: 100</p>
    		<p><strong>Name</strong>: Navyan</p>
    	</div>
    	<div id="workSection" class="montserrat">
    		
    	</div>
    	<div id="tradingSection" class="montserrat"></div>
    	<div id="chatSection" class="montserrat"></div>
    </div>
    <br>
    <div id="inventory"></div>
</body>
</html>