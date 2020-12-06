var data=[
    "Buku Tulis",
    "Pensil",
    "Spidol"
];

function display(){
    var x = document.getElementById('list');
    x.innerHTML = "";

    for(var i = 0; i < data.length; i++){
        var buttonEdit = "<a href='#' onclick='edit("+i+")'>Edit</a>";
        var buttonDel = "<a href='#' onclick='del("+i+")'>Hapus</a>";
       
        x.innerHTML +=  "<li>" + data[i] + " ["+buttonEdit + " | "+ buttonDel +"]</li>";
    }
}

function add(){
    var input = document.querySelector("input[name=foo]").value;
    data.push(input);
    display();
}

function edit(id){
    var newVal = prompt("Nama Baru", data[id]);
    data[id] = newVal;
    display();
}

function del(id){
    data.splice(id,1);
    display();
}

display();