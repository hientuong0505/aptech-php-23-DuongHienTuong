<?php 
    echo "Hello word! <br><br>";
    $name = "Tuong";
    $x = 5;
    $y = 10;
?>

<table>
    <thead>
        <tr>
            <th>
                <?php echo $name; ?>
            </th>
            <th>
                <h6><?php echo "ABCDEF"?></h6>
            </th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>
                <?php echo $x+$y; ?>
            </td>
        </tr>
    </tbody>
</table>