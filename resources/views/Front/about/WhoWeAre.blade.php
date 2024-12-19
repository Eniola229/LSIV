 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSIV - who we are</title>
    <link rel="stylesheet" href="../style.css" />
  </head>
          @vite('resources/css/app.css')
        @vite('resources/js/app.js')
  <body>
    <header class="">
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
          <div class="relative group">
            <button
              type="button"
              class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900 font-opensans"
            >
              About us
            </button>

            <!-- Dropdown menu -->
            <div
              class="absolute hidden group-hover:block mt-2 w-48 bg-white rounded-md shadow-lg"
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
                    href="{{ url('About-OurJouney') }}"
                    class="block px-4 py-2 hover-effect-arrow"
                    >About the Founder<span class="hover-arrow">&rarr;</span></a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="relative group inline-block">
            <a
              href="#"
              class="text-sm font-semibold leading-6 text-gray-900 font-opensans"
              >Work with us</a
            >

            <!-- Dropdown menu -->
            <div
              class="absolute hidden group-hover:block mt-2 w-40 bg-white rounded-md shadow-lg"
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
                    onclick="toggleDropdown('work-dropdown')"
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
    <main>
      <!-- Lolo Social Impact Venture is a dedicated force for positive change.  -->
      <section class="bg-white py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-row justify-between gap-8">
            <!-- Image Section -->
            <div class="lg:w-2/4 w-full lg:h-[38rem]">
              <img
                src="{{ asset('Images/women.png') }}"
                alt="the founder of LSIV "
                class="w-full h-full object-cover object-center rounded-md"
              />
            </div>
            <div class="lg:w-1/2">
              <h1
                class="md:text-5xl lg:text-7xl text-3xl mb-6 font-playfair font-normal leading-normal"
              >
                Lolo Social Impact Venture is a dedicated force for positive
                change.
              </h1>
              <p
                class="text-accentTextDark font-normal leading-[2.1675rem] mb-6 text-xl"
              >
                We drives impactful solutions through strategic advocacy,
                multimedia campaigns, and community-centred initiatives. Founded
                by renowned international communication strategist and social
                entrepreneur Lolo Cynthia, our agency transforms challenges into
                opportunities for sustainable development, gender equality,
                health, education, and environmental sustainability.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- We connect grassroots voices with powerful platforms.  -->
      <section class="bg-miscellanous py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-row-reverse justify-between gap-8">
            <!-- Image Section -->
            <div class="lg:w-2/4 w-full lg:h-[38rem]">
              <img
                src="{{ asset('Images/women-2.png') }}"
                alt="the founder of LSIV "
                class="w-full h-full object-cover object-center rounded-md"
              />
            </div>
            <div class="lg:w-1/2">
              <h2
                class="md:text-5xl lg:text-7xl text-3xl mb-6 font-playfair font-normal leading-normal"
              >
                We connect grassroots voices with powerful platforms.
              </h2>
              <p
                class="text-accentTextDark font-normal leading-[2.1675rem] mb-6 text-xl"
              >
                At LSIV, we bridge the gap between grassroots efforts and
                high-level advocacy, ensuring marginalized communities are not
                only heard but compellingly represented. Our approach leverages
                cutting-edge digital strategies and powerful storytelling to
                create lasting impact.
              </p>
              <p
                class="text-accentTextDark font-normal leading-[2.1675rem] mb-6 text-xl"
              >
                Collaboration is at the heart of our mission. We partner with
                organizations to co-create innovative solutions addressing the
                root causes of social issues. Together, we strive to foster
                enduring change and contribute to a brighter, more equitable
                future for all.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Behind the Scenes-->
      <section class="bg-white py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <h2
            class="md:text-5xl text-3xl mb-6 font-playfair font-normal leading-normal"
          >
            Behind the Scenes
          </h2>
          <div class="container overflow-hidden">
            <div class="flex justify-end items-end">
              <button class="text-xl font-semibold capitalize">
                scroll &rarr;
              </button>
            </div>
            <!-- GRID -->
            <div class="flex flex-row items-center w-[90rem]">
              <!-- card one -->

              <div
                class="p-4  h-auto items-center card-image-container md:w-[25.62875rem] w-[23.62875rem] font-opensans flex flex-col justify-between"
              > 
                <!-- Image Section -->
                <div class="w-full h-[26.6875rem]">
                  <img
                    src="{{ asset('Images/scene-1.png') }}"
                    alt="the founder of LSIV "
                    class="w-full h-full object-cover object-center"
                  />
                </div>
              </div>
              <!-- card 2 -->
              <div
                class="p-4 h-auto items-center md:w-[25.62875rem] card-image-container w-[23.62875rem] font-opensans flex flex-col justify-between"
              >
                <!-- Image Section -->
                <div class="w-full h-[26.6875rem]">
                  <img
                    src="{{ asset('Images/scene-2.png') }}"
                    alt="the founder of LSIV "
                    class="w-full h-full object-cover object-center"
                  />
                </div>
              </div>
              <!-- card 3 -->
              <div
                class="p-4 h-auto items-center card-image-container md:w-[25.62875rem] w-[23.62875rem] font-opensans flex flex-col justify-between"
              >
                <!-- Image Section -->
                <div class="w-full h-[26.6875rem]">
                  <img
                    src="{{ asset('Images/scene-3.png') }}"
                    alt="the founder of LSIV "
                    class="w-full h-full object-cover object-center"
                  />
                </div>
              </div>
              <!-- card 4 -->
              <div
                class="p-4 h-auto items-center md:w-[25.62875rem] card-image-container w-[23.62875rem] font-opensans flex flex-col justify-between"
              >
                <!-- Image Section -->
                <div class="w-full h-[26.6875rem]">
                  <img
                    src="{{ asset('Images/scene-4.png') }}"
                    alt="the founder of LSIV "
                    class="w-full h-full object-cover object-center"
                  />
                </div>
              </div>
              <!-- card 4 -->
              <div
                class="p-4 h-auto items-center md:w-[25.62875rem] w-[23.62875rem] card-image-container font-opensans flex flex-col justify-between"
              >
                <!-- Image Section -->
                <div class="w-full h-[26.6875rem]">
                  <img
                    src="{{ asset('Images/scene-5.png') }}"
                    alt="the founder of LSIV "
                    class="w-full h-full object-cover object-center"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our vision and mission -->
      <section class="bg-accentTextLight py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- COnatainner flex -->
          <div class="flex flex-col gap-12">
            <!-- flex card  -->
            <div
              class="flex flex-col md:flex-row items-center justify-between gap-4 relative"
            >
              <!-- Text Section -->
              <div class="lg:w-2/3 md:p-8 p-6 rounded-lg bg-[#FFC6DB]">
                <div>
                  <h2
                    class="md:text-5xl text-3xl mb-6 font-playfair font-normal leading-normal"
                  >
                    Our Vision
                  </h2>
                  <p
                    class="text-accentTextDark font-normal leading-[2.1675rem] mb-6 text-xl"
                  >
                    We envision a world where every individual and community has
                    the opportunity to thrive. A world where gender equality is
                    the norm, health and well-being are prioritized, educational
                    opportunities are accessible, livelihoods are sustainable,
                    and the environment is protected for future generations.
                  </p>
                </div>
              </div>
              <!-- Text Section -->
              <div class="lg:w-2/3 md:p-8 p-6 rounded-lg bg-[#FFDED0]">
                <div>
                  <h2
                    class="md:text-5xl text-3xl mb-6 font-playfair font-normal leading-normal"
                  >
                    Our Mission
                  </h2>
                  <p
                    class="text-accentTextDark font-normal leading-[2.1675rem] mb-6 text-xl"
                  >
                    Our mission is to support our partners in driving positive
                    social change through strategic advocacy, effective
                    communication, and community-centered approaches. We aim to
                    empower communities, amplify marginalized voices, and create
                    lasting impact by fostering collaboration and leveraging
                    innovative solutions to address the world's most pressing
                    challenges.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- What Makes Us Unique ? -->
      <section class="bg-white py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- GRID -->
          <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-3">
            <div class="p-4 h-[15.9375rem] w-full">
              <h2
                class="md:text-5xl text-3xl mb-6 font-playfair font-semibold leading-normal"
              >
                What Makes Us Unique ?
              </h2>
            </div>
            <!-- card one -->
            <div
              class="p-4 bg-secondary rounded-lg h-[15.9375rem] w-full font-opensans flex flex-col justify-between"
            >
              <h3
                class="text-[2rem] text-3xl leading-[2.272375rem] font-normal md:font-semibold"
              >
                Deep-rooted Expertise
              </h3>
              <p class="font-normal text-base">
                Our team possesses in-depth knowledge of the subject matters we
                advocate for, allowing us to develop more targeted and impactful
                campaigns.
              </p>
            </div>
            <!-- card 2 -->
            <div
              class="p-4 bg-miscellanous rounded-lg h-[15.9375rem] w-full font-opensans flex flex-col justify-between"
            >
              <h3
                class="text-[2rem] leading-[2.272375rem] font-normal md:font-semibold"
              >
                Collaborative Approach
              </h3>
              <p class="font-normal text-base">
                We engage deeply with communities, understanding their needs and
                amplifying their stories through innovative digital strategies.
              </p>
            </div>
            <!-- card 3 -->
            <div
              class="p-4 bg-[#FFDED0] rounded-lg h-[15.9375rem] w-full font-opensans flex flex-col justify-between"
            >
              <h3
                class="text-[2rem] leading-[2.272375rem] font-normal md:font-semibold"
              >
                Global Impact
              </h3>
              <p class="font-normal text-base">
                Our ability to translate local insights into global action sets
                us apart. We form strategic partnerships across sectors to
                foster sustainable solutions to complex social issues.
              </p>
            </div>
            <!-- card 4 -->
            <div
              class="p-4 bg-[#DDC2FF] rounded-lg h-[15.9375rem] w-full font-opensans flex flex-col justify-between"
            >
              <h3
                class="text-[2rem] leading-[2.272375rem] font-normal md:font-semibold"
              >
                Results-Driven
              </h3>
              <p class="font-normal text-base">
                Our commitment to rigorous research, participatory methods, and
                evidence-based strategies guarantees that our interventions are
                both effective and empowering.
              </p>
            </div>
            <!-- card 5 -->
            <div
              class="p-4 bg-[#FFE4BB] rounded-lg h-[15.9375rem] w-full font-opensans flex flex-col justify-between"
            >
              <h3
                class="text-[2rem] leading-[2.272375rem] font-normal md:font-semibold"
              >
                Holistic Approach
              </h3>
              <p class="font-normal text-base">
                We integrate education, advocacy, and storytelling to help our
                clients communicate their impact in ways that inspire and
                mobilize.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- meet our team -->
      <section class="bg-secondary py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <h2
            class="md:text-5xl text-5xl mb-6 font-playfair text-center font-semibold leading-normal"
          >
            Meet The Team
          </h2>
          <div class="container mx-auto px-4 py-16">
            <!-- team grid -->
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4">
              <!-- Team Member Card 1 -->
              <div class="bg-white rounded-xl p-6 text-center shadow-md w-full">
                <img
                  src="{{ asset('Images/ceo-lolo.png') }}"
                  alt="Team member photo"
                  class="w-24 h-24 mx-auto rounded-full mb-4 object-cover object-center"
                />
                <h2
                  class="text-xl font-semibold"
                  style="font-family: 'Helvetica Neue'"
                >
                  Lolo
                </h2>
                <p class="text-gray-600 mb-4 mt-4">CEO</p>
                <a
                  href="#"
                  class="inline-block mt-4 text-black hover:text-orange-500"
                >
                  <svg
                    class="w-8 h-8"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-8 19h-3v-8h3v8zm-1.5-9.268c-.966 0-1.75-.797-1.75-1.732s.784-1.732 1.75-1.732 1.75.797 1.75 1.732-.784 1.732-1.75 1.732zm10.5 9.268h-3v-4.604c0-1.109-.026-2.536-1.548-2.536-1.548 0-1.786 1.211-1.786 2.462v4.678h-3v-8h2.878v1.094h.041c.401-.761 1.381-1.562 2.844-1.562 3.042 0 3.603 2.003 3.603 4.609v3.859z"
                    />
                  </svg>
                </a>
              </div>

              <!-- Team Member Card 2 -->
              <div class="bg-white rounded-xl p-6 text-center shadow-md w-full">
                <img
                  src="{{ asset('Images/p-d-lolo.png') }}"
                  alt="Team member photo"
                  class="w-24 h-24 mx-auto rounded-full mb-4 object-cover object-center"
                />
                <h2
                  class="text-xl font-semibold"
                  style="font-family: 'Helvetica Neue'"
                >
                 Elizabeth
                </h2>
                <p class="text-gray-600 mb-4 mt-4">Product Designer</p>
                <a
                  href="#"
                  class="inline-block mt-4 text-black hover:text-orange-500"
                >
                  <svg
                    class="w-8 h-8"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-8 19h-3v-8h3v8zm-1.5-9.268c-.966 0-1.75-.797-1.75-1.732s.784-1.732 1.75-1.732 1.75.797 1.75 1.732-.784 1.732-1.75 1.732zm10.5 9.268h-3v-4.604c0-1.109-.026-2.536-1.548-2.536-1.548 0-1.786 1.211-1.786 2.462v4.678h-3v-8h2.878v1.094h.041c.401-.761 1.381-1.562 2.844-1.562 3.042 0 3.603 2.003 3.603 4.609v3.859z"
                    />
                  </svg>
                </a>
              </div>

              <!-- Team Member Card 3 -->
              <div class="bg-white rounded-xl p-6 text-center shadow-md w-full">
                <img
                  src="https://images.pexels.com/photos/12903275/pexels-photo-12903275.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                  alt="Team member photo"
                  class="w-24 h-24 mx-auto rounded-full mb-4 object-cover object-center"
                />
                <h2
                  class="text-xl font-semibold"
                  style="font-family: 'Helvetica Neue'"
                >
                  Team member name
                </h2>
                <p class="text-gray-600 mb-4 mt-4">Team member position</p>
                <a
                  href="#"
                  class="inline-block mt-4 text-black hover:text-orange-500"
                >
                  <svg
                    class="w-8 h-8"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-8 19h-3v-8h3v8zm-1.5-9.268c-.966 0-1.75-.797-1.75-1.732s.784-1.732 1.75-1.732 1.75.797 1.75 1.732-.784 1.732-1.75 1.732zm10.5 9.268h-3v-4.604c0-1.109-.026-2.536-1.548-2.536-1.548 0-1.786 1.211-1.786 2.462v4.678h-3v-8h2.878v1.094h.041c.401-.761 1.381-1.562 2.844-1.562 3.042 0 3.603 2.003 3.603 4.609v3.859z"
                    />
                  </svg>
                </a>
              </div>

              <!-- Team Member Card 4 -->
              <div class="bg-white rounded-xl p-6 text-center shadow-md w-full">
                <img
                  src="https://images.pexels.com/photos/12903275/pexels-photo-12903275.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                  alt="Team member photo"
                  class="w-24 h-24 mx-auto rounded-full mb-4 object-cover object-center"
                />
                <h2
                  class="text-xl font-semibold"
                  style="font-family: 'Helvetica Neue'"
                >
                  Team member name
                </h2>
                <p class="text-gray-600 mb-4 mt-4">Team member position</p>
                <a
                  href="#"
                  class="inline-block mt-4 text-black hover:text-orange-500"
                >
                  <svg
                    class="w-8 h-8"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-8 19h-3v-8h3v8zm-1.5-9.268c-.966 0-1.75-.797-1.75-1.732s.784-1.732 1.75-1.732 1.75.797 1.75 1.732-.784 1.732-1.75 1.732zm10.5 9.268h-3v-4.604c0-1.109-.026-2.536-1.548-2.536-1.548 0-1.786 1.211-1.786 2.462v4.678h-3v-8h2.878v1.094h.041c.401-.761 1.381-1.562 2.844-1.562 3.042 0 3.603 2.003 3.603 4.609v3.859z"
                    />
                  </svg>
                </a>
              </div>
              <!-- Team Member Card 5 -->
              <div class="bg-white rounded-xl p-6 text-center shadow-md w-full">
                <img
                  src="https://images.pexels.com/photos/12903275/pexels-photo-12903275.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                  alt="Team member photo"
                  class="w-24 h-24 mx-auto rounded-full mb-4 object-cover object-center"
                />
                <h2
                  class="text-xl font-semibold"
                  style="font-family: 'Helvetica Neue'"
                >
                  Team member name
                </h2>
                <p class="text-gray-600 mb-4 mt-4">Team member position</p>
                <a
                  href="#"
                  class="inline-block mt-4 text-black hover:text-orange-500"
                >
                  <svg
                    class="w-8 h-8"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-8 19h-3v-8h3v8zm-1.5-9.268c-.966 0-1.75-.797-1.75-1.732s.784-1.732 1.75-1.732 1.75.797 1.75 1.732-.784 1.732-1.75 1.732zm10.5 9.268h-3v-4.604c0-1.109-.026-2.536-1.548-2.536-1.548 0-1.786 1.211-1.786 2.462v4.678h-3v-8h2.878v1.094h.041c.401-.761 1.381-1.562 2.844-1.562 3.042 0 3.603 2.003 3.603 4.609v3.859z"
                    />
                  </svg>
                </a>
              </div>
              <!-- Team Member Card 6 -->
              <div class="bg-white rounded-xl p-6 text-center shadow-md w-full">
                <img
                  src="https://images.pexels.com/photos/12903275/pexels-photo-12903275.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                  alt="Team member photo"
                  class="w-24 h-24 mx-auto rounded-full mb-4 object-cover object-center"
                />
                <h2
                  class="text-xl font-semibold"
                  style="font-family: 'Helvetica Neue'"
                >
                  Team member name
                </h2>
                <p class="text-gray-600 mb-4 mt-4">Team member position</p>
                <a
                  href="#"
                  class="inline-block mt-4 text-black hover:text-orange-500"
                >
                  <svg
                    class="w-8 h-8"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-8 19h-3v-8h3v8zm-1.5-9.268c-.966 0-1.75-.797-1.75-1.732s.784-1.732 1.75-1.732 1.75.797 1.75 1.732-.784 1.732-1.75 1.732zm10.5 9.268h-3v-4.604c0-1.109-.026-2.536-1.548-2.536-1.548 0-1.786 1.211-1.786 2.462v4.678h-3v-8h2.878v1.094h.041c.401-.761 1.381-1.562 2.844-1.562 3.042 0 3.603 2.003 3.603 4.609v3.859z"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- our work in action -->
      <section class="bg-accentTextLight py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <p>OUR WORK</p>
          <h2
            class="md:text-5xl text-3xl mb-6 font-playfair font-normal leading-normal lg:mt-3"
          >
            Our Impact in Action
          </h2>
          <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 my-8"
          >
            <!-- Card Example -->
            <div
              class="bg-white rounded-lg overflow-hidden w-full relative group flex flex-col items-start"
            >
              <img
                src="{{ asset('Images/stories-girl.png') }}"
                alt="Stories of Girls' Resistance"
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
              <div class="p-4">
                <h2 class="font-semibold text-2xl impact-styles">
                  Stories of Girls' Resistance
                </h2>
              </div>
            </div>

            <!-- Repeat for each impact card -->
            <div
              class="bg-white rounded-lg overflow-hidden w-full relative group"
            >
              <img
                src="{{ asset('Images/ty.png') }}"
                alt="The TY Danjuma Foundation"
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
              <div class="p-4">
                <h2 class="font-semibold text-2xl impact-styles">
                  The TY Danjuma Foundation
                </h2>
              </div>
            </div>

            <div
              class="bg-white rounded-lg overflow-hidden w-full relative group"
            >
              <img
                src="{{ asset('Images/crisis.png') }}"
                alt="Women's Crisis Center (WCC), Imo State"
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
              <div class="p-4">
                <h2 class="font-semibold text-2xl impact-styles">
                  Women's Crisis Center (WCC), Imo State
                </h2>
              </div>
            </div>

            <div
              class="bg-white rounded-lg overflow-hidden w-full relative group"
            >
              <img
                src="{{ asset('Images/benmore.png') }}"
                alt="Benmore Foundation & First Lady, Ondo State Government"
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
              <div class="p-4">
                <h2 class="font-semibold text-2xl impact-styles">
                  Benmore Foundation & First Lady, Ondo State Government
                </h2>
              </div>
            </div>

            <div
              class="bg-white rounded-lg overflow-hidden w-full relative group"
            >
              <img
                src="{{ asset('Images/or.png') }}"
                alt="Orphans in South Africa Documentary"
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
              <div class="p-4">
                <h2 class="font-semibold text-2xl impact-styles">
                  Orphans in South Africa Documentary
                </h2>
              </div>
            </div>

            <div
              class="bg-white rounded-lg overflow-hidden w-full relative group"
            >
              <img
                src="{{ asset('Images/in.png') }}"
                alt="Inuadada Foundation"
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
              <div class="p-4">
                <h2 class="font-semibold text-2xl impact-styles">
                  Inuadada Foundation
                </h2>
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
                  href="{{ url('Initiatives-MyBodyIsMine') }}"
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
<script type="text/javascript">
    // const scrollButton = document.getElementById("scrollBtn");
// const carouselTrack = document.getElementById("carouselTrack");

// // Function to determine the number of visible cards based on screen width
// function getVisibleCards() {
//   if (window.innerWidth >= 1024) {
//     // Large screens (lg)
//     return 3;
//   } else if (window.innerWidth >= 768) {
//     // Medium screens (md)
//     return 2;
//   } else {
//     // Small screens (sm)
//     return 1;
//   }
// }

// const totalCards = document.querySelectorAll(".card-image-container").length;
// let visibleCards = getVisibleCards(); // Get initial visible cards
// const cardWidth = document.querySelector(".card-image-container").offsetWidth;
// let maxScroll = (totalCards - visibleCards) * cardWidth; // Max scroll value
// let scrollPosition = 0;

// function updateMaxScroll() {
//   visibleCards = getVisibleCards(); // Update visible cards
//   maxScroll = (totalCards - visibleCards) * cardWidth; // Recalculate max scroll
// }

// function scrollOn() {
//   // Scroll forward by the width of one card
//   scrollPosition += cardWidth;

//   // If we've reached the end, reset to the beginning
//   if (scrollPosition > maxScroll) {
//     scrollPosition = 0; // Go back to the first card
//   }

//   // Apply smooth scroll transition
//   carouselTrack.style.transition = "transform 0.5s ease-in-out";
//   carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
// }

// // scrollButton.addEventListener("click", scrollOn);
// document.addEventListener("keyup", (e) => {
//   // Scroll if the arrow key is pressed
//   if (e.key === "ArrowRight") {
//     scrollOn();
//   }
// });

// // Update max scroll on window resize
// window.addEventListener("resize", updateMaxScroll);
</script>