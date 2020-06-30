<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <?php
    //string
    $ten = "AptechPHP23";
    echo $ten;
    echo "<br><br>";

    //Integer
    $nam = 2020;
    echo $nam;
    echo "<br><br>";

    //Float 
    $gia = 15.55;
    echo $gia;
    echo "<br><br>";

    //Array
    $array = ["Duong", "Hien", "Tuong"];
    echo $array[0];

    $tensp = ["Iphone", "SamSung", "Oppo"];
    $giasp = [50, 60, 80];
    $xuatxu = ["My", "Han Quoc", "Trung Quoc"];

    $product = [
        ["SamSung", 50, "Han Quoc"],
        ["Iphone", 60, "My"],
        ["Xiaomi", 40, "Trung Quoc"]
    ];
    ?>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Ten</th>
                <th>Gia</th>
                <th>NoiSanXuat</th>
            </tr>
        </thead>

        <tbody>
            <?php
            // $a=1;
            // for ($i=0;$i<3;$i++) {
            //     echo "<tr> <td> $a </td> 
            //         <td> $tensp[$i] </td> <td> $giasp[$i]$ </td> 
            //         <td> $xuatxu[$i] </td>";
            //     echo "</tr>"; 
            //     $a++;
            // }
            ?>
            <!-- Cach viet khac-->
            <?php
            for ($i = 0; $i < count($tensp); $i++) { ?>
                <tr>
                    <td><?php echo ($i + 1); ?></td>
                    <td><?php echo $tensp[$i]; ?></td>
                    <td><?php echo $giasp[$i]; ?></td>
                    <td><?php echo $xuatxu[$i]; ?></td>
                </tr>
            <?php }
            ?>

            <?php
            for ($i = 0; $i < count($product); $i++) { ?>
                <tr>
                    <?php for ($j = 0; $j <= count($product[$i]); $j++) { ?>
                        <td>
                            <?php
                            if ($j == 0) {
                                echo ($i + 1);
                            } else {
                                echo $product[$i][$j-1]; 
                            }
                            ?>
                        </td>
                    <?php } ?>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</body>

</html>

                    <!-- <tbody>
                    <?php 
                        if ($result->num_rows > 0) { 
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                    echo "<td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><br>";
                                echo "</tr>";
                            }
                        } else {
                            echo "Không có giá trị trả về";
                        }
                        $conn->close();
                        ?>
                    </tbody> -->