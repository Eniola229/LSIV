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
    // Swipe functionality using JavaScript
    const container = document.getElementById('card-container');
    
    let isDown = false;
    let startX;
    let scrollLeft;

    container.addEventListener('mousedown', (e) => {
      isDown = true;
      container.classList.add('active');
      startX = e.pageX - container.offsetLeft;
      scrollLeft = container.scrollLeft;
    });

    container.addEventListener('mouseleave', () => {
      isDown = false;
      container.classList.remove('active');
    });

    container.addEventListener('mouseup', () => {
      isDown = false;
      container.classList.remove('active');
    });

    container.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - container.offsetLeft;
      const walk = (x - startX) * 3; // scroll-fast
      container.scrollLeft = scrollLeft - walk;
    });

    