<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weight Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: skyblue; /* Set background color to sky blue */
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: white;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #e0f7fa;
            border: 1px solid #0097a7;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Weight Calculator</h2>
        <form method="post" action="">
            <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "<label for='weight$i'>Weight of Person $i (in kg):</label>";
                echo "<input type='number' id='weight$i' name='weight$i' step='0.1' required>";
            }
            ?>
            <input type="submit" name="calculate" value="Calculate Total Weight">
        </form>

        <?php
        // Process form submission
        if (isset($_POST['calculate'])) {
            $weights = []; // Array to store weights
            $total_weight = 0; // Variable to store total weight

            // Retrieve weights from the form and store them in the array
            for ($i = 1; $i <= 5; $i++) {
                $weight = $_POST["weight$i"];
                $weights[] = $weight; // Add weight to the array
                $total_weight += $weight; // Add weight to the total
            }

            // Display the total weight
            echo "<div class='result'><b>Total Weight:</b> $total_weight kg</div>";
        }
        ?>
    </div>
</body>
</html>