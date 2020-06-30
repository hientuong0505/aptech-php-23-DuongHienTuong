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
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aptech_php_23_08";

    $conn = new mysqli($severname, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql); ?>

    <div class="container">
        <div class="row">
            <div class="col-12">

                <table class="table table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name users</th>
                            <th>Email</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        if ($result->num_rows > 0) { 
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo "$row[id]" ?></td>
                                    <td><?php echo "$row[name]" ?></td>
                                    <td><?php echo "$row[email]" ?></td>
                                </tr>
                            <?php } ?>
                        <?php } else {
                            echo "Không có giá trị trả về";
                        }
                        $conn->close();
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>