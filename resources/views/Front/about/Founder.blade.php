<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSIV - about the founder</title>
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
      <!-- about the founder Section -->
      <section class="bg-white py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <h1
            class="lg:text-7xl capitalize  lg:leading-[95.98px] text-[40px] leading-[53.32px] font-normal font-playfair text-gray-900 text-left md:text-left mb-16"
          >
            About the founder
          </h1>
          <div class="flex flex-col lg:flex-row justify-between gap-4">
            <!-- Image Section -->
            <div class="lg:mt-20 lg:w-1/3 text-xl">
              <img
                src="{{ asset('Images/ceo-lolo-2.jpeg') }}"
                alt="the founder of LSIV "
                class="w-full h-auto rounded-md"
              />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 lg:pl-10">
              <p
                class="text-accentTextDark font-normal leading-[30px] mb-6 text-base font-opensans"
              >
                <span class="text-primary text-2xl font-medium">
                  Lolo Cynthia
                </span>
                is an international development multimedia producer, gender expert, and award-winning communication strategist with over a decade of experience driving transformative social impact. Renowned for her innovative advocacy, she blends multimedia content and strategic communications to promote gender equality, sexual health, and social justice. Her work has sparked behavioral change, informed public health policies, and empowered marginalized communities across Africa and beyond.
              </p>
              <p
                class="text-accentTextDark font-normal leading-[30px] mb-6 text-base font-opensans"
              >
                As a sexual and reproductive health educator, Lolo has spent over 9 years working with adolescents, women, and young people, educating them on family planning, sexuality education, and gender equity. Her deep understanding of public health gained from degrees in Public Health Sciences and HIV/AIDS & Health Management from Monash University complements her grassroots efforts to create lasting change through dialogue, education, and advocacy.
              </p>
               <p
                class="text-accentTextDark font-normal leading-[30px] mb-6 text-base font-opensans"
              >
                Lolo, a sought-after speaker and media personality, has led key conversations on reproductive justice, women’s rights, and power dynamics. Her expertise has made her a trusted voice in conferences, workshops, and high-level platforms, including being a keynote speaker at Porter’s Center for Global Leadership Seminar.
            </p>
              <div>
                <h2
                  class="md:text-5xl text-[32px] leading-[42.66px] mb-6 font-playfair font-normal md:leading-[63.98px] text-black"
                >
                  Awards & Recognition
                </h2>
                <p class=" mb-6 font-normal leading-[21.79px] font-opensans text-base ">Lolo’s dedication to women’s rights has earned her numerous accolades, including:</p>
                <ul
                  class="text-accentTextDark space-y-[27px]"
                >
                    <li class="flex gap-2  font-normal leading-[21.79px] font-opensans text-base items-center">
                       <span>
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                    Leading Ladies Africa 100 most influential, powerful, and
                    innovative Nigerian women in Nigeria in 2020
                  </li>
                    <li class="flex gap-2  font-normal leading-[21.79px] font-opensans text-base items-center">
                       <span>
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>Aspen Institute New Voices Fellow</li>
                    <li class="flex gap-2  font-normal leading-[21.79px] font-opensans text-base items-center">
                       <span>
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                    Media Person to Watch – Y! Naija 2019 New Establishment List
                  </li>
                    <li class="flex gap-2  font-normal leading-[21.79px] font-opensans text-base items-center">
                       <span>
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>Social Media Person for Social Good 2019</li>
                    <li class="flex gap-2  font-normal leading-[21.79px] font-opensans text-base items-center">
                       <span>
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                    UNHCR Media Influencer for the "Telling the Real Story"
                    program
                  </li>
                    <li class="flex gap-2  font-normal leading-[21.79px] font-opensans text-base items-center">
                       <span>
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                    Keynote Speaker - Porter’s Center for Global Leadership
                    Seminar 2022 and 2024
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- about the founder Section -->
      <section class="bg-[#ECECD5] p-4  md:py-16 rounded">
        <div class="max-w-7xl mx-auto ">
          <div class="flex flex-col lg:flex-row-reverse md:px-6 md:py-0 justify-between gap-4 py-4">
            <!-- Image Section -->
             <div class="lg:w-1/3 text-xl">
            <img
               src="{{ asset('Images/f-1.jpeg') }}"
              alt="the founder of LSIV "
              class="w-full h-auto rounded-md"
            />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3">
              <div>
                <h2 class="md:text-[56px] text-[32px] mb-4 md:mb-6 font-playfair font-normal lg:leading-[74.65px] leading-normal">
                 Early Journey and Advocacy
                </h2>
                <div class=" text-accentTextDark  mb-6  font-opensans font-[400] text-[16px] space-y-[40px]">
                    <p class="md:leading-[30px] leading-[25px] font-[400] text-[16px]">
                       Lolo’s passion for advocacy began as a public health undergraduate at Monash University, South Africa. Despite personal challenges and a home environment that discouraged learning, she organized forums on gender equality and women’s rights at just 18 years old. This formative experience led her to create LoloTalks, a community-based organization that tackled social and health issues through education and multimedia content.
                  </p>
                  <p class="md:leading-[30px] leading-[25px] font-[400] text-[16px]">
                  By the time she graduated with her Postgraduate Diploma in HIV/AIDS &amp; Health Management, Lolo had already worked with some of the most vulnerable groups, including refugees, HIV/AIDS patients, youth offenders, and at-risk children. She served as a Youth Educator volunteer for Bosasa Youth Centre, a Community Health Worker for Humana People to People, and an Admin Assistant &amp; Teacher at Bienvenu Shelter for Refugee Women and Children
                  </p>
                  <p class="md:leading-[30px] leading-[25px] font-[400] text-[16px]">
                  Her hands-on experience with vulnerable communities deepened her understanding of the complex intersection of gender, health, and social inequality and laid the foundation for her future work in social justice and public health.
                  </p>
                   
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-4 rounded p-4 md:py-8">
        <div class="max-w-7xl mx-auto md:px-4 ">
          <div class="flex flex-col lg:flex-row-reverse justify-between gap-4 py-4">
           <!-- Image Section -->
             <div class="lg:hidden lg:w-1/3 text-xl">
             <img
                 src="{{ asset('Images/f-2.png') }}"
                alt="the founder of LSIV "
                class="w-full h-auto rounded-md"
              />
                        </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 lg:pl-10">
              <div>
              <h2 class="md:text-[56px] text-[32px] mb-4 md:mb-6 font-playfair font-normal lg:leading-[74.65px] leading-normal">
              Transformative Leadership &amp; Advocacy
                </h2>
                <div class=" text-accentTextDark  mb-6  font-opensans font-[400] text-[16px] space-y-[30px]">
                <p class="md:leading-[30px] leading-[25px] font-[400] text-[16px]">
                       Lolo is known for her bold, unfiltered discussions on sexual health, gender norms, and bodily autonomy. Her voice as a thought leader focuses on demystifying sex and pleasure as fundamental women's rights and advocating for the financial independence of girls and women as a conduit to genuine liberation. Through her content and engagements, she fosters financial literacy and self-agency and challenges societal expectations of male dependence.
                </p>
                <p class="md:leading-[30px] leading-[25px] font-[400] text-[16px]">
                Her career as a broadcaster and documentary producer on national television further amplified her voice as a social change advocate. She is renowned for producing award-winning expository talk shows and documentaries on untold stories of hardship and resilience, particularly in underdeveloped regions.
                </p>
                <p class="md:leading-[30px] leading-[25px] font-[400] text-[16px]">
                Lolo’s passion for addressing deeply entrenched social issues propagated by poverty and patriarchy has led her to develop sustainable, community-driven solutions that merge policy advocacy with real-world impact. Her commitment to dismantling harmful gender norms ensures that the voices of the most vulnerable—especially women and girls—are heard, understood, and represented. Her leadership and advocacy continue to inspire change across media, policy, and grassroots mobilisation, always centred on empowering those most affected by injustice.
                </p>
                                  
                </div>
              </div>
            </div>
             <!-- Image Section -->
             <div class="hidden sm:block lg:w-1/3 text-xl ">
              <img
                 src="{{ asset('Images/f-2.png') }}"
                alt="the founder of LSIV "
                class="w-full h-auto rounded-md"
              />
            </div>
          </div>
        </div>
      </section>
      <!-- HER CORE VALUE -->
      <section class="bg-miscellanous py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <h2
            class="md:text-5xl text-3xl mb-6 font-playfair font-[500] leading-normal"
          >
            Her Core Values
          </h2>
          <hr class="border-none h-[1px] bg-[#0B0B0B] mb-4 md:mb-6" />
          <!-- GRID -->
          <div
            class="flex flex-wrap lg:flex-row lg:flex-nowrap gap-4 items-center"
          >
            <!-- card one -->
            <div
              class="p-4 bg-secondary rounded-lg h-[204px] md:h-[255px] w-full md:w-[19.2rem] font-opensans flex flex-col justify-between"
            >
              <h3
                class="text-[24px] md:text-[32px] text-3xl md:leading-[43.58px] leading-[32.68px] font-semibold"
              >
                Resilience
              </h3>
              <p class="font-medium text-base">
                Resilience fuels her ability to navigate and overcome societal
                barriers.
              </p>
            </div>
            <!-- card 2 -->
            <div
              class="p-4 bg-[#FFC6DB] rounded-lg h-[204px] md:h-[255px] w-full md:w-[19.2rem] font-opensans flex flex-col justify-between"
            >
              <h3
                class="text-[24px] md:text-[32px] text-3xl md:leading-[43.58px] leading-[32.68px] font-semibold"
              >
                Integrity
              </h3>
              <p class="font-normal text-base">
                Integrity guides her commitment to honest and ethical practices
              </p>
            </div>
            <!-- card 3 -->
            <div
              class="p-4 bg-[#F1DAB7] rounded-lg h-[204px] md:h-[255px] w-full md:w-[19.2rem] font-opensans flex flex-col justify-between"
            >
              <h3
                class="text-[24px] md:text-[32px] text-3xl md:leading-[43.58px] leading-[32.68px] font-semibold"
              >
                Empowerment
              </h3>
              <p class="font-normal text-base">
                Empowerment underscores her focus on uplifting communities and
                individuals to realize their potential.
              </p>
            </div>
            <!-- card 4 -->
            <div
              class="p-4 bg-[#DDC2FF] rounded-lg h-[204px] md:h-[255px] w-full md:w-[19.2rem] font-opensans flex flex-col justify-between"
            >
              <h3
                class="text-[24px] md:text-[32px] text-3xl md:leading-[43.58px] leading-[32.68px] font-semibold"
              >
                Respect
              </h3>
              <p class="font-normal text-base">
                Respect is fundamental to her approach, ensuring that all
                interactions honour the dignity and agency of those she works
                with.
              </p>
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
      <section class="flex flex-col items-center justify-center bg-miscellanous py-16">
        <div class="text-center w-full h-[174px]  md:h-96">
          <h2
            class="text-3xl md:text-[60px] text-[30px] leading-[39.99px] md:leading-[79.98px] font-medium mb-4 font-playfair"
          >
            We don’t just tell stories <br/>  We drive change
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
          class="flex mx-auto md:max-w-7xl p-4 lg:px-6 flex-col md:flex-row  md:justify-between md:items-center w-full md:px-6 py-16 relative"
        >
          <!-- Left Section: Heading and Subtext -->
          <div class="">
            <h2
              class="text-[40px] leading-[53.32px] md:text-6xl lg:text-[96px] font-playfair font-normal  text-gray-900 lg:leading-[127.97px] text-left tracking-tight"
            >
              Ready to Amplify <br />
              Your Impact?
            </h2>
          </div>
          <div
            class="flex mx-auto md:items-center md:justify-center md:w-auto mt-8 md:mt-0 rounded-full md:ml-auto"
          >
            <button
              class="md:h-52 md:w-52   text-white p-4 rounded-full flex md:items-center md:justify-center orange-round-down"
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
  const scrollButton = document.getElementById("scrollBtn");
const carouselTrack = document.getElementById("carouselTrack");

// Function to determine the number of visible cards based on screen width
function getVisibleCards() {
  if (window.innerWidth >= 1024) {
    // Large screens (lg)
    return 3;
  } else if (window.innerWidth >= 768) {
    // Medium screens (md)
    return 2;
  } else {
    // Small screens (sm)
    return 1;
  }
}

const totalCards = document.querySelectorAll(".card-image-container").length;
let visibleCards = getVisibleCards(); // Get initial visible cards
const cardWidth = document.querySelector(".card-image-container").offsetWidth;
let maxScroll = (totalCards - visibleCards) * cardWidth; // Max scroll value
let scrollPosition = 0;

function updateMaxScroll() {
  visibleCards = getVisibleCards(); // Update visible cards
  maxScroll = (totalCards - visibleCards) * cardWidth; // Recalculate max scroll
}

function scrollOn() {
  // Scroll forward by the width of one card
  scrollPosition += cardWidth;

  // If we've reached the end, reset to the beginning
  if (scrollPosition > maxScroll) {
    scrollPosition = 0; // Go back to the first card
  }

  // Apply smooth scroll transition
  carouselTrack.style.transition = "transform 0.5s ease-in-out";
  carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
}

scrollButton.addEventListener("click", scrollOn);
document.addEventListener("keyup", (e) => {
  // Scroll if the arrow key is pressed
  if (e.key === "ArrowRight") {
    scrollOn();
  }
});

// Update max scroll on window resize
window.addEventListener("resize", updateMaxScroll);

</script>