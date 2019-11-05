<form action="about.php" method = "POST">
    <input type="text" name="myname"> <br>
    <button>Submit</button>
</form>

<?php
error_reporting( E_ALL);

var_dump($_POST);
//
//if(isset($_GET['name'])){
//    echo $_GET['name'];
//}
//else
//{
//    echo 'не установлено';
//}