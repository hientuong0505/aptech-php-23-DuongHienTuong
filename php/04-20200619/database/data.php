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

    //Tọa dữ liệu gia đình vào bảng duongHienTuongfamilyName
    $sql = "INSERT INTO duongHienTuongFamilyName1 (fname,lname,email)
            VALUES ('Dương','Tường','hientuongdeptrai@gmail.com'),
                ('Dương','Tùng','tungngu@gmail.com'),
                ('Dương','Thanh','duongthanh@gmail.com')";

    if (mysqli_query($conn,$sql)) {
        echo "New record created successfully";
    } else {
        echo "Error" .$sql. "<br>" . mysqli_errno($conn);
    }

    mysqli_close($conn);
?>