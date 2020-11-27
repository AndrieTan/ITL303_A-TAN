var canvas = document.getElementById('mitsubishi');
var ctx = canvas.getContext('2d');

    //box
    ctx.beginPath();
    ctx.moveTo(0, 0);
    ctx.lineTo(200, 0);
    ctx.lineTo(200, 200);
    ctx.lineTo(0, 200);
    ctx.closePath();
    ctx.fillStyle = "#ddd8d2";
    ctx.fill();

    //first-shape
    ctx.beginPath();
    ctx.moveTo(100, 18);
    ctx.lineTo(67, 72);
    ctx.lineTo(100,126);
    ctx.lineTo(132,72);
    ctx.closePath();
    ctx.fillStyle = "#e60012";
    ctx.fill();

    //second-shape
    ctx.beginPath();
    ctx.moveTo(100,126);
    ctx.lineTo(36, 126);
    ctx.lineTo(4, 180);
    ctx.lineTo(67, 180);
    ctx.closePath();
    ctx.fillStyle = "#e60012";
    ctx.fill();

    //third-shape
    ctx.beginPath();
    ctx.moveTo(100, 126);
    ctx.lineTo(162, 126);
    ctx.lineTo(195, 180);
    ctx.lineTo(131, 180);
    ctx.closePath();
    ctx.fillStyle = "#e60012";
    ctx.fill();