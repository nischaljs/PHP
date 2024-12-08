<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day of the Week</title>
</head>

<body>
    <h3>Find the Day of the Week</h3>
    <form method="post">
        <label for="day">Enter a number (1-7):</label>
        <input type="number" id="day" name="day" min="1" max="7" required>
        <button type="submit">Get Day</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $day = $_POST["day"];

        echo "<h4>Result:</h4>";
        switch ($day) {
            case 1:
                echo "The day is Sunday.";
                break;
            case 2:
                echo "The day is Monday.";
                break;
            case 3:
                echo "The day is Tuesday.";
                break;
            case 4:
                echo "The day is Wednesday.";
                break;
            case 5:
                echo "The day is Thursday.";
                break;
            case 6:
                echo "The day is Friday.";
                break;
            case 7:
                echo "The day is Saturday.";
                break;
            default:
                echo "Invalid input! Please enter a number between 1 and 7.";
                break;
        }
    }
    ?>
</body>

</html>
