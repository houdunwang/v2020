<?php
function uploader()
{
    if (is_uploaded_file($_FILES['up']['tmp_name'])) {
        $to = 'files/' . $_FILES['up']['name'];
        if (move_uploaded_file($_FILES['up']['tmp_name'], $to)) {
            return $to;
        }
    }
    return false;
}
