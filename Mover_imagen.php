<!DOCTYPE html>
<html>
<head>
	<title>Imagen Movible</title>
	<style>
		#imagen {
			position: absolute;
			left: 0;
			top: 0;
            width: 20%;
             height: auto;
		}
        body{
            overflow: hidden;
        }
	</style>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<img id="imagen"  src="1.png">
    <p id="posicion">Posición actual: (0, 0)</p>
</body>
</html>
