<?php 

    if(isset($_POST['turn'])){
        $cell1 = $_POST['cell1'];
        $cell2 = $_POST['cell2'];
        $cell3 = $_POST['cell3'];
        $cell4 = $_POST['cell4'];
        $cell5 = $_POST['cell5'];
        $cell6 = $_POST['cell6'];
        $cell7 = $_POST['cell7'];
        $cell8 = $_POST['cell8'];
        $cell9 = $_POST['cell9'];

        if($cell1 != "" && $cell2 != "" && $cell3 =! "" && $cell1 == $cell2 && $cell2 == $cell3){
            header("Location:index.php?status=win");
        }
        else if($cell1 != "" && $cell4 != "" && $cell7 != "" && $cell1 == $cell4 && $cell4 == $cell7){
            header("Location:index.php?status=win");
        }
        else if($cell1 != "" && $cell5 != "" && $cell9 != "" && $cell1 == $cell5 && $cell5 == $cell9){
            header("Location:index.php?status=win");
        }
        else if ($cell2 != "" && $cell5 != "" && $cell8 != "" && $cell2 == $cell5 && $cell5 == $cell8){
            header("Location:index.php?status=win");
        }
        else if($cell3 != "" && $cell5 != "" && $cell8 && $cell3 == $cell6 && $cell6 == $cell9){
            header("Location:index.php?status=win");
        }
        else if($cell4 != "" && $cell5 != "" && $cell6 != "" && $cell4 == $cell5 && $cell5 == $cell6){
            header("Location:index.php?status=win");
        }
        else if($cell7 != "" && $cell8 != "" && $cell9 != "" && $cell7 == $cell8 && $cell8 == $cell9){
            header("Location:index.php?status=win");
        }
        else{
            header("Location:index.php?cell1=$cell1&cell2=$cell2&cell3=$cell3&cell4=$cell4&cell5=$cell5&cell6=$cell6&cell7=$cell7&cell8=$cell8&cell9=$cell9");
        }

    }

?>