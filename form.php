/*
 5. Sukurkite forma, kuri leistų pridėti failą ir vėliau jį išsaugotų serveryje su formoje nurodytu failo pavadinimu (name). (3 balai)
*/

//    File forma: 
//    Name: [laboras.txt]
//    File: [browse]

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="filename"><br>
    <input type="file" name="my_file"><br>
    <!--<input type="file" name="my_file[]"><br>-->
    <button type="submit">Upload</button>
</form>
<div>
    <a href="storage\637d08451e949_Foto.PNG" target="_blank" >File</a>
    <a href="download.php">Download file</a>
</div>

<?php
    function printFilesList(): void{
        $fileResource = fopen('filesDv.txt', 'r');

        while (!feof($fileResource)){
            $fileData = fgets($fileResource);
            if ($fileData) {
                echo sprintf('<li>%s<li>', $fileData);
            }
        }
        fclose($fileResource);
    }
?>