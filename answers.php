<?php
    session_start(); // start session .
    // choose the answer .
    if($_SESSION['num'] == 1){
        echo "ans1..." . "<br/>";
    }elseif($_SESSION['num'] == 2){
        echo "ans2..." . "<br/>";
    }elseif($_SESSION['num'] == 3){
        echo "ans3..." . "<br/>";
    }elseif($_SESSION['num'] == 4){
        echo "ans4..." . "<br/>";
    }elseif($_SESSION['num'] == 5){
        echo "ans5..." . "<br/>";
    }
    
?>