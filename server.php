<?php
$audio = $_FILES['audio']['tmp_name'];
$name = $_POST['name'];
move_uploaded_file($audio, $name.'.mp3');
?>
