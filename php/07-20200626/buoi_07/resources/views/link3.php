<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myFamilyDB";

    //Tao Ket Noi
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    //Kiem tra Ket Noi co thanh cong hay khong
    if (!$conn) {
        die ("Connected failed: ".mysqli_connect_error());
    }

    $sql1 = "CREATE TABLE duongHienTuongFamilyName1 (
        id INT(8) AUTO_INCREMENT PRIMARY KEY,
        fname VARCHAR(255) NOT NULL,
        lname VARCHAR(255) NOT NULL,
        email VARCHAR(255) UNIQUE
)";

    if (mysqli_query($conn,$sql1)) {
        echo "Table created successfully";
    } else {
    echo "Error creating table: " . mysqli_error($conn);
    }

mysqli_close($conn);