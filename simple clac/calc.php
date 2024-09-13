<?php
function calculate($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Error: Division by zero.";
            }
        default:
            return "Error: Invalid operator.";
    }
}

$num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : null;
$num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : null;
$operator = isset($_POST['operator']) ? $_POST['operator'] : '';
$result = null;

if ($num1 !== null && $num2 !== null && $operator) {
    $result = calculate($num1, $num2, $operator);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #4a2c2c;
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }
        input[type="number"], select {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 2px solid #4a2c2c;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        input[type="number"]:focus, select:focus {
            border-color: #8b5a5a;
            outline: none;
        }
        button {
            padding: 15px;
            width: 100%;
            background-color: #4a2c2c;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #8b5a5a;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
            display: flex;
            justify-content: center;
            font-size: 18px;
            color: #4a2c2c;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <header>
        <h1>Simple Calculator</h1>
    </header>

    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <select name="operator" required>
            <option value="">Select operator</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <button type="submit">Calculate</button>
    </form>

    <?php if ($result !== null): ?>
        <div class="result">Result: <?php echo htmlspecialchars($result); ?></div>
    <?php endif; ?>

    <div class="footer">Created by ESRAA TAMER &copy; 2024</div>
</body>
</html>
