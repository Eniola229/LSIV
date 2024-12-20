<header class="">
<nav class="mx-auto flex max-w-7xl items-center justify-between p-4 lg:px-8" aria-label="Global">
  <div class="flex lg:flex-1">
    <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
      <span class="sr-only">LSIV</span>
      <img class="md:h-16 h-12 w-auto" src="https://res.cloudinary.com/dww7q9k1e/image/upload/v1734349188/LSIV_Logo-13_df4e3b.png" alt="LSIV LOGO" />
    </a>
  </div>

<div class="flex lg:hidden">
  <button id="mobile-menu-toggle" type="button" class="-m-2.5 inline-flex items-center justify-center bg-white rounded-full p-2.5 text-gray-700">
    <span class="sr-only">Open main menu</span>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
      <path d="M13 16H3C2.73478 16 2.48043 16.1054 2.29289 16.2929C2.10536 16.4804 2 16.7348 2 17C2 17.2652 2.10536 17.5196 2.29289 17.7071C2.48043 17.8946 2.73478 18 3 18H13C13.2652 18 13.5196 17.8946 13.7071 17.7071C13.8946 17.5196 14 17.2652 14 17C14 16.7348 13.8946 16.4804 13.7071 16.2929C13.5196 16.1054 13.2652 16 13 16ZM3 8H21C21.2652 8 21.5196 7.89464 21.7071 7.70711C21.8946 7.51957 22 7.26522 22 7C22 6.73478 21.8946 6.48043 21.7071 6.29289C21.5196 6.10536 21.2652 6 21 6H3C2.73478 6 2.48043 6.10536 2.29289 6.29289C2.10536 6.48043 2 6.73478 2 7C2 7.26522 2.10536 7.51957 2.29289 7.70711C2.48043 7.89464 2.73478 8 3 8ZM21 11H3C2.73478 11 2.48043 11.1054 2.29289 11.2929C2.10536 11.4804 2 11.7348 2 12C2 12.2652 2.10536 12.5196 2.29289 12.7071C2.48043 12.8946 2.73478 13 3 13H21C21.2652 13 21.5196 12.8946 21.7071 12.7071C21.8946 12.5196 22 12.2652 22 12C22 11.7348 21.8946 11.4804 21.7071 11.2929C21.5196 11.1054 21.2652 11 21 11Z" fill="#E76A35"/>
    </svg>
  </button>
</div>

  <div class="hidden lg:flex lg:gap-x-12">
    <!-- About Us Dropdown -->
    <div class="relative">
      <button
        type="button"
        class="flex items-center gap-x-1 font-[600] leading-6 text-[16px] font-opensans"
        onmouseenter="showDropdown('aboutDropdown')"
        onmouseleave="scheduleHideDropdown('aboutDropdown')"
      >
        About us
      </button>

      <div
        id="aboutDropdown"
        class="absolute hidden mt-2 px-4 w-60 bg-white rounded-md shadow-lg"
        style="border-radius: 20px;"
        onmouseenter="showDropdown('aboutDropdown')"
        onmouseleave="scheduleHideDropdown('aboutDropdown')"
      >
        <ul class="py-1 text-sm text-gray-700 font-opensans">
          <li><a href="{{ url('About-WhoWeAre') }}" class="block font-[600] leading-6 text-[16px] px-4 py-2 hover-effect-arrow font-opensans font-[600]">Who we are <span class="hover-arrow">&rarr;</span></a></li>
          <li><a href="{{ url('About-OurJouney') }}" class="block font-[600] leading-6 text-[16px] px-4 py-2 hover-effect-arrow font-opensans">Our Journey <span class="hover-arrow">&rarr;</span></a></li>
          <li><a href="{{ url('About-Thematics') }}" class="block font-[600] leading-6 text-[16px] px-4 py-2 hover-effect-arrow font-opensans">Our Thematic areas <span class="hover-arrow">&rarr;</span></a></li>
          <li><a href="{{ url('About-Founder') }}" class="block font-[600] leading-6 text-[16px] px-4 py-2 hover-effect-arrow font-opensans">About the Founder <span class="hover-arrow">&rarr;</span></a></li>
        </ul>
      </div>
    </div>

    <!-- Work with Us Dropdown -->
    <div class="relative">
      <button
        type="button"
        class="flex items-center gap-x-1 font-[600] leading-6 text-[16px] font-opensans"
        onmouseenter="showDropdown('workDropdown')"
        onmouseleave="scheduleHideDropdown('workDropdown')"
      >
        Work with us
      </button>

      <div
        id="workDropdown"
        class="absolute hidden mt-2 w-60 px-4 bg-white rounded-md shadow-lg"
        style="border-radius: 20px;"
        onmouseenter="showDropdown('workDropdown')"
        onmouseleave="scheduleHideDropdown('workDropdown')"
      >
        <ul class="py-1 text-gray-700 font-opensans">
          <li><a href="{{ url('Work-Services') }}" class="block font-[600] leading-6 text-[16px] px-4 py-2 hover-effect-arrow font-opensans">Services <span class="hover-arrow">&rarr;</span></a></li>
          <li><a href="{{ url('Work-Work') }}" class="block font-[600] leading-6 text-[16px] px-4 py-2 hover-effect-arrow font-opensans">How we work <span class="hover-arrow">&rarr;</span></a></li>
        </ul>
      </div>
    </div>

      <a
        href="{{ url('Initiatives-Initiatives') }}"
        class="text-[16px] font-[600] leading-6 text-gray-900 font-opensans hover:text-orange-600"
         >Our initiatives</a>
    <!-- Insights Dropdown -->
    <div class="relative">
      <button
        type="button"
        class="flex items-center gap-x-1 font-[600] leading-6 text-[16px] font-opensans"
        onmouseenter="showDropdown('insightsDropdown')"
        onmouseleave="scheduleHideDropdown('insightsDropdown')"
      >
        Insights
      </button>

      <div
        id="insightsDropdown"
        class="absolute hidden mt-2 px-4 w-60 bg-white rounded-md shadow-lg"
        style="border-radius: 20px;"
        onmouseenter="showDropdown('insightsDropdown')"
        onmouseleave="scheduleHideDropdown('insightsDropdown')"
      >
        <ul class="py-1 text-gray-700 font-opensans">
          <li><a href="{{ url('Insights-Case') }}" class="block font-[600] leading-6 text-[16px] px-4 py-2 hover-effect-arrow font-opensans">Case studies <span class="hover-arrow">&rarr;</span></a></li>
          <li><a href="{{ url('Insights-Media') }}" class="block font-[600] leading-6 text-[16px] px-4 py-2 hover-effect-arrow font-opensans">Media & Knowledge Hub <span class="hover-arrow">&rarr;</span></a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="hidden lg:flex lg:flex-1 lg:justify-end">
    <a href="#" class="flex items-center gap-x-1 font-[600] leading-6 text-[16px] font-opensans">
    <button class="btn-bg-animation hover-effect-arrow" onclick="window.location.href='mailto:info@lsiv.org';">
    <span class="btn-text font-opensans">Contact us <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
</button>
    </a> 
  </div>
</nav>


  <!-- Mobile Menu -->
<!-- Mobile Menu -->
<div id="mobile-menu" class="fixed inset-0 z-50 bg-white transform -translate-x-full transition-transform duration-2000 ease-in-out lg:hidden">
  <div class="fixed inset-0 z-10 bg-black opacity-50"></div>
  <div class="fixed inset-0 z-20 w-full bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
    <div class="flex items-center justify-between mb-16">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">LSIV</span>
        <img class="h-12 w-auto" src="https://res.cloudinary.com/dww7q9k1e/image/upload/v1734349188/LSIV_Logo-13_df4e3b.png" alt="LSIV LOGO"/>
      </a>
      <button id="close-menu" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 flex">
        <span class="sr-only">Close menu</span>
        <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>
    <div class="mt-6 flow-root">
      <div class="-my-6 divide-y divide-gray-700">
        <!-- About Us Dropdown -->
        <div class="-mx-3 mb-3">
          <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-[400] leading-7 text-gray-900 hover:bg-gray-50 font-opensans dropdown" aria-controls="about-dropdown" aria-expanded="false" onclick="toggleDropdown('about-dropdown')" style="font-size: 20px;">
            About Us
            <svg class="h-5 w-5 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div id="about-dropdown" class="dropdown-content pl-6 font-opensans hidden">
            <a href="{{ url('About-WhoWeAre') }}" class="block px-4 py-2 hover-effect-arrow font-opensans font-bold">Who we are <span class="hover-arrow">&rarr;</span></a>
            <a href="{{ url('About-OurJouney') }}" class="block px-4 py-2 hover-effect-arrow font-opensans font-bold">Our Journey <span class="hover-arrow">&rarr;</span></a>
            <a href="{{ url('About-Thematics') }}" class="block px-4 py-2 hover-effect-arrow font-bold font-opensans">Our Thematic Areas <span class="hover-arrow">&rarr;</span></a>
            <a href="{{ url('About-Founder') }}" class="block px-4 py-2 hover-effect-arrow font-bold font-opensans">About the Founder <span class="hover-arrow">&rarr;</span></a>
          </div>
        </div>

        <!-- Work with Us Dropdown -->
        <div class="-mx-3 border-b-[1px] border-gray-900 mb-3">
          <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-[400] leading-7 text-gray-900 hover:bg-gray-50 font-opensans" aria-controls="work-dropdown" aria-expanded="false" onclick="toggleDropdown('work-dropdown')" style="font-size: 20px;">
            Work with Us
            <svg class="h-5 w-5 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div id="work-dropdown" class="dropdown-content pl-6 font-opensans hidden">
            <a href="{{ url('Work-Services') }}" class="block px-4 py-2 hover-effect-arrow font-bold font-opensans">Services <span class="hover-arrow">&rarr;</span></a>
            <a href="{{ url('Work-Work') }}" class="block px-4 py-2 hover-effect-arrow font-bold font-opensans">How we work <span class="hover-arrow">&rarr;</span></a>
          </div>
        </div>

        <!-- Our Initiatives Dropdown -->
        <div class="-mx-3 border-b-[1px] border-gray-900 mb-3">
          <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-[400] leading-7 text-gray-900 hover:bg-gray-50 font-opensans " aria-controls="Initiatives-dropdown" aria-expanded="false" onclick="toggleDropdown('Initiatives-dropdown')" style="font-size: 20px;">
            Our Initiatives
            <svg class="h-5 w-5 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div id="Initiatives-dropdown" class="dropdown-content pl-6 font-opensans hidden">
            <a href="{{ url('Initiatives-MyBodyIsMine') }}" class="block px-4 py-2 hover-effect-arrow font-bold font-opensans">MyBodyIsMine</a>
            <a href="{{ url('Initiatives-AdoptCommunity') }}" class="block px-4 py-2 hover-effect-arrow font-bold font-opensans">Adopt a Community</a>
            <a href="{{ url('Initiatives-Nodaysoff') }}" class="block px-4 py-2 hover-effect-arrow font-bold font-opensans">No Day Off</a>
            <a href="{{ url('Initiatives-Conversation') }}" class="block px-4 py-2 hover-effect-arrow font-bold font-opensans">The Conversation</a>
            <a href="{{ url('Initiatives-Storiesunhear') }}" class="block px-4 py-2 hover-effect-arrow font-bold font-opensans">Stories Untold</a>
            <a href="{{ url('Initiatives-Lolocythia') }}" class="block px-4 py-2 hover-effect-arrow font-bold font-opensans">The Lolo Cynthia Show</a>
          </div>
        </div>

        <!-- Insights Dropdown -->
        <div class="-mx-3 border-b-[1px] border-gray-900 mb-3">
          <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-[400] leading-7 text-gray-900 hover:bg-gray-50 font-opensans" aria-controls="insights-dropdown" aria-expanded="false" onclick="toggleDropdown('insights-dropdown')" style="font-size: 20px;">
            Insights
            <svg class="h-5 w-5 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <div id="insights-dropdown" class="dropdown-content pl-6 font-opensans hidden">
            <a href="{{ url('Insights-Case') }}" class="block px-4 py-2 hover-effect-arrow font-bold font-opensans">Case Studies <span class="hover-arrow">&rarr;</span></a>
            <a href="#" class="block px-4 py-2 hover-effect-arrow font-bold font-opensans">Media & Knowledge Hub <span class="hover-arrow">&rarr;</span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Full-screen width button at the bottom -->
<div class="fixed bottom-0 left-0 right-0 flex justify-center mb-6">
  <a href="#contact-us" class="w-[328px] px-8 py-3 text-center bg-[#E76A35] text-white font-semibold hover:bg-orange-600 rounded-full">
    Contact Us
  </a>
</div>

  </div>
</div>

</header>

<!-- JavaScript to Toggle the Mobile Menu -->
<script>
    // Function to show a dropdown menu
  function showDropdown(dropdownId) {
    const dropdown = document.getElementById(dropdownId);
    if (dropdown) {
      dropdown.classList.remove('hidden');
    }
  }

  // Function to hide a dropdown menu
  function hideDropdown(dropdownId) {
    const dropdown = document.getElementById(dropdownId);
    if (dropdown) {
      dropdown.classList.add('hidden');
    }
  }

  // Schedule hiding a dropdown with a small delay to avoid flickering
  let hideTimeout;
  function scheduleHideDropdown(dropdownId) {
    hideTimeout = setTimeout(() => {
      hideDropdown(dropdownId);
    }, 200);
  }

  // Clear the hide timeout if mouse re-enters the dropdown
  function clearHideTimeout() {
    clearTimeout(hideTimeout);
  }

  // Add event listeners for all dropdowns
  document.querySelectorAll('[id$="Dropdown"]').forEach((dropdown) => {
    dropdown.addEventListener('mouseenter', clearHideTimeout);
    dropdown.addEventListener('mouseleave', (event) => {
      scheduleHideDropdown(event.target.id);
    });
  });

  const menu = document.getElementById("mobile-menu");
  const openButton = document.getElementById("mobile-menu-toggle");
  const closeButton = document.getElementById("close-menu");

  openButton.addEventListener("click", function() {
    menu.classList.remove("-translate-x-full");  // Slide the menu in
    menu.classList.add("translate-x-0");         // Ensure it's fully visible
  });

  closeButton.addEventListener("click", function() {
     menu.classList.remove("translate-x-0");  
    menu.classList.add("-translate-x-full");     // Slide the menu out
  });

  // Function to toggle dropdown visibility
  function toggleDropdown(id) {
    const dropdown = document.getElementById(id);
    dropdown.classList.toggle("hidden");
  }
</script>