<div class="warning">
You haven't selected any files!
</div>

<form class="photoUploader" action="core/uploader.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="file" class="inputfile"  data-multiple-caption="{count} files selected" accept="image/x-png,image/gif,image/jpeg" multiple>
    <label for="file" class="inputlabel">Choose a file</label>
    <input type="submit" class="submitButton" value="Upload Image" name="submit">
</form>

<?php
$dir = "images/guildphotos";

if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
            if($file != "." && $file != ".." && !empty($file))
                echo "<img class='guildPhoto' src='$dir/$file'>";
        }
        closedir($dh);
    }
}
?>

<script src="js/photo.min.js"></script>
