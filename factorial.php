<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #74ebd5, #acb6e5);
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
            max-width: 500px;
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
            width: calc(100% - 30px);
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: skyblue;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2em;
            color: #444;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Factorial Calculator</h1>
        <form method="post">
            <input type="text" placeholder="Enter a number" name="num" required><br>
            <input type="submit" value="Calculate">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = intval($_POST["num"]);
            echo '<div class="result">';

            if ($num >= 0) {
                echo "Factorial of " . htmlspecialchars($num) . " is: ";

                function factorial($n) {
                    if ($n <= 1) {
                        return 1;
                    } else {
                        return $n * factorial($n - 1);
                    }
                }

                echo factorial($num);
            } else {
                echo "Please enter a non-negative integer.";
            }

            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
