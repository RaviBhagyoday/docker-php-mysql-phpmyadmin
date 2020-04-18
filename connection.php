<?php
 $db = mysqli_connect('mysql:3306', 'root', 'root') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'studinfosystem' ) or die(mysqli_error($db));
?>