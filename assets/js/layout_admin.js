document.querySelectorAll('.menu-item > .menu-link.menu-toggle').forEach(item => {
    item.addEventListener('click', () => {
      const submenu = item.nextElementSibling;
      if (submenu && submenu.classList.contains('menu-sub')) {
        submenu.classList.toggle('show');
      }
    });
  });

