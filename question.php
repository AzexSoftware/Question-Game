<?php
    include "templates/header.php";
// start session .
    session_start();
// define some variables .
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['num'] = $_POST['num'];

?>
<?php
// say hi to the user .
    echo "<h1 class='hi'>Hi, " . $_SESSION['name'] . " </h1> Your question is .." . "<br/>";
// choose the question .
    if($_SESSION['num'] == 1){
        echo "q1.." . "<br/>";
    }elseif($_SESSION['num'] == 2){
        echo "q2.." . "<br/>";
    }elseif($_SESSION['num'] == 3){
        echo "q3.." . "<br/>";
    }elseif($_SESSION['num'] == 4){
        echo "q4.." . "<br/>";
    }elseif($_SESSION['num'] == 5){
        echo "q5.." . "<br/>";
    } // So On ....
?>
<!-- the counter by JS -->
<div id="counter"></div>
<script>
    var countDiv = document.getElementById('counter'), // catch the div.
        sec      = 15, // number of seconds.
        secPass, // define a function.
        counter  = setInterval(function(){
            "use strict";
            secPass();
        }, 1000);
    function secPass(){
        "use strict";
        var remainSec = sec % 60;
        if(sec < 10){
            remainSec = "0" + remainSec;
        }
        countDiv.innerHTML = remainSec;
        if(sec > 0){
            sec = sec - 1;
        } else {
            clearInterval(counter);
            countDiv.innerHTML = "TIME OUT!!";
        }
    }
</script>
<?php
// redirect to answers file .
    //header('REFRESH:13.25;URL=answers.php');
    //exit();
?>
<?php include "templates/footer.php"; ?>
