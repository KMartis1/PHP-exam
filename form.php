<?php
/*
 5. Sukurkite forma, kuri leistų pridėti failą ir vėliau jį išsaugotų serveryje su formoje nurodytu failo pavadinimu (name). (3 balai)
*/

//    File forma: 
//    Name: [laboras.txt]
//    File: [browse]
?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <p> Dokumento pavadinimas (name): <input type="text" name="filename"></p>
    <input type="file" name="my_file"><br><br>
    <!-- <input type="file" name="my_file[]"><br> -->
    <button type="submit">Upload</button>
</form>
<div>
    <!-- <a href="storage\637d08451e949_Foto.PNG" target="_blank" >File</a>
    <a href="download.php">Download file</a> -->
</div>