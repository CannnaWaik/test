<?
//заполнение случайными величинами
function randFill($size)
{
    $array = array();
    for ($i = 0; $i < $size; $i++)
    {
        $array[$i] = rand(13, 25);
    }
    return $array;
}

function sum($array)
{
    $sum = 0;
    for ($i = 0; $i < count($array); $i++)
    {
        $sum += $array[$i];
    }
    return $sum = $sum/(count($array));
}

function intoDB($array, $database, $name)
{
    for ($i = 0; $i < count($array); $i++)
    {
        mysqli_query($database, "INSERT INTO temperature (id, pole_name, pole_data) values (NULL, '$name', $array[$i])");
    }
}

function fromDB($array, $database, $name)
{/*
    for ($i = 0; $i < count($array); $i++)
    {
        $out = mysqli_query($database, "SELECT * FROM temperature WHERE pole_name = $name");
    }
    return $out;*/
    echo mysqli_query($database, "SELECT * FROM temperature WHERE pole_name = $name");
}

?>