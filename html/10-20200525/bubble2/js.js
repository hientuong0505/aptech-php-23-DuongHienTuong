var temp=1;
function changeImg() {
    if (temp == 1){
        document.getElementById('anh').src='./bat.gif';
        temp =2;
    } else {
        document.getElementById('anh').src='./tat.gif';
        temp = 1;
    }
}

