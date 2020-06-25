<?php

class cat {
    // CÁC THUỘC TÍNH THƯỜNG ĐI VỚI CÁC BỘ TỪ TRUY CẬP
    public $name;
    protected $age; //PROTECTED CHỈ CHO PHÉP TRUY XUẤT TRONG BẢN THÂN CLASS
    private $color;
    public static $gender;

    // CÁC PHƯƠNG THỨC , METHOD, FUNCTION, CHỨC NĂNG, HÀNH ĐỘNG
    public function eat() {
        echo $this -> name . " đang ăn";
    }

    public function setAge($age) {
        $this -> age = $age;
    }

    public function setColor($color) {
        $this -> color = $color;
    }
}

//Tạo ra 1 con mèo
$cat = new cat();

//Gắn tên cho con mèo
$cat -> name = "Mèo ba tư";

//Set độ tuổi cho con mèo
$cat -> setAge(10);

//Set màu sắc cho con mèo
$cat -> setColor('Màu đen trắng');

//Hiển thị dữ liệu đã nhập
echo "<pre>";
print_r($cat);
echo "</pre>";

//Truy vấn vào hành động ăn của con mèo
$cat -> eat();
echo "<br>";



