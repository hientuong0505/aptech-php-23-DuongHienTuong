<?php 
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myFamilyDB";

    $conn = mysqli_connect($severname,$username,$password,$dbname);
    if(!$conn) {
        die("Error to connect: ".mysqli_connect_error());
    }

    $sql = "UPDATE duongHienTuongFamilyName1 SET lname='Tường đẹp trai' WHERE id=1";

    if (mysqli_query($conn,$sql)) {
        echo "Update data successfully";
    } else {
        echo "Error for updating record: " .mysqli_error($conn);
    }

    mysqli_close($conn);
?>