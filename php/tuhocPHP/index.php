<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <!-- Vong lap dieu kien if else-->
    <table class="table table-hover text-center table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Bài tập thực hành</th>
                <th>Đáp án</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td>
                    <?php
                    $a = 5;
                    $b = 10;
                    echo ("Giai phuong trinh bac nhat: " . $a . "x + $b = 0");
                    ?>
                </td>
                <td>
                    <?php
                    if ($a == 0) {
                        if ($b == 0) {
                            echo ("<br>Phuong trinh co vo so nghiem");
                        } else {
                            echo ("<br>Phuong trinh vo nghiem");
                        }
                    } else {
                        $x = -$b / $a;
                        echo ("<br>Nghiem cua phuong trinh la: x = $x");
                    }
                    ?>
                </td>
            </tr>

        </tbody>
    </table>
</body>

</html>