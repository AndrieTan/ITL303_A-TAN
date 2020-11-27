var canvas = document.getElementById('adidas');
var ctx = canvas.getContext('2d');

    //box
    ctx.beginPath();
    ctx.moveTo(0, 0);
    ctx.lineTo(200, 0);
    ctx.lineTo(200, 200);
    ctx.lineTo(0, 200);
    ctx.closePath();
    ctx.fillStyle = "#0681ef";
    ctx.fill();

    //first-shape
    ctx.beginPath();
    ctx.moveTo(12, 124);
    ctx.lineTo(19, 135);
    ctx.lineTo(68, 135);
    ctx.lineTo(50, 102);
    ctx.closePath();
    ctx.fillStyle = "#000000";
    ctx.fill();

    //second-shape
    ctx.beginPath();
    ctx.moveTo(57, 85);
    ctx.lineTo(86, 135);
    ctx.lineTo(134, 135);
    ctx.lineTo(93, 63);
    ctx.closePath();
    ctx.fillStyle = "#000000";
    ctx.fill();

    //third-shape
    ctx.beginPath();
    ctx.moveTo(100, 47);
    ctx.lineTo(150, 135);
    ctx.lineTo(198, 135);
    ctx.lineTo(135, 25);
    ctx.closePath();
    ctx.fillStyle = "#000000";
    ctx.fill();

