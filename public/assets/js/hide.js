function myFunction() {
    var x = document.getElementById("myDIV1");
    var y = document.getElementById("myDIV2");
    var c = document.getElementById("myDIV3");
    if (x.style.display && y.style.display === "none") {
        x.style.display = "block";
        y.style.display = "block";
        c.style.display = "block";
    } else {
        x.style.display = "none";
        y.style.display = "none";
        c.style.display = "none";
    }
 
}