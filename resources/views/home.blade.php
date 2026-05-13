<!DOCTYPE html>
<html>
<head>
    <title>Cyber Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            height: 100vh;
            font-family: 'Orbitron', sans-serif;
            background: radial-gradient(circle at top, #0f172a, #000000);
            overflow: hidden;
            color: #00f5ff;
        }

        /* efek grid cyber */
        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(#00f5ff22 1px, transparent 1px),
                              linear-gradient(90deg, #00f5ff22 1px, transparent 1px);
            background-size: 50px 50px;
            animation: moveGrid 10s linear infinite;
            opacity: 0.3;
        }

        @keyframes moveGrid {
            from { transform: translateY(0); }
            to { transform: translateY(50px); }
        }

        .center {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .card-cyber {
            background: rgba(0,0,0,0.6);
            border: 1px solid #00f5ff;
            border-radius: 15px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 0 20px #00f5ff;
            width: 420px;
            z-index: 2;
        }

        .title {
            font-size: 26px;
            font-weight: 800;
            text-shadow: 0 0 10px #00f5ff;
        }

        .subtitle {
            font-size: 13px;
            color: #7dd3fc;
            margin-bottom: 20px;
        }

        .btn-cyber {
            background: transparent;
            border: 1px solid #00f5ff;
            color: #00f5ff;
            padding: 10px;
            width: 100%;
            margin-top: 10px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn-cyber:hover {
            background: #00f5ff;
            color: black;
            box-shadow: 0 0 15px #00f5ff;
        }

        .robot {
            width: 90px;
            margin-bottom: 15px;
            filter: drop-shadow(0 0 10px #00f5ff);
        }

        .scanline {
            position: absolute;
            width: 100%;
            height: 2px;
            background: #00f5ff;
            animation: scan 3s linear infinite;
            opacity: 0.4;
        }

        @keyframes scan {
            0% { top: 0; }
            100% { top: 100%; }
        }
    </style>
</head>

<body>

<div class="scanline"></div>

<div class="center">

    <div class="card-cyber">

        <img class="robot" src="https://cdn-icons-png.flaticon.com/512/4712/4712027.png">

        <div class="title">SYSTEM ONLINE</div>
        <div class="subtitle">Laravel Cyber Interface Activated</div>

        <button class="btn-cyber">INITIALIZE SYSTEM</button>
        <button class="btn-cyber">ACCESS DATABASE</button>

        <div style="margin-top:15px; font-size:11px; color:#38bdf8;">
            STATUS: READY
        </div>

    </div>

</div>

</body>
</html>