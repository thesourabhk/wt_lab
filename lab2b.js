var a = parseInt(prompt("Enter n"));

function fib() {
  var a = prompt("Enter the number");
  if (a <= 0) prompt("Enter value greater than or equal to 1");
  var str = "1";
  for (var i = 2; i <= a; i++) {
    str = str + ", " + i * i;
  }
  return str;
}

alert(fib());
