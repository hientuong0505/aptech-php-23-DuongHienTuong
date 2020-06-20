<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";

    //Tao Ket Noi
    $conn = mysqli_connect($servername,$username,$password);

    //Kiem tra Ket Noi co thanh cong hay khong
    if (!$conn) {
        die ("Connected failed: ".mysqli_connect_error());
    }

    //Tao co so du lieu moi
    $sql = "CREATE DATABASE myFamilyDB";
    //Kiem tra xem da tao thanh cong DB hay chua?
    if (mysqli_query($conn,$sql)) {
        echo "Database connected successfully";
    } else {
        echo "Error create databse " .mysqli_error($conn);
    }

    mysqli_close($conn);
?>