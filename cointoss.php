<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coin Toss Simulator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            text-align: center;
            background-color: #f0f0f0;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        .result {
            font-size: 24px;
            margin: 20px 0;
        }
        .heads {
            color: #4CAF50;
            font-weight: bold;
        }
        .tails {
            color: #f44336;
            font-weight: bold;
        }
        .stats {
            margin-top: 20px;
            padding: 20px;
            background-color: #e8f4f8;
            border-radius: 8px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Coin Toss Simulator</h1>
        <p>Tossing a coin 100 times...</p>
        
        <?php
        // Initialize counters
        $heads = 0;
        $tails = 0;
        
        // Toss the coin 100 times
        for ($i = 1; $i <= 100; $i++) {
            // Generate random number: 0 = Heads, 1 = Tails
            $toss = rand(0, 1);
            
            if ($toss == 0) {
                $heads++;
            } else {
                $tails++;
            }
        }
        ?>
        
        <div class="result">
            <span class="heads">Heads: <?php echo $heads; ?></span> | 
            <span class="tails">Tails: <?php echo $tails; ?></span>
        </div>
        
        <div class="stats">
            <h3>Statistics:</h3>
            <p>Heads: <?php echo $heads; ?> times (<?php echo round(($heads / 100) * 100, 2); ?>%)</p>
            <p>Tails: <?php echo $tails; ?> times (<?php echo round(($tails / 100) * 100, 2); ?>%)</p>
            <p>Total tosses: 100</p>
        </div>
        
        <form method="post">
            <button type="submit">Toss Again!</button>
        </form>
    </div>
</body>
</html>