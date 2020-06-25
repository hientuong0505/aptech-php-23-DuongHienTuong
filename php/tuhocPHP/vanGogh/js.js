var temp=1;
function changeImg() {
    if (temp == 1){
        document.getElementById('anh').src='anh111.jpg';
        temp =2;
    } else {
        document.getElementById('anh').src='VanGogh-starry_night.jpg';
        temp = 1;
    }
}