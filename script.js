// script.js
// Optional: alert greeting on button click without reload
document.querySelector('form').addEventListener('submit', function(e) {
    const name = document.querySelector('input[name="name"]').value;
    if(name.trim() === "") {
        alert("Please enter your name!");
    } else {
        alert(`Hello, ${name}! Welcome to GitHub PHP practice.`);
    }
});
