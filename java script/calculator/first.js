function cal(val){
    document.getElementById("result").value+=val;
}

function solve(){
    let total , final;
    total = document.getElementById("result").value;
    final = eval(total);
    document.getElementById("result").value = final;
}

function clr(){
    document.getElementById("result").value = " ";
}