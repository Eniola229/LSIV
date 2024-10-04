  // Get the mobile menu and buttons
  const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  const closeMenu = document.getElementById('close-menu');

  // Toggle mobile menu on button click
  mobileMenuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

  // Close the mobile menu
  closeMenu.addEventListener('click', () => {
    mobileMenu.classList.add('hidden');
  });

//Our client
  const container = document.getElementById('clients');
  let isHovered = false;

  // Pause on hover
  container.addEventListener('mouseover', () => {
    isHovered = true;
    container.style.animationPlayState = 'paused';
  });

  container.addEventListener('mouseout', () => {
    isHovered = false;
    container.style.animationPlayState = 'running';
  });