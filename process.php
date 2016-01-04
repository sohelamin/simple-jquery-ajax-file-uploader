<?php
if (isset($_POST['upload'])) {
    $is_uploaded = move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $_FILES['image']['name']);

    if ($is_uploaded) {
        echo 1;
    } else {
        echo 0;
    }
}
