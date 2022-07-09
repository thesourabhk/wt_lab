var a = parseInt(prompt("Enter n"));

function fib() {
    if(a<=0)
    alert("Enter value greater than or equal to 1");
    var str = "1";
    for(var i=2; i<=a; i++){
        str = str + ", " + i*i;
    }
    return str;
}

alert(fib());

