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
      
    <main class="bg-[#F8F8FF]">
       @include('components.header')
      <!-- Lolo Social Impact Venture is a dedicated force for positive change.  -->
      <section class="md:py-16 md:p-6 p-2 rounded md:mt-0 mt-[30px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-row justify-between gap-8 md:mt-0 mt-[-30px]">
            <!-- Image Section -->
            <div class="lg:w-2/4 w-full lg:h-[38rem] hidden md:block">
              <img
                src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734699680/Frame_1618873174_1_kvc2va.png') }}"
                alt="the founder of LSIV "
                class="w-full h-full object-cover object-center rounded-[20px]"
              />
            </div>
            <div class="lg:w-1/2">
              <h1
                class="md:text-4xl lg:text-7xl text-[#000] text-[40px] mb-6 font-playfair font-[500]"
              style="line-height: normal;">
                Lolo Social Impact Venture is a dedicated force for positive
                change.
              </h1>
            <div class="lg:w-2/4 w-full lg:h-[38rem] md:hidden mb-2">
              <img
                src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734699680/Frame_1618873174_1_kvc2va.png') }}"
                alt="the founder of LSIV "
                class="w-full h-full object-cover object-center rounded-[20px]"
              />
            </div>
              <p
                class="text-accentTextDark font-[400] leading-[2.1675rem] mb-12 md:text-xl md:mt-12 text-[16px] font-opensans"
              style="line-height: 32px;">
                We drive impactful solutions through strategic advocacy,
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
      <section class="bg-miscellanous py-16 md:p-6 p-2 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-row-reverse justify-between gap-8">
            <!-- Image Section -->
            <div class="lg:w-2/4 w-full lg:h-[38rem] hidden lg:block">
              <img
                src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734698859/Frame_1618873174_telomb.png') }}"
                alt="the founder of LSIV "
                class="w-full h-full object-cover object-center rounded-[20px]"
              />
            </div>
            <div class="lg:w-1/2">
              <h2
                class="md:text-4xl lg:text-7xl text-[40px] mb-6 font-playfair font-[500] leading-normal"
              style="line-height: normal;" >
                We connect grassroots voices with powerful platforms.
              </h2>
              <div class="lg:w-2/4 w-full lg:h-[38rem] mb-6 lg:hidden">
              <img
                src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734698859/Frame_1618873174_telomb.png') }}"
                alt="the founder of LSIV "
                class="w-[540px] h-full object-cover object-center rounded-[20px]"
              />
            </div>
              <p
                class="text-accentTextDark font-[400] leading-[2.1675rem] mb-6 md:text-xl text-[16px] font-opensans"
                style="line-height: 32px;">
                At LSIV, we bridge the gap between grassroots efforts and
                high-level advocacy, ensuring marginalized communities are not
                only heard but compellingly represented. Our approach leverages
                cutting-edge digital strategies and powerful storytelling to
                create lasting impact.
              </p>
              <p
                class="text-accentTextDark font-[400] leading-[2.1675rem] mb-6 md:text-xl text-[16px] font-opensans"
                style="line-height: 32px;">
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

        <section class="md:p-6 p-2">
          <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-6 p-4">
            <h2 class="text-[40px] font-[500] md:text-5xl font-playfair font-normal mb-4 md:mb-0">
              Behind the Scenes
            </h2>
           <button
              id="scrollBtn"
              class="text-xl font-semibold font-opensans capitalize md:ml-auto self-end md:self-auto"
            >
              <span class="md:hidden">Next &rarr;</span>
              <span class="hidden md:inline">Scroll &rarr;</span>
            </button>
          </div>


          <div class="overflow-hidden w-full">
            <div
              class="flex transition-transform duration-500 ease-in-out md:p-4 w-max mt-[-20px]"
              id="carouselTrack"
            >
              <!-- card 1 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                  <img
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350326/IMG_6546_ikso7r.jpg') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734349971/0D9A6924_temxo7.jpg') }}"
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
                   src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734349991/43257432_1858499677575168_1758007767261511680_n_hsgf3j.jpg') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350201/IMG_0586_e8sd4i.jpg') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350044/62357438_1111685199014657_3678541791402917888_n_cnhbr7.jpg') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350276/IMG_2818_edsmfn.jpg') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350064/69112067_1153370294846147_2650976651155865600_n_sskehr.jpg') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350290/IMG_5286_kq83tz.jpg') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350065/69724045_2360416394050158_1976294321824989184_n_yu7ixt.jpg') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350078/69933767_2378336265591504_2508679260743401472_n_iqxx88.jpg') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350206/DSC_2880_jqtdts.jpg') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350078/69930718_2360416357383495_6496694920659599360_n_gbfdb7.jpg') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350206/IMG_0613_jnwmy8.jpg') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350215/IMG_0916_2_sx8fu8.jpg') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734702316/Frame_1618873240_v33uzj.png') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734702408/Frame_1618873238_ukxhhb.png') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734702441/Frame_1618873216_o3kq84.png') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734702441/Frame_1618873235_cvxtme.png') }}"
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
                    src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350263/IMG_1991_nr2gy2.jpg') }}"
                    alt="the founder of LSIV"
                    class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                  />
                </div>
              </div>

            </div>
          </div>
          </section>
      <!-- Our vision and mission -->
      <section class="bg-[#F8F8FF] md:py-16 md:p-6 p-2 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- COnatainner flex -->
          <div class="flex flex-col gap-12">
            <!-- flex card  -->
              <div class="flex flex-col md:flex-row items-stretch justify-between gap-6 relative">
                <!-- Vision Section -->
                <div class="lg:w-2/3 md:p-8 p-6 rounded-[16px] bg-[#FFC6DB] flex flex-col h-82">
                  <div class="flex-grow">
                    <h2 class="md:text-5xl text-[32px] mb-6 font-playfair leading-normal font-[500]">
                      Our Vision
                    </h2>
                    <p class="text-accentTextDark font-[400] font-opensans leading-[2.1675rem] mb-6 md:text-xl text-[16px] font-[400]">
                      We envision a world where every individual and community has
                      the opportunity to thrive. A world where gender equality is
                      the norm, health and well-being are prioritized, educational
                      opportunities are accessible, livelihoods are sustainable,
                      and the environment is protected for future generations.
                    </p>
                  </div>
                </div>

                <!-- Mission Section -->
                <div class="lg:w-2/3 md:p-8 p-6 rounded-[16px] bg-[#FFDED0] flex flex-col h-82">
                  <div class="flex-grow">
                    <h2 class="md:text-5xl text-[32px] mb-6 font-playfair leading-normal font-[500]">
                      Our Mission
                    </h2>
                    <p class="text-accentTextDark font-[400] font-opensans leading-[2.1675rem] mb-6 md:text-xl text-[16px] font-[400]">
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
      <section class=" py-16 md:p-6 p-2 rounded md:mt-0 mt-[-40px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- GRID -->
          <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
            <div class="p-4 md:h-[15.9375rem] h-auto w-full">
              <h2
                class="md:text-7xl md:text-6xl text-[40px] mb-6 font-playfair leading-normal font-[500]"
              >
                What Makes Us Unique ?
              </h2>
            </div>
            <!-- card one -->
            <div
              class="p-6 bg-secondary rounded-[16px] h-[15.9375rem] w-full font-opensans flex flex-col justify-between"
            >
              <h3
                class="md:text-[2rem] text-[24px] leading-[2.272375rem] font-[600] md:font-[600]"
              >
                Deep-rooted Expertise
              </h3>
              <p class="font-[400] text-base font-opensans">
                Our team possesses in-depth knowledge of the subject matters we
                advocate for, allowing us to develop more targeted and impactful
                campaigns.
              </p>
            </div>
            <!-- card 2 -->
            <div
              class="p-6 bg-miscellanous rounded-[16px] h-[15.9375rem] w-full font-opensans flex flex-col justify-between"
            >
              <h3
                class="md:text-[2rem] text-[24px] leading-[2.272375rem] font-[600] md:font-[600]"
              >
                Collaborative Approach
              </h3>
              <p class="font-[400] text-base font-opensans">
                We engage deeply with communities, understanding their needs and
                amplifying their stories through innovative digital strategies.
              </p>
            </div>
            <!-- card 3 -->
            <div
              class="p-6 bg-[#FFDED0] rounded-[16px] h-[15.9375rem] w-full font-opensans flex flex-col justify-between"
            >
              <h3
                class="md:text-[2rem] text-[24px] leading-[2.272375rem] font-[600] md:font-[600]"
              >
                Global Impact
              </h3>
              <p class="font-[400] text-base font-opensans">
                Our ability to translate local insights into global action sets
                us apart. We form strategic partnerships across sectors to
                foster sustainable solutions to complex social issues.
              </p>
            </div>
            <!-- card 4 -->
            <div
              class="p-6 bg-[#DDC2FF] rounded-[16px] h-[15.9375rem] w-full font-opensans flex flex-col justify-between"
            >
              <h3
                class="md:text-[2rem] text-[24px] leading-[2.272375rem] font-[600] md:font-[600]"
              >
                Results-Driven
              </h3>
              <p class="font-[400] text-base font-opensans">
                Our commitment to rigorous research, participatory methods, and
                evidence-based strategies guarantees that our interventions are
                both effective and empowering.
              </p>
            </div>
            <!-- card 5 -->
            <div
              class="p-6 bg-[#FFE4BB] rounded-[16px] h-[15.9375rem] w-full font-opensans flex flex-col justify-between"
            >
              <h3
                class="md:text-[2rem] text-[24px] leading-[2.272375rem] font-[600] md:font-[600]"
              >
                Holistic Approach
              </h3>
              <p class="font-[400] text-base font-opensans">
                We integrate education, advocacy, and storytelling to help our
                clients communicate their impact in ways that inspire and
                mobilize.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- meet our team -->
      <section class="bg-secondary py-16 rounded ">
        <div class="max-w-7xl mx-auto px-2 sm:px-2 lg:px-6">
          <h2
            class="md:text-7xl text-5xl md:mb-4 mb-2 font-playfair text-center leading-normal font-[500]"
          >
            Meet The Team
          </h2>
          <div class="container mx-auto px-4 py-16 justify-items-center md:mt-[-20px] mt-[-30px]">
            <!-- team grid -->
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-12 justify-items-center">
              <!-- Team Member Card 1 -->
              <div class="bg-white rounded-[30px] p-6 text-center shadow-md w-72">
                <img
                  src="{{ asset('Images/ceo-lolo.png') }}"
                  alt="Team member photo"
                  class="w-24 h-24 mx-auto rounded-full mb-4 object-cover object-center"
                />
                <h2
                  class="text-xl font-[600] font-opensans "
                  
                >
                  Lolo Cynthia
                </h2>
                <p class="font-[400] mb-4 mt-4 font-opensans font-[400]">Executive Director</p>
                <a
                  href="https://www.linkedin.com/in/lolocynthia/ "
                  class="inline-block mt-4 text-black hover:text-orange-500"
                >
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M30 5C31.3261 5 32.5979 5.52678 33.5355 6.46447C34.4732 7.40215 35 8.67392 35 10V30C35 31.3261 34.4732 32.5979 33.5355 33.5355C32.5979 34.4732 31.3261 35 30 35H10C8.67392 35 7.40215 34.4732 6.46447 33.5355C5.52678 32.5979 5 31.3261 5 30V10C5 8.67392 5.52678 7.40215 6.46447 6.46447C7.40215 5.52678 8.67392 5 10 5H30ZM13.3333 16.6667C12.8913 16.6667 12.4674 16.8423 12.1548 17.1548C11.8423 17.4674 11.6667 17.8913 11.6667 18.3333V26.6667C11.6667 27.1087 11.8423 27.5326 12.1548 27.8452C12.4674 28.1577 12.8913 28.3333 13.3333 28.3333C13.7754 28.3333 14.1993 28.1577 14.5118 27.8452C14.8244 27.5326 15 27.1087 15 26.6667V18.3333C15 17.8913 14.8244 17.4674 14.5118 17.1548C14.1993 16.8423 13.7754 16.6667 13.3333 16.6667ZM18.3333 15C17.8913 15 17.4674 15.1756 17.1548 15.4882C16.8423 15.8007 16.6667 16.2246 16.6667 16.6667V26.6667C16.6667 27.1087 16.8423 27.5326 17.1548 27.8452C17.4674 28.1577 17.8913 28.3333 18.3333 28.3333C18.7754 28.3333 19.1993 28.1577 19.5118 27.8452C19.8244 27.5326 20 27.1087 20 26.6667V20.5667C20.5083 19.9933 21.3667 19.32 22.3217 18.9117C22.8767 18.675 23.7117 18.5783 24.2917 18.7617C24.4841 18.8105 24.6554 18.9204 24.78 19.075C24.8667 19.1917 25 19.4517 25 20V26.6667C25 27.1087 25.1756 27.5326 25.4882 27.8452C25.8007 28.1577 26.2246 28.3333 26.6667 28.3333C27.1087 28.3333 27.5326 28.1577 27.8452 27.8452C28.1577 27.5326 28.3333 27.1087 28.3333 26.6667V20C28.3333 18.8833 28.05 17.89 27.46 17.0933C26.9171 16.3709 26.1573 15.8412 25.2917 15.5817C23.7883 15.11 22.1233 15.3717 21.0117 15.8483C20.6558 16.0014 20.3091 16.175 19.9733 16.3683C19.9035 15.9843 19.701 15.637 19.4013 15.3869C19.1016 15.1369 18.7237 14.9999 18.3333 15ZM13.3333 11.6667C12.8913 11.6667 12.4674 11.8423 12.1548 12.1548C11.8423 12.4674 11.6667 12.8913 11.6667 13.3333C11.6667 13.7754 11.8423 14.1993 12.1548 14.5118C12.4674 14.8244 12.8913 15 13.3333 15C13.7754 15 14.1993 14.8244 14.5118 14.5118C14.8244 14.1993 15 13.7754 15 13.3333C15 12.8913 14.8244 12.4674 14.5118 12.1548C14.1993 11.8423 13.7754 11.6667 13.3333 11.6667Z" fill="#0B0B0B"/>
                </svg>

                </a>
              </div>

              <!-- Team Member Card 2 -->
              <div class="bg-white rounded-[30px] p-6 text-center shadow-md w-72">
                <img
                  src="{{ asset('Images/team-2.png') }}"
                  alt="Team member photo"
                  class="w-24 h-24 mx-auto rounded-full mb-4 object-cover object-center"
                />
                <h2
                  class="text-xl font-[600] font-opensans"
                  
                >
                Bumai Blessing
                </h2>
                <p class="font-[400] mb-4 mt-4 font-opensans">Social Media and Communications Officer</p>
                <a
                  href="https://bumaiblessing.com/"
                  class="inline-block mt-4 text-black hover:text-orange-500"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                    <path d="M14 18H2V27C2 27.796 2.316 28.559 2.879 29.121C3.441 29.684 4.204 30 5 30H26C26.796 30 27.559 29.684 28.121 29.121C28.684 28.559 29 27.796 29 27V18H17V21H14V18ZM14 16.5H0.5V7.5C0.5 5.85 1.85 4.5 3.5 4.5H9.5V3C9.5 2.204 9.816 1.441 10.379 0.879C10.941 0.316 11.704 0 12.5 0H18.5C19.296 0 20.059 0.316 20.621 0.879C21.184 1.441 21.5 2.204 21.5 3V4.5H27.5C28.296 4.5 29.059 4.816 29.621 5.379C30.184 5.941 30.5 6.704 30.5 7.5V16.5H17V13.5H14V16.5ZM18.5 4.5V3H12.5V4.5H18.5Z" fill="#0B0B0B"/>
                  </svg>


                </a>
              </div>

              <!-- Team Member Card 3 -->
              <div class="bg-white rounded-[30px] p-6 text-center shadow-md w-72">
                <img
                   src="{{ asset('Images/team-3.png') }}"
                  alt="Team member photo"
                  class="w-24 h-24 mx-auto rounded-full mb-4 object-cover object-center"
                />
                <h2
                  class="text-xl font-[600] font-opensans"
                  
                >
                  Sherine Achieng
                </h2>
                <p class="font-[400] mb-4 mt-4 font-opensans">Senior Advocacy Officer</p>
                <a
                  href="https://www.linkedin.com/in/sherine-achieng-96bb602a7/?trk=people-guest_people_search-card&originalSubdomain=ke"
                  class="inline-block mt-4 text-black hover:text-orange-500"
                >
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M30 5C31.3261 5 32.5979 5.52678 33.5355 6.46447C34.4732 7.40215 35 8.67392 35 10V30C35 31.3261 34.4732 32.5979 33.5355 33.5355C32.5979 34.4732 31.3261 35 30 35H10C8.67392 35 7.40215 34.4732 6.46447 33.5355C5.52678 32.5979 5 31.3261 5 30V10C5 8.67392 5.52678 7.40215 6.46447 6.46447C7.40215 5.52678 8.67392 5 10 5H30ZM13.3333 16.6667C12.8913 16.6667 12.4674 16.8423 12.1548 17.1548C11.8423 17.4674 11.6667 17.8913 11.6667 18.3333V26.6667C11.6667 27.1087 11.8423 27.5326 12.1548 27.8452C12.4674 28.1577 12.8913 28.3333 13.3333 28.3333C13.7754 28.3333 14.1993 28.1577 14.5118 27.8452C14.8244 27.5326 15 27.1087 15 26.6667V18.3333C15 17.8913 14.8244 17.4674 14.5118 17.1548C14.1993 16.8423 13.7754 16.6667 13.3333 16.6667ZM18.3333 15C17.8913 15 17.4674 15.1756 17.1548 15.4882C16.8423 15.8007 16.6667 16.2246 16.6667 16.6667V26.6667C16.6667 27.1087 16.8423 27.5326 17.1548 27.8452C17.4674 28.1577 17.8913 28.3333 18.3333 28.3333C18.7754 28.3333 19.1993 28.1577 19.5118 27.8452C19.8244 27.5326 20 27.1087 20 26.6667V20.5667C20.5083 19.9933 21.3667 19.32 22.3217 18.9117C22.8767 18.675 23.7117 18.5783 24.2917 18.7617C24.4841 18.8105 24.6554 18.9204 24.78 19.075C24.8667 19.1917 25 19.4517 25 20V26.6667C25 27.1087 25.1756 27.5326 25.4882 27.8452C25.8007 28.1577 26.2246 28.3333 26.6667 28.3333C27.1087 28.3333 27.5326 28.1577 27.8452 27.8452C28.1577 27.5326 28.3333 27.1087 28.3333 26.6667V20C28.3333 18.8833 28.05 17.89 27.46 17.0933C26.9171 16.3709 26.1573 15.8412 25.2917 15.5817C23.7883 15.11 22.1233 15.3717 21.0117 15.8483C20.6558 16.0014 20.3091 16.175 19.9733 16.3683C19.9035 15.9843 19.701 15.637 19.4013 15.3869C19.1016 15.1369 18.7237 14.9999 18.3333 15ZM13.3333 11.6667C12.8913 11.6667 12.4674 11.8423 12.1548 12.1548C11.8423 12.4674 11.6667 12.8913 11.6667 13.3333C11.6667 13.7754 11.8423 14.1993 12.1548 14.5118C12.4674 14.8244 12.8913 15 13.3333 15C13.7754 15 14.1993 14.8244 14.5118 14.5118C14.8244 14.1993 15 13.7754 15 13.3333C15 12.8913 14.8244 12.4674 14.5118 12.1548C14.1993 11.8423 13.7754 11.6667 13.3333 11.6667Z" fill="#0B0B0B"/>
                </svg>

                </a>
              </div>
              <!-- Team Member Card 5 -->
              <div class="bg-white rounded-[30px] p-6 text-center shadow-md w-72">
                <img
                   src="{{ asset('Images/team-4.png') }}"
                  alt="Team member photo"
                  class="w-24 h-24 mx-auto rounded-full mb-4 object-cover object-center"
                />
                <h2
                  class="text-xl font-[600] font-opensans"
                  
                >
                  Eunice Gatonye
                </h2>
                <p class="font-[400] mb-4 mt-4 font-opensans">PR and Media Specialist</p>
                <a
                  href="https://www.linkedin.com/in/eunice-gatonye/"
                  class="inline-block mt-4 text-black hover:text-orange-500"
                >
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M30 5C31.3261 5 32.5979 5.52678 33.5355 6.46447C34.4732 7.40215 35 8.67392 35 10V30C35 31.3261 34.4732 32.5979 33.5355 33.5355C32.5979 34.4732 31.3261 35 30 35H10C8.67392 35 7.40215 34.4732 6.46447 33.5355C5.52678 32.5979 5 31.3261 5 30V10C5 8.67392 5.52678 7.40215 6.46447 6.46447C7.40215 5.52678 8.67392 5 10 5H30ZM13.3333 16.6667C12.8913 16.6667 12.4674 16.8423 12.1548 17.1548C11.8423 17.4674 11.6667 17.8913 11.6667 18.3333V26.6667C11.6667 27.1087 11.8423 27.5326 12.1548 27.8452C12.4674 28.1577 12.8913 28.3333 13.3333 28.3333C13.7754 28.3333 14.1993 28.1577 14.5118 27.8452C14.8244 27.5326 15 27.1087 15 26.6667V18.3333C15 17.8913 14.8244 17.4674 14.5118 17.1548C14.1993 16.8423 13.7754 16.6667 13.3333 16.6667ZM18.3333 15C17.8913 15 17.4674 15.1756 17.1548 15.4882C16.8423 15.8007 16.6667 16.2246 16.6667 16.6667V26.6667C16.6667 27.1087 16.8423 27.5326 17.1548 27.8452C17.4674 28.1577 17.8913 28.3333 18.3333 28.3333C18.7754 28.3333 19.1993 28.1577 19.5118 27.8452C19.8244 27.5326 20 27.1087 20 26.6667V20.5667C20.5083 19.9933 21.3667 19.32 22.3217 18.9117C22.8767 18.675 23.7117 18.5783 24.2917 18.7617C24.4841 18.8105 24.6554 18.9204 24.78 19.075C24.8667 19.1917 25 19.4517 25 20V26.6667C25 27.1087 25.1756 27.5326 25.4882 27.8452C25.8007 28.1577 26.2246 28.3333 26.6667 28.3333C27.1087 28.3333 27.5326 28.1577 27.8452 27.8452C28.1577 27.5326 28.3333 27.1087 28.3333 26.6667V20C28.3333 18.8833 28.05 17.89 27.46 17.0933C26.9171 16.3709 26.1573 15.8412 25.2917 15.5817C23.7883 15.11 22.1233 15.3717 21.0117 15.8483C20.6558 16.0014 20.3091 16.175 19.9733 16.3683C19.9035 15.9843 19.701 15.637 19.4013 15.3869C19.1016 15.1369 18.7237 14.9999 18.3333 15ZM13.3333 11.6667C12.8913 11.6667 12.4674 11.8423 12.1548 12.1548C11.8423 12.4674 11.6667 12.8913 11.6667 13.3333C11.6667 13.7754 11.8423 14.1993 12.1548 14.5118C12.4674 14.8244 12.8913 15 13.3333 15C13.7754 15 14.1993 14.8244 14.5118 14.5118C14.8244 14.1993 15 13.7754 15 13.3333C15 12.8913 14.8244 12.4674 14.5118 12.1548C14.1993 11.8423 13.7754 11.6667 13.3333 11.6667Z" fill="#0B0B0B"/>
                </svg>

                </a>
              </div>
              <!-- Team Member Card 6 -->
              <div class="bg-white rounded-[30px] p-6 text-center shadow-md w-72">
                <img
                   src="{{ asset('Images/team-5.png') }}"
                  alt="Team member photo"
                  class="w-24 h-24 mx-auto rounded-full mb-4 object-cover object-center"
                />
                <h2
                  class="text-xl font-[600] font-opensans"
                  
                >
                  Martha Aosa
                </h2>
                <p class="font-[400] mb-4 mt-4 font-opensans">Digital Communications Manager</p>
                <a
                  href="https://www.linkedin.com/in/martha-aosa-9a1b64163/?originalSubdomain=ke"
                  class="inline-block mt-4 text-black hover:text-orange-500"
                >
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M30 5C31.3261 5 32.5979 5.52678 33.5355 6.46447C34.4732 7.40215 35 8.67392 35 10V30C35 31.3261 34.4732 32.5979 33.5355 33.5355C32.5979 34.4732 31.3261 35 30 35H10C8.67392 35 7.40215 34.4732 6.46447 33.5355C5.52678 32.5979 5 31.3261 5 30V10C5 8.67392 5.52678 7.40215 6.46447 6.46447C7.40215 5.52678 8.67392 5 10 5H30ZM13.3333 16.6667C12.8913 16.6667 12.4674 16.8423 12.1548 17.1548C11.8423 17.4674 11.6667 17.8913 11.6667 18.3333V26.6667C11.6667 27.1087 11.8423 27.5326 12.1548 27.8452C12.4674 28.1577 12.8913 28.3333 13.3333 28.3333C13.7754 28.3333 14.1993 28.1577 14.5118 27.8452C14.8244 27.5326 15 27.1087 15 26.6667V18.3333C15 17.8913 14.8244 17.4674 14.5118 17.1548C14.1993 16.8423 13.7754 16.6667 13.3333 16.6667ZM18.3333 15C17.8913 15 17.4674 15.1756 17.1548 15.4882C16.8423 15.8007 16.6667 16.2246 16.6667 16.6667V26.6667C16.6667 27.1087 16.8423 27.5326 17.1548 27.8452C17.4674 28.1577 17.8913 28.3333 18.3333 28.3333C18.7754 28.3333 19.1993 28.1577 19.5118 27.8452C19.8244 27.5326 20 27.1087 20 26.6667V20.5667C20.5083 19.9933 21.3667 19.32 22.3217 18.9117C22.8767 18.675 23.7117 18.5783 24.2917 18.7617C24.4841 18.8105 24.6554 18.9204 24.78 19.075C24.8667 19.1917 25 19.4517 25 20V26.6667C25 27.1087 25.1756 27.5326 25.4882 27.8452C25.8007 28.1577 26.2246 28.3333 26.6667 28.3333C27.1087 28.3333 27.5326 28.1577 27.8452 27.8452C28.1577 27.5326 28.3333 27.1087 28.3333 26.6667V20C28.3333 18.8833 28.05 17.89 27.46 17.0933C26.9171 16.3709 26.1573 15.8412 25.2917 15.5817C23.7883 15.11 22.1233 15.3717 21.0117 15.8483C20.6558 16.0014 20.3091 16.175 19.9733 16.3683C19.9035 15.9843 19.701 15.637 19.4013 15.3869C19.1016 15.1369 18.7237 14.9999 18.3333 15ZM13.3333 11.6667C12.8913 11.6667 12.4674 11.8423 12.1548 12.1548C11.8423 12.4674 11.6667 12.8913 11.6667 13.3333C11.6667 13.7754 11.8423 14.1993 12.1548 14.5118C12.4674 14.8244 12.8913 15 13.3333 15C13.7754 15 14.1993 14.8244 14.5118 14.5118C14.8244 14.1993 15 13.7754 15 13.3333C15 12.8913 14.8244 12.4674 14.5118 12.1548C14.1993 11.8423 13.7754 11.6667 13.3333 11.6667Z" fill="#0B0B0B"/>
                </svg>

                </a>
              </div>
                <div class="bg-white rounded-[30px] p-6 text-center shadow-md w-72">
                <img
                  src="{{ asset('Images/p-d-lolo.png') }}"
                  alt="Team member photo"
                  class="w-24 h-24 mx-auto rounded-full mb-4 object-cover object-center"
                />
                <h2
                  class="text-xl font-[600] font-opensans"
                  
                >
                 Akogun Elizabeth
                </h2>
                <p class="font-[400] mb-4 mt-4 font-opensans">Product Designer</p>
                <a
                  href="https://www.linkedin.com/in/akogun-elizabeth/"
                  class="inline-block mt-4 text-black hover:text-orange-500"
                >
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M30 5C31.3261 5 32.5979 5.52678 33.5355 6.46447C34.4732 7.40215 35 8.67392 35 10V30C35 31.3261 34.4732 32.5979 33.5355 33.5355C32.5979 34.4732 31.3261 35 30 35H10C8.67392 35 7.40215 34.4732 6.46447 33.5355C5.52678 32.5979 5 31.3261 5 30V10C5 8.67392 5.52678 7.40215 6.46447 6.46447C7.40215 5.52678 8.67392 5 10 5H30ZM13.3333 16.6667C12.8913 16.6667 12.4674 16.8423 12.1548 17.1548C11.8423 17.4674 11.6667 17.8913 11.6667 18.3333V26.6667C11.6667 27.1087 11.8423 27.5326 12.1548 27.8452C12.4674 28.1577 12.8913 28.3333 13.3333 28.3333C13.7754 28.3333 14.1993 28.1577 14.5118 27.8452C14.8244 27.5326 15 27.1087 15 26.6667V18.3333C15 17.8913 14.8244 17.4674 14.5118 17.1548C14.1993 16.8423 13.7754 16.6667 13.3333 16.6667ZM18.3333 15C17.8913 15 17.4674 15.1756 17.1548 15.4882C16.8423 15.8007 16.6667 16.2246 16.6667 16.6667V26.6667C16.6667 27.1087 16.8423 27.5326 17.1548 27.8452C17.4674 28.1577 17.8913 28.3333 18.3333 28.3333C18.7754 28.3333 19.1993 28.1577 19.5118 27.8452C19.8244 27.5326 20 27.1087 20 26.6667V20.5667C20.5083 19.9933 21.3667 19.32 22.3217 18.9117C22.8767 18.675 23.7117 18.5783 24.2917 18.7617C24.4841 18.8105 24.6554 18.9204 24.78 19.075C24.8667 19.1917 25 19.4517 25 20V26.6667C25 27.1087 25.1756 27.5326 25.4882 27.8452C25.8007 28.1577 26.2246 28.3333 26.6667 28.3333C27.1087 28.3333 27.5326 28.1577 27.8452 27.8452C28.1577 27.5326 28.3333 27.1087 28.3333 26.6667V20C28.3333 18.8833 28.05 17.89 27.46 17.0933C26.9171 16.3709 26.1573 15.8412 25.2917 15.5817C23.7883 15.11 22.1233 15.3717 21.0117 15.8483C20.6558 16.0014 20.3091 16.175 19.9733 16.3683C19.9035 15.9843 19.701 15.637 19.4013 15.3869C19.1016 15.1369 18.7237 14.9999 18.3333 15ZM13.3333 11.6667C12.8913 11.6667 12.4674 11.8423 12.1548 12.1548C11.8423 12.4674 11.6667 12.8913 11.6667 13.3333C11.6667 13.7754 11.8423 14.1993 12.1548 14.5118C12.4674 14.8244 12.8913 15 13.3333 15C13.7754 15 14.1993 14.8244 14.5118 14.5118C14.8244 14.1993 15 13.7754 15 13.3333C15 12.8913 14.8244 12.4674 14.5118 12.1548C14.1993 11.8423 13.7754 11.6667 13.3333 11.6667Z" fill="#0B0B0B"/>
                </svg>

                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
           <!-----Six Section--->
      <section>
        <div class="container max-w-7xl mx-auto px-4 sm:px-6 md:mt-12 mt-12">
          <h2
            class="md:text-6xl text-4xl font-playfair font-bold text-gray-900 text-left mb-12 leading-normal"
          style="font-weight: 500;">
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
                <h2 class="font-[600] md:text-[24px] text-[16px] font-[600] font-opensans mt-2">
                  {{ $blog->title }}
                </h2>
              </div>
            </div>
          </a>
            @endforeach
          </div>
        </div>
      </section>

      <!-- Section for Clients & Partners -->
   <section class="py-8 bg-[#F8F8FF]">
        <div class="max-w-7xl h-80 mx-auto px-4 sm:px-4">
          <h2 class="text-4xl md:text-6xl mb-6 font-playfair font-medium leading-normal" style="font-weight: 500;">
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
              <img
                src="{{ asset('Images/c-6.png') }}"
                alt="Client 2"
                class="h-16 fade-in-out"
              />
              <img
                src="{{ asset('Images/c-7.png') }}"
                alt="Client 3"
                class="h-16 fade-in-out"
              />
              <img
                src="{{ asset('Images/c-8.png') }}"
                alt="Client 4"
                class="h-16 fade-in-out"
              />
              <img
                src="{{ asset('Images/c-9.jpeg') }}"
                alt="Client 5"
                class="h-16 fade-in-out"
              />
              <img
                src="{{ asset('Images/c-10.png') }}"
                alt="Client "
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
       <div class="text-center w-full h-auto sm:h-52 md:text-6xl lg:h-auto md:p-0 p-4">
          <h2
            class="text-3xl md:text-[60px] lg:text-[60px] xl:text-[60px] font-medium md:mb-6 mb-2 font-playfair"
          >
            We don’t just tell stories
          </h2>
          <h2
            class="text-3xl md:text-[60px] lg:text-[60px] xl:text-[60px] font-medium md:mb-6 mb-4 font-playfair"
          >
            We drive change
          </h2>
          <p class="md:text-[24px] text-[16px] font-[400] mb-4 font-medium font-opensans"> 
            Let's Make Impact Together
          </p>
           <button class="btn-bg-animation hover-effect-arrow" onclick="window.location.href='mailto:info@lsiv.org';">
          <span class="btn-text font-opensans">Contact us <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
      </button>
        </div>
      </section>
    </main>
    @include('components.footer')
  </body>
</html>
