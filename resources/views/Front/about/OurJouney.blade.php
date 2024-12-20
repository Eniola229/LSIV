<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSIV - our journey</title>
    <link rel="stylesheet" href="../style.css" />
  </head>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
  <body>
  @include('components.header')
    <main class="">
      <!-- about the founder Section -->
      <section class="bg-white md:py-16 rounded md:mt-0 mt-[20px]">
        <div class="p-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-row justify-between gap-4 md:mt-[-20px] mt-[-30px]">
            <h1
              class="lg:text-7xl lg:w-1/3 md:text-5xl text-[40px] font-playfair text-left md:text-left md:mb-16 mb-4 font-[500]" style="line-height: normal;"
            >
              Our Journey
            </h1>
            <div class="lg:w-2/3 lg:pl-10 md:mt-0 mt-[-20px]">
              <p
                class="text-accentTextDark font-normal leading-[2.1675rem] mb-6 md:text-[20px] text-[16px] font-opensans"
              style="font-weight: 400; line-height: 30px;">
                Lolo Social Impact Venture (LSIV) originally started as a
                grassroots organization called LoloTalks in 2014. Through our
                school, community, and multimedia advocacy programs and
                campaigns, we focused on enhancing the socioeconomic status and
                well-being of underrepresented individuals, specifically girls,
                women, children, and youth.
              </p>
            </div>
          </div>
          <!-- Image Section -->
          <div class="my-6 w-full h-96">
            <img
              src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350225/IMG_1000_2_fklaro.jpg') }}"
              alt="the founder of LSIV"
              class="w-full h-full object-cover object-center rounded-md"
            />
          </div>

          <div class="flex flex-col lg:flex-col justify-between gap-4 mt-12">
          <div class="lg:w-[80%]">
            <h2
              class="md:text-[60px] text-[32px] mb-6 font-playfair font-semibold leading-normal"
              style="font-weight: 500; line-height: normal;">
              However, in 2023, <br> we strategically shifted to become a social
              impact consulting firm.
            </h2>
          </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 lg:pl-10 lg:ml-52">
              <p
                class="text-accentTextDark font-normal leading-[2.1675rem] mb-6 md:text-[20px] text-[16px] font-opensans"
              style="font-weight: 400; line-height: 30px;">
                We leverage our deep understanding of the complex dynamics of
                social impact work and practical, effective strategies for
                grassroots initiatives, media, and digital advocacy to help
                organizations amplify their social impact goals.
              </p>
            </div>
          </div>
        </div>
      </section>

    <!-- We’ve been pushing since 2014 click slider-->
    <section class="bg-miscellanous py-16 rounded">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
        <h2
          class="md:text-[60px] text-[32px] mb-6 font-playfair font-semibold leading-normal"
          style="font-weight: 500; line-height: normal;"
        >
          We’ve been pushing since 2014
        </h2>
        <hr class="border-none h-[1px] bg-[#4A5310] mb-4 md:mb-6" />
     <div class="container overflow-x-auto hide-scrollbar p-4">
  <!-- Wrapper for Responsive Grid -->
  <div class="flex flex-row gap-4 items-stretch min-w-[120rem] divide-x divide-[#121D2F80]">
    
    <!-- Card 1 -->
    <div class="p-4 items-center w-[30rem] font-opensans flex flex-col justify-between h-full">
      <div class="w-full h-[14.125rem]">
        <img
          src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734695151/selfie_t5igug.jpg') }}"
          alt="the founder of LSIV"
          class="w-full h-full object-cover object-center rounded-[20px]"
        />
      </div>
      <div class="my-6 space-y-4">
        <h3 class="text-3xl leading-[2.27rem] mt-2 font-semibold">2014</h3>
        <p class="font-normal font-opensans font-[400]" style="line-height: 36px;">
          Founded as a grassroots organization empowering women, children, and youth.
        </p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="p-4 items-center w-[30rem] font-opensans flex flex-col justify-between h-full">
      <div class="w-full h-[14.125rem]">
        <img
          src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734695517/24491159509abdc6f1220915d90df530_bebdfy.jpg') }}"
          alt="the founder of LSIV"
          class="w-full h-full object-cover object-center rounded-[20px]"
        />
      </div>
      <div class="my-6 space-y-4">
        <h3 class="text-3xl leading-[2.27rem] mt-2 font-semibold">2015</h3>
         <p class="font-normal font-opensans font-[400]" style="line-height: 36px;">
          Launched "The Conversation," our first youth conference, fostering mentorship and personal development.
        </p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="p-4 items-center w-[30rem] font-opensans flex flex-col justify-between h-full">
      <div class="w-full h-[14.125rem]">
        <img
          src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350018/54521716_2088500577908409_6915712892130033664_n_lkmuku.jpg') }}"
          alt="the founder of LSIV"
          class="w-full h-full object-cover object-center rounded-[20px]"
        />
      </div>
      <div class="my-6 space-y-4">
        <h3 class="text-3xl leading-[2.27rem] mt-2 font-semibold">2017</h3>
         <p class="font-normal font-opensans font-[400]" style="line-height: 36px;">
          Expanded through documentaries (Stories Untold) and community-based initiative - Adopt a Community, addressing the pressing needs in underserved communities.
        </p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="p-4 items-center w-[30rem] font-opensans flex flex-col justify-between h-full">
      <div class="w-full h-[14.125rem]">
        <img
          src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350125/19800101000428_IMG_3822_rxuczc.jpg') }}"
          alt="the founder of LSIV"
          class="w-full h-full object-cover object-center rounded-[20px]"
        />
      </div>
      <div class="my-6 space-y-4">
        <h3 class="text-3xl leading-[2.27rem] mt-2 font-semibold">2018</h3>
         <p class="font-normal font-opensans font-[400]" style="line-height: 36px;">
          Introduced "MyBodyIsMine" program for comprehensive sexuality education and the "No Day Off" initiative to address period poverty.
        </p>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="p-4 items-center w-[30rem] font-opensans flex flex-col justify-between h-full">
      <div class="w-full h-[14.125rem]">
        <img
          src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350003/51552833_1034622810054230_7910197635917545472_n_i5ihmr.jpg') }}"
          alt="the founder of LSIV"
          class="w-full h-full object-cover object-center rounded-[20px]"
        />
      </div>
      <div class="my-6 space-y-4">
        <h3 class="text-3xl leading-[2.27rem] mt-2 font-semibold">2019</h3>
         <p class="font-normal font-opensans font-[400]" style="line-height: 36px;">
          Launched the "Muta" educational platform and "Unveil with Lolo" interview series.
        </p>
      </div>
    </div>

    <!-- Card 6 -->
    <div class="p-4 items-center w-[30rem] font-opensans flex flex-col justify-between h-full">
      <div class="w-full h-[14.125rem]">
        <img
          src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734696412/Frame_16_1_nkzp1i.png') }}"
          alt="the founder of LSIV"
          class="w-full h-full object-cover object-center rounded-[20px]"
        />
      </div>
      <div class="my-6 space-y-4">
        <h3 class="text-3xl leading-[2.27rem] mt-2 font-semibold">2020</h3>
         <p class="font-normal font-opensans font-[400]" style="line-height: 36px;">
          Managed "Women Crisis Centre" in response to COVID-19, providing funds for women entrepreneurs and GBV Prevention sensitisation programs.
        </p>
      </div>
    </div>

    <!-- Card 7 -->
    <div class="p-4 items-center w-[30rem] font-opensans flex flex-col justify-between h-full">
      <div class="w-full h-[14.125rem]">
        <img
          src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734696553/Frame_16_2_ns2qvr.png') }}"
          alt="the founder of LSIV"
          class="w-full h-full object-cover object-center rounded-[20px]"
        />
      </div>
      <div class="my-6 space-y-4">
        <h3 class="text-3xl leading-[2.27rem] mt-2 font-semibold">2023</h3>
         <p class="font-normal font-opensans font-[400]" style="line-height: 36px;">
          Transitioned to a consulting firm, expanding impact through strategic partnerships and advocacy.
        </p>
      </div>
    </div>
  </div>
</div>
  <div class="flex justify-between items-center mb-6">
              <h2 class="text-3xl md:text-5xl font-playfair font-normal">
                <!-- Images of Impact -->
              </h2>
              <button id="scrollBtn" class="text-xl font-semibold capitalize">
                Next &rarr;
              </button>
            </div>
</section>

      <!-- Our Key Achievements -->
      <section class="bg-accentTextLight py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <h2
            class="md:text-6xl text-[32px] mb-12 font-playfair font-medium leading-normal"
          style="font-weight: 500;">
            Our Key Achievements
          </h2>
          <!-- COnatainner flex -->
          <div class="flex flex-col gap-12">
            <!-- flex card 1 -->
            <div
              class="flex flex-col md:flex-row-reverse items-center justify-between gap-4 relative"
            >
              <!-- Image Section -->
              <div></div>
              <div class="lg:mt-18 lg:w-1/2 h-auto md:h-80 text-xl md:absolute">
                <img
                  src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734349991/43773372_1864694993622303_7392058420620165120_n_dq1skt.jpg') }}"
                  alt="the founder of LSIV "
                  class="w-full h-full object-cover rounded-[20px]"
                />
              </div>
              <!-- Text Section -->
              <div class="lg:w-2/3 md:p-12 p-6 rounded-[20px] bg-secondary font-opensans">
                <div>
                  <h2
                    class="md:text-[32px] text-[24px] mb-6 font-[600] font-opensans"
                  style="line-height: 44px;">
                    Empowering Youth
                  </h2>
                  <ul
                    class="custom-bullet-list text-accentTextDark font-[400] leading-[2.1675rem] md:text-xl md:mr-48"
                  >
                    <li class="flex gap-2 mb-2 font-[16px]" style="line-height: normal;letter-spacing: 0.32px;">
                       <span class="mt-3">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                       Trained over 3,000 secondary school students through the
                      "MyBodyIsMine" program.
                    </li>
                    <li class="flex gap-2 mb-2 font-[16px]" style="line-height: normal;letter-spacing: 0.32px;">
                       <span class="mt-4">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                      Hosted a conference attended by over 100 students,
                      offering mentorship and learning opportunities.
                    </li>
                    <li class="flex gap-2 mb-2 font-[16px]" style="line-height: normal;letter-spacing: 0.32px;">
                       <span class="mt-4">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                      Partnered with the Lagos State Juvenile Prison to provide
                      sex education classes for 80 juvenile boys.
                    </li>
                    <li class="flex gap-2 mb-2 font-[16px]" style="line-height: normal;letter-spacing: 0.32px;">
                       <span class="mt-4">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                      Educational sex-ed posters, available in four languages,
                      used by over 10 million people across Africa, North
                      America, Europe & Asia.
                    </li>
                    <li class="flex gap-2 mb-2 font-[16px]" style="line-height: normal;letter-spacing: 0.32px;">
                       <span class="mt-4">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                      Collaborated with AMAZE to develop African-friendly
                      teenage school posters.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- flex card 2 -->
            <div
              class="flex flex-col md:flex-row-reverse items-center justify-between gap-4 relative "
            >
              <!-- Image Section -->
              <div></div>
              <div class="lg:mt-20 lg:w-1/2 h-auto md:h-80 text-xl md:absolute">
                <img
                  src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350081/69990011_2378336112258186_7583249744500097024_n_tmty7l.jpg') }}"
                  alt="the founder of LSIV "
                  class="w-full h-full object-cover rounded-[20px]"
                />
              </div>
              <!-- Text Section -->
              <div class="lg:w-2/3 md:p-12 p-6 rounded-[20px] bg-secondary font-opensans">
                <div>
                   <h2
                    class="md:text-[32px] text-[24px] mb-6 font-[600] font-opensans"
                  style="line-height: 44px;">
                    Improving Health Outcomes
                  </h2>
                  <ul
                    class="custom-bullet-list text-accentTextDark leading-[2.1675rem] md:text-xl md:mr-48"
                  >
                    <li class="flex gap-2 mb-2 font-[16px]" style="line-height: normal;letter-spacing: 0.32px;">
                       <span class="mt-4">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                      Distributed over 600 sanitary pads and 4,000 condoms to
                      sex workers and community members through the Adopt a
                      Community initiative.
                    </li>
                    <li class="flex gap-2 mb-2 font-[16px]" style="line-height: normal;letter-spacing: 0.32px;">
                       <span class="mt-4">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                      Delivered six sensitization programs on menstrual hygiene,
                      domestic abuse, and safe sex in Lagos State slums.
                    </li>
                    <li class="flex gap-2 mb-2 font-[16px]" style="line-height: normal;letter-spacing: 0.32px;">
                       <span class="mt-4">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                      Partnered with the State Government and trained over 250
                      girls and adolescents on menstrual hygiene and the
                      creation of reusable pads through the No Days Off
                      initiative.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- flex card 3 -->
            <div
              class="flex flex-col md:flex-row-reverse items-center justify-between gap-4 relative"
            >
              <!-- Image Section -->
              <div></div>
              <div class="lg:mt-20 lg:w-1/2 h-auto md:h-80 text-xl md:absolute">
                <img
                  src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350054/67416684_1135248263325017_6127027789867515904_n_pgaqox.jpg') }}"
                  alt="the founder of LSIV "
                  class="w-full h-full object-cover rounded-[20px]"
                />
              </div>
              <!-- Text Section -->
              <div class="lg:w-2/3 md:p-12 p-6 rounded-[20px] bg-secondary font-opensans">
                <div>
                  <h2
                    class="md:text-[32px] text-[24px] mb-6 font-[600] font-opensans"
                  style="line-height: 44px;">
                    Media Influence & Community Transformation
                  </h2>
                  <ul
                    class="custom-bullet-list text-accentTextDark leading-[2.1675rem] md:text-xl md:mr-48"
                  >
                    <li class="flex gap-2 mb-2 mb-2">
                       <span class="mt-4">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                      Produced The Lolo Cynthia Show, curating stories from six
                      African countries. This led to significant donations and
                      educational impacts, including a grant for an orphanage in
                      South Africa.
                    </li>
                    <li class="flex gap-2 mb-2 font-[16px]" style="line-height: normal;letter-spacing: 0.32px;">
                       <span class="mt-4">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                      Produced documentaries under Stories Unheard, reaching
                      over 500,000 viewers and republished by CNN Africa.
                    </li>
                    <li class="flex gap-2 mb-2 font-[16px]" style="line-height: normal;letter-spacing: 0.32px;">
                       <span class="mt-4">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                      Implemented successful initiatives addressing issues like
                      menstrual hygiene, gender-based violence, and economic
                      empowerment.
                    </li>
                    <li class="flex gap-2 mb-2 font-[16px]" style="line-height: normal;letter-spacing: 0.32px;">
                       <span class="mt-4">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                      Garnered over 1 million impressions of digital advocacy
                      campaigns.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section for Clients & Partners -->
            @include('components.clients')
      <!-- Section Seven -->
      @include('components.section-one')
    </main>
    @include('components.footer')
  </body>
</html>

<!-- Hide scrollbar CSS -->
<style>
  /* Hide scrollbar but keep scroll functionality */
  .hide-scrollbar::-webkit-scrollbar {
    display: none; /* Hide scrollbar in WebKit browsers */
  }
  .hide-scrollbar {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;     /* Firefox */
  }
</style>

<!-- JavaScript for horizontal scrolling on mouse wheel -->
<script>
  // Enable horizontal scroll with mouse wheel
  const container = document.querySelector('.container');

  container.addEventListener('wheel', (event) => {
    event.preventDefault();
    container.scrollLeft += event.deltaY;  // Horizontal scroll based on vertical wheel movement
  });
</script>
