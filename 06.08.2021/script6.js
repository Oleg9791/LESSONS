document.getElementById("calc").onclick = function () {
    a = document.getElementById("a").value
    b = document.getElementById("b").value
    document.getElementById("result").innerText = (parseInt(a) + parseInt(b)).toString()
}

