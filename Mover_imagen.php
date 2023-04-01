<!DOCTYPE html>
<html>
<head>
	<title>Imagen Movible</title>
	<style>
		#container {
			position: relative;
			width: 1500px;
			height: 700px;
			border: 1px solid #000;
		}

		#imagen {
			position: absolute;
			top: 0;
			left: 0;
			width: 100px;
		}

        body{
            overflow: hidden;
        }
		div {
			border: 1px solid black;
		}
	</style>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<div id="container">
		<img id="imagen" src="1.png">
	</div>
	
</body>
</html>
