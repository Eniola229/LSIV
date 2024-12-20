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
    <!-- MAIN -->
    <main class="bg-[#F8F8FF]"> 
      <!----First section--->
      <section class="bg-miscellanous">
        @include('components.header')
        <div
          class="flex mx-auto max-w-7xl p-4 lg:px-6 flex-col md:flex-row justify-center md:justify-between items-center w-full px-6 py-16 "
        >
          <!-- Left Section: Heading and Subtext -->
          <div class="w-lg">
            <h1 class="text-6xl sm:text-5xl md:text-6xl lg:text-7xl text-accentTextDark font-playfair font-semibold md:mt-0 mt-[-30px]" style="font-weight: 500;">
              Designing <span class="text-primary">Campaigns</span> <br />
              For a Better <span class="text-primary">Tomorrow</span>
            </h1>
           <p class="mt-4 text-[16px] sm:text-base md:text-xl font-opensans w-full md:w-9/12 text-[#0B0B0B]">
              We craft compelling advocacy, multimedia, and community campaigns
              for organizations committed to social impact and lasting change.
            </p>
          </div>
          <a id="div-a" class="mt-6 md:mt-0">
            <div class="flex relative items-center justify-center">
              <!-- Container for the circular text and button -->
              <div class="relative flex items-center justify-center w-48 h-48 md:w-64 md:h-64">
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
                  class="cursor-pointer orange-circle relative text-8xl bg-[#E76A35] rounded-full flex items-center justify-center text-white w-32 h-32 md:w-44 md:h-44"
                > 
                    <img src="{{ asset('Images/arrow-main.png') }}" class="original-arrow relative z-10">
                </div>
              </div>
            </div>
          </a>

        </div>
      </section>

      <!-- Driving Social Justice Section -->
      <section class="bg-[#F8F8FF] py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-row items-start md:items-center justify-between">
            <!-- Image Section -->
            <div class="mb-8 lg:mb-0 lg:w-1/3 text-xl">
              <h2
               class="text-[32px] md:text-6xl font-[500] font-playfair text-gray-900 text-left mb-16">
                Driving Social Justice
              </h2>
              <div class="flex justify-center md:justify-start">
                <img
                  src="https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350351/Lolo_Social_Impact_Venture_LSIV_3_gyhmwr.png"
                  alt="Social Justice Image"
                  class="h-[230px] w-[230px] md:w-80 md:h-auto"
                />
              </div>
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 lg:pl-10">
              <p
                class="text-accentTextDark font-[400] leading-[2.1675rem] mb-6 text-[16px] sm:text-base md:text-xl font-opensans"
              >
                LSIV is a strategic advocacy and communications agency dedicated to creating a more equitable world. Our approach combines the energy of grassroots activism with the strategic expertise of high-level advocacy to ensure that our communication efforts are practical and grounded in real-world experiences.
              </p>
              <p
                class="text-accentTextDark font-[400] leading-[2.1675rem] mb-6 text-[16px] sm:text-base md:text-xl font-opensans"
              >
               We empower organizations to achieve social change goals through innovative solutions, compelling storytelling, and community-focused initiatives.
                By integrating education, advocacy, and storytelling, we help our clients convey their impact in inspiring ways.
              </p>
              <p
                class="text-accentTextDark font-[400] leading-[2.1675rem] mb-6 text-[16px] sm:text-base md:text-xl font-opensans"
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
        <div class="container mx-auto text-center md:text-center">
          <h2
            class="text-[32px] md:text-6xl text-accentTextDark p-2 font-playfair font-[600]">
            What Makes Us Unique?
          </h2>
          <p
            class="text-[18px] md:text-xl text-[#0B0B0B] w-11/12 md:w-3/5 mx-auto leading-relaxed font-opensans font-[400]"
            style="font-weight: 400"
          >
            Unlike traditional communications agencies, our team possesses
            in-depth knowledge of the subject matters we advocate for, allowing
            us to develop more targeted and impactful campaigns.
          </p>
          <div class="flex justify-center items-center mt-4">
            <svg
              width="325"
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
      <section class="bg-[#F8F8FF] py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="container mx-auto text-center md:text-center">
            <h2
              class="text-[32px] md:text-[60px] text-accentTextDark p-2 font-playfair font-[600]"
            >
              OUR THEMATIC AREAS
            </h2>
            <p
              class="text-[18px] md:text-[20px] text-[#0B0B0B] w-full md:w-4/5 mx-auto leading-relaxed text-accentTextDark font-opensans"
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
            class="bg-gray-100 rounded-[16px] overflow-hidden h-72 flex flex-col justify-end"
            style="background: linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0)), url('{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734653236/959192906101dc997360ba4328e8f28c_cjmpnm.jpg') }}'); background-size: cover; background-position: center;"
          >
            <div class="p-4 bg-opacity-70">
              <h3 class="text-[24px] text-white text-left font-opensans">
                Gender Equality & Empowerment
              </h3>
            </div>
          </div>

          <!-- Card 2 -->
          <div
            class="bg-gray-100 rounded-[16px] overflow-hidden h-72 flex flex-col justify-end"
            style="background: linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0)), url('{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350092/70195222_2378336455591485_5319670050997665792_n_zul9pe.jpg') }}'); background-size: cover; background-position: center;"
          >
            <div class="p-4 bg-opacity-70">
              <h3 class="text-[24px] text-white text-left font-opensans">
                Health and Well-Being
              </h3>
            </div>
          </div>

          <!-- Card 3 -->
          <div
            class="bg-gray-100 rounded-[16px] overflow-hidden h-72 flex flex-col justify-end"
            style="background: linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0)), url('{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734349991/43207440_1858496167575519_5673215072856440832_n_e4ao8m.jpg') }}'); background-size: cover; background-position: center;"
          >
            <div class="p-4 bg-opacity-70">
              <h3 class="text-[24px] text-white text-left font-opensans">
                Social Development & Education
              </h3>
            </div>
          </div>

          <!-- Card 4 -->
          <div
            class="bg-gray-100 rounded-[16px] overflow-hidden h-72 flex flex-col justify-end"
            style="background: linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0)), url('{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734350331/IMG_6548_stgyc7.jpg') }}'); background-size: cover; background-position: center;"
          >
            <div class="p-4 bg-opacity-70">
              <h3 class="text-[24px] text-white text-left font-opensans">
                Sustainable Livelihoods & Poverty Alleviation
              </h3>
            </div>
          </div>

          <!-- Card 5 -->
          <div
            class="bg-gray-100 rounded-[16px] overflow-hidden h-72 flex flex-col justify-end"
            style="background: linear-gradient(to top, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0)), url('{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734653809/6ab738988f8bd42af33dbbc5ba99243b_eibfw4.jpg') }}'); background-size: cover; background-position: center;"
          >
            <div class="p-4 bg-opacity-70">
              <h3 class="text-[24px] text-white text-left font-opensans">
                Climate Change & Environmental Sustainability
              </h3>
            </div>
          </div>

          <!-- Call to Action Card -->
          <div
            class="bg-[#F76C3C] text-white rounded-[16px] overflow-hidden h-72 flex items-center justify-center"
            style="background: linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0)), url('{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734653870/8d524a8cd314a359847e22e30557f637_vhcpvq.jpg') }}'); background-size: cover; background-position: center;"
          >
            <div class="p-6 text-center">
              <h3 class="text-[24px] font-bold mb-4 font-opensans">
                We'd love to help amplify your social impact
              </h3>
              <a href="#" class="text-sm font-semibold leading-6 text-gray-900">
                <button class="btn-bg-animation hover-effect-arrow" onclick="window.location.href='mailto:info@lsiv.org';">
                  <span class="btn-text font-opensans">Contact us <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
                </button>
              </a>
            </div>
          </div>
        </div>

        </div>
      </section>

      <!-----Offering Solutions for Impact Section---->
      <section class="px-6 py-6 rounded relative md:mt-0 mt-[-60px] bg-[#F8F8FF]" id="div-e">
        <div class="md:max-w-7xl mx-auto md:px-6 lg:px-6">
          <h2
            class="md:text-6xl text-[32px] text-accentTextDark p-2 font-playfair font-medium"
          >
            Offering Solutions for Impact
          </h2>

          <!-- Section 1: Communications & Storytelling -->
          <div
            class="sticky top-0 z-10 bg-[#C4E1A4] p-4 md:p-12 my-4 md:h-96 shadow-md md:rounded-t-[50px] rounded-t-[32px] rounded-b-[0px] w-full"
          >
            <h2
              class="text-2xl md:text-[48px] text-[24px] font-[600]  mb-4 md:mb-6 text-left text-[#0B0B0B]"
            >
              Communications & Storytelling
            </h2>
            <hr class="border-none h-[1px] bg-gray-900 mb-4 md:mb-6" />
            <div class="flex flex-col md:flex-row">
              <div class="md:w-2/3 text-left">
                <p
                  class="text-[#0B0B0B] font-opensans leading-[2.25rem] text-[16px] md:text-[24px] mb-4 md:mb-8 font-[400]"
             style="line-height: 36px;"   >
                  We transform social impact stories into powerful tools for
                  change through engaging digital media campaigns, human-centred
                  storytelling, and high-quality multimedia content.
                </p>
                <a href="{{ url('Work-Communication') }}">
                  <button class="btn-bg-animation-learn hover-effect-arrow">
                  <span class="btn-text font-[16px] font-[600]">Learn more <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
                </button>
              </a>
              </div>
              <div class="md:w-1/3 flex justify-center md:mt-0">
                <img
                  src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734653963/5573511_2929905_1_gznlwy.png') }}"
                  alt="Illustration"
                  class="w-full max-w-xs h-52"
                />
              </div>
            </div>
          </div>

          <!-- Section 2: Branding & Design Services --> 
          <div
            class="sticky top-6 z-20 bg-[#FFC6DB] p-4 md:p-12 my-4 md:h-96 shadow-md md:rounded-t-[50px] rounded-t-[32px] rounded-b-[0px] w-full"
            id="des"
          >
             <h2
              class="text-2xl md:text-[48px] text-[24px] font-[600]  mb-4 md:mb-6 text-left text-[#0B0B0B]"
            >
              Branding & Design Services
            </h2>
            <hr class="border-none h-[1px] bg-gray-900 mb-4 md:mb-6" />
            <div class="flex flex-col md:flex-row">
              <div class="md:w-2/3 text-left">
                <p
                  class="text-[#0B0B0B] font-opensans leading-[2.25rem] text-[16px] md:text-[24px] mb-4 md:mb-8 font-[400]"
             style="line-height: 36px;"   >
                  We create compelling brand identities and visual elements that
                  resonate with your audience and reinforce your message.
                </p>
                <a href="{{ url('Work-Branding') }}">
                  <button class="btn-bg-animation-learn hover-effect-arrow">
                  <span class="btn-text">Learn more <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
                </button>
              </a>
              </div>
              <div class="md:w-1/3 flex justify-center mt-6 md:mt-0">
                <img
                  src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734653991/Frame_40_oy0ifo.png') }}"
                  alt="Illustration"
                  class="mt-8 w-full max-w-xs h-52"
                />
              </div>
            </div>
          </div>

          <!-- Section 3: Strategy Development and Implementation -->
          <div
            class="sticky top-12 z-30 bg-[#F0D9B7] p-4 md:p-12 my-4 md:h-96 w-full md:rounded-t-[50px] rounded-t-[32px] rounded-b-[0px] shadow-md"
          >
             <h2
              class="text-2xl md:text-[48px] text-[24px] font-[600]  mb-4 md:mb-6 text-left text-[#0B0B0B]"
            >
              Strategy Development and Implementation
            </h2>
            <hr class="border-none h-[1px] bg-gray-900 mb-4 md:mb-6" />
            <div class="flex flex-col md:flex-row">
              <div class="md:w-2/3 text-left">
                <p
                  class="text-[#0B0B0B] font-opensans leading-[2.25rem] text-[16px] md:text-[24px] mb-4 md:mb-8 font-[400]"
             style="line-height: 36px;"   >
                  We craft bespoke strategies that include impactful advocacy,
                  tailored communication plans, and cutting-edge digital
                  campaigns to achieve meaningful and sustainable impact.
                </p>
                <a href="{{ url('Work-Strategy') }}">
                  <button class="btn-bg-animation-learn hover-effect-arrow">
                  <span class="btn-text">Learn more <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
                </button>
              </a>
              </div>
              <div class="md:w-1/3 flex justify-center mt-6 md:mt-0">
                <img
                  src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734654117/Frame_42_pabkpx.png') }}"
                  alt="Illustration"
                  class="w-full max-w-xs h-56"
                />
              </div>
            </div>
          </div>

          <!-- Section 4: Training & Capacity Building -->
          <div
            class="sticky top-20 z-40 bg-[#DDC2FF] p-4 md:p-12 my-4 md:h-96 shadow-md md:rounded-t-[50px] rounded-t-[32px] rounded-b-[0px] w-full"
          >
             <h2
              class="text-2xl md:text-[48px] text-[24px] font-[600]  mb-4 md:mb-6 text-left text-[#0B0B0B]"
            >
              Training & Capacity Building
            </h2>
            <hr class="border-none h-[1px] bg-gray-900 mb-4 md:mb-6" />
            <div class="flex flex-col md:flex-row">
              <div class="md:w-2/3 text-left">
                <p
                  class="text-[#0B0B0B] font-opensans leading-[2.25rem] text-[16px] md:text-[24px] mb-4 md:mb-8 font-[400]"
             style="line-height: 36px;"   >
                  Our flexible, learner-centred training programs equip
                  individuals and organizations with practical skills for
                  driving social change.
                </p>
                <a href="{{ url('Work-Traning') }}">
                  <button class="btn-bg-animation-learn hover-effect-arrow">
                  <span class="btn-text">Learn more <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
                </button>
              </a>
              </div>
              <div class="md:w-1/3 flex justify-center mt-6 md:mt-0">
                <img
                  src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734654157/OBJECTS_xyogj8.png') }}"
                  alt="Illustration"
                  class="mt-6 w-full max-w-xs h-auto"
                />
              </div>
            </div>
          </div>

          <!-- Section 5: Engagement Events -->
          <div
            class="sticky top-32 z-50 bg-[#FFE4BB] p-4 md:p-12 my-4 md:h-96 shadow-md md:rounded-t-[50px] rounded-t-[32px] rounded-b-[0px] w-full"
          >
             <h2
              class="text-2xl md:text-[48px] text-[24px] font-[600]  mb-4 md:mb-6 text-left text-[#0B0B0B]"
            >
              Engagement Events
            </h2>
            <hr class="border-none h-[1px] bg-gray-900 mb-4 md:mb-6" />
            <div class="flex flex-col md:flex-row">
              <div class="md:w-2/3 text-left">
                 <p
                  class="text-[#0B0B0B] font-opensans leading-[2.25rem] text-[16px] md:text-[24px] mb-4 md:mb-8 font-[400]"
              style="line-height: 36px;"  >
                  We create a platform for engagement through dynamic and
                  interactive events that drive meaningful connections.
                </p>
                <a href="{{ url('Work-Engagement')}}">
                  <button class="btn-bg-animation-learn hover-effect-arrow">
                  <span class="btn-text">Learn more <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
                </button>
              </div>
            </a>
              <div class="md:w-1/3 flex justify-center mt-6 md:mt-0">
                <img
                  src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734654201/Frame_46_tfwyqr.png') }}"
                  alt="Illustration"
                  class="mt-12 w-full max-w-xs h-auto"
                />
              </div>
            </div>
          </div>

          <!-- Section 6: Program Design and Implementation -->
          <div
            class="sticky top-40 z-[60] bg-[#FFDED0] p-4 md:p-12 my-4 md:h-96 shadow-md md:rounded-t-[50px] rounded-t-[32px] rounded-b-[0px] w-full"
          >
             <h2
              class="text-2xl md:text-[48px] text-[24px] font-[600]  mb-4 md:mb-6 text-left text-[#0B0B0B]"
            >
              Program Design and Implementation
            </h2>
            <hr class="border-none h-[1px] bg-gray-900 mb-4 md:mb-6" />
            <div class="flex flex-col md:flex-row">
              <div class="md:w-2/3 text-left">
                   <p
                  class="text-[#0B0B0B] font-opensans leading-[2.25rem] text-[16px] md:text-[24px] mb-4 md:mb-8 font-[400]"
                style="line-height: 36px;">
                  We develop and execute innovative programs that address
                  community needs, drive advocacy, and achieve sustainable
                  change.
                </p>
                <a href="{{ url('Work-Program')}}">
                <button class="btn-bg-animation-learn hover-effect-arrow">
                  <span class="btn-text">Learn more <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
                </button>
              </a>
              </div>
              <div class="md:w-1/3 flex justify-center mt-6 md:mt-4">
                <img
                  src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734654238/Frame_1618873210_ya68vg.png') }}"
                  alt="Illustration"
                  class="w-full max-w-xs h-60 md:h-[240px]"
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-----Six Section--->
      <section>
        <div class="container max-w-7xl mx-auto px-4 sm:px-6 bg-[#F8F8FF]">
          <h2
            class="text-4xl md:text-[60px] font-playfair font-[500] text-gray-900 text-left md:mb-12 mb-4 leading-normal">
            Our Impact in Action
          </h2>
 
          <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 my-8"
          >
            <!-- Card Example -->
            @foreach($blogs as $blog)
            <a href="{{ url('client/blog', $blog->id) }}">
            <div
              class=" rounded-lg overflow-hidden w-full relative group flex flex-col items-start"
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
               <h2 class="md:text-[24px] text-[20px] font-opensans mt-2 font-[600]" style="line-height: normal;">
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
      @include('components.clients')
      <!-- Section Seven -->
       @include('components.section-one')
 
    </main>
    @include('components.footer')
<script>
  // Function to slowly scroll to div-e
  document.getElementById("div-a").addEventListener("click", function () {
    const target = document.getElementById("div-e").offsetTop;
    const duration = 1000; // duration in milliseconds (5 seconds for slower scrolling)
    const start = window.scrollY;
    const distance = target - start;
    let startTime = null;

    function animateScroll(currentTime) {
      if (!startTime) startTime = currentTime;
      const timeElapsed = currentTime - startTime;
      const progress = Math.min(timeElapsed / duration, 1);
      
      window.scrollTo(0, start + distance * progress);

      if (timeElapsed < duration) {
        requestAnimationFrame(animateScroll); // Continue until the duration is reached
      }
    }

    requestAnimationFrame(animateScroll);
  });
</script>

  </body>
</html>
