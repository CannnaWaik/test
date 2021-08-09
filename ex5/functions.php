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
    for ($i=0; $i < count($array); $i++)
    {
        $newArray[$i] = $array[$i][2];
    }

    $sum = 0;
    for ($i = 0; $i < count($newArray); $i++)
    {
        $sum += $newArray[$i];
    }
    return round($sum/(count($newArray)), 2);
}

function intoDB($array, $database, $name)
{
    for ($i = 0; $i < count($array); $i++)
    {
        mysqli_query($database, "INSERT INTO temperature (id, pole_name, pole_data) values (NULL, '$name', $array[$i])");
    }
}

function fromDB($database, $name)
{
    /*
    for ($i = 0; $i < count($array); $i++)
    {
        $out = mysqli_query($database, "SELECT * FROM temperature WHERE pole_name = $name");
    }
    return $out;*/
    return mysqli_query($database, "SELECT * FROM temperature WHERE pole_name = '$name'");
}



?>