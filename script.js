document.addEventListener('DOMContentLoaded', function () {
    const sidebarBtn = document.querySelector('.sidebar-btn');
    const navMenu = document.querySelector('nav ul');

    sidebarBtn.addEventListener('click', function () {
      // Alternar la clase para mostrar u ocultar el menú
      navMenu.classList.toggle('show');
    });

    const navItems = document.querySelectorAll('.has-submenu');

    navItems.forEach(item => {
      const submenu = item.querySelector('.submenu');
      submenu.style.display = 'none'; // Ocultar submenús al cargar el DOM

      item.addEventListener('mouseover', function () {
        // Mostrar el submenu cuando pasas el mouse sobre la sección principal
        submenu.style.display = 'block';
      });

      item.addEventListener('mouseout', function () {
        // Ocultar el submenu cuando retiras el mouse de la sección principal
        submenu.style.display = 'none';
      });
    });
});
