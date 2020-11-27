var canvas = document.getElementById('pizza');
var ctx = canvas.getContext('2d');

    //box
    ctx.beginPath();
    ctx.moveTo(0, 0);
    ctx.lineTo(200, 0);
    ctx.lineTo(200, 200);
    ctx.lineTo(0, 200);
    ctx.closePath();
    ctx.fillStyle = "#ffe275";
    ctx.fill();

    //crust
    ctx.beginPath();
    ctx.moveTo(18, 54);
    ctx.bezierCurveTo(18, 18, 180, 18, 180, 54);
    ctx.closePath();
    ctx.fillStyle = "#c66500";
    ctx.fill();

    //dough-top
    ctx.beginPath();
    ctx.moveTo(18, 54);
    ctx.bezierCurveTo(18, 34, 180, 34, 180, 54);
    ctx.closePath();
    ctx.fillStyle = "#f6a230";
    ctx.fill();

    //dough-triangle
    ctx.beginPath();
    ctx.moveTo(18, 54);
    ctx.lineTo(100, 180);
    ctx.lineTo(180, 54);
    ctx.closePath();
    ctx.fillStyle = "#f6a230";
    ctx.fill();

    //peperroni-1
    ctx.beginPath();
    ctx.arc(75, 75, 15, 0, 2 * Math.PI);
    ctx.closePath();
    ctx.fillStyle = "#d53349";
    ctx.fill();

    //peperroni-2
    ctx.beginPath();
    ctx.arc(95, 120, 15, 0, 2 * Math.PI);
    ctx.closePath();
    ctx.fillStyle = "#d53349";
    ctx.fill();
    
    //peperroni-3
    ctx.beginPath();
    ctx.arc(125, 60, 15, 0, 2 * Math.PI);
    ctx.closePath();
    ctx.fillStyle = "#d53349";
    ctx.fill();

    //cheese
    ctx.beginPath();
    ctx.arc(100, 90, 5, 0, 2 * Math.PI);
    ctx.closePath();
    ctx.fillStyle = "#fff";
    ctx.fill();
    

