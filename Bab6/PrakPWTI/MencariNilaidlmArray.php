<?php
    $name = ['Dyah', 'Yuliana'];

    function cari($array, $search) :bool {
        if (in_array($search, $array)){
            echo "TRUE". '</br>';
            return TRUE;
        } else {
            echo "FALSE". '</br>';
            return FALSE;
        }
    }

    cari ($name, 'Dyah');
    cari ($name, 'Yuliana');
    cari ($name, 'Lia');

?>