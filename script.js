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

// Sistema de pestañas del menú
const tabBtns = document.querySelectorAll('.tab-btn');
const menuCategories = document.querySelectorAll('.menu-category');

tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        // Remover clase active de todos los botones
        tabBtns.forEach(btn => btn.classList.remove('active'));
        // Añadir clase active al botón clickeado
        btn.classList.add('active');
        
        // Obtener la categoría a mostrar
        const category = btn.getAttribute('data-category');
        
        // Ocultar todas las categorías
        menuCategories.forEach(cat => cat.classList.remove('active'));
        // Mostrar la categoría seleccionada
        document.getElementById(category).classList.add('active');
    });
});

// Formulario de reserva
const reservaForm = document.getElementById('reservaForm');

reservaForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    // Aquí iría la lógica para enviar el formulario
    // Por ahora solo mostraremos una alerta
    alert('¡Gracias por tu reserva! Nos pondremos en contacto contigo para confirmar.');
    reservaForm.reset();
});

// Animación al hacer scroll
const animateOnScroll = () => {
    const elements = document.querySelectorAll('.about-image, .feature, .menu-item, .gallery-item, .testimonial');
    
    elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.3;
        
        if (elementPosition < screenPosition) {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }
    });
};

// Establecer opacidad inicial para los elementos a animar
document.querySelectorAll('.about-image, .feature, .menu-item, .gallery-item, .testimonial').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'all 0.6s ease';
});

window.addEventListener('scroll', animateOnScroll);
// Ejecutar una vez al cargar la página
window.addEventListener('load', animateOnScroll);