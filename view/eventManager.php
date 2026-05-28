<?php
session_start();
if (isset($_SESSION["user_image"])) {
    $user_image = $_SESSION["user_image"];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Manager</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=arrow_forward" />

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/event.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        .event-manager-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .event-manager-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .event-manager-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #1a1a1a;
        }

        .event-manager-header p {
            font-size: 1rem;
            color: #666;
        }

        .admin-menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .admin-menu form {
            display: flex;
        }

        .admin-menu .submit-btn {
            width: 100%;
            padding: 20px;
            font-size: 1rem;
            font-weight: 600;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .admin-menu .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .admin-menu .submit-btn:active {
            transform: translateY(-1px);
        }

        .exit-btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .exit-btn:hover {
            background-color: #c0392b;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(231, 76, 60, 0.3);
            color: white;
        }
    </style>
</head>

<body style="background-color: #F2F0EF !important;">

    <nav class="main-nav">
        <!-- SIDE BAR -->
        <ul class="sidebar">
            <li onclick="hideSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                        viewBox="0 -960 960 960" width="24px" fill="#">
                        <path
                            d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                    </svg></a></li>
            <li><a href="index.php">HOME</a></li>
            <li><a href="profileAdmin.php">PERFIL</a></li>
            <li><a href="event.php">EVENTOS</a></li>
        </ul>
        <!-- MAIN MENU -->
        <ul class="main-menu">
            <li>
                <a href="index.php">
                    <img class="logo-nav" src="images/logo2-modified.png" alt="logo" id="logo-nav">
                </a>
            </li>
            <li class="hideOnMobile link"><a href="index.php">HOME</a></li>
            <li class="hideOnMobile link"><a href="profileAdmin.php">PERFIL</a></li>
            <li class="hideOnMobile link"><a href="event.php">EVENTOS</a></li>

            <li>
                <a href="profileadmin.php">
                    <img src="../controller/<?= $user_image ?>" alt="Pfp" class="pfpNav">
                </a>
            </li>

            <li class="menu-button" onclick="showSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                        height="24px" viewBox="0 -960 960 960" width="26px" fill="#e8eaed">
                        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                    </svg></a></li>
        </ul>
    </nav>

    <!-- MAIN CONTENT -->
    <section class="main-body">
        <div class="event-manager-container">
            <div class="event-manager-header">
                <h1>Event Manager</h1>
                <p>Manage all event operations from here</p>
            </div>

            <div class="admin-menu">
                <form action="createEvent.php" method="POST">
                    <button class="submit-btn" type="submit">Create Event</button>
                </form>
                <form action="addDateEvent.php" method="POST">
                    <button class="submit-btn" type="submit">Add Date To Event</button>
                </form>
                <form action="addGalleryEvent.php" method="POST">
                    <button class="submit-btn" type="submit">Add Gallery To Event</button>
                </form>
                <form action="readEvent.php" method="POST">
                    <button class="submit-btn" type="submit">View Events</button>
                </form>
                <form action="updateEvent.php" method="POST">
                    <button class="submit-btn" type="submit">Update Event</button>
                </form>
                <form action="deleteEvent.php" method="POST">
                    <button class="submit-btn" type="submit">Delete Event</button>
                </form>
            </div>

            <div style="text-align: center;">
                <a href="profileAdmin.php" class="exit-btn">← Back to Profile</a>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-container-1-1">
                <p>FIRALIA</p>
            </div>
            <div class="footer-container-1-2">
                <p>Connecta con nosotros!</p>
                <nav>
                    <ul class="ul-apps">
                        <li><a href="#"><img src="images/icons/facebook.png" alt="Facebook"></a></li>
                        <li><a href="#"><img src="images/icons/instagram.png" alt="Instagram"></a></li>
                        <li><a href="#"><img src="images/icons/twitter.png" alt="X"></a></li>
                        <li><a href="#"><img src="images/icons/youtube.png" alt="YouTube"></a></li>
                        <li><a href="#"><img src="images/icons/tiktok.png" alt="TikTok"></a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer-container-1-3">
                <p>Descarga Nuestra App</p>
                <nav>
                    <ul class="ul-download">
                        <li><a href="#"><img src="images/icons/appstore.png" alt="Apple Store"></a></li>
                        <li><a href="#"><img src="images/icons/googleplay.webp" alt="Google Play"></a></li>
                    </ul>
                </nav>
            </div>

            <div class="footer-container-2">
                <ul>
                    <li><a href="#">Política de Privacidad</a></li>
                    <li><a href="#">Política de Compra</a></li>
                    <li><a href="#">Términos de Uso</a></li>
                    <li><a href="#">Política de Cookies</a></li>
                    <li><a href="#">Control de Cookies</a></li>
                    <li>
                        <p>© 2024-2025 FIRALIA. Todos los derechos reservados.</p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script>
        function showSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function hideSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = 'none';
            document.body.style.overflow = '';
        }

        const img = document.getElementById('logo-nav');
        if (img) {
            img.addEventListener('mouseenter', () => {
                img.src = 'images/logo2.png';
            });

            img.addEventListener('mouseleave', () => {
                img.src = 'images/logo2-modified.png';
            });
        }

        document.querySelector(".menu-button")?.addEventListener("click", showSidebar);
        document.querySelector(".sidebar li:first-child")?.addEventListener("click", hideSidebar);
    </script>

</body>

</html>