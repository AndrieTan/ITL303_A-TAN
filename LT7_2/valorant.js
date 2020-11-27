var canvas = document.getElementById('valorant');
var ctx = canvas.getContext('2d');

    //box
    ctx.beginPath();
    ctx.moveTo(0, 0);
    ctx.lineTo(200, 0);
    ctx.lineTo(200, 200);
    ctx.lineTo(0, 200);
    ctx.closePath();
    ctx.fillStyle = "#ff4655";
    ctx.fill();

    //first-shape
    ctx.beginPath();
    ctx.moveTo(29, 37);
    ctx.lineTo(29 ,94);
    ctx.lineTo(76 ,153);
    ctx.lineTo(122 ,153);
    ctx.lineTo(29, 37);
    ctx.closePath();
    ctx.fillStyle = "#000000";
    ctx.fill();

    //second-shape
    ctx.beginPath();
    ctx.moveTo(171, 37);
    ctx.lineTo(171, 94);
    ctx.lineTo(155, 113);
    ctx.lineTo(110, 113);
    ctx.closePath();
    ctx.fillStyle = "#000000";
    ctx.fill();

