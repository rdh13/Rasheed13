<!DOCTYPE HTML>
<html lan = "en">
	    <head>
            <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
	            <title>R_Hinds_Lab_1</title>
		</head>		
			<?php
				
				$url = "http://api.openweathermap.org/data/2.5/weather?q=London,uk&APPID=0947ba66b64794f78441245e91e73955";
				$weather_data = file_get_contents($url);
				
				var_dump($weather_data);

			?>
	<body>
		<h1>Weather</h1>
		<form action=”index.php” method="POST">
			
		   City:<br>
		  <input type="text" name="city" Placeholder="Enter Your City"><br>
	Country:<br>
		  <input type="text" name="country" Placeholder="Enter Your Country"><br>
		  <input type="submit" value="Submit"> 

	</body>
</html>
