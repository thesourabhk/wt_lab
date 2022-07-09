var a = parseInt(prompt("Enter n"));

function fib() {
    if (a <= 0)
        return "Enter a number greater than 0";
    if (a === 1) {
        return "0";
    }
    else if (a === 2) {
        return "0, 1";
    }
    else {
        var dp = [];
        dp[0] = 0;
        dp[1] = 1;
        var str = "0, 1";
        for (var i = 2; i < a; i++) {
            dp[i] = dp[i - 1] + dp[i - 2];
            str = str + ", " + dp[i];
        }
        return str;
    }
}

alert(fib());

