<?php
$audio = $_FILES['audio']['tmp_name'];
$name = $_POST['name'];
move_uploaded_file($audio, $name.'.ogg');
// encode the file to mp3 if ffmpeg is installed
// exec('ffmpeg -i '.$audio.' '.$name.'.mp3')
?>
