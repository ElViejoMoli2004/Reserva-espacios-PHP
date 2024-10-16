document.addEventListener('DOMContentLoaded', function () {
  var loginModal = document.getElementById("loginModal");
  var registerModal = document.getElementById("registerModal");
  var loginBtn = document.getElementById("loginBtn");
  var registerBtn = document.getElementById("registerBtn");
  var cancelLoginBtn = document.getElementById("cancelBtn");
  var cancelRegisterBtn = document.getElementById("cancelRegisterBtn");
  var closeButtons = document.getElementsByClassName("close");

  // Mostrar el modal de login
  loginBtn.onclick = function () {
      loginModal.style.display = "block";
  };

  // Mostrar el modal de registro al hacer clic en 'Regístrate'
  registerBtn.onclick = function (e) {
      e.preventDefault();
      loginModal.style.display = "none";
      registerModal.style.display = "block";
  };

  // Ocultar modales al hacer clic en 'Cancelar'
  cancelLoginBtn.onclick = function () {
      loginModal.style.display = "none";
  };

  cancelRegisterBtn.onclick = function () {
      registerModal.style.display = "none";
  };

  // Ocultar modal al hacer clic en 'X'
  Array.from(closeButtons).forEach(function (btn) {
      btn.onclick = function () {
          loginModal.style.display = "none";
          registerModal.style.display = "none";
      };
  });

  // Cerrar el modal si el usuario hace clic fuera del modal
  window.onclick = function (event) {
      if (event.target == loginModal) {
          loginModal.style.display = "none";
      } else if (event.target == registerModal) {
          registerModal.style.display = "none";
      }
  };
});