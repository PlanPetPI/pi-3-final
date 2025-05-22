document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if (email === "teste@petshop.com" && password === "123456") {
        alert("Login bem-sucedido!");
        window.location.href = "dashboard.html"; // Redirecionamento
    } else {
        alert("E-mail ou senha incorretos!");
    }
});