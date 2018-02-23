
<?php
    include "templates/header.php";
    if(isset($_POST['submit'])){
        session_start();
        session_unset();
        session_destroy();
    }

?>

<form method="post" action="homepage.php">
    <div class="input-field col s6">
        <i class="fas fa-user-circle material-icons prefix"></i>
        <input id="name" type="text" class="validate" data-length="10" name="name">
        <label for="name">Your Name</label>
    </div>
    <div class="input-field col s6 number">
        <i class="fas fa-sort-numeric-down material-icons prefix"></i>
        <label for="num" data-error="Wrong" data-success="Right">Your Number</label>
    </div>

    <div class="range-field input-field col s6">
        <input type="range" id="test5" min="1" max="10" name="num"/>
   </div>
   <div class="sub-btn">
       <div class="btn waves-effect waves-light">
           <i class="fas fa-paper-plane"></i>
           <input type="submit" name="submit">
       </div>
   </div>
</form>

<?php include "templates/footer.php"; ?>
