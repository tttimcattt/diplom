<?php
    require_once 'connect.php';
    $query = "SELECT * FROM `date`";
    $result = mysqli_query($connect, $query);
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    $result = "<select name='date' id='date1' onChange='onChangeDate()'>";
    $result .= "<option selected disabled style='background-color:#C8C8C8;color:white;'>Выберите дату</option>";
    foreach ($data as $elem) 
    {
        $result .= "<option value='" . $elem['id'] . "'>" . $elem['date'] . "</option>";
    }
    $result .= "</select>";
    echo $result;
    $connect->close();