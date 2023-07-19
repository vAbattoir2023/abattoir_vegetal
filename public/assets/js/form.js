// step1
function step1() {
    document.getElementById("step1").style.display = "none";
    document.getElementById("step2").style.display = "block";
    document.getElementById("backbtn1").style.display = "block";
    document.getElementById("nextbtn1").style.display = "none";
    document.getElementById("submitBtn").style.display = "block";
  }
  
// back step1
function back1() {
    document.getElementById("step1").style.display = "block";
    document.getElementById("step2").style.display = "none";
    document.getElementById("nextbtn1").style.display = "block";
    document.getElementById("backbtn1").style.display = "none";
    document.getElementById("submitBtn").style.display = "none";
  }
  