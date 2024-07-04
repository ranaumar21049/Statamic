<?php

function custPrint($data, $die = null)
{
    echo "<pre>";
    print_r($data);
    $die ? false : die;
}
