$(document).ready(function() {
    var container = $('#container');
    var imagen = $('#imagen');
    var isDragging = false;
    var mouseStart = {x: 0, y: 0};
    var elementStart = {x: 0, y: 0};
  
    imagen.mousedown(function(event) {
      isDragging = true;
      mouseStart.x = event.pageX;
      mouseStart.y = event.pageY;
      elementStart.x = imagen.offset().left - container.offset().left;
      elementStart.y = imagen.offset().top - container.offset().top;
    });
  
    imagen.mouseup(function() {
      isDragging = false;
    });
  
    imagen.mousemove(function(event) {
      if (isDragging) {
        var offsetX = event.pageX - mouseStart.x;
        var offsetY = event.pageY - mouseStart.y;
        var posX = elementStart.x + offsetX;
        var posY = elementStart.y + offsetY;
  
        // Limita el movimiento a los bordes del contenedor
        posX = Math.max(0, Math.min(container.width() - imagen.width(), posX));
        posY = Math.max(0, Math.min(container.height() - imagen.height(), posY));
  
        imagen.offset({left: container.offset().left + posX, top: container.offset().top + posY});
      }
    });
  });
  