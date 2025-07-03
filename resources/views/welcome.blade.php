<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benicio, Casa de Pan | Comida Yucateca en Valle de Bravo</title>
    <meta name="description" content="Restaurante especializado en comida Yucateca, pizzas artesanales, panadería tradicional y café rioplatense en Valle de Bravo">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Handlee&display=swap" rel="stylesheet">
    <style>
        /* Reset y Estilos Base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #E8C07D; /* Dorado principal */
            --secondary-color: #9B4444; /* Rojo terracota */
            --accent-color: #A1C181; /* Verde oliva */
            --dark-color: #2D2D2A; /* Gris oscuro */
            --light-color: #F9F5E8; /* Beige claro */
            --text-color: #333333;
            --white: #FFFFFF;
            --black: #000000;
            --transition: all 0.3s ease;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Handlee', cursive;
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
            background-color: var(--dark-color);
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Berkshire Swash', cursive;
            font-weight: normal;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 80px 0;
        }

        .btn {
            display: inline-block;
            background-color: var(--secondary-color);
            color: var(--white);
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            transition: var(--transition);
            border: 2px solid var(--secondary-color);
            text-transform: capitalize;
            font-family: 'Berkshire Swash', cursive;
            letter-spacing: 1px;
            font-size: 18px;
        }

        .btn:hover {
            background-color: transparent;
            color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(155, 68, 68, 0.3);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--white);
            border-color: var(--white);
            margin-left: 15px;
        }

        .btn-outline:hover {
            background-color: var(--white);
            color: var(--dark-color);
        }

        /* Barra de Navegación Minimalista */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 25px 0;
            z-index: 999;
            transition: var(--transition);
            background-color: transparent;
        }

        .navbar.scrolled {
            padding: 15px 0;
            background-color: rgba(45, 45, 42, 0.95);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 32px;
            font-weight: 700;
            color: var(--white);
            text-decoration: none;
            text-transform: capitalize;
            font-family: 'Berkshire Swash', cursive;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 50px;
            margin-right: 10px;
            transition: var(--transition);
        }

        .logo:hover img {
            transform: rotate(15deg);
        }

        .logo span {
            color: var(--primary-color);
        }

        .nav-links {
            display: flex;
            align-items: center;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            text-transform: capitalize;
            font-size: 18px;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--primary-color);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a:hover {
            color: var(--primary-color);
        }

        .hamburger {
            display: none;
            cursor: pointer;
            width: 30px;
            height: 20px;
            flex-direction: column;
            justify-content: space-between;
        }

        .hamburger span {
            display: block;
            width: 100%;
            height: 3px;
            background-color: var(--white);
            transition: var(--transition);
        }

        /* Hero Section con Video de Fondo */
        .hero {
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            text-align: center;
            color: var(--white);
            overflow: hidden;
        }

        .hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(45, 45, 42, 0.3), rgba(45, 45, 42, 0.7));
            z-index: 0;
        }

        .hero-content {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 72px;
            margin-bottom: 20px;
            text-transform: capitalize;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
            animation: fadeInDown 1s ease;
        }

        .hero h1 span {
            color: var(--primary-color);
        }

        .hero p {
            font-size: 24px;
            margin-bottom: 40px;
            font-family: 'Handlee', cursive;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
            animation: fadeIn 1.5s ease;
        }

        .hero-buttons {
            display: flex;
            justify-content: center;
            animation: fadeInUp 1s ease;
        }

        /* Sección de Especialidades */
        .highlights {
            background-color: var(--light-color);
            padding: 60px 0;
        }

        .highlights-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 40px;
        }

        .highlight-card {
            background-color: var(--white);
            border-radius: 10px;
            overflow: hidden;
            width: 280px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
            text-align: center;
        }

        .highlight-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(155, 68, 68, 0.2);
        }

        .highlight-image {
            height: 180px;
            overflow: hidden;
        }

        .highlight-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .highlight-card:hover .highlight-image img {
            transform: scale(1.1);
        }

        .highlight-content {
            padding: 25px;
        }

        .highlight-content h3 {
            font-size: 22px;
            color: var(--secondary-color);
            margin-bottom: 10px;
        }

        .highlight-content p {
            font-size: 16px;
            margin-bottom: 15px;
            color: var(--text-color);
        }

        .highlight-price {
            font-size: 20px;
            font-weight: bold;
            color: var(--primary-color);
            font-family: 'Berkshire Swash', cursive;
        }

        /* Sección Contacto Minimalista */
        .contact-section {
            background-color: var(--dark-color);
            color: var(--white);
            padding: 80px 0;
            text-align: center;
        }

        .contact-section h2 {
            font-size: 42px;
            margin-bottom: 20px;
        }

        .contact-section h2 span {
            color: var(--primary-color);
        }

        .contact-section p {
            font-size: 18px;
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
            margin-bottom: 40px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .contact-item i {
            font-size: 24px;
            color: var(--primary-color);
        }

        .contact-item div h4 {
            font-size: 18px;
            margin-bottom: 5px;
            font-family: 'Berkshire Swash', cursive;
        }

        .contact-item div p {
            font-size: 16px;
            margin-bottom: 0;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            color: var(--white);
            font-size: 20px;
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--primary-color);
            color: var(--dark-color);
            transform: translateY(-5px);
        }

        /* Footer Minimalista */
        .footer {
            background-color: var(--black);
            color: var(--white);
            padding: 30px 0;
            text-align: center;
        }

        .footer p {
            opacity: 0.8;
            font-size: 14px;
        }

        /* Animaciones */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: float 3s ease-in-out infinite;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 56px;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 80px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 80px);
                background-color: var(--dark-color);
                flex-direction: column;
                align-items: center;
                justify-content: center;
                transition: var(--transition);
            }
            
            .nav-links.active {
                left: 0;
            }
            
            .nav-links li {
                margin: 15px 0;
            }
            
            .hamburger {
                display: flex;
            }
            
            .hamburger.active span:nth-child(1) {
                transform: rotate(45deg) translate(5px, 5px);
            }
            
            .hamburger.active span:nth-child(2) {
                opacity: 0;
            }
            
            .hamburger.active span:nth-child(3) {
                transform: rotate(-45deg) translate(7px, -6px);
            }
            
            .hero h1 {
                font-size: 42px;
            }
            
            .hero p {
                font-size: 18px;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-outline {
                margin-left: 0;
                margin-top: 15px;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 36px;
            }
            
            .logo img {
                height: 40px;
            }
            
            .logo {
                font-size: 24px;
            }
            
            .highlight-card {
                width: 100%;
                max-width: 280px;
            }
        }
    </style>
</head>
<body>
    <!-- Barra de Navegación Minimalista -->
    <nav class="navbar">
        <div class="container">
            <a href="#" class="logo">
                <img src="logo-vector.svg" alt="Benicio Casa de Pan Logo">
                Benicio<span>Casa de Pan</span>
            </a>
            <ul class="nav-links">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="menu.html">Menú</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section con Video -->
    <header id="inicio" class="hero">
        <video autoplay muted loop class="hero-video">
            <source src="hero-video.mp4" type="video/mp4">
            <!-- Fallback image if video doesn't load -->
            <img src="hero-fallback.jpg" alt="Restaurante Benicio Casa de Pan">
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="floating">Sabores que <span>inspiran</span></h1>
            <p>Descubre la auténtica cocina Yucateca y Uruguaya en el corazón de Valle de Bravo</p>
            <div class="hero-buttons">
                <a href="menu.html" class="btn">Explorar Menú</a>
                <a href="#contacto" class="btn btn-outline">Reservar</a>
            </div>
        </div>
    </header>

    <!-- Sección de Especialidades -->
    <section class="highlights">
        <div class="container">
            <h2 style="text-align: center; font-size: 36px; color: var(--secondary-color); margin-bottom: 20px;">Nuestros <span style="color: var(--primary-color);">Favoritos</span></h2>
            <p style="text-align: center; font-size: 18px; max-width: 700px; margin: 0 auto 40px;">Algunas de las delicias que podrás disfrutar en Benicio</p>
            
            <div class="highlights-container">
                <!-- Destacado 1 - Chivito Completo -->
                <div class="highlight-card">
                    <div class="highlight-image">
                        <img src="chivito.jpg" alt="Chivito Completo">
                    </div>
                    <div class="highlight-content">
                        <h3>Chivito Completo</h3>
                        <p>El clásico Uruguayo con churrasco de lomo, jamón, queso, tocino y más</p>
                        <div class="highlight-price">$285</div>
                    </div>
                </div>
                
                <!-- Destacado 2 - Lasagna -->
                <div class="highlight-card">
                    <div class="highlight-image">
                        <img src="lasagna.jpg" alt="Lasagna">
                    </div>
                    <div class="highlight-content">
                        <h3>Lasagna Tradicional</h3>
                        <p>Rellena de carne, verduras, salsa bechamel y queso parmesano</p>
                        <div class="highlight-price">$360</div>
                    </div>
                </div>
                
                <!-- Destacado 3 - Vacío Uruguayo -->
                <div class="highlight-card">
                    <div class="highlight-image">
                        <img src="vacio.jpg" alt="Vacío Uruguayo">
                    </div>
                    <div class="highlight-content">
                        <h3>Vacío Uruguayo</h3>
                        <p>350grs de vacío al horno de leña con papas y ensalada</p>
                        <div class="highlight-price">$540</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Contacto Minimalista -->
    <section id="contacto" class="contact-section">
        <div class="container">
            <h2>Visít<span>anos</span></h2>
            <p>Estamos ubicados en San Mateo Acatitlán, Valle de Bravo. Reserva tu mesa o contáctanos para más información.</p>
            
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h4>Dirección</h4>
                        <p>San Mateo Acatitlan S/N Km 3, Valle de Bravo</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <h4>Teléfono</h4>
                        <p>726 101 2430</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p>hola@beniciocasadepan.com</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <h4>Horario</h4>
                        <p>Dom-Lun-Mar: 9am - 7pm<br>Mié-Sáb: 9am - 10pm</p>
                    </div>
                </div>
            </div>
            
            <a href="https://maps.app.goo.gl/example" class="btn" style="margin-top: 20px;">Ver en Mapa</a>
            
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </section>

    <!-- Footer Minimalista -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Benicio, Casa de Pan. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        // Navegación responsive
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        const navbar = document.querySelector('.navbar');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navLinks.classList.toggle('active');
        });

        // Cerrar menú al hacer clic en un enlace
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });

        // Cambiar navbar al hacer scroll
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Animación al cargar la página
        document.addEventListener('DOMContentLoaded', () => {
            // Asegurar que el video se reproduzca
            const heroVideo = document.querySelector('.hero-video');
            if (heroVideo) {
                heroVideo.play().catch(e => {
                    console.log("Autoplay prevented, showing fallback");
                    // Aquí podrías mostrar una imagen de fallback si el video no se reproduce
                });
            }
        });
    </script>
</body>
</html>