<?php 

require_once "connect.php"

function getWeekFood ($limimt) 
{
    openDB();
    $result = $mysql->query("SELECT * FROM 'weekfood' ORDER BY 'id' DESC LIMIT $limit");
    closeDB();
    return resultToArray ($result);
}

function resultToArray($result)
{
    $array = array();
    while (($row = $result->fetch_assoc()) !=false)
    $array[] = $row;
    return $array;
}

?>