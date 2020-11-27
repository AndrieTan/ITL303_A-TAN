var canvas = document.getElementById('pacman');
var ctx = canvas.getContext('2d');

    //box
    ctx.beginPath();
    ctx.moveTo(0, 0);
    ctx.lineTo(200, 0);
    ctx.lineTo(200, 200);
    ctx.lineTo(0, 200);
    ctx.closePath();
    ctx.stroke();

    //pacman-head
    ctx.beginPath();
    ctx.arc(100, 100, 50, 0, 2 * Math.PI);
    ctx.closePath();
    ctx.fillStyle = "yellow";
    ctx.fill();

    //pacman-mouth
    ctx.beginPath();
    ctx.moveTo(180, 100);
    ctx.lineTo(100, 100);
    ctx.lineTo(180, 180);
    ctx.closePath();
    ctx.fillStyle = "white";
    ctx.fill();
