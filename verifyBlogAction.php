<?php

    if(isset($_SESSION['userId'])) {
        if (isset($_POST['like']) || isset($_POST['dislike']) || isset($_POST['report']) || isset($_POST['bookmark'])) {
            echo "<script>alert('Set')</script>";
        }
    }

?>