<?php 
if(!empty($_SESSION['VALIDATE_MESSAGE'])){
    echo $_SESSION['VALIDATE_MESSAGE'];
}
?>
<form action="controller.php" method="post">
    <input type="text" name="title">
    <button>提交</button>
</form>