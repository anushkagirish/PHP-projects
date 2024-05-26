<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #ffafbd, #ffc3a0);
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
            color: #444;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Palindrome Checker</h1>
        <form method="post">
            <input type="text" placeholder="Enter a word" name="str" required><br>
            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $str = $_POST["str"];
            $str_lower = strtolower(str_replace(' ', '', $str));
            $is_palindrome = $str_lower == strrev($str_lower);
            echo '<div class="result">';
            
            echo $is_palindrome ? "Palindrome" : "Not palindrome";
            echo "<br><br>";
            echo "Original String: " . ucfirst($str);
            echo "<br>";
            echo "Reversed String: " . ucwords(strrev($str));
            
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
