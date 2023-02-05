const alert = document.getElementById("alert");
setTimeout(() => {
    alert.style.opacity = 0;
    setTimeout(() => {
        alert.style.display = "none";
    }, 400);
}, 1000);
