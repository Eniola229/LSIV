  // Toggle dropdown visibility
  function toggleDropdown(id) {
    const dropdown = document.getElementById(id);
    dropdown.classList.toggle('show'); // Toggle the show class
  }

  // Toggle mobile menu visibility
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
  const closeMenu = document.getElementById('close-menu');

  mobileMenuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden'); // Toggle the mobile menu visibility
  });

  closeMenu.addEventListener('click', () => {
    mobileMenu.classList.add('hidden'); // Close the mobile menu
  });
