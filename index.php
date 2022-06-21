<!DOCTYPE html>
<html lang="en">
<head>

<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #eb8934;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number Generator</title>
</head>
<body>

<h1>Random Number Generator</h1>

<form action="index.php" method="post">
    <label for="dicecount">Number of times rolled:</label>
    <input type="number" name="dice">

    <br> <br>

    <label for="sides">Select the type of dice to roll:</label>

<select name="sides">
  <option value="4">d4</option>
  <option value="6">d6</option>
  <option value="8">d8</option>
  <option value="10">d10</option>
  <option value="12">d12</option>
  <option value="20">d20</option>
</select>

<br>
<br>

    <input type="submit" name ="submit" value="Submit">
    <br>
    <br>

<?php
if (isset($_POST['submit'])) {

    $dice_count = intval($_POST['dice']);
    $dice_sides = intval($_POST['sides']);
    
    $total_number = array ();



for ($i=1; $i <= $dice_count; $i++) {
    $rolled_number = rand(1, $dice_sides);
    echo "Roll #" . $i . " = " . $rolled_number . "<br>";
    array_push($total_number, $rolled_number);
}


echo "<br>";

$total_rolled = array_sum($total_number);

echo "Number of times rolled: " . $dice_count . "<br> <br>";
echo "Type of dice rolled: d" . $dice_sides . "<br> <br>";
echo "Total rolled: " . $total_rolled;

}
?>


</form>
    
</body>
</html>