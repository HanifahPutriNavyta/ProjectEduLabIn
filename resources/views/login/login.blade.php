<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body class="login-page">

<div class="login-container">
  <img class="login-logo" src="/img/LogoEduLabIn.png" alt="EduLabInLogo">

  <div class="form-container">
    <form action="{{ route('KelasPraktikumAsprak') }}" method="GET">
      @csrf

      <!-- Username -->
      <div class="mb-3">
        <input type="text" name="username" class="form-control login-input" id="Username" placeholder="Username" required>
      </div>

      <!-- Password -->
      <div class="mb-3">
        <input type="password" name="password" class="form-control login-input" id="Password" placeholder="Password" required>
      </div>
      

      <!-- Role Dropdown -->
      <div class="role-dropdown-container mb-3">
        <div class="btn-group w-100">
          <button type="button" class="btn role-display" id="roleDisplay" disabled>
            <span class="role-selected">Role</span>
          </button>
          <div class="split-line"></div> 
          <button type="button" class="btn dropdown-toggle dropdown-toggle-split" id="roleToggleBtn" aria-expanded="false">
            <img class="dropdown-arrow" src="/img/IconDropdownLogin.png" alt="Dropdown">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="role-dropdown-menu w-100">
            <li><a class="dropdown-item role-dropdown-item" href="#" data-role="Asisten Praktikum">Asisten Praktikum</a></li>
            <li><a class="dropdown-item role-dropdown-item" href="#" data-role="Dosen">Dosen</a></li>
            <li><a class="dropdown-item role-dropdown-item" href="#" data-role="Laboran">Laboran</a></li>
            <li><a class="dropdown-item role-dropdown-item" href="#" data-role="Praktikan">Praktikan</a></li>
          </ul>
        </div>
        <input type="hidden" name="role" id="selectedRole">
      </div>

      <!-- Forgot Password -->
      <div class="text-center mb-3">
        <a href="#" class="forgot-password">Forgot Password</a>
      </div>

      <!-- Login Button -->
      <div class="text-center mb-3">
        <button class="login-btn primary-btn" type="submit">Login</button>
      </div>

      <!-- Register Link -->
      <div class="login-text-container text-center">
        <span class="text-secondary">Belum punya akun?</span>
        <a href="{{ route('daftar') }}" class="login-link">Daftar</a>
      </div>
    </form>
  </div>
</div>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

<!-- Role Dropdown Script -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const dropdownToggle = document.querySelector("#roleToggleBtn");
    const dropdownMenu = document.querySelector(".role-dropdown-menu");
    const dropdownItems = document.querySelectorAll(".role-dropdown-item");
    const roleDisplay = document.querySelector("#roleDisplay .role-selected");
    const hiddenInput = document.querySelector("#selectedRole");

    dropdownToggle.addEventListener("click", function(e) {
      e.preventDefault();
      dropdownMenu.classList.toggle("show");
      this.classList.toggle("active");
    });

    window.addEventListener("click", function(e) {
      if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.remove("show");
        dropdownToggle.classList.remove("active");
      }
    });

    dropdownItems.forEach(function(item) {
      item.addEventListener("click", function(e) {
        e.preventDefault();
        const selectedRole = this.getAttribute("data-role");
        roleDisplay.textContent = selectedRole;
        hiddenInput.value = selectedRole;
        dropdownMenu.classList.remove("show");
        dropdownToggle.classList.remove("active");
      });
    });
  });
</script>
</body>
</html>