<?php
    require_once 'connect.php';
    if(!isset($_REQUEST['id_date'])) 
    {
        $id_date = 1;
    } 
    else 
    {
        $id_date = $_REQUEST['id_date'];
    }
    $query = "SELECT * FROM `place` WHERE `id_date` = '$id_date'";
    $result = mysqli_query($connect, $query);
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    $result = "<select name='place' id='place1'>";
    $result .= "<option selected disabled style='background-color:#C8C8C8;color:white;'>Выберите место</option>";
    foreach ($data as $elem) 
    {
        if($elem['busy'] != 0) 
        {
            $result .= "<option disabled style='background-color:red;color:white;' value='" . $elem['id'] . "'>" . $elem['place'] . "</option>";
        } 
        else 
        {
            $result .= "<option value='" . $elem['id'] . "'>" . $elem['place'] . "</option>";
        }
    }
    $result .= "</select>";
    echo $result;
    $connect->close();