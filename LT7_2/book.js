var canvas = document.getElementById('book');
var ctx = canvas.getContext('2d');

    //box
    ctx.beginPath();
    ctx.moveTo(0, 0);
    ctx.lineTo(200, 0);
    ctx.lineTo(200, 200);
    ctx.lineTo(0, 200);
    ctx.closePath();
    ctx.fillStyle = "#3d3f40";
    ctx.fill();

    //first-shape
    ctx.beginPath();
    ctx.lineWidth = 3;
    ctx.moveTo(50, 40);
    ctx.lineTo(84, 49);
    ctx.lineTo(80, 180);
    ctx.lineTo(44, 175);
    ctx.closePath();
    ctx.stroke();
    ctx.fillStyle = "blue";
    ctx.fill();

    //second-shape
    ctx.lineWidth = 2;
    ctx.beginPath();
    ctx.moveTo(84, 49);
    ctx.lineTo(164, 20);
    ctx.lineTo(130, 9);
    ctx.lineTo(50, 40);
    ctx.closePath();
    ctx.stroke();
    ctx.fillStyle = "white";
    ctx.fill();

    //top-line
    ctx.beginPath();
    ctx.moveTo(116, 25);
    ctx.lineTo(73, 44);
    ctx.closePath();
    ctx.stroke();

    //third-shape
    ctx.beginPath();
    ctx.moveTo(83, 48);
    ctx.lineTo(167, 19);
    ctx.lineTo(170, 160);
    ctx.lineTo(81, 181);
    ctx.fillStyle = "red";
    ctx.fill();
