<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #76b852, #8DC26F);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        h1 {
            color: #444;
            margin-bottom: 20px;
        }
        form {
            margin: 20px 0;
        }
        input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: darkgreen;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: green;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2em;
            color: #444;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Multiplication Table Generator</h1>
        <form method="post">
            <input type="text" placeholder="Enter a number" name="num1" required><br>
            <input type="submit" value="Generate Table">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = intval($_POST["num1"]);
            echo '<div class="result">';
            echo "<h2>Table of " . htmlspecialchars($num) . ":</h2>";
            echo "<ul>";
            for ($x = 1; $x <= 10; $x++) {
                echo "<li>" . $num . " x " . $x . " = " . ($num * $x) . "</li>";
            }
            echo "</ul>";
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
