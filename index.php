<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble Sort in PHP</title>
</head>
<body>
    <h1>Bubble Sort in PHP</h1>
    <form method="post">
        <label for="numbers">Enter numbers separated by commas:</label><br>
        <input type="text" id="numbers" name="numbers" placeholder="e.g., 5,2,9,1,7"><br><br>
        <button type="submit">Sort</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the input numbers
        $input = $_POST['numbers'];
        
        // Convert the input into an array
        $numbers = array_map('intval', explode(',', $input));

        // Bubble Sort Implementation
        function bubbleSort($arr) {
            $n = count($arr);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if ($arr[$j] > $arr[$j + 1]) {
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $temp;
                    }
                }
            }
            return $arr;
        }

        // Sort the array
        $sortedNumbers = bubbleSort($numbers);

        // Display the result
        echo "<h2>Sorted Numbers:</h2>";
        echo "<p>" . implode(', ', $sortedNumbers) . "</p>";
    }
    ?>
</body>
</html>
