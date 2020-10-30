function calc() {
    var xhttp = new XMLHttpRequest();
    var form = document.querySelector("form");
    var n = form[0].value;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("res").innerHTML = "Result: <mark>"+this.responseText+"</mark>";
        }
    };
    xhttp.open("POST", "calc.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("n="+n);
}