<?php
if(@$_POST['xss']){
    echo'XSS nya: '.htmlspecialchars($_POST['xss']);
}else{
    echo '<form action="" method="post">
    <input type="text" name="xss">
    <input type="submit" value="cek xss">
    ';
}
?>