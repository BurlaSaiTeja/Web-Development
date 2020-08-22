function calc_quad()
{
    var r1, r2;
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    var c = document.getElementById("c").value;
    var d = b * b - 4 * a * c;
    if (d > 0) {
        r1 = (-b + Math.sqrt(d)) / (2 * a);
        r2 = (-b - Math.sqrt(d)) / (2 * a);
        document.getElementById("extra-answer").innerHTML =
        'The roots of quadratic equation ' + a + 'x<sup>2</sup> +' + b + 'x + ' + c + ' are real and not equal<br/>Root 1 : ' + r1 + '<br/>Root 2 : ' + r2;
    }
    else if (d == 0) {
        r1 = r2 = -b / (2 * a);
        document.getElementById("extra-answer").innerHTML =
        'The roots of quadratic equation ' + a + 'x<sup>2</sup> +' + b + 'x + ' + c + ' are real and equal<br/>Root 1 : ' + r1 + '<br/>Root 2 : ' + r2;
    }
    else {
        var rp = (-b / (2 * a)).toFixed(2);
        var ip = (Math.sqrt(-d) / (2 * a)).toFixed(2);
        document.getElementById("extra-answer").innerHTML =
        'The roots of quadratic equation ' + a + 'x<sup>2</sup> +' + b + 'x + ' + c + ' are imaginary<br/>Root 1 : ' + rp + ' + ' + ip + 'i<br/>Root 2 : ' + rp + ' - ' + ip + 'i';
    }
}
