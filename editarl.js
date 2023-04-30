const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');


let isDragging = false;
let lastX = 10;
let lastY = 10;
let scale = 1;
let offsetX = 10;
let offsetY = 10;


canvas.addEventListener('mousedown', function (e) {
  isDragging = true;
  lastX = e.clientX;
  lastY = e.clientY;
});


canvas.addEventListener('mousemove', function (e) {
  if (isDragging) {
    offsetX += e.clientX - lastX;
    offsetY += e.clientY - lastY;
    lastX = e.clientX;
    lastY = e.clientY;
    text();
  }
});


canvas.addEventListener('mouseup', function (e) {
  isDragging = false;
});


canvas.addEventListener('wheel', function (e) {
  const delta = e.deltaY > 0 ? 0.05 : -0.05;
  scale += delta;
  if (scale < 0.1) {
    scale = 0.1;
  }
  text();
});


function text() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  ctx.save();
  ctx.translate(offsetX, offsetY);
  ctx.scale(scale, scale);
  ctx.font = '30px Arial';
  ctx.fillStyle = 'black';
  ctx.textAlign = 'center';
  ctx.textBaseline = 'middle';
  ctx.fillText(document.getElementById('text').textContent, canvas.width / 2, canvas.height / 2);
  ctx.restore();

}
