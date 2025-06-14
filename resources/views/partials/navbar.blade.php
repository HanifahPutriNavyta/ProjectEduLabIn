<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">   
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet" />   
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-compact navbar-dark fixed-top shadow-sm">
        <div class="container-fluid">
            <!-- Burger menu button -->
            <button class="border-0 bg-transparent p-0 me-2" 
                    type="button" 
                    data-bs-toggle="offcanvas" 
                    data-bs-target="#sidebarMenu">
                <img class="burger-icon" src="{{ asset('img/sidebar.png') }}" alt="Menu">
            </button>

            <!-- Centered logo -->
            <div class="mx-auto">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/LogoEduLabIn.png') }}" alt="Edu LabIn">
                </a>
            </div>

            <!-- Profile toggle button -->
            <button class="profile-toggle border-0 bg-transparent p-0" 
                    type="button" 
                    data-bs-toggle="offcanvas" 
                    data-bs-target="#profileMenu">
               <img src="{{ asset('img/profile.png') }}" alt="Profile">
            </button>
        </div>
    </nav>

    <!-- Sidebar Menu -->
    <div class="offcanvas offcanvas-start offcanvas-sidebar" tabindex="-1" id="sidebarMenu">        
        <div class="sidebar-header">
           <img src="{{ asset('img/LogoEduLabIn.png') }}" alt="Edu LabIn" class="sidebar-logo">
        </div>
        
        <div class="sidebar-content">
            <div class="sidebar-description">
                Edu LabIn adalah sebuah website sistem informasi layanan terpadu yang memberikan kemudahan bagi seluruh pengguna layanan Laboratorium Pembelajaran Fakultas Informatika, Universitas Brawijaya.
            </div>
            
            <div class="sidebar-divider"></div>
            
            <div class="sidebar-menu-item">
                <span class="menu-text">Dashboard</span>
                <img src="{{ asset('img/IconHome.png') }}" alt="Home" class="menu-icon">
            </div>
            
            <div class="sidebar-divider"></div>
            
            <div class="sidebar-menu-item">
                <span class="menu-text">Keluar</span>
                <img src="{{ asset('img/IconLogout2.png') }}" alt="Logout" class="menu-icon">
            </div>
        </div>
    </div>

    <!-- Profile Menu -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="profileMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Profil</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="keluarSwitch">
                <label class="form-check-label" for="keluarSwitch">Keluar</label>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>