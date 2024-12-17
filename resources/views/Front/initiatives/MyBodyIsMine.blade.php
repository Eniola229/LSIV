<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Empowering young people through sexuality education: MyBodyIsMine
      initiative
    </title>
    <link rel="stylesheet" href="../style.css" />
    <script src="./scroll.js" defer></script>
  </head>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')

  <body class="text-accentTextDark"> 
  @include('components.header')
    <main class="">
      <!-- our innitiantives insider -->
      <section class="md:p-6 p-2 bg-white rounded md:mt-0 mt-[10px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex gap-3 items-center mb-2 text-[16px] font-[400]">
            <a href="{{ url('Initiatives-Initiatives') }}" class="flex items-center gap-1">
              Our initiative
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="8 4 16 12 8 20" />
              </svg>
            </a>
            <p class="text-primary font-[600]">MyBodyIsMine</p>
          </div>

          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
              <h1
                class="md:text-5xl lg:text-[3.5rem] text-[40px] md:mb-6 mb-2 font-playfair font-[00] leading-normal"
              >
               MyBodyIsMine Initiative
              </h1>
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 lg:pl-10 lg:ml-52">
              <p
                class="text-accentTextDark font-[400] md:mb-6 mb-0 md:text-[26px] text-[16px] font-opensans font-[400]"
              >
                MyBodyIsMine is a comprehensive sexuality education program
                designed to empower young people with the knowledge, values, and
                life skills they need to make informed choices about their
                sexual and reproductive health (SRH).
              </p>
            </div>
          </div>
      
        </div>
      </section>
      <section class="md:p-6 p-2 md:mt-0 mt-[-30px]">
          <div class="overflow-hidden w-full">
            <div
              class="flex transition-transform duration-500 ease-in-out p-4 w-max"
              id="carouselTrack"
            >
              <!-- card 1 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-1.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <!-- card 2 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-2.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <!-- card 3 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-3.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <!-- card 4 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-4.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <!---- card 5---->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-5.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-6.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-7.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-8.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-9.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-10.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-11.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-12.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-13.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-14.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-15.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-15.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-16.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-17.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-18.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-19.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-20.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-21.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-22.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-23.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-24.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-25.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-26.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-27.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('Images/impact-28.jpeg') }}"
                    alt="the founder of LSIV"
                   class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>

            </div>
          </div>
          <div class="flex justify-between items-center mb-6 p-4 md:mt-0 mt-[-110px]">
            <h2 class="text-3xl md:text-5xl font-playfair font-normal">
             <!-- Images of Impact -->
            </h2>
           <button
              id="scrollBtn"
              class="text-xl font-semibold font-opensans capitalize md:ml-auto self-end md:self-auto"
            >
              <span class="md:hidden">Next &rarr;</span>
              <span class="hidden md:inline">Scroll &rarr;</span>
            </button>
          </div>

          </section>
      <!-- our approach  -->
      <section class="bg-secondary py-16 rounded">
        <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-6 md:p-4 p-1 md:mt-[-30px] mt-[-40px]">
          <!-- Our Approach List -->
          <h2
            class="md:text-[48px] text-[32px] md:mb-6 m-2 font-playfair font-[500] leading-normal md:p-2"
          >
            Our Approach
          </h2>
          <ul class="custom-bullet-list md:pl-5 font-opensans">
             <li class="flex items-start gap-2 text-[20px]">
              <span class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                </svg>
              </span>
              <div>
                <span class="font-[600]">Rights-Based & Gender-Focused:</span> We ground our
                curriculum in human rights principles and gender equality,
                fostering self-esteem and promoting respectful relationships.
              </div>
            </li>
             <li class="flex items-start gap-2 mt-4 text-[20px]">
              <span class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                </svg>
              </span>
              <div>
                <span class="font-[600]">Beyond Biology:</span> We go beyond simply providing
                factual information about human development and reproduction. Our
                program delves into critical topics like:
                <ul class="list-disc pl-5 space-y-1 mt-3">
                  <li>Family life, culture, and gender roles</li>
                  <li>Media literacy and body image</li>
                  <li>Consent and healthy relationships</li>
                  <li>Human rights, gender equality, and discrimination</li>
                  <li>Sexual abuse prevention</li>
                </ul>
              </div>
            </li>

            <li class="flex items-start gap-2 mt-4 text-[20px]">
              <span class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                </svg>
              </span>
              <div>
                <span class="font-[600]">Interactive Learning:</span> Our engaging curriculum
                encourages critical thinking, clear communication, and responsible
                decision-making through interactive activities and discussions.
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- Images of Impact -->
      <section class="bg-accentTextLight py-16 rounded">
          <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-6 md:p-4 p-1 md:mt-[-30px] mt-[-40px]">
          <!-- IMPACTS List -->
          <div class="mt-2">
            <h2
            class="md:text-[48px] text-[32px] md:mb-2 m-2 font-playfair font-[500] leading-normal md:p-2"
          >
              Impact
            </h3>
            <ul class="custom-bullet-list md:p-4 md:mt-[-30px]">
                 <li class="flex items-start gap-2 mt-4 text-[20px]">
                    <span class="flex-shrink-0 mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                      </svg>
                    </span>
                    <div>
                      <span class="font-[600]">Reaching Thousands:</span> MyBodyIsMine has successfully trained over 3,000 young people across various
                      secondary schools in Nigeria. We are also the official sex education provider for juvenile correctional centres in Lagos State.
                    </div>
                  </li>

                  <li class="flex items-start gap-2 mt-4 text-[20px]">
                    <span class="flex-shrink-0 mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                      </svg>
                    </span>
                    <div>
                      <span class="font-[600]">Global Recognition:</span> Our educational posters, available in four languages, have been used by over 10 million people across Africa, North America, Europe, and Asia.
                    </div>
                  </li>

                  <li class="flex items-start gap-2 mt-4 text-[20px]">
                    <span class="flex-shrink-0 mt-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                      </svg>
                    </span>
                    <div>
                      <span>Shaping the Future:</span> We collaborate with leading organizations like amaze to develop culturally relevant SRH education materials tailored to the realities of young people in Africa.
                    </div>
                  </li>

            </ul>
            <div class=" mt-4 text-base text-[20px] md:p-4">
              <p class="text-[20px]">
                <span class="font-[600]"> MyBodyIsMine</span> equips young people with the
                knowledge and confidence to navigate the complexities of
                adolescence and make informed choices about their sexual and
                reproductive health.
                <span class="font-[600]">
                By investing in SRH education, we invest in a healthier and more
                empowered future for all.
              </span>
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Section Six -->
      <section class="flex flex-col items-center bg-miscellanous py-16">
       <div class="text-center w-full h-auto sm:h-52 md:text-6xl lg:h-auto md:p-0 p-4">
         <h2 class="text-3xl md:text-[60px] font-medium mb-2 md:mb-6 font-playfair">
            Learn more about how you can partner with 
          </h2>
          <h2 class="text-3xl md:text-[60px] font-medium mb-2 md:mb-6 font-playfair">
          with MyBodyIsMine to empower young
        </h2>
        <h2 class="text-3xl md:text-[60px] font-medium mb-2 md:mb-6 font-playfair">
          people in your community.
        </h2>
           <button class="btn-bg-animation hover-effect-arrow" onclick="window.location.href='mailto:info@lsiv.org';">
          <span class="btn-text font-opensans">Contact us <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
      </button>
        </div>
      </section>
    </main>
    @include('components.footer')
  </body>
</html>
