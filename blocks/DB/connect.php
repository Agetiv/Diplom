<?php

$mysql = false;

function openDB ()
{
    global $mysql;
    $mysql = new mysql ("localhost", "root", "", "ddeliverybase");
    $mysql -> query("SET NAMES 'utf-8'");
}

function closeDB ()
{
    global $mysql;
    $mysql -> close ();
}

?>