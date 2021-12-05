<?php

$x = 10;
$y = 26;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="">
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator" id="">
        <option value="None"value="None">None</option>
        <option value="Add">Add</option>
        <option value="Subtract">Subtract</option>
        <option value="Divide">Divide</option>
        <option value="Times">Times</option>
    </select>
    <br>
    <button name="submit" value="submit" type="submit">Calculate</button>
</form>
<p>The Answer is:</p>

<?php
    if (isset($_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch($operator) {
            case "None":
                echo "error, select a method";
            break ;
            case "Add":
                echo $result1 + $result2;
            break ;
            case "Subtract":
                echo $result1 - $result2;
            break ;
            case "Divide":
                echo $result1 / $result2;
            break ;
            case "Times":
                echo $result1 * $result2;
            break ;
        }
    }


?>
    
</body>
</html>