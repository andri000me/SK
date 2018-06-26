<?php

function set_validation_style($field)
{
    if ($_POST) {
        // Apakah nama_field = array
     
            if (form_error($field)) {
                echo 'has-error';
            } else {
                echo 'has-success';
            }
        
    }
}