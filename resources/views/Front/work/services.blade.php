<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSIV - Case Study Aspen New Voices Fellowship</title>
    <link rel="stylesheet" href="../style.css" />
  </head>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <body class="text-accentTextDark">
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
      <!-- intro disscussion on case study section -->
      <section class="bg-secondary py-12 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- Container flex -->
          <div class="flex lg:flex-row-reverse flex-col-reverse gap-4">
            <!-- Image Section -->
            <div class="lg:w-1/2 h-auto md:h-[30rem] text-xl">
              <img
                src="https://images.pexels.com/photos/11709710/pexels-photo-11709710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="climate change advocacy"
                class="w-full h-full object-cover rounded-md"
              />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 md:p-12">
              <div>
                <div class="flex gap-3 items-center mb-2">
                  Case Study >
                  <p class="text-primary">Aspen New Voices Fellowship:</p>
                </div>
                <h1
                  class="md:text-5xl text-3xl mb-6 font-playfair font-semibold leading-normal"
                >
                  Enhancing Advocacy Skills through Digital and Multimedia
                  Training
                </h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- full disscussion on case study section -->
      <section class="bg-white py-12 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- Container grid -->
          <div
            class="grid lg:grid-cols-[1fr_25rem_20rem] grid-cols-1 gap-12 relative"
          >
            <!-- descrition -->
            <div class="lg:col-span-2 w-full lg:w-4/5 space-y-12 md:space-y-28">
              <article>
                <h2
                  class="md:text-5xl text-3xl mb-6 font-playfair font-normal leading-normal"
                >
                  About the Fellowship
                </h2>
                <p>
                  The Aspen Global Innovators New Voices Fellowship equips
                  experts and advocates from countries in Africa, Asia, and
                  Latin America with advanced skills in communications,
                  advocacy, and storytelling. The program aims to empower
                  fellows to influence public opinion and shift public policy
                  effectively
                </p>
                <!-- Image Section -->
                <figure class="w-full mt-8 h-auto md:h-[25rem] space-y-3">
                  <img
                    src="https://images.pexels.com/photos/11709710/pexels-photo-11709710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="climate change advocacy"
                    class="w-full h-full object-cover rounded-md"
                  />
                  <figcaption>
                    Caption for the photo above. Caption for the photo above.
                  </figcaption>
                </figure>
              </article>
              <!-- article 2 -->
              <article class="space-y-8">
                <h2
                  class="md:text-5xl text-3xl mb-6 font-playfair font-normal leading-normal"
                >
                  Challenge:
                </h2>
                <p>
                  While the Aspen New Voices Fellowship has a robust curriculum,
                  there was a need to enhance fellows' abilities to leverage
                  multimedia and digital tools for impactful advocacy work. As a
                  new digital wave emerges, traditional methods of advocacy are
                  being disrupted by technological advancements. Digital
                  advocacy has transformed how we promote and gather support for
                  causes, extending beyond traditional lobbying and grassroots
                  methods. Fellows often required advanced skills and strategies
                  to navigate this evolving landscape of digital advocacy and to
                  maximize their reach and influence.
                </p>
                <h2
                  class="md:text-5xl text-3xl mb-6 font-playfair font-normal leading-normal"
                >
                  Our Intervention:
                </h2>
                <p>
                  To address this need, I facilitated a comprehensive workshop
                  focused on leveraging multimedia and digital tools for
                  impactful advocacy. The session covered a wide range of topics
                  essential for modern advocacy, ensuring that participants
                  could develop and execute effective digital campaigns.
                </p>

                <!-- Image Section -->
                <figure class="w-full mt-8 h-auto md:h-[25rem] space-y-3">
                  <img
                    src="https://images.pexels.com/photos/11709710/pexels-photo-11709710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="climate change advocacy"
                    class="w-full h-full object-cover rounded-md"
                  />
                  <figcaption>
                    Caption for the photo above. Caption for the photo above.
                  </figcaption>
                </figure>
              </article>
              <!-- article 3 -->
              <article class="space-y-8">
                <h2
                  class="md:text-5xl text-3xl mb-6 font-playfair font-normal leading-normal"
                >
                  Workshop Components
                </h2>
                <ul
                  class="custom-bullet-list text-accentTextDark font-medium leading-[2.1675rem] mb-6 md:text-xl"
                >
                  <li>
                    Exploring the evolution and impact of digital advocacy
                  </li>
                  <li>
                    Analyzing successful case studies across diverse fields
                  </li>
                  <li>
                    Developing SMART goals tailored to advocacy initiatives
                  </li>
                  <li>Identifying and engaging target audiences effectively</li>
                  <li>
                    Crafting compelling narratives for impactful storytelling
                  </li>
                  <li>
                    Utilizing multimedia formats (videos, infographics,
                    podcasts) strategically
                  </li>
                  <li>Understanding effective use of social media platforms</li>
                  <li>
                    Implementing digital advocacy tactics for maximum impact
                  </li>
                  <li>
                    Providing resources and tools to support digital advocacy
                    efforts
                  </li>
                </ul>

                <!-- Image Section -->
                <figure class="w-full mt-8 h-auto md:h-[25rem] space-y-3">
                  <img
                    src="https://images.pexels.com/photos/11709710/pexels-photo-11709710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="climate change advocacy"
                    class="w-full h-full object-cover rounded-md"
                  />
                  <figcaption>
                    Caption for the photo above. Caption for the photo above.
                  </figcaption>
                </figure>
              </article>
              <!-- article 4 -->
              <article class="space-y-8">
                <h2
                  class="md:text-5xl text-3xl mb-6 font-playfair font-normal leading-normal"
                >
                  Impact:
                </h2>
                <p>
                  The workshop significantly enhanced the advocacy skills of the
                  Aspen New Voices fellows, enabling them to leverage digital
                  and multimedia tools effectively. Key outcomes included:
                </p>
                <ul
                  class="custom-bullet-list text-accentTextDark font-medium leading-[2.1675rem] mb-6 md:text-xl"
                >
                  <li>
                    <strong>Enhanced Digital Advocacy Skills:</strong> Fellows
                    gained practical skills in using multimedia formats and
                    digital platforms to amplify their advocacy efforts.
                  </li>
                  <li>
                    <strong>Increased Confidence and Competence:</strong>
                    Participants felt more confident in their ability to create
                    compelling stories and engage diverse audiences through
                    digital means.
                  </li>
                  <li>
                    <strong>Strategic Goal Setting:</strong> Fellows developed
                    clear and actionable SMART goals, providing a solid
                    foundation for their advocacy projects.
                  </li>
                  <li>
                    <strong>Broadened Perspectives:</strong> By sharing
                    experiences and insights from various fields and regions,
                    fellows gained a broader understanding of global advocacy
                    challenges and opportunities.
                  </li>
                  <li>
                    <strong>Practical Resources:</strong> Equipped with a range
                    of digital tools and resources, fellows were better prepared
                    to implement and sustain their advocacy initiatives.
                  </li>
                </ul>

                <!-- Image Section -->
                <figure class="w-full mt-8 h-auto md:h-[25rem] space-y-3">
                  <img
                    src="https://images.pexels.com/photos/11709710/pexels-photo-11709710.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="climate change advocacy"
                    class="w-full h-full object-cover rounded-md"
                  />
                  <figcaption>
                    Caption for the photo above. Caption for the photo above.
                  </figcaption>
                </figure>
              </article>
            </div>
            <!-- client-information -->
            <div
              class="bg-miscellanous h-auto lg:h-[33rem] lg:top-0 lg:sticky w-full lg:w-[28.125rem] right-0 py-5"
            >
              <div class="divide-y-2 divide-[#353535] px-6 font-opensans">
                <div class="py-4">
                  <h3 class="text-lg font-semibold">Client Name</h3>
                  <p>Aspen New Voices Fellowship</p>
                </div>
                <div class="flex-1 py-4">
                  <h3 class="text-lg font-semibold">Project Timeline</h3>
                  <p>Jan 2023 - August 2023</p>
                </div>
                <div class="flex-1 py-4">
                  <h3 class="text-lg font-semibold">Our Service</h3>
                  <p>Capacity building</p>
                </div>
                <div class="py-4">
                  <h3 class="text-lg font-semibold">Other Case Studies:</h3>
                  <ul class="list-disc pl-5">
                    <li>
                      Empowering Girls through Menstrual Health Education and
                      Reusable Cloth Pad Workshops
                    </li>
                    <li>
                      Unbroken Hope: South Africa's Orphans and the Fight for
                      Their Future
                    </li>
                    <li>Empowering Kenyan Youth Through SRHR Advocacy</li>
                  </ul>
                  <a
                    href="#"
                    class="text-primary font-medium underline justify-center flex"
                    >View all case studies</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section for Clients & Partners -->
      <section class="py-8 bg-accentTextLight">
        <div class="max-w-7xl h-80 mx-auto px-4 sm:px-6">
          <h2
            class="md:text-6xl text-4xl mb-6 font-playfair font-medium leading-normal"
          >
            clients & partners
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
            class="text-3xl md:text-5xl lg:text-6xl font-semibold mb-4 font-playfair"
          >
            We don’t just tell stories
          </h2>
          <h2
            class="text-3xl md:text-5xl lg:text-5xl xl:text-6xl font-semibold mb-6 font-playfair"
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
              class="text-4xl md:text-6xl lg:text-7xl font-playfair font-semibold text-gray-900 leading-tight text-center md:text-left tracking-tight"
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
