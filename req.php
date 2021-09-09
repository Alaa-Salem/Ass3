<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="handle_user.php" method="GET">
        <input type="number" name="num1" placeholder="enter number1">
        <input type="number" name="num2" placeholder="enter number2">
        <select name="op">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="div">/</option>
            <option value="multi">*</option>
        </select>
        <button type="submit" name="submit">submit</button>
 
    </form>
    <?php
        if(isset($_GET['result'])){
            echo $_GET['result'];
        }
    ?>
    
</body>
</html>