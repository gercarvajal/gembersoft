$(document).ready(function() {
    var dragging = false;
    var lastX, lastY;
    var imagen = $("#imagen");
  
    imagen.mousedown(function(e) {
      dragging = true;
      lastX = e.clientX;
      lastY = e.clientY;
    });
  
    $(document).mousemove(function(e) {
      if (dragging) {
        var deltaX = e.clientX - lastX;
        var deltaY = e.clientY - lastY;
        var offset = imagen.offset();
        imagen.offset({
          top: offset.top + deltaY,
          left: offset.left + deltaX
        });
        lastX = e.clientX;
        lastY = e.clientY;
        var posicion = "Posición actual: (" + offset.left + ", " + offset.top + ")";
        $("#posicion").text(posicion);
      }
    });
  
    $(document).mouseup(function() {
      dragging = false;
    });
  });
  