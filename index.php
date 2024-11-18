<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble Sort in PHP</title>
</head>

<body>
    <h1>Bubble Sort in PHP</h1>
    <h2>This is the change being made to the sorting assignment....</h2>
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
        function bubbleSort($arr)
        {
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

        // Selection Sort Implementation
        function selectionSort($arr)
        {
            $n = count($arr);
            for ($i = 0; $i < $n - 1; $i++) {
                $minIndex = $i;
                for ($j = $i + 1; $j < $n; $j++) {
                    if ($arr[$j] < $arr[$minIndex]) {
                        $minIndex = $j;
                    }
                }
                $temp = $arr[$i];
                $arr[$i] = $arr[$minIndex];
                $arr[$minIndex] = $temp;
            }
            return $arr;
        }


        // Sort the array
        $sortedNumbersBuuble = bubbleSort($numbers);

        //Calling Selection Sort function
        $sortedNumbersSelection = selectionSort($numbers);


        // Display the result
        echo "<h2>Sorted Numbers using bubble sort:</h2>";
        echo "<p>" . implode(', ', $sortedNumbersBuuble) . "</p>";


        // Display the result using selection sort
        echo "<h2>Sorted Numbers using selection sort:</h2>";
        echo "<p>" . implode(', ', $sortedNumbersSelection) . "</p>";
    }
    ?>
</body>

</html>