<html>
    <head>
        <title> SVG PATTERNS</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">   
    </head>
    <body>
        
<!-- Line and Circle -->
<div>
<svg width="200" height="300" style="background-color:#ffe02e">
    <rect fill="#ffe02e" height="300" width="200"/>
        <g>
            <line x1="50" y1="200" x2="50" y2="115" stroke-width="10" stroke="#000000"/>
            <line x1="150" y1="200" x2="150" y2="115" stroke-width="10" stroke="#000000"/>
            <line x1="45" y1="205" x2="155" y2="205" stroke-width="10" stroke="#000000"/>
            <line x1="65" y1="100" x2="150" y2="100" stroke-width="10" stroke="#000000"/>
            <circle cx="50" cy="100" r="20" fill="#000000" stroke="null"/>
            <circle cx="50" cy="100" r="10" fill="#ffffff" stroke="null"/>
            <circle cx="150" cy="100" r="20" fill="#000000" stroke="null"/>
            <circle cx="150" cy="100" r="10" fill="#ffffff" stroke="null"/>
            <circle cx="150" cy="100" r="20" fill="#000000" stroke="null"/>
            <circle cx="150" cy="100" r="10" fill="#ffffff" stroke="null"/>
            <circle cx="150" cy="200" r="20" fill="#000000" stroke="null"/>
            <circle cx="150" cy="200" r="10" fill="#ffffff" stroke="null"/>
            <circle cx="50" cy="200" r="20" fill="#000000" stroke="null"/>
            <circle cx="50" cy="200" r="10" fill="#ffffff" stroke="null"/>
        </g>
</svg>
<center><p>1. Line and Circle<p></center>
</div>
<!-- Circle and Rectangle -->
<div>
<svg width="200" height="300" style="background-color:#4c57f5">
    <rect fill="#4c57f5" height="300" width="200"/>
        <g>
            <rect x="25" y="10" width="150" height="50" fill="white"/>
            <rect x="25" y="65" width="150" height="50" fill="white"/>
            <rect x="25" y="120" width="150" height="50" fill="white"/>
            <rect x="25" y="175" width="150" height="50" fill="white"/>
            <rect x="25" y="230" width="150" height="50" fill="white"/>
            <circle cx="50" cy="65" r="20" fill="#4c57f5" stroke="null"/>
            <circle cx="100" cy="65" r="20" fill="#4c57f5" stroke="null"/>
            <circle cx="150" cy="65" r="20" fill="#4c57f5" stroke="null"/>
            <circle cx="50" cy="120" r="20" fill="#4c57f5" stroke="null"/>
            <circle cx="100" cy="120" r="20" fill="#4c57f5" stroke="null"/>
            <circle cx="150" cy="120" r="20" fill="#4c57f5" stroke="null"/>
            <circle cx="50" cy="175" r="20" fill="#4c57f5" stroke="null"/>
            <circle cx="100" cy="175" r="20" fill="#4c57f5" stroke="null"/>
            <circle cx="150" cy="175" r="20" fill="#4c57f5" stroke="null"/>
            <circle cx="50" cy="230" r="20" fill="#4c57f5" stroke="null"/>
            <circle cx="100" cy="230" r="20" fill="#4c57f5" stroke="null"/>
            <circle cx="150" cy="230" r="20" fill="#4c57f5" stroke="null"/>
        </g>
    </svg>
    <center><p>2. Circle and Rectangle<p></center>
</div>
<div>
    <!-- Polyline and Circle -->
    <svg width="200" height="300" style="background-color:#00ffd5">
        <rect fill="#00ffd5" height="300" width="200"/>
        <g>
            <polyline points="5,0 5,20 30,20 30,40 60,40 60,60 90,60 90,80 120,80 120,100 150,100 150,120 180,120 180,150 210,150"
            style="fill:none; stroke:#ffe656; stroke-width:10"/>
            <polyline points="0,25 20,25 20,50 50,50 50,70 80,70 80,90 110,90 110,110 140,110 140,130 170,130 170,160 200,160"
            style="fill:none; stroke:#d31f1f; stroke-width:10"/>
            <circle cx="25" cy="150" r="20" fill="#ffe656" stroke="null"/>
            <circle cx="30" cy="150" r="15" fill="#d31f1f" stroke="null"/>
            <circle cx="55" cy="180" r="20" fill="#d31f1f" stroke="null"/>
            <circle cx="60" cy="180" r="15" fill="#ffe656" stroke="null"/>
            <circle cx="85" cy="210" r="20" fill="#ffe656" stroke="null"/>
            <circle cx="90" cy="210" r="15" fill="#d31f1f" stroke="null"/>
            <circle cx="115" cy="240" r="20" fill="#d31f1f" stroke="null"/>
            <circle cx="120" cy="240" r="15" fill="#ffe656" stroke="null"/>
            <circle cx="145" cy="270" r="20" fill="#ffe656" stroke="null"/>
            <circle cx="150" cy="270" r="15" fill="#d31f1f" stroke="null"/>
        </g>
    </svg>
    <center><p>3. Polyline and Circle<p></center>
</div>
<div>
    <!-- Polygon and Ellipse -->
    <svg width="200" height="300" style="background-color:#31f041">
        <rect fill="#31f041" height="300" width="200"/>
            <g>
                <ellipse cx="100" cy="30" rx="80" ry="20" style="fill:white" />
                <ellipse cx="100" cy="220" rx="80" ry="20" style="fill:white" />
                <polygon points="100,30 40,218 190,98 10,98 160,218"
                style="fill:red" />
            </g>
    </svg>
    <center><p>4. Polyline and Circle<p></center>
</div>
<div>
    <!-- Circle, Line and Rectangle -->
    <svg width="200" height="300" style="background-color:#000000">
        <rect fill="#000000" height="300" width="200"/>
            <g>
                <rect x="25" y="20" width="150" height="50" fill="white"/>
                <line x1="100" y1="22" x2="100" y2="68" stroke-width="1" stroke="black"/>
                <circle cx="65" cy="45" r="5" fill="black" stroke="null"/>
                <circle cx="140" cy="45" r="5" fill="black" stroke="null"/>
                <circle cx="160 " cy="60" r="5" fill="black" stroke="null"/>
                <circle cx="160 " cy="30" r="5" fill="black" stroke="null"/>
                <circle cx="120" cy="60" r="5" fill="black" stroke="null"/>
                <circle cx="120" cy="30" r="5" fill="black" stroke="null"/>
                <rect x="25" y="100" width="150" height="50" fill="white"/>
                <line x1="100" y1="102" x2="100" y2="148" stroke-width="1" stroke="black"/>
                <circle cx="65" cy="125" r="5" fill="black" stroke="null"/>
                <circle cx="140" cy="140" r="5" fill="black" stroke="null"/>
                <circle cx="160 " cy="140" r="5" fill="black" stroke="null"/>
                <circle cx="160 " cy="110" r="5" fill="black" stroke="null"/>
                <circle cx="120" cy="140" r="5" fill="black" stroke="null"/>
                <circle cx="120" cy="110" r="5" fill="black" stroke="null"/>
                <circle cx="140" cy="110" r="5" fill="black" stroke="null"/>
                <rect x="25" y="180" width="150" height="50" fill="white"/>
                <line x1="100" y1="228" x2="100" y2="182" stroke-width="1" stroke="black"/>
                <circle cx="65" cy="205" r="5" fill="black" stroke="null"/>
                <circle cx="85" cy="215" r="5" fill="black" stroke="null"/>
                <circle cx="45" cy="195" r="5" fill="black" stroke="null"/>
                <circle cx="140" cy="220" r="5" fill="black" stroke="null"/>
                <circle cx="160 " cy="220" r="5" fill="black" stroke="null"/>
                <circle cx="160 " cy="190" r="5" fill="black" stroke="null"/>
                <circle cx="120" cy="220" r="5" fill="black" stroke="null"/>
                <circle cx="120" cy="190" r="5" fill="black" stroke="null"/>
                <circle cx="140" cy="190" r="5" fill="black" stroke="null"/>
            </g>
        </svg>
        <center><p>5. Circle, Line and Rectangle<p></center>
    </div>
    <div>
        <!-- Polyline and Polygon -->
        <svg width="200" height="300" style="background-color:#b9f2ff">
            <rect fill="#b9f2ff" height="300" width="200"/>
            <g>
                <polyline points="0,20 20,20 20,40 40,40 40,60 60,60 60,80 80,80 80,100 100,100 100,120 120,120 120,140 140,140 140,160 160,160
                160,180 180,180 180,200 200,200"
                style="fill:none; stroke:#82e1f7; stroke-width:20"/>
                <polyline points="0,30 0,60 20,60 20,80 40,80 40,100 60,100 60,120 80,120 80,140 100,140 100,160 120,160 120,180 140,180 140,200
                160,200 160,220 200,220"
                style="fill:none; stroke:#26c2e6; stroke-width:20"/>
                <polyline points="0,70 0,100 20,100 20,120 40,120 40,140 60,140 60,160 80,160 80,180 100,180 100,200 120,200 120,220 140,220 140,240
                200,240"
                style="fill:none; stroke:#11839c; stroke-width:20"/>    
                <polygon points="200,150 100,95 100,200" 
                style= "fill:none; stroke:#0e4957; stroke-width:2"/>
                <polygon points="0,150 95,95 95,200"
                style= "fill:none; stroke:#0e4957; stroke-width:2"/>
            </g>
        </svg>
        <center><p>6. Polyline and Polygon<p></center> 
    </div>
    <div>
        <!-- Circle, Rectangle, Polyline, Polygon and Ellipse -->
        <svg width="200" height="300" style="background-color:#663399">
            <rect fill="#663399" height="300" width="200"/>
            <g>
                <line x1="0" y1="150" x2="200" y2="150" stroke-width="1" style="stroke:#FFDF00"/>
                <line x1="100" y1="0" x2="100" y2="300" stroke-width="1" style="stroke:#FFDF00"/>
            </g>
            <g>
                <polyline points="0,0 20,50 0,100 20,150 0,200 20,250 0,300"
                style="fill:none; stroke:#D4AF37; stroke-width:5"/>
                <polyline points="5,0 25,50 5,100 25,150 5,200 25,250 5,300"
                style="fill:none; stroke:#C5B358; stroke-width:5"/>
                <polyline points="10,0 30,50 10,100 30,150 10,200 30,250 10,300"
                style="fill:none; stroke:#996515; stroke-width:5"/>
            </g>
            <g>
                <polyline points="200,0 180,50 200,100 180,150 200,200 180,250 200,300"
                style="fill:none; stroke:#D4AF37; stroke-width:5"/>
                <polyline points="195,0 175,50 195,100 175,150 195,200 175,250 195,300"
                style="fill:none; stroke:#C5B358; stroke-width:5"/>
                <polyline points="190,0 170,50 190,100 170,150 190,200 170,250 190,300"
                style="fill:none; stroke:#996515; stroke-width:5"/>
            </g>
            <g>
                <rect x="0" y="0" width="200" height="10" style="fill:#4B0082;"/>
                <rect x="0" y="290" width="200" height="10" style="fill:#4B0082;"/>
            </g>
            <g>
                <polygon points="100,75 50,150 100,225"
                style= "fill:#DAA520;"/>
                <polygon points="100,75 150,150 100,225"
                style= "fill:#DAA520;"/>
            </g>
            <g>
                <polygon points="100,85 60,150 100,215"
                style= "fill:#FFD700;"/>
                <polygon points="100,85 140,150 100,215"
                style= "fill:#FFD700;"/>
            </g>
            <g>
                <polygon points="100,95 70,150 100,205"
                style= "fill:#996515"/>
                <polygon points="100,95 130,150 100,205"
                style= "fill:#996515"/>
            </g>
            <g>
                <circle cx="50" cy="75" r="15" style="fill:#E6BE8A;" stroke="null"/>
                <circle cx="50" cy="225" r="15" style="fill:#E6BE8A;" stroke="null"/>
                <circle cx="150" cy="75" r="15" style="fill:#E6BE8A;" stroke="null"/>
                <circle cx="150" cy="225" r="15" style="fill:#E6BE8A;" stroke="null"/>
            </g>
            <g>
                <ellipse cx="100" cy="30" rx="5" ry="10" style="fill:#FFD700" />
                <ellipse cx="100" cy="60" rx="5" ry="10" style="fill:#FFD700" />
                <ellipse cx="100" cy="240" rx="5" ry="10" style="fill:#FFD700" />
                <ellipse cx="100" cy="270" rx="5" ry="10" style="fill:#FFD700" />
            </g>
        </svg>
        <center><p>7. Circle, Rectangle, Polyline, Polygon and Ellipse<p></center>
    </div>
    </body>
    <a href="https://github.com/AndrieTan/SVG">--Go To Repository--></a>
</html>
