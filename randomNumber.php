<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
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
            text-align: center;
        }
        .card {
            margin: 20px 0;
            padding: 20px;
            border-left: 4px solid #4CAF50;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        .card h2 {
            margin-top: 0;
            color: #4CAF50;
        }
        .number {
            font-size: 48px;
            font-weight: bold;
            text-align: center;
            color: #333;
            margin: 20px 0;
        }
        .range {
            color: #666;
            font-size: 14px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            margin-top: 20px;
        }
        button:hover {
            background-color: #45a049;
        }
        .timestamp {
            text-align: center;
            color: #999;
            font-size: 12px;
            margin-top: 20px;
        }
        hr {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎲 Random Number Generator</h1>
        <p style="text-align: center;">Generates random numbers within specified ranges using PHP's rand() function</p>
        
        <?php
        // Generate random numbers for each range
        $random1 = rand(1, 27);
        $random2 = rand(1, 178);
        $random3 = rand(1, 600);
        
        // Also generate additional examples to show randomness
        $random1b = rand(1, 27);
        $random2b = rand(1, 178);
        $random3b = rand(1, 600);
        ?>
        
        <div class="card">
            <h2>Range 1: 1 to 27</h2>
            <div class="number"><?php echo $random1; ?></div>
            <div class="range">Random number between 1 and 27 (inclusive)</div>
            <div style="margin-top: 10px; font-size: 12px; color: #999;">
                Additional example: <?php echo $random1b; ?>
            </div>
        </div>
        
        <div class="card">
            <h2>Range 2: 1 to 178</h2>
            <div class="number"><?php echo $random2; ?></div>
            <div class="range">Random number between 1 and 178 (inclusive)</div>
            <div style="margin-top: 10px; font-size: 12px; color: #999;">
                Additional example: <?php echo $random2b; ?>
            </div>
        </div>
        
        <div class="card">
            <h2>Range 3: 1 to 600</h2>
            <div class="number"><?php echo $random3; ?></div>
            <div class="range">Random number between 1 and 600 (inclusive)</div>
            <div style="margin-top: 10px; font-size: 12px; color: #999;">
                Additional example: <?php echo $random3b; ?>
            </div>
        </div>
        
        <form method="post">
            <button type="submit">Generate New Random Numbers</button>
        </form>
        
        <hr>
        
        <div style="background-color: #e8f4f8; padding: 15px; border-radius: 5px;">
            <h3>About rand() function:</h3>
            <p>PHP's <code>rand(min, max)</code> function generates a random integer between min and max (inclusive).</p>
            <p>In PHP 7.1+, rand() is an alias of mt_rand(), which provides better random number generation.</p>
            <p><strong>Syntax examples:</strong></p>
            <ul>
                <li><code>rand(1, 27)</code> - Returns random number between 1 and 27</li>
                <li><code>rand(1, 178)</code> - Returns random number between 1 and 178</li>
                <li><code>rand(1, 600)</code> - Returns random number between 1 and 600</li>
            </ul>
        </div>
        
        <div class="timestamp">
            Page generated: <?php echo date('Y-m-d H:i:s'); ?>
        </div>
    </div>
</body>
</html>