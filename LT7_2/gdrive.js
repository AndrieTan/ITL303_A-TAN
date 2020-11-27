var canvas = document.getElementById('gdrive');
var ctx = canvas.getContext('2d');

    //box
    ctx.beginPath();
    ctx.moveTo(0, 0);
    ctx.lineTo(200, 0);
    ctx.lineTo(200, 200);
    ctx.lineTo(0, 200);
    ctx.closePath();
    ctx.fillStyle = "#a1d479";
    ctx.fill();

    //first-shape
    ctx.beginPath();
    ctx.moveTo(40, 162);
    ctx.lineTo(14, 118);
    ctx.lineTo(71, 19);
    ctx.lineTo(98, 67);
    ctx.lineTo(40, 162);
    ctx.closePath();
    ctx.fillStyle = "#06a94a";
    ctx.fill();

    //second-shape
    ctx.beginPath();
    ctx.moveTo(71, 19);
    ctx.lineTo(126, 19);
    ctx.lineTo(183, 118);
    ctx.lineTo(127, 118);
    ctx.lineTo(71, 19);
    ctx.closePath();
    ctx.fillStyle = "#ffd050";
    ctx.fill();

    //third-shape
    ctx.beginPath();
    ctx.moveTo(40, 162);
    ctx.lineTo(156, 166);
    ctx.lineTo(183, 118);
    ctx.lineTo(66, 118);
    ctx.closePath();
    ctx.fillStyle = "#4888f4";
    ctx.fill();
