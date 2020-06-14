<?php 
    //Khai báo mảng tuần tự
    $a = array("An","Tuong","Nam","Tuan");
    echo ("<br> Họ tên: " .$a[1]);
    //Xuất các ra các giá trị của mảng
    foreach($a as $name) {
        echo ("<br> Họ tên: ".$name);
    }
    //Thêm giá trị vào mảng
    $a[] = "Mai";
    echo ("<br><br><br>");

    //Khai báo mảng không tuần tự
    $mang = array(
        "Họ tên" => "Dương Hiễn Tường",
        "Giới tính" => "Nam",
        "Dân tộc" => "Kinh",
        "Email" => "hientuongdeptrai@gmail.com"
    );
    echo ("<br>".$mang['Email']); //Lấy giá trị trong mảng
    //Thêm giá trị vào mảng
    $mang['Quê Quán'] = "Đà Nẵng";
    //In ra tất cả giá trị trong mảng không tuần tự
    foreach ($mang as $key=>$value) {
        echo ("<br>" .$key. ": " .$value);
    }
?>