<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
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
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Prime Number Checker</h1>
        <form method="post">
            <input type="text" placeholder="Enter a number" name="num" required><br>
            <input type="submit" value="Check">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST["num"];
            $isPrime = true;

            if ($num < 2) {
                $isPrime = false;
            } else {
                for ($i = 2; $i <= sqrt($num); $i++) {
                    if ($num % $i == 0) {
                        $isPrime = false;
                        break;
                    }
                }
            }

            echo '<div class="result">';
            if ($isPrime) {
                echo htmlspecialchars($num) . " is a Prime number.";
            } else {
                echo htmlspecialchars($num) . " is not a Prime number.";
            }
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
