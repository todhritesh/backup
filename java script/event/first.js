function table(){
    
    var t ,a="";
    t = document.getElementById("t").value;
    if(t!=""){
        for(i=1;i<=10;i++){
            a += t + " x "+i + "=" + (t*i) + "<br>";
        }
        document.getElementById("s").innerHTML=a;
    }
    else{
        document.getElementById("s").innerHTML="";
    }
}