var canvas = document.getElementById('pine_tree');
var ctx = canvas.getContext('2d');

//box
ctx.beginPath();
ctx.moveTo(0, 0);
ctx.lineTo(200, 0);
ctx.lineTo(200, 200);
ctx.lineTo(0, 200);
ctx.closePath();
ctx.fillStyle = "#f08b74";
ctx.fill();

//first-shape
ctx.beginPath();
ctx.moveTo(100, 18);
ctx.lineTo(59, 80);
ctx.lineTo(139, 80);
ctx.closePath();
ctx.fillStyle = "#61dc29";
ctx.fill();

//second-shape
ctx.beginPath();
ctx.moveTo(100, 48);
ctx.lineTo(59, 110);
ctx.lineTo(139, 110);
ctx.closePath();
ctx.fillStyle = "#61dc29";
ctx.fill();

//third-shape
ctx.beginPath();
ctx.moveTo(100, 78);
ctx.lineTo(59, 140);
ctx.lineTo(139, 140);
ctx.closePath();
ctx.fillStyle = "#61dc29";
ctx.fill();

//trunk
ctx.beginPath();
ctx.moveTo(93, 140)
ctx.lineTo(93, 160);
ctx.lineTo(103, 160);
ctx.lineTo(103, 140);
ctx.closePath();
ctx.fillStyle = "#784a18";
ctx.fill();
