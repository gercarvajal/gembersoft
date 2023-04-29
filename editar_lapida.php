<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <canvas id="canvas" width="1500" height="800"></canvas>

    <button id="download-btn">Descargar imagen</button>

    <script>
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');

        // Cargar las imágenes
        const imgBg = new Image();
        imgBg.src = 'imagen_de_fondo.png';
        const img = new Image();
        img.src = 'perro.png';
        img.onload = function() {
          // Dibujar la imagen en el canvas
          ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
        };
        

        // Variables para el control de la transformación
        let isDragging = false;
        let lastX = 0;
        let lastY = 0;
        let scale = 1;
        let offsetX = 0;
        let offsetY = 0;

        // Agregar eventos del mouse
        canvas.addEventListener('mousedown', function(e) {
          isDragging = true;
          lastX = e.clientX;
          lastY = e.clientY;
        });

        canvas.addEventListener('mousemove', function(e) {
          if (isDragging) {
            offsetX += e.clientX - lastX;
            offsetY += e.clientY - lastY;
            lastX = e.clientX;
            lastY = e.clientY;
            redraw();
          }
        });

        canvas.addEventListener('mouseup', function(e) {
          isDragging = false;
        });

        canvas.addEventListener('wheel', function(e) {
          const delta = e.deltaY > 0 ? 0.05 : -0.05;
          scale += delta;
          if (scale < 0.1) {
            scale = 0.1;
          }
          redraw();
        });

        // Agregar evento de clic al botón de descarga
        const downloadBtn = document.getElementById('download-btn');
        downloadBtn.addEventListener('click', function(e) {
          downloadCanvas();
        });

        // Función para dibujar la imagen en el canvas con la transformación
        function redraw() {
          ctx.clearRect(0, 0, canvas.width, canvas.height);
          ctx.save();
          ctx.translate(offsetX, offsetY);
          ctx.scale(scale, scale);
          ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
          ctx.restore();
        }

        // Función para descargar el contenido del canvas en forma de imagen
        function downloadCanvas() {
          // Crear un elemento <a> para descargar la imagen
          const link = document.createElement('a');
          link.download = 'imagen_editada.png';

          // Obtener la imagen en formato de datos (base64)
          const imageData = canvas.toDataURL();

          // Establecer el atributo href del enlace como la imagen
          link.href = imageData;

          // Agregar el enlace al documento y disparar el evento de clic
          document.body.appendChild(link);
          link.click();

          // Remover el enlace del documento
          document.body.removeChild(link);
        }
    </script>
</body>
</html>
