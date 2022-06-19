<?php
 
$video = $_FILES["video"]["tmp_name"];
$resolution = $_POST["resolution"];
 
$command = "ffmpeg -i $video -s $resolution output2.mp4";
system($command);
 
echo "File has been converted";