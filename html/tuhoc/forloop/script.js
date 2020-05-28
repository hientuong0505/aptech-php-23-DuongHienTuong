function upDate() {
    //Mang cac gia tri cho dien thoai
    var phone = [
        {
            name: 'Iphone', gia: 100, stt:1, quocgia: 'Armeria'
        },
        {
            name: 'Samsung', gia: 200, stt: 2, quocgia: 'Korea'
        },
        {
            name: 'Oppo', gia: 105, stt: 3, quocgia: 'China'
        }
    ]
    var arrayLenght = phone.length; //Lay do dai cua mang

    var tableBody = document.getElementById('tb-body');

    for(var i=0; i< arrayLenght;i++){

    var tableRow = document.createElement('tr');
    tableBody.appendChild(tableRow);

    var tableData1 = document.createElement('td');
    tableData1.innerHTML = phone[i]['stt'];
    tableRow.appendChild(tableData1);

    var tableData11 = document.createElement('td');
    tableData11.innerHTML = phone[i]['name'];
    tableRow.appendChild(tableData11);

    var tableData111 = document.createElement('td');
    tableData111.innerHTML = phone[i]['gia'];
    tableRow.appendChild(tableData111);

    var tableData1111 = document.createElement('td');
    tableData1111.innerHTML = phone[i]['quocgia'];
    tableRow.appendChild(tableData1111);

    }
}
