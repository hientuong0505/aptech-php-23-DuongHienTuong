<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myFamilyDB";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if (!$conn) {
        die ("Connected failed: ".mysqli_connect_error());
    }

    $name = $_POST['dayLaTen'];
    $email = $_POST['dayLaEmail'];

    $sql = "INSERT INTO duongHienTuongFamilyName1 (fname,email)
        VALUES ('$name','$email')";

    if (mysqli_query($conn,$sql)) {
        echo "New record created successfully";
    } else {
        echo "Error" .$sql. "<br>" . mysqli_errno($conn);
    }

    mysqli_close($conn);

?>