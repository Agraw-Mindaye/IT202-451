<?php
$a1 = [-1, -2, -3, -4, -5, -6, -7, -8, -9, -10];
$a2 = [-1, 1, -2, 2, 3, -3, -4, 5];
$a3 = [-0.01, -0.0001, -.15];
$a4 = ["-1", "2", "-3", "4", "-5", "5", "-6", "6", "-7", "7"];

function bePositive($arr) {
    echo "<br>Processing Array:<br><pre>" . var_export($arr, true) . "</pre>";
    echo "<br>Positive output:<br>";

    for($x = 0; $x < count($arr); $x++)
    {
        if(is_string($arr[$x])) //check if value is a string since abs fucntion will convert to an int or float
        {
            $arr[$x] = strval(abs($arr[$x]));  //use absolute value function get the positive value and strval to change it back into a string
        } else                  
        {
            $arr[$x] = abs($arr[$x]);  //for all other types (ints and floats), simply use absolute value function
        }

        echo $arr[$x] . " " . var_dump($arr[$x]) . "<br>";
    }

    //Agraw Mindaye | am3525 | 05/31/2023
}
echo "Problem 3: Be Positive<br>";
?>
<table>
    <thread>
        <th>A1</th>
        <th>A2</th>
        <th>A3</th>
        <th>A4</th>
    </thread>
    <tbody>
        <tr>
            <td>
                <?php bePositive($a1); ?>
            </td>
            <td>
                <?php bePositive($a2); ?>
            </td>
            <td>
                <?php bePositive($a3); ?>
            </td>
            <td>
                <?php bePositive($a4); ?>
            </td>
        </tr>
</table>
<style>
    table {
        border-spacing: 2em 3em;
        border-collapse: separate;
    }

    td {
        border-right: solid 1px black;
        border-left: solid 1px black;
    }
</style>