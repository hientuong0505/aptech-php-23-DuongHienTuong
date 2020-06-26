<?php 
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myFamilyDB";

    $conn = mysqli_connect($severname,$username,$password,$dbname);
    if(!$conn) {
        die("Error to connect: ".mysqli_connect_error());
    }

    $sql = "SELECT id,fname,lname,email FROM duongHienTuongFamilyName1";
    $result = mysqli_query($conn,$sql);

    //Kiểm tra giá trị có hay là không? Nếu có thì trả về 
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<b>id:</b> " .$row["id"]. " -<b>FirstName:</b> " .$row["fname"]. " -<b>LastName:</b> " .$row["lname"]. " -<b>Email:</b> " .$row["email"]. "<br>";
        }
    } else {
        echo "Không có giá trị để trả về cho bạn";
    }

    mysqli_close($conn);
?>