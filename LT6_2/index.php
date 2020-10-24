<html>
    <head>
        <title>SVG Animation</title>
    </head>
    <body>
    <h1>Click the Circle</h1>
        <svg width="300" height="300" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <circle id="red-circle" r="30" cx="40" cy="50" fill="red" />
            <rect id="green-rectangle" width="50" height="50" x="15" y="100" fill="green"/>
            
            <animate 
                     xlink:href="#red-circle"
                     attributeName="cx"
                     from="40"
                     to="250" 
                     dur="5s"
                     begin="click"
                     fill="freeze" 
                     id="circ-anim"/>
            
            <animate 
                     xlink:href="#green-rectangle"
                     attributeName="x" 
                     from="15"
                     to="225" 
                     dur="5s"
                     begin="circ-anim.begin + 1s"
                     fill="freeze" 
                     id="rect-anim"/>
          
          </svg>
    </body>
</html>