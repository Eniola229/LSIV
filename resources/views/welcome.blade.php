<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSIV - Designing Campaigns For a Better Tomorrow</title>
    <link rel="stylesheet" href="style.css" />
    <script src="./app.js" defer></script>
  </head>
   @vite('resources/css/app.css')
   @vite('resources/js/app.js')
  <body>
    <header class="bg-miscellanous">
      <nav
        class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8"
        aria-label="Global"
      >
        <div class="flex lg:flex-1">
          <!-- <a href="{{ route('home') }}" class="-m-1.5 p-1.5"> -->
          <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
            <span class="sr-only">LSIV</span>
            <img
              class="h-16 w-auto"
              src="{{ asset('Images/LSIV-Logo.png') }}"
              alt="LSIV LOGO"
            />
          </a>
        </div>
        <div class="flex lg:hidden">
          <button
            id="mobile-menu-toggle"
            type="button"
            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
          >
            <span class="sr-only">Open main menu</span>
            <svg
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              aria-hidden="true"
              data-slot="icon"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
              />
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
        <div class="relative group inline-block">
          <button
              type="button"
              class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900 font-opensans"
            >
              About us
            </button>

            <!-- Dropdown menu -->
            <div
          class="absolute hidden group-hover:block mt-0 w-48 bg-white rounded-md shadow-lg z-10"
         >
              <ul class="py-1 text-sm text-gray-700">
                <li>
                  <!-- href="{{ url('About-WhoWeAre') }}" -->
                  <a
                    href="{{ url('About-WhoWeAre') }}"
                    class="block px-4 py-2 hover-effect-arrow"
                    >Who we are <span class="hover-arrow">&rarr;</span></a
                  >
                </li>
                <li>
                  <!-- href="{{ url('About-OurJouney') }}" -->
                  <a
                    href="{{ url('About-OurJouney') }}"
                    class="block px-4 py-2 hover-effect-arrow"
                    >Our Jouney<span class="hover-arrow">&rarr;</span></a
                  >
                </li>
                <li>
                  <a
                    href="{{ url('About-Thematics') }}"
                    class="block px-4 py-2 hover-effect-arrow"
                    >Our Thematic areas<span class="hover-arrow"
                      >&rarr;</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    href="{{ url('About-Founder') }}"
                    class="block px-4 py-2 hover-effect-arrow"
                    >About the Founder<span class="hover-arrow">&rarr;</span></a
                  >
                </li>
              </ul>
            </div>
          </div>
<div class="relative group inline-block">
  <button
    class="text-sm font-semibold leading-6 text-gray-900 font-opensans"
    type="button"
    >Work with us</button
  >

  <!-- Dropdown menu -->
  <div
    class="absolute hidden group-hover:block mt-0 w-40 bg-white rounded-md shadow-lg z-10"
  >
    <ul class="py-1 text-sm text-gray-700">
      <li>
        <a
          href="{{ url('Work-Services') }}"
          class="block px-4 py-2 hover-effect-arrow"
          >Services<span class="hover-arrow">&rarr;</span></a
        >
      </li>
      <li>
        <a
          href="{{ url('Work-Work') }}"
          class="block px-4 py-2 hover-effect-arrow"
          >How we work<span class="hover-arrow">&rarr;</span></a
        >
      </li>
    </ul>
  </div>
</div>


          <a
            href="{{ url('Initiatives-Initiatives') }}"
            class="text-sm font-semibold leading-6 text-gray-900 font-opensans"
            >Our initiatives</a
          >
          <div class="relative group inline-block">
            <a
              href="#"
              class="text-sm font-semibold leading-6 text-gray-900 font-opensans"
              >Insights</a
            >

            <!-- Dropdown menu -->
            <div
              class="absolute hidden group-hover:block mt-2 w-52 bg-white rounded-md shadow-lg"
            >
              <ul class="py-1 text-sm text-gray-700">
                <li>
                  <a
                    href="{{ url('Insights-Caee') }}"
                    class="block px-4 py-2 hover-effect-arrow"
                    >Case studies<span class="hover-arrow">&rarr;</span></a
                  >
                </li>
                <li>
                  <a href="{{ url('Insights-Media') }}" class="block px-4 py-2 hover-effect-arrow"
                    >Media & Knowledge Hub<span class="hover-arrow"
                      >&rarr;</span
                    ></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <a
            href="#"
            class="text-sm font-semibold leading-6 text-gray-900 font-opensans"
          >
            <!-- Button HTML -->
            <button class="btn-bg-animation">
              <span class="btn-text">Contact us</span>
            </button>
          </a>
        </div>
      </nav>

      <!-- Mobile menu -->
      <div
        id="mobile-menu"
        class="lg:hidden hidden"
        role="dialog"
        aria-modal="true"
      >
        <div class="fixed inset-0 z-10"></div>
        <div
          class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
        >
          <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">LSIV</span>
              <img
                class="h-8 w-auto"
                src="{{ asset('Images/LSIV-Logo.png') }}"
                alt="LSIV LOGO"
              />
            </a>
            <button
              id="close-menu"
              type="button"
              class="-m-2.5 rounded-md p-2.5 text-gray-700"
            >
              <span class="sr-only">Close menu</span>
              <svg
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M6 18 18 6M6 6l12 12"
                />
              </svg>
            </button>
          </div>
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
              <div class="space-y-2 py-6">
                <!-- About us with dropdown -->
                <div class="-mx-3">
                  <button
                    type="button"
                    class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-bold leading-7 text-gray-900 hover:bg-gray-50"
                    aria-controls="about-dropdown"
                    aria-expanded="false"
                    onclick="toggleDropdown('about-dropdown')"
                  >
                    About us
                    <svg
                      class="h-5 w-5 flex-none"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="1.5"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </button>
                  <div id="about-dropdown" class="dropdown-content pl-6">
                    <a
                      href="{{ url('About-WhoWeAre') }}"
                      class="block px-4 py-2 hover-effect-arrow"
                      >Who we are <span class="hover-arrow">&rarr;</span></a
                    >
                    <a
                      href="{{ url('About-OurJouney') }}"
                      class="block px-4 py-2 hover-effect-arrow"
                      >Our Jouney<span class="hover-arrow">&rarr;</span></a
                    >
                    <a href="{{ url('About-Thematics') }}" class="block px-4 py-2 hover-effect-arrow"
                      >Our Thematic areas<span class="hover-arrow"
                        >&rarr;</span
                      ></a
                    >
                    <a href="{{ url('About-Founder') }}" class="block px-4 py-2 hover-effect-arrow"
                      >About the Founder<span class="hover-arrow"
                        >&rarr;</span
                      ></a
                    >
                  </div>
                </div>

                <!-- Work with us -->
                <a
                  href="#"
                  class="-mx-3 block rounded-lg px-3 py-2 text-base font-bold leading-7 text-gray-900 hover:bg-gray-50"
                ></a>
                <div class="-mx-3">
                  <button
                    type="button"
                    class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-bold leading-7 text-gray-900 hover:bg-gray-50"
                    aria-controls="insights-dropdown"
                    aria-expanded="false"
                    onclick="toggleDropdown('insights-dropdown')"
                  >
                    Work with us
                    <svg
                      class="h-5 w-5 flex-none"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="1.5"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </button>
                  <div id="insights-dropdown" class="dropdown-content pl-6">
                    <a href="{{ url('Work-Services') }}" class="block px-4 py-2 hover-effect-arrow"
                      >Services<span class="hover-arrow">&rarr;</span></a
                    >
                    <a href="{{ url('Work-Work') }}" class="block px-4 py-2 hover-effect-arrow"
                      >How we work<span class="hover-arrow">&rarr;</span></a
                    >
                  </div>
                </div>

                <!-- Insights with dropdown -->
                <div class="-mx-3">
                  <button
                    type="button"
                    class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-bold leading-7 text-gray-900 hover:bg-gray-50"
                    aria-controls="insights-dropdown"
                    aria-expanded="false"
                    onclick="toggleDropdown('insights-dropdown')"
                  >
                    Insights
                    <svg
                      class="h-5 w-5 flex-none"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="1.5"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </button>
                  <div id="insights-dropdown" class="dropdown-content pl-6">
                    <a href="{{ url('Insights-Case') }}" class="block px-4 py-2 hover-effect-arrow"
                      >Case studies<span class="hover-arrow">&rarr;</span></a
                    >
                    <a href="{{ url('Insights-Media') }}" class="block px-4 py-2 hover-effect-arrow"
                      >Media & Knowledge Hub<span class="hover-arrow"
                        >&rarr;</span
                      ></a
                    >
                  </div>
                </div>

                <a
                  href="{{ url('Initiatives-Initiatives') }}"
                  class="-mx-3 block rounded-lg px-3 py-2 text-base font-bold leading-7 text-gray-900 hover:bg-gray-50"
                  >Our initiatives</a
                >
              </div>
              <div class="py-6">
                <a
                  href="#"
                  class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                >
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

    <!-- MAIN -->
    <main>
      <!----First section--->
      <section class="bg-miscellanous">
        <div
          class="flex mx-auto max-w-7xl p-4 lg:px-6 flex-col md:flex-row justify-center md:justify-between items-center w-full px-6 py-16 relative"
        >
          <!-- Left Section: Heading and Subtext -->
          <div class="w-lg">
            <h1
              class="text-7xl text-accentTextDark font-playfair font-semibold"
            >
              Designing <span class="text-primary">Campaigns</span> <br />
              For a Better <span class="text-primary">Tomorrow</span>
            </h1>
            <p class="mt-4 text-gray-700 md:w-9/12 text-xl">
              We craft compelling advocacy, multimedia, and community campaigns
              for organizations committed to social impact and lasting change.
            </p>
          </div>

          <a id="scrollLink">
            <div class="flex relative items-center justify-center">
              <!-- Container for the circular text and button -->
              <div class="relative flex items-center justify-center w-64 h-64">
                <!-- Outer Circular Text -->
                <svg
                  class="absolute inset-0 w-full h-full animate-rotate"
                  viewBox="0 0 200 200"
                >
                  <defs>
                    <!-- Define a circular path -->
                    <path
                      id="circlePath"
                      d="M 100, 100 m-80, 0 a 80,80 0 1,1 160,0 a 80,80 0 1,1 -160,0"
                    />
                  </defs>
                  <!-- Position text along the path -->
                  <text
                    class="text-base uppercase tracking-widest text-2xl"
                    fill="black"
                    aria-label="View Our Services"
                  >
                    <textPath href="#circlePath" startOffset="0%">
                      View Our Services View Our Services View Our Services
                    </textPath>
                  </text>
                </svg>

                <!-- Inner Circle with Down Arrow -->
                <div
                  class="w-44 cursor-pointer h-44 orange-circle relative text-8xl bg-[#E76A35] rounded-full flex items-center justify-center text-white"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="180"
                    height="180"
                    viewBox="0 0 180 180"
                    fill="none"
                    class="original-arrow relative z-10"
                  >
                    <g clip-path="url(#clip0_436_1329)">
                      <rect
                        width="180"
                        height="180"
                        rx="90"
                        transform="matrix(1 0 0 -1 0 180)"
                        fill="#E76A35"
                      />
                      <path
                        d="M93.1839 142.473C91.6218 144.035 89.0891 144.035 87.527 142.473L62.0712 117.017C60.5091 115.455 60.5091 112.922 62.0712 111.36C63.6333 109.798 66.166 109.798 67.7281 111.36L90.3555 133.988L112.983 111.36C114.545 109.798 117.078 109.798 118.64 111.36C120.202 112.922 120.202 115.455 118.64 117.017L93.1839 142.473ZM94.3555 39.6445V139.645H86.3555V39.6445H94.3555Z"
                        fill="white"
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0_436_1329">
                        <rect
                          width="180"
                          height="180"
                          rx="90"
                          transform="matrix(1 0 0 -1 0 180)"
                          fill="white"
                        />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
              </div>
            </div>
          </a>
        </div>
      </section>

      <!-- Driving Social Justice Section -->
      <section class="bg-white py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-row items-center justify-between">
            <!-- Image Section -->
            <div class="mb-8 lg:mb-0 lg:w-1/3 text-xl">
              <h2
                class="text-6xl font-medium font-playfair text-gray-900 text-left md:text-left mb-16"
              >
                Driving Social Justice
              </h2>
              <div class="flex justify-center md:justify-start">
                <img
                  src="{{ asset('Images/Lolo-Social-Impact-Venture.png') }}"
                  alt="Social Justice Image"
                  class="w-80 h-auto"
                />
              </div>
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 lg:pl-10">
              <p
                class="text-accentTextDark font-normal leading-[2.1675rem] mb-6 text-xl"
              >
                LSIV is a strategic advocacy and communications agency dedicated to creating a more equitable world. Our approach combines the energy of grassroots activism with the strategic expertise of high-level advocacy to ensure that our communication efforts are practical and grounded in real-world experiences.
              </p>
              <p
                class="text-accentTextDark font-normal leading-[2.1675rem] mb-6 text-xl"
              >
               We empower organizations to achieve social change goals through innovative solutions, compelling storytelling, and community-focused initiatives.
                By integrating education, advocacy, and storytelling, we help our clients convey their impact in inspiring ways.
              </p>
              <p
                class="text-accentTextDark font-normal leading-[2.1675rem] mb-6 text-xl"
              >
              So, whether you're a nonprofit seeking to expand your reach, a corporation aiming to enhance its social responsibility, or a government agency striving for positive impact, LSIV is your partner in building a better future. Let's create lasting change together.
              </p>
             
              <a
                href="#"
                class="hover-text-underline font-opensans leading-[2.5rem] font-bold text-xl"
                >Learn more about us</a
              >
            </div>
          </div>
        </div>
      </section>

      <!-- What Makes Us Unique Section -->
      <section class="py-16 bg-secondary">
        <div class="container mx-auto text-left md:text-center">
          <h2
            class="text-6xl text-accentTextDark p-2 font-playfair font-semibold"
          >
            What Makes Us Unique?
          </h2>
          <p
            class="text-lg md:text-xl text-black-500-700 w-11/12 md:w-3/5 mx-auto leading-relaxed"
            style="font-weight: 400"
          >
            Unlike traditional communications agencies, our team possesses
            in-depth knowledge of the subject matters we advocate for, allowing
            us to develop more targeted and impactful campaigns.
          </p>
          <div class="flex justify-center items-center mt-4">
            <svg
              width="355"
              height="31"
              viewBox="0 0 355 31"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M267.641 0.124115C217.731 0.476525 203.461 0.705776 175.769 1.60067C147.071 2.52807 126.534 3.45769 93.9474 5.30432C86.3932 5.73241 78.3045 6.13868 68.822 6.56617C33.9884 8.13651 27.21 8.55495 15.9492 9.82956C10.3698 10.4612 5.54465 10.8984 2.84027 11.0175C0.435873 11.1233 0 11.1899 0 11.4515C0 11.6827 3.84551 11.8853 5.94884 11.7648C6.7026 11.7217 8.74476 11.6162 10.4872 11.5306C12.2296 11.4449 16.0639 11.2147 19.008 11.0191C25.9406 10.5584 29.2692 10.4131 41.1839 10.0512C61.2138 9.44287 76.3447 8.85824 94.9306 7.97462C101.78 7.64892 110.874 7.21654 115.14 7.0137C147.494 5.47511 187.014 4.10316 211.163 3.68041C240.469 3.16715 331.445 2.7134 329.908 3.08792C329.3 3.23645 318.889 4.34116 312.648 4.91956C306.916 5.45092 297.338 6.21732 285.557 7.08744C279.969 7.50024 272.3 8.07152 268.515 8.35701C254.295 9.42967 249.611 9.76234 241.532 10.2741C204.313 12.6315 179.728 14.6857 145.509 18.297C125.17 20.4436 108.498 22.9078 89.8937 26.5178C79.3161 28.5702 78.2855 28.9348 79.3266 30.2561C80.0041 31.1159 85.3412 31.2273 96.1058 30.6063C115.778 29.4716 134.265 28.5916 152.173 27.9372C163.406 27.5268 164.894 27.4579 176.315 26.8208C180.581 26.5829 187.955 26.2351 192.702 26.0481L201.332 25.7082L189.861 25.5742C172.48 25.3711 153.835 25.3834 147.694 25.6021C127.365 26.3262 116.307 26.8835 98.2461 28.0942C93.9411 28.3828 90.3093 28.5941 90.1751 28.5638C88.8817 28.2709 117.832 23.8452 131.643 22.2246C162.82 18.5659 194.925 15.8361 244.263 12.6485C248.77 12.3574 257.815 11.7206 264.364 11.2334C270.913 10.7461 281.236 9.97898 287.304 9.52834C310.661 7.79419 317.62 7.14828 340.068 4.63096C354.445 3.01862 354.522 3.00483 354.913 1.94448C355.344 0.778634 354.193 0.249652 350.893 0.0984491C347.758 -0.0453342 289.07 -0.0272354 267.641 0.124115ZM202.263 25.5905C202.535 25.626 202.928 25.6247 203.137 25.5876C203.346 25.5505 203.123 25.5214 202.642 25.523C202.162 25.5246 201.991 25.5551 202.263 25.5905Z"
                fill="#E76A35"
              />
            </svg>
          </div>
        </div>
      </section>
      <!-- OUR THEMATIC AREAS -->
      <section class="bg-white py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="container mx-auto text-left md:text-center">
            <h2
              class="text-6xl text-accentTextDark p-2 font-playfair font-semibold"
            >
              OUR THEMATIC AREAS
            </h2>
            <p
              class="text-lg md:text-xl text-black-500-700 w-4/5 mx-auto leading-relaxed text-accentTextDark"
              style="font-weight: 400"
            >
              Our organization is dedicated to advancing the United Nations
              Sustainable Development Goals (SDGs) and working with our partners
              to tackle pressing global issues that affect communities
              worldwide. We aim to turn challenges into opportunities,
              promoting:
            </p>
          </div>
          <!-- thematics grids -->
          <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 my-8 thematic-area"
          >
            <!-- Card 1 -->
            <div
              class="bg-gray-100 rounded-lg overflow-hidden h-72 flex flex-col justify-end"
              style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('Images/gender.jpeg') }}'); background-size: cover; background-position: center;"
            >
              <div class="p-4 bg-opacity-70">
                <h3 class="text-xl text-white text-left">
                  Gender Equality & Empowerment
                </h3>
              </div>
            </div>

            <!-- Card 2 -->
            <div
              class="bg-gray-100 rounded-lg overflow-hidden h-72 flex flex-col justify-end"
             style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('Images/health.jpeg') }}'); background-size: cover; background-position: center;">
              <div class="p-4 bg-opacity-70">
                <h3 class="text-xl text-white text-left">
                  Health and Well-Being
                </h3>
              </div>
            </div>

            <!-- Card 3 -->
            <div
              class="bg-gray-100 rounded-lg overflow-hidden h-72 flex flex-col justify-end"
             style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('Images/social.jpeg') }}'); background-size: cover; background-position: center;"
             >
              <div class="p-4 bg-opacity-70">
                <h3 class="text-xl text-white text-left">
                  Social Development & Education
                </h3>
              </div>
            </div>

            <!-- Card 4 -->
            <div
              class="bg-gray-100 rounded-lg overflow-hidden h-72 flex flex-col justify-end"
            style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('Images/sustainable.jpeg') }}'); background-size: cover; background-position: center;">
              <div class="p-4 bg-opacity-70">
                <h3 class="text-xl text-white text-left">
                  Sustainable Livelihoods & Poverty Alleviation
                </h3>
              </div>
            </div>

            <!-- Card 5 -->
            <div
              class="bg-gray-100 rounded-lg overflow-hidden h-72 flex flex-col justify-end"
            style=" background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('Images/climate.jpeg') }}');  background-size: cover; background-position: center;">
              <div class="p-4 bg-opacity-70">
                <h3 class="text-xl text-white text-left">
                  Climate Change & Environmental Sustainability
                </h3>
              </div>
            </div>

            <!-- Call to Action Card -->
            <div
              class="bg-[#F76C3C] text-white rounded-lg overflow-hidden h-72 flex items-center justify-center"
            style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('Images/contact-frame-one.jpeg') }}'); background-size: cover; background-position: center;" >
              <div class="p-6 text-center">
                <h3 class="text-xl font-bold mb-4">
                  We'd love to help amplify your social impact
                </h3>
                <a
                  href="#"
                  class="text-sm font-semibold leading-6 text-gray-900"
                >
                  <button class="btn-bg-animation">
                    <span class="btn-text">Contact us</span>
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-----Offering Solutions for Impact Section---->
      <section class="px-6 py-16 rounded relative">
        <div class="md:max-w-7xl mx-auto md:px-6 lg:px-6">
          <h2
            class="md:text-6xl text-4xl text-accentTextDark p-2 font-playfair font-semibold"
          >
            Offering Solutions for Impact
          </h2>

          <!-- Section 1: Communications & Storytelling -->
          <div
            class="sticky top-0 z-10 bg-[#ECECD5] p-4 md:p-12 my-4 md:h-96 shadow-md rounded-t-[50px] rounded-b-[0px] w-full"
          >
            <h2
              class="text-2xl md:text-4xl font-semibold text-[#4A5310] mb-4 md:mb-6 text-left"
            >
              Communications & Storytelling
            </h2>
            <hr class="border-none h-[2px] bg-[#4A5310] mb-4 md:mb-6" />
            <div class="flex flex-col md:flex-row">
              <div class="md:w-2/3 text-left">
                <p
                  class="text-[#4A5310] leading-[2.25rem] text-lg md:text-2xl mb-4 md:mb-8 font-normal"
                >
                  We transform social impact stories into powerful tools for
                  change through engaging digital media campaigns, human-centred
                  storytelling, and high-quality multimedia content.
                </p>
                <a href="{{ url('Work-Communication') }}">
                <button class="btn-bg-animation-learn">
                  <span class="btn-text">Learn more</span>
                </button>
              </a>
              </div>
              <div class="md:w-1/3 flex justify-center md:mt-0">
                <img
                  src="{{ asset('Images/i-1.png') }}"
                  alt="Illustration"
                  class="w-full max-w-xs h-52"
                />
              </div>
            </div>
          </div>

          <!-- Section 2: Branding & Design Services -->
          <div
            class="sticky top-0 z-20 bg-[#C4E1A4] p-4 md:p-12 my-4 md:h-96 shadow-md rounded-t-[50px] rounded-b-[0px] w-full"
          >
            <h2
              class="text-2xl md:text-4xl font-semibold text-[#4A5310] mb-4 md:mb-6 text-left"
            >
              Branding & Design Services
            </h2>
            <hr class="border-none h-[2px] bg-[#4A5310] mb-4 md:mb-6" />
            <div class="flex flex-col md:flex-row">
              <div class="md:w-2/3 text-left">
                <p
                  class="text-[#4A5310] text-lg md:text-2xl mb-0 md:mb-8 leading-relaxed"
                >
                  We create compelling brand identities and visual elements that
                  resonate with your audience and reinforce your message.
                </p>
                <a href="{{ url('Work-Branding') }}">
                <button class="btn-bg-animation-learn">
                  <span class="btn-text">Learn more</span>
                </button>
              </a>
              </div>
              <div class="md:w-1/3 flex justify-center mt-6 md:mt-0">
                <img
                  src="{{ asset('Images/i-2.png') }}"
                  alt="Illustration"
                  class="mt-8 w-full max-w-xs h-52"
                />
              </div>
            </div>
          </div>

          <!-- Section 3: Strategy Development and Implementation -->
          <div
            class="sticky top-0 z-30 bg-[#F0D9B7] p-4 md:p-12 my-4 md:h-96 w-full rounded-t-[50px] rounded-b-[0px] shadow-md"
          >
            <h2
              class="text-2xl md:text-4xl font-semibold text-[#4A5310] mb-4 md:mb-6 text-left"
            >
              Strategy Development and Implementation
            </h2>
            <hr class="border-none h-[2px] bg-[#4A5310] mb-4 md:mb-6" />
            <div class="flex flex-col md:flex-row">
              <div class="md:w-2/3 text-left">
                <p
                  class="text-[#4A5310] text-lg md:text-2xl mb-4 md:mb-8 leading-[2.25rem]"
                >
                  We craft bespoke strategies that include impactful advocacy,
                  tailored communication plans, and cutting-edge digital
                  campaigns to achieve meaningful and sustainable impact.
                </p>
                <a href="{{ url('Work-Strategy') }}">
                <button class="btn-bg-animation-learn">
                  <span class="btn-text">Learn more</span>
                </button>
              </a>
              </div>
              <div class="md:w-1/3 flex justify-center mt-6 md:mt-0">
                <img
                  src="{{ asset('Images/i-3.png') }}"
                  alt="Illustration"
                  class="w-full max-w-xs h-56"
                />
              </div>
            </div>
          </div>

          <!-- Section 4: Training & Capacity Building -->
          <div
            class="sticky top-0 z-40 bg-[#FFC6DB] p-4 md:p-12 my-4 md:h-96 shadow-md rounded-t-[50px] rounded-b-[0px] w-full"
          >
            <h2
              class="text-2xl md:text-4xl font-semibold text-[#4A5310] mb-4 md:mb-6 text-left"
            >
              Training & Capacity Building
            </h2>
            <hr class="border-none h-[2px] bg-[#4A5310] mb-4 md:mb-6" />
            <div class="flex flex-col md:flex-row">
              <div class="md:w-2/3 text-left">
                <p
                  class="text-[#4A5310] text-lg md:text-2xl mb-4 md:mb-8 leading-[2.25rem]"
                >
                  Our flexible, learner-centred training programs equip
                  individuals and organizations with practical skills for
                  driving social change.
                </p>
                <a href="{{ url('Work-Traning') }}">
                <button class="btn-bg-animation-learn">
                  <span class="btn-text">Learn more</span>
                </button>
              </a>
              </div>
              <div class="md:w-1/3 flex justify-center mt-6 md:mt-0">
                <img
                  src="{{ asset('Images/i-4.png') }}"
                  alt="Illustration"
                  class="mt-6 w-full max-w-xs h-auto"
                />
              </div>
            </div>
          </div>

          <!-- Section 5: Engagement Events -->
          <div
            class="sticky top-0 z-50 bg-[#ECDDD5] p-4 md:p-12 my-4 md:h-96 shadow-md rounded-t-[50px] rounded-b-[0px] w-full"
          >
            <h2
              class="text-2xl md:text-4xl font-semibold text-[#4A5310] mb-4 md:mb-6 text-left"
            >
              Engagement Events
            </h2>
            <hr class="border-none h-[2px] bg-[#4A5310] mb-4 md:mb-6" />
            <div class="flex flex-col md:flex-row">
              <div class="md:w-2/3 text-left">
                <p
                  class="text-[#4A5310] text-lg md:text-2xl mb-9 md:mb-8 leading-[2.25rem]"
                >
                  We create a platform for engagement through dynamic and
                  interactive events that drive meaningful connections.
                </p>
                <a href="{{ url('Work-Engagement')}}">
                <button class="btn-bg-animation-learn">
                  <span class="btn-text">Learn more</span>
                </button>
              </div>
            </a>
              <div class="md:w-1/3 flex justify-center mt-6 md:mt-0">
                <img
                  src="{{ asset('Images/i-5.png') }}"
                  alt="Illustration"
                  class="mt-12 w-full max-w-xs h-auto"
                />
              </div>
            </div>
          </div>

          <!-- Section 6: Program Design and Implementation -->
          <div
            class="sticky top-0 z-[60] bg-[#A3E0AC] p-4 md:p-12 my-4 md:h-96 shadow-md rounded-t-[50px] rounded-b-[0px] w-full"
          >
            <h2
              class="text-2xl md:text-4xl font-semibold text-[#4A5310] mb-4 md:mb-6 text-left"
            >
              Program Design and Implementation
            </h2>
            <hr class="border-none h-[2px] bg-[#4A5310] mb-4 md:mb-6" />
            <div class="flex flex-col md:flex-row">
              <div class="md:w-2/3 text-left">
                <p
                  class="text-[#4A5310] text-lg md:text-2xl mb-0 md:mb-8 leading-relaxed"
                >
                  We develop and execute innovative programs that address
                  community needs, drive advocacy, and achieve sustainable
                  change.
                </p>
                <a href="{{ url('Work-Program')}}">
                <button class="btn-bg-animation-learn">
                  <span class="btn-text">Learn more</span>
                </button>
              </a>
              </div>
              <div class="md:w-1/3 flex justify-center mt-6 md:mt-0">
                <img
                  src="{{ asset('Images/i-6.png') }}"
                  alt="Illustration"
                  class="w-full max-w-xs h-60"
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section for Clients & Partners -->
      <section class="py-8 bg-miscellanous">
        <div class="max-w-7xl h-80 mx-auto px-4 sm:px-6">
          <h2 class="text-6xl mb-6 font-playfair font-medium leading-normal">
            Our clients & partners
          </h2>
          <div class="relative overflow-hidden mt-12">
            <div
              id="clients"
              class="flex space-x-8 items-center animate-scroll whitespace-nowrap"
            >
              <img
                src="{{ asset('Images/c-1.png') }}"
                alt="Client 1"
                class="h-16 fade-in-out"
              />
              <img
                src="{{ asset('Images/c-2.png') }}"
                alt="Client 2"
                class="h-16 fade-in-out"
              />
              <img
                src="{{ asset('Images/c-3.png') }}"
                alt="Client 3"
                class="h-16 fade-in-out"
              />
              <img
                src="{{ asset('Images/c-4.png') }}"
                alt="Client 4"
                class="h-16 fade-in-out"
              />
              <img
                src="{{ asset('Images/c-5.png') }}"
                alt="Client 5"
                class="h-16 fade-in-out"
              />
            </div>

            <div
              class="absolute inset-y-0 left-0 w-12 fade-left pointer-events-none"
            ></div>
            <div
              class="absolute inset-y-0 right-0 w-12 fade-right pointer-events-none"
            ></div>
          </div>
        </div>
      </section>
      <!-----Six Section--->
      <section>
        <div class="container max-w-7xl mx-auto px-4 sm:px-6">
          <h2
            class="text-6xl font-playfair font-bold text-gray-900 text-left mb-12 leading-normal"
          >
            Our Impact in Action
          </h2>

          <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 my-8"
          >
            <!-- Card Example -->
            @foreach($blogs as $blog)
            <a href="{{ url('client/blog', $blog->id) }}">
            <div
              class="bg-white rounded-lg overflow-hidden w-full relative group flex flex-col items-start"
            >
              <img
                src="{{ asset($blog->cover_image) }}"
                alt="{{ $blog->title }}"
                class="w-full h-96 object-cover rounded-lg transition duration-500 group-hover:filter group-hover:grayscale group-hover:brightness-50"
              />
              <div
                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500"
              >
                <span
                  class="text-white font-bold text-xl transform translate-y-10 group-hover:translate-y-0 transition-all duration-500 ease-in-out"
                  >Read Case Study</span
                >
              </div>
              <div class="p-0">
                <h2 class="font-semibold text-2xl impact-styles">
                  {{ $blog->title }}
                </h2>
              </div>
            </div>
          </a>
            @endforeach
          </div>
        </div>
      </section>
      <!-- Section Seven -->
      <section class="flex flex-col items-center bg-miscellanous py-16">
        <div class="text-center w-full h-96">
          <h2
            class="text-3xl md:text-5xl lg:text-6xl font-medium mb-4 font-playfair"
          >
            We don’t just tell stories
          </h2>
          <h2
            class="text-3xl md:text-5xl lg:text-5xl xl:text-6xl font-medium mb-6 font-playfair"
          >
            We drive change
          </h2>
          <p class="text-lg mb-6 font-medium font-opensans">
            Let's Make Impact Together
          </p>
          <button class="btn-bg-animation">
            <span class="btn-text">Contact us</span>
          </button>
        </div>
      </section>

      <!-- Section Eight -->
      <section class="w-full px-4 py-16 bg-gray-50 relative">
        <div
          class="flex mx-auto max-w-7xl p-4 lg:px-6 flex-col md:flex-row justify-center md:justify-between items-center w-full px-6 py-16 relative"
        >
          <!-- Left Section: Heading and Subtext -->
          <div class="w-lg">
            <h2
              class="text-4xl md:text-6xl lg:text-7xl font-playfair font-medium text-gray-900 leading-tight text-center md:text-left tracking-tight"
            >
              Ready to Amplify <br />
              Your Impact?
            </h2>
          </div>
          <div
            class="flex items-center justify-center md:w-auto mt-8 md:mt-0 rounded-full ml-auto"
          >
            <button
              class="md:h-52 md:w-52 w-52 h-52 text-white p-4 rounded-full flex items-center justify-center orange-round-down"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="180"
                height="180"
                viewBox="0 0 180 180"
                fill="none"
              >
                <g clip-path="url(#clip0_832_1160)">
                  <rect width="180" height="180" rx="90" fill="#E76A35" />
                  <path
                    d="M93.1839 37.527C91.6218 35.9649 89.0891 35.9649 87.527 37.527L62.0712 62.9829C60.5091 64.545 60.5091 67.0776 62.0712 68.6397C63.6333 70.2018 66.166 70.2018 67.7281 68.6397L90.3555 46.0123L112.983 68.6397C114.545 70.2018 117.078 70.2018 118.64 68.6397C120.202 67.0776 120.202 64.545 118.64 62.9829L93.1839 37.527ZM94.3555 140.355V40.3555H86.3555V140.355H94.3555Z"
                    fill="white"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_832_1160">
                    <rect width="180" height="180" rx="90" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </button>
          </div>
        </div>
      </section>
    </main>
    <footer class="bg-accentTextLight py-8">
      <div class="container mx-auto px-4">
        <!-- Top section -->
        <div
          class="grid grid-cols-1 md:grid-cols-5 gap-4 text-center md:text-left"
        >
          <!-- Logo and description -->
          <div class="md:col-span-1">
            <img
              src="{{ asset('Images/LSIV-Logo.png') }}"
              alt="LSIV Logo"
              class="w-24 mx-auto md:mx-0 mb-4"
            />
            <p
              class="text-gray-700 text-base"
              style="font-weight: 400; line-height: 26px"
            >
              A strategic advocacy and communications agency dedicated to
              creating a more equitable world.
            </p>
            <p
              class="text-gray-700 mt-2 text-base"
              style="font-weight: 400; line-height: 26px"
            >
              To partner with us on a project,<br />
              reach us at:
              <a href="mailto:info@lsiv.org" class="text-black-600 font-bold"
                >info@lsiv.org</a
              >
            </p>
          </div>

          <!-- About us section -->
          <div>
            <h3 class="text-gray-800 font-bold mb-3 footer-text-header">
              About us
            </h3>
            <ul class="text-gray-600 space-y-2">
              <li>
                <a href="{{ url('About-WhoWeAre') }}" class="hover:text-orange-600"
                  >Who we are</a
                >
              </li>
              <li>
                <a href="#" class="hover:text-orange-600"
                  >Our History and Milestones</a
                >
              </li>
              <li>
                <a
                  href="{{ url('About-Thematics') }}"
                  class="hover:text-orange-600"
                  >Our Thematic areas</a
                >
              </li>
              <li>
                <a href="{{ url('About-Founder') }}" class="hover:text-orange-600"
                  >About the Founder</a
                >
              </li>
              <li>
                <a href="#" class="hover:text-orange-600">Meet the Team</a>
              </li>
            </ul>
          </div>

          <!-- Initiatives section -->
          <div>
            <h3 class="text-gray-800 font-bold mb-3 footer-text-header">
              Initiatives
            </h3>
            <ul class="text-gray-600 space-y-2">
              <li>
                <a
                  href="{{ url('Initiatives-MyBodyIsMine') }}"
                  class="hover:text-orange-600"
                  >MyBodyIsMine</a
                >
              </li>
              <li>
                <a
                  href="{{ url('Initiatives-Adopt') }}"
                  class="hover:text-orange-600"
                  >Adopt a Community</a
                >
              </li>
              <li>
                <a
                  href="{{ url('Initiatives-Nodaysoff') }}"
                  class="hover:text-orange-600"
                  >No Day Off</a
                >
              </li>
              <li>
                <a
                  href="{{ url('Initiatives-Conversation') }}"
                  class="hover:text-orange-600"
                  >The Conversation</a
                >
              </li>
              <li>
                <a
                  href="{{ url('Initiatives-Storiesunhear') }}"
                  class="hover:text-orange-600"
                  >Stories Untold</a
                >
              </li>
              <li>
                <a
                  href="{{ url('Initiatives-Lolocythia') }}"
                  class="hover:text-orange-600"
                  >The Lolo Cynthia Show</a
                >
              </li>
            </ul>
          </div>

          <!-- Work with us section -->
          <div>
            <h3 class="text-gray-800 font-bold mb-3 footer-text-header">
              Work with us
            </h3>
            <ul class="text-gray-600 space-y-2">
              <li>
                <a href="{{ url('Work-Services') }}" class="hover:text-orange-600"
                  >Services</a
                >
              </li>
              <li>
                <a
                  href="{{ url('Work-Work') }}"
                  class="hover:text-orange-600"
                  >How we Work</a
                >
              </li>
            </ul>
          </div>

          <!-- Insights section -->
          <div>
            <h3 class="text-gray-800 font-bold mb-3 footer-text-header">
              Insights
            </h3>
            <ul class="text-gray-600 space-y-2">
              <li>
                <a href="{{ url('Insights-Case') }}" class="hover:text-orange-600"
                  >Case studies</a
                >
              </li>
              <li>
                <a href="{{ url('Insights-Media') }}" class="hover:text-orange-600"
                  >Media & Knowledge Hub</a
                >
              </li>
            </ul>
          </div>
        </div>

        <!-- Bottom section -->
        <div class="flex space-x-4 mt-4 md:mt-0 justify-end">
          <!-- Social icons (replace with actual icons or images) -->
          <a href="#" class="text-dark-600 hover:text-orange-600">
            <!-- YouTube Icon -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="h-6 w-6"
            >
              <path
                d="M23.5 6.6c-.2-1.5-1.5-2.7-3-2.9C17.6 3 12 3 12 3s-5.6 0-8.5.7c-1.5.2-2.8 1.4-3 2.9-.4 2-.4 6-.4 6s0 4 .4 6c.2 1.5 1.5 2.7 3 2.9 2.9.7 8.5.7 8.5.7s5.6 0 8.5-.7c1.5-.2 2.8-1.4 3-2.9.4-2 .4-6 .4-6s0-4-.4-6zM9.8 15.5v-7l6.3 3.5-6.3 3.5z"
              />
            </svg>
          </a>

          <a href="#" class="text-dark-600 hover:text-orange-600">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="h-6 w-6"
            >
              <path
                d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11.27 20h-2.72v-9h2.72v9zm-1.36-10.3c-.87 0-1.57-.7-1.57-1.57s.7-1.57 1.57-1.57 1.57.7 1.57 1.57-.7 1.57-1.57 1.57zm12.63 10.3h-2.72v-4.75c0-1.13-.04-2.58-1.57-2.58-1.57 0-1.81 1.23-1.81 2.49v4.84h-2.72v-9h2.61v1.23h.04c.36-.69 1.25-1.42 2.57-1.42 2.75 0 3.26 1.81 3.26 4.17v5.02z"
              />
            </svg>
          </a>
          <a href="#" class="text-dark-600 hover:text-orange-600 icon-hover">
            <!-- Twitter (X) Icon -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="currentColor"
            >
              <path
                d="M18.3265 1.9043H21.7L14.33 10.3278L23 21.7903H16.2115L10.894 14.8383L4.81 21.7903H1.4345L9.3175 12.7803L1 1.9043H7.961L12.7675 8.2588L18.3265 1.9043ZM17.1425 19.7703H19.0115L6.9455 3.8173H4.9395L17.1425 19.7703Z"
              />
            </svg>
          </a>
          <a href="#" class="text-dark-600 hover:text-orange-600">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="h-6 w-6"
            >
              <path
                d="M12 0c3.3 0 3.7 0 5.1.1 1.4.1 2.3.3 2.9.6.7.3 1.2.7 1.7 1.3.5.5 1 .9 1.3 1.7.3.6.5 1.5.6 2.9.1 1.4.1 1.8.1 5.1s0 3.7-.1 5.1c-.1 1.4-.3 2.3-.6 2.9-.3.7-.7 1.2-1.3 1.7-.5.5-.9 1-1.7 1.3-.6.3-1.5.5-2.9.6-1.4.1-1.8.1-5.1.1s-3.7 0-5.1-.1c-1.4-.1-2.3-.3-2.9-.6-.7-.3-1.2-.7-1.7-1.3-.5-.5-.9-1-1.3-1.7-.3-.6-.5-1.5-.6-2.9C0 15.7 0 15.3 0 12s0-3.7.1-5.1c.1-1.4.3-2.3.6-2.9.3-.7.7-1.2 1.3-1.7.5-.5 1-.9 1.7-1.3.6-.3 1.5-.5 2.9-.6 1.4-.1 1.8-.1 5.1-.1zm0 2.2c-3.2 0-3.6 0-4.9.1-1.1.1-1.7.2-2.1.4-.5.2-.8.4-1.1.7-.3.3-.6.6-.7 1.1-.2.4-.3 1-.4 2.1-.1 1.3-.1 1.7-.1 4.9s0 3.6.1 4.9c.1 1.1.2 1.7.4 2.1.2.5.4.8.7 1.1.3.3.6.6 1.1.7.4.2 1 .3 2.1.4 1.3.1 1.7.1 4.9.1s3.6 0 4.9-.1c1.1-.1 1.7-.2 2.1-.4.5-.2.8-.4 1.1-.7.3-.3.6-.6.7-1.1.2-.4.3-1 .4-2.1.1-1.3.1-1.7.1-4.9s0-3.6-.1-4.9c-.1-1.1-.2-1.7-.4-2.1-.2-.5-.4-.8-.7-1.1-.3-.3-.6-.6-1.1-.7-.4-.2-1-.3-2.1-.4-1.3-.1-1.7-.1-4.9-.1zm0 4.1c2.2 0 4 1.8 4 4s-1.8 4-4 4-4-1.8-4-4 1.8-4 4-4zm0 1.8c-1.2 0-2.2 1-2.2 2.2s1 2.2 2.2 2.2 2.2-1 2.2-2.2-1-2.2-2.2-2.2zm5.3-.7c.5 0 .9.4.9.9s-.4.9-.9.9-.9-.4-.9-.9.4-.9.9-.9z"
              />
            </svg>
          </a>
        </div>

        <div
          class="border-t border-dark-400 mt-8 pt-4 flex flex-col md:flex-row justify-between items-center text-gray-600 before-inner-footer"
        >
          <p class="text-sm">©2024 LSIV. All rights reserved</p>
          <div class="text-sm mt-4 md:mt-0 last-footer">
            <a href="#" class="hover:text-orange-600 text-gray-800"
              >Privacy Policy</a
            >
            | <a href="#" class="hover:text-orange-600">Terms & Conditions</a> |
            <a href="#" class="hover:text-orange-600">Cookies Policy</a>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
