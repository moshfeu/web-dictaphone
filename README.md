A sample MDN app that uses getUserMedia and MediaRecorder API for recording audio snippets, and The Web Audio API for visualizations.

You can [play with the live demo](https://mdn.github.io/web-dictaphone/).

Documentation:

* [Using the MediaRecorder API](https://developer.mozilla.org/en-US/docs/Web/API/MediaRecorder_API/Using_the_MediaRecorder_API): Explains in detail how the Web Dictaphone works.
* [MediaRecorder API landing page](https://developer.mozilla.org/en-US/docs/Web/API/MediaRecorder_API): includes API reference and more

Thanks to [Sole](http://soledadpenades.com/) for the oscilloscope code.

## Run

1. [Install](https://www.php.net/manual/en/install.php) php
2. Run

```php
php -S localhost:8080
```
3. Open the browser with `http://localhost:8080`

## Comment

The audio files recorded and saved and `.ogg`. There are some way to convert them to `.mp3`. One of them is to use [`ffmpeg`](https://www.ffmpeg.org/).
If `ffmpeg` is installed on your machine, go to `server.php` and remove lines 4-5 and uncomment line 6

```diff
-move_uploaded_file($audio, $name.'.ogg');
-// encode the file to mp3 if ffmpeg is installed
-//exec('ffmpeg -i '.$audio.' '.$name.'.mp3')
+exec('ffmpeg -i '.$audio.' '.$name.'.mp3')
```