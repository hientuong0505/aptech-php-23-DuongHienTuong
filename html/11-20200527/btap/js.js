
var dienThoai = {
    Iphone: {
        gia: 200,
    },

    samSung: {
        gia: 300,
    }
}
var key = Object.keys(dienThoai);
console.log(key);

function upDate() {
    document.getElementById('id-11').innerHTML = key[0];
    document.getElementById('id-12').innerHTML = dienThoai.Iphone.gia;
    document.getElementById('id-21').innerHTML = key[1];
    document.getElementById('id-22').innerHTML = dienThoai.samSung.gia;
}