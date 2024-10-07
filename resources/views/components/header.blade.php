<header class="">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
        <span class="sr-only">LSIV</span>
        <img class="h-16 w-auto" src="{{ asset('Images/LSIV-Logo.png') }}" alt="LSIV LOGO">
      </a>
    </div>
    <div class="flex lg:hidden">
      <button id="mobile-menu-toggle" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <div class="relative group">
        <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" style="font-family: font-family: 'Open Sans', sans-serif;">
          About us
        </button>

        <!-- Dropdown menu -->
        <div class="absolute hidden group-hover:block mt-2 w-48 bg-white rounded-md shadow-lg">
          <ul class="py-1 text-sm text-gray-700">
            <li>
              <a href="{{ url('About-WhoWeAre') }}" class="block px-4 py-2 hover-effect-arrow" style="">Who we are <span class="hover-arrow">&rarr;</span></a>
            </li>
            <li>
              <a href="{{ url('About-OurJouney') }}" class="block px-4 py-2 hover-effect-arrow">Our Jouney<span class="hover-arrow">&rarr;</span></a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover-effect-arrow">Our Thematic areas<span class="hover-arrow">&rarr;</span></a>
            </li>
            <li>
               <a href="#" class="block px-4 py-2 hover-effect-arrow">About the Founder<span class="hover-arrow">&rarr;</span></a>
            </li>
          </ul>
        </div>
      </div>
     <div class="relative group inline-block">
      <a href="#" class="text-sm font-semibold leading-6 text-gray-900" style="font-family: font-family: 'Open Sans', sans-serif;">Work with us</a>

      <!-- Dropdown menu -->
      <div class="absolute hidden group-hover:block mt-2 w-40 bg-white rounded-md shadow-lg">
        <ul class="py-1 text-sm text-gray-700">
          <li>
            <a href="#" class="block px-4 py-2 hover-effect-arrow">Services<span class="hover-arrow">&rarr;</span></a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover-effect-arrow">How we work<span class="hover-arrow">&rarr;</span></a>
          </li>
        </ul>
      </div>
    </div>

      <a href="#" class="text-sm font-semibold leading-6 text-gray-900" style="font-family: font-family: 'Open Sans', sans-serif;">Out initiatives</a>
      <div class="relative group inline-block">
      <a href="#" class="text-sm font-semibold leading-6 text-gray-900" style="font-family: font-family: 'Open Sans', sans-serif;">Insights</a>

      <!-- Dropdown menu -->
      <div class="absolute hidden group-hover:block mt-2 w-52 bg-white rounded-md shadow-lg">
        <ul class="py-1 text-sm text-gray-700">
          <li>
            <a href="#" class="block px-4 py-2 hover-effect-arrow">Case studies<span class="hover-arrow">&rarr;</span></a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover-effect-arrow">Media & Knowledge Hub<span class="hover-arrow">&rarr;</span></a>
          </li>
        </ul>
      </div>
    </div>

    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="#" class="text-sm font-semibold leading-6 text-gray-900">
    <!-- Button HTML -->
    <button class="btn-bg-animation">
        <span class="btn-text">Contact us</span>
    </button>
      </a>
    </div>
  </nav>

  <!-- Mobile menu -->
  <div id="mobile-menu" class="lg:hidden hidden" role="dialog" aria-modal="true">
    <div class="fixed inset-0 z-10"></div>
    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">LSIV</span>
          <img class="h-8 w-auto" src="{{ asset('Images/LSIV-Logo.png') }}" alt="LSIV LOGO">
        </a>
        <button id="close-menu" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Close menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6">
            <!-- About us with dropdown -->
            <div class="-mx-3">
              <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-bold leading-7 text-gray-900 hover:bg-gray-50" aria-controls="about-dropdown" aria-expanded="false" onclick="toggleDropdown('about-dropdown')">
                About us
                <svg class="h-5 w-5 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div id="about-dropdown" class="dropdown-content pl-6">
              <a href="{{ url('About-WhoWeAre') }}" class="block px-4 py-2 hover-effect-arrow">Who we are <span class="hover-arrow">&rarr;</span></a>
              <a href="{{ url('About-OurJouney') }}" class="block px-4 py-2 hover-effect-arrow">Our Jouney<span class="hover-arrow">&rarr;</span></a>
              <a href="#" class="block px-4 py-2 hover-effect-arrow">Our Thematic areas<span class="hover-arrow">&rarr;</span></a>
              <a href="#" class="block px-4 py-2 hover-effect-arrow">About the Founder<span class="hover-arrow">&rarr;</span></a>
              </div>
            </div>

            <!-- Work with us -->
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-bold leading-7 text-gray-900 hover:bg-gray-50"></a>
            <div class="-mx-3">
              <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-bold leading-7 text-gray-900 hover:bg-gray-50" aria-controls="insights-dropdown" aria-expanded="false" onclick="toggleDropdown('work-dropdown')">
                Work with us
                <svg class="h-5 w-5 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div id="insights-dropdown" class="dropdown-content pl-6">
              <a href="#" class="block px-4 py-2 hover-effect-arrow">Services<span class="hover-arrow">&rarr;</span></a>
              <a href="#" class="block px-4 py-2 hover-effect-arrow">How we work<span class="hover-arrow">&rarr;</span></a>
              </div>
            </div>

            <!-- Insights with dropdown -->
            <div class="-mx-3">
              <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-bold leading-7 text-gray-900 hover:bg-gray-50" aria-controls="insights-dropdown" aria-expanded="false" onclick="toggleDropdown('insights-dropdown')">
                Insights
                <svg class="h-5 w-5 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div id="insights-dropdown" class="dropdown-content pl-6">
                <a href="#" class="block px-4 py-2 hover-effect-arrow">Case studies<span class="hover-arrow">&rarr;</span></a>
              <a href="#" class="block px-4 py-2 hover-effect-arrow">Media & Knowledge Hub<span class="hover-arrow">&rarr;</span></a>
              </div>
            </div>

            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-bold leading-7 text-gray-900 hover:bg-gray-50">Our initiatives</a>
          </div>
          <div class="py-6">
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">
              <button class="btn-bg-animation">
                <span class="btn-text">Contact us</span>
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>