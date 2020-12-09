<?php 
    error_reporting(false);
    $cell1 = $_GET['cell1'];
    $cell2 = $_GET['cell2'];
    $cell3 = $_GET['cell3'];
    $cell4 = $_GET['cell4'];
    $cell5 = $_GET['cell5'];
    $cell6 = $_GET['cell6'];
    $cell7 = $_GET['cell7'];
    $cell8 = $_GET['cell8'];
    $cell9 = $_GET['cell9'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
</head>
<body>
    <h1>Tic Tac Toe</h1>
    <?php 
        if($_GET['status'] == "win"){?>
            <h4>Player Win!</h4>
        <?php } ?>
    <form action="game.php" method="POST">
        <input type="text" name="cell1" value="<?php echo $cell1; ?>" style="width:20px;">
        <input type="text" name="cell2" value="<?php echo $cell2; ?>" style="width:20px;">
        <input type="text" name="cell3" value="<?php echo $cell3; ?>" style="width:20px;">
        <br>
        <input type="text" name="cell4" value="<?php echo $cell4; ?>" style="width:20px;">
        <input type="text" name="cell5" value="<?php echo $cell5; ?>" style="width:20px;">
        <input type="text" name="cell6" value="<?php echo $cell6; ?>" style="width:20px;">
        <br>
        <input type="text" name="cell7" value="<?php echo $cell7; ?>" style="width:20px;">
        <input type="text" name="cell8" value="<?php echo $cell8; ?>" style="width:20px;">
        <input type="text" name="cell9" value="<?php echo $cell9; ?>" style="width:20px; margin-bottom:10px;">
        <br>
        <input type="submit" name="turn" value="Turn">
    </form>
</body>
</html>