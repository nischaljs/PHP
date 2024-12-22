<?php
// Set cookie values
setcookie("date1", $_POST['date1'], time() + (7 * 24 * 60 * 60), "/");
setcookie("date2", $_POST['date2'], time() + (7 * 24 * 60 * 60), "/");

// Welcome message
echo "<h1>Welcome to Date Difference Calculator</h1>";
echo "<p>Today's date and time is: " . date("Y-m-d H:i:s") . "</p>";

// Retrieve dates
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];

echo "<p>Date 1: $date1</p>";
echo "<p>Date 2: $date2</p>";

// Calculate date difference
$diff = abs(strtotime($date2) - strtotime($date1));
$days = floor($diff / (60 * 60 * 24));

echo "<p>The difference between the dates is: $days days.</p>";

// Bonus: Display last 5 calculations
session_start();
if (!isset($_SESSION['calculations'])) {
    $_SESSION['calculations'] = [];
}
array_push($_SESSION['calculations'], "$date1 to $date2 = $days days");
if (count($_SESSION['calculations']) > 5) {
    array_shift($_SESSION['calculations']);
}

echo "<h3>Last 5 Calculations:</h3>";
echo "<ul>";
foreach ($_SESSION['calculations'] as $calculation) {
    echo "<li>$calculation</li>";
}
echo "</ul>";
?>
