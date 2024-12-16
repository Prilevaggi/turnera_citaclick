document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    fetch('/api/login', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ username, password })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            localStorage.setItem('username', username); // Guardar usuario en localStorage
            window.location.href = "app_turnos.html";  // Redirigir a la página de turnos
        } else {
            document.getElementById('message').textContent = 'Credenciales incorrectas.';
        }
    })
    .catch(err => console.error('Error:', err));
});