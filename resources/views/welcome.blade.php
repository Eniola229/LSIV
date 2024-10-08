<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LSIV - Designing Campaigns For a Better Tomorrow</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">
        <!---Styles--->
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>

    <body class="font-sans antialiased">
    
     
      <!----First section--->
      <div class="bg-[#ECECD5]">
           @include('components.header')
        <div class="flex flex-col md:flex-row justify-center md:justify-between items-center w-full px-6 py-16 bg-[#ECECD5] relative">
          <!-- Left Section: Heading and Subtext -->
          <div class="w-lg">
            <h1 class="text-7xl font-serif" style="font-family: 'Playfair Display', serif; font-weight: 500; line-height: normal;">
              Designing <span class="text-[#E76A35;]">Campaigns</span> <br>
              For a Better <span class="text-[#E76A35;]">Tomorrow</span>
            </h1>
            <p class="mt-4 text-gray-700 md:w-9/12 text-xl">
              We craft compelling advocacy, multimedia, and community campaigns for organizations committed to social impact and lasting change.
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
                    class="w-44 cursor-pointer h-44 orange-circle relative text-8xl bg-[#E76A35] rounded-full flex items-center justify-center text-white"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" viewBox="0 0 180 180" fill="none" class="original-arrow relative z-10">
                    <g clip-path="url(#clip0_436_1329)">
                    <rect width="180" height="180" rx="90" transform="matrix(1 0 0 -1 0 180)" fill="#E76A35"/>
                    <path d="M93.1839 142.473C91.6218 144.035 89.0891 144.035 87.527 142.473L62.0712 117.017C60.5091 115.455 60.5091 112.922 62.0712 111.36C63.6333 109.798 66.166 109.798 67.7281 111.36L90.3555 133.988L112.983 111.36C114.545 109.798 117.078 109.798 118.64 111.36C120.202 112.922 120.202 115.455 118.64 117.017L93.1839 142.473ZM94.3555 39.6445V139.645H86.3555V39.6445H94.3555Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_436_1329">
                    <rect width="180" height="180" rx="90" transform="matrix(1 0 0 -1 0 180)" fill="white"/>
                    </clipPath>
                    </defs>
                        </svg>

                  </div>
                </div>
              </div>
          </a>
        </div>
        </div>

        <!-- Driving Social Justice Section -->
        <section class="bg-white py-16 rounded">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-center justify-between">
                    <!-- Image Section -->
                    <div class="mb-8 lg:mb-0 lg:w-1/3 text-xl">
                        <h1 class="text-6xl font-serif font-bold text-gray-900 text-left md:text-left mb-16" style="font-family: 'Playfair Display', serif; font-style: normal; font-weight: 500; line-height: normal;">Driving Social Justice </h1>
                          <div class="flex justify-center md:justify-start">
                            <img src="{{ asset('Images/Lolo-Social-Impact-Venture.png') }}" alt="Social Justice Image" class="w-80 h-auto">
                        </div>

                    </div>
                    <!-- Text Section -->
                    <div class="lg:w-2/3 lg:pl-10">
                        <p class="text-gray-700 mb-6 text-xl" style="font-weight: 400; line-height: 35px; color: var(--accent-text-collour-2, #0B0B0B);">
                            LSIV is a strategic advocacy and communications agency dedicated to creating a more equitable world. We partner with a wide range of organizations to develop and implement impactful advocacy and multimedia communications campaigns that amplify the voices of marginalized communities and drive systemic change.
                        </p>
                        <p class="text-gray-700 mb-6 text-xl" style="font-weight: 400; line-height: 35px; color: var(--accent-text-collour-2, #0B0B0B);">
                            Our approach combines the energy of grassroots activism with the strategic expertise of high-level advocacy to ensure that our communication efforts are practical and grounded in real-world experiences.
                        </p>
                        <p class="text-gray-700 mb-6 text-xl" style="font-weight: 400; line-height: 35px; color: var(--accent-text-collour-2, #0B0B0B);">
                            We empower organizations to achieve social change goals through innovative solutions, compelling storytelling, and community-focused initiatives. By integrating education, advocacy, and storytelling, we help our clients convey their impact in inspiring ways.
                        </p>
                        <p class="text-gray-700 mb-6 text-xl" style="font-weight: 400; line-height: 35px; color: var(--accent-text-collour-2, #0B0B0B);">
                            So, whether you're a nonprofit seeking to expand your reach, a corporation aiming to enhance its social responsibility, or a government agency striving for positive impact, LSIV is your partner in building a better future. Let's create lasting change together.
                        </p>
                        <a href="#" class="hover-text-underline font-bold text-xl" style="font-family: Open Sans; font-size: 24px; font-style: normal; font-weight: 600; line-height: 38px;">Learn more about us</a>
                    </div>
                </div>
            </div>
        </section> 

        <!-- What Makes Us Unique Section -->
        <section class="py-16" style="background: #C4E1A4;">
            <div class="container mx-auto text-left md:text-center">
            <h2 class="text-6xl text-black mb-4 p-4" style="font-family: 'Playfair Display', serif; font-style: normal; font-weight: 600; line-height: normal;">What Makes Us Unique?</h2>
            <p class="text-lg md:text-xl text-black-500-700 w-11/12 md:w-3/5 mx-auto leading-relaxed" style="font-weight: 400;">
                Unlike traditional communications agencies, our team possesses in-depth knowledge of the subject matters we advocate for, allowing us to develop more targeted and impactful campaigns.
            </p>
            <div class="flex justify-center items-center mt-4">
                <img src="{{ asset('Images/stroke.png') }}" class="w-8/12 md:w-auto h-auto">
            </div>
            </div>
        </section>

        <section class="bg-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Title Section -->
                <div class="container mx-auto text-left md:text-center mb-12">
                    <h2 class="text-6xl font-bold text-gray-900" style="font-family: 'Playfair Display', serif;">OUR THEMATIC AREAS</h2>
                    <div class="flex justify-center mb-12">
                        <p class="mt-4 text-lg w-full sm:w-2/3 text-left md:text-center" style="font-weight: 400;">
                            Our organization is dedicated to advancing the United Nations Sustainable Development Goals (SDGs) and working with our partners to tackle pressing global issues that affect communities worldwide.
                            We aim to turn challenges into opportunities, promoting:
                        </p>
                    </div>
                
                <!-- Thematic Areas Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 thematic-area">
                    <!-- Card 1 -->
                    <div class="bg-gray-100 rounded-lg overflow-hidden h-72 flex flex-col justify-end" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('Images/gender.jpeg') }}'); background-size: cover; background-position: center;">
                        <div class="p-4 bg-opacity-70 div-the">
                         <h3 class="text-xl text-2xl text-white text-left">Gender Equality & Empowerment</h3>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-gray-100 rounded-lg overflow-hidden h-72 flex flex-col justify-end" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('Images/health.jpeg') }}');  background-size: cover; background-position: center;">
                        <div class="p-4 bg-opacity-70 w-full div-the">
                            <h3 class="text-2xl text-5x4 text-white text-left">Health and Well-Being</h3>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-gray-100 rounded-lg overflow-hidden h-72 flex flex-col justify-end" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('Images/social.jpeg') }}'); background-size: cover; background-position: center;">
                        <div class="p-4 bg-opacity-70 w-full div-the">
                            <h3 class="text-2xl text-5x4 text-white text-left">Social Development & Education</h3>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-gray-100 rounded-lg overflow-hidden h-72 flex flex-col justify-end" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('Images/sustainable.jpeg') }}'); background-size: cover; background-position: center;">
                        <div class="p-4 bg-opacity-70 w-full div-the">
                            <h3 class="text-2xl text-5x4 text-white text-left">Sustainable Livelihoods & Poverty Alleviation</h3>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="bg-gray-100 rounded-lg overflow-hidden h-72 flex flex-col justify-end" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('Images/climate.jpeg') }}'); background-size: cover; background-position: center;">
                        <div class="p-4 bg-opacity-70 w-full div-the">
                            <h3 class="text-2xl text-5x4 text-white text-left">Climate Change & Environmental Sustainability</h3>
                        </div>
                    </div>
                    <!-- Call to Action Card -->
                    <div class="bg-[#F76C3C] text-white rounded-lg overflow-hidden h-72 flex items-center justify-center" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ asset('Images/contact-frame-one.jpeg') }}'); background-size: cover; background-position: center;">
                        <div class="p-6 text-center">
                            <h3 class="text-2xl font-bold mb-4">We'd love to help amplify your social impact</h3>
                              <a href="#" class="text-sm font-semibold leading-6 text-gray-900">
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
            <section class="px-4 py-8 lg:px-16" id="impact"  style="margin-top: 1000px;">
                <div class="container mx-auto text-left md:text-left mb-12">
                    <h2 class="text-6xl mb-6" style="font-family: 'Playfair Display', serif; font-style: normal; font-weight: 500; line-height: normal;">Offering Solutions for Impact</h2>
                
                <!-- Section 1: Communications & Storytelling -->
            <div class="bg-[#ECECD5] p-6 md:p-12 rounded-t-lg m-4 md:h-96 shadow-lg" style="border-radius: 50px 50px 0px 0px;">

                <!-- Heading and Line at the Top -->
                <h2 class="text-2xl md:text-4xl font-semibold text-[#4A5310] mb-4 md:mb-6 text-left" style="font-weight: 600; color: var(--accent-text-collour-2, #0B0B0B); line-height: normal; font-style: normal;">
                    Communications & Storytelling
                </h2>
                <hr class="border-none h-[2px] bg-[#4A5310]  mb-4 md:mb-6" style="background: var(--accent-text-collour-2, #0B0B0B);">

                <!-- Text, Image, and Button in the Same Container -->
                <div class="flex flex-col md:flex-row items-left justify-start">
                    <div class="md:w-2/3 text-left">
                        <p class="text-[#4A5310] text-lg md:text-2xl mb-4 md:mb-8 leading-relaxed" style="font-style: normal; font-weight: 400; line-height: 36px;">
                            We transform social impact stories into powerful tools for change through engaging digital media campaigns,
                            human-centred storytelling, and high-quality multimedia content.
                        </p>
                        <!-- Button -->
                        <button class="btn-bg-animation-learn">
                            <span class="btn-text">Learn more</span>
                        </button>
                    </div>
                    <!-- Illustration Image Inside the Same Div -->
                    <div class="md:w-1/3 flex justify-center  md:mt-0">
                        <img src="{{ asset('Images/i-1.png') }}" alt="Illustration" class="w-full max-w-xs h-52">
                    </div>
                </div>
            </div>

            <div class="bg-[#C4E1A4] p-6 md:p-12 rounded-t-lg m-4 md:h-96 shadow-lg" style="border-radius: 50px 50px 0px 0px;">

                <!-- Heading and Line at the Top -->
                  <h2 class="text-2xl md:text-4xl font-semibold text-[#4A5310] mb-4 md:mb-6 text-left" style="font-weight: 600; color: var(--accent-text-collour-2, #0B0B0B); line-height: normal; font-style: normal;">
                    Branding & Design Services
                </h2>
                 <hr class="border-none h-[2px] bg-[#4A5310]  mb-4 md:mb-6" style="background: var(--accent-text-collour-2, #0B0B0B);">


                <!-- Text, Image, and Button in the Same Container -->
                <div class="flex flex-col md:flex-row items-left justify-start">
                    <div class="md:w-2/3 text-left">
                       <p class="text-[#4A5310] text-lg md:text-2xl mb-0 md:mb-8 leading-relaxed" style="font-style: normal; font-weight: 400; line-height: 36px;">
                            We create compelling brand identities and visual elements that resonate with your audience and reinforce your message.
                        </p>
                        <!-- Button -->
                        <button class="btn-bg-animation-learn">
                            <span class="btn-text">Learn more</span>
                        </button>
                    </div>
                    <!-- Illustration Image Inside the Same Div -->
                    <div class="md:w-1/3 flex justify-center mt-6 md:mt-0">
                        <img src="{{ asset('Images/i-2.png') }}" alt="Illustration" class="w-full max-w-xs mt-6 h-52">
                    </div>
                </div>
            </div>

            <div class="bg-[#F0D9B7] p-6 md:p-12 rounded-t-lg m-4 md:h-96 shadow-lg" style="border-radius: 50px 50px 0px 0px;">

                <!-- Heading and Line at the Top -->
                 <h2 class="text-2xl md:text-4xl font-semibold text-[#4A5310] mb-4 md:mb-6 text-left" style="font-weight: 600; color: var(--accent-text-collour-2, #0B0B0B); line-height: normal; font-style: normal;">
                    Strategy Development and Implementation
                </h2>
                 <hr class="border-none h-[2px] bg-[#4A5310]  mb-4 md:mb-6" style="background: var(--accent-text-collour-2, #0B0B0B);">

                <!-- Text, Image, and Button in the Same Container -->
                <div class="flex flex-col md:flex-row items-left justify-start">
                    <div class="md:w-2/3 text-left">
                        <p class="text-[#4A5310] text-lg md:text-2xl mb-4 md:mb-8 leading-relaxed" style="font-style: normal; font-weight: 400; line-height: 36px;">
                            We craft bespoke strategies that include impactful advocacy, tailored communication plans, and cutting-edge digital campaigns to achieve meaningful and sustainable impact.
                        </p>
                        <!-- Button -->
                        <button class="btn-bg-animation-learn">
                            <span class="btn-text">Learn more</span>
                        </button>
                    </div>
                    <!-- Illustration Image Inside the Same Div -->
                    <div class="md:w-1/3 flex justify-center mt-6 md:mt-0">
                        <img src="{{ asset('Images/i-3.png') }}" alt="Illustration" class="w-full max-w-xs mt-6 w-48 h-56">
                    </div>
                </div>
            </div>

            <div class="bg-[#FFC6DB] p-6 md:p-12 rounded-t-lg m-4 md:h-96 shadow-lg" style="border-radius: 50px 50px 0px 0px;">

                <!-- Heading and Line at the Top -->
                <h2 class="text-2xl md:text-4xl font-semibold text-[#4A5310] mb-4 md:mb-6 text-left" style="font-weight: 600; color: var(--accent-text-collour-2, #0B0B0B); line-height: normal; font-style: normal;">
                    Training & Capacity Building
                </h2>
                 <hr class="border-none h-[2px] bg-[#4A5310]  mb-4 md:mb-6" style="background: var(--accent-text-collour-2, #0B0B0B);">

                <!-- Text, Image, and Button in the Same Container -->
                <div class="flex flex-col md:flex-row items-left justify-start">
                    <div class="md:w-2/3 text-left">
                        <p class="text-[#4A5310] text-lg md:text-2xl mb-4 md:mb-8 leading-relaxed" style="font-style: normal; font-weight: 400; line-height: 36px;">
                            Our flexible, learner-centred training programs equip individuals and organizations with practical skills for driving social change.
                        </p>
                        <!-- Button -->
                        <button class="btn-bg-animation-learn">
                            <span class="btn-text">Learn more</span>
                        </button>
                    </div>
                    <!-- Illustration Image Inside the Same Div -->
                    <div class="md:w-1/3 flex justify-center mt-6 md:mt-0">
                        <img src="{{ asset('Images/i-4.png') }}" alt="Illustration" class="w-full max-w-xs mt-12 h-auto">
                    </div>
                </div>
            </div>

            <div class="bg-[#ECDDD5] p-6 md:p-12 rounded-t-lg m-4 md:h-96 shadow-lg" style="border-radius: 50px 50px 0px 0px;">

                <!-- Heading and Line at the Top -->
                <h2 class="text-2xl md:text-4xl font-semibold text-[#4A5310] mb-4 md:mb-6 text-left" style="font-weight: 600; color: var(--accent-text-collour-2, #0B0B0B); line-height: normal; font-style: normal;">
                    Engagement Events
                </h2>
                 <hr class="border-none h-[2px] bg-[#4A5310]  mb-4 md:mb-6" style="background: var(--accent-text-collour-2, #0B0B0B);">

                <!-- Text, Image, and Button in the Same Container -->
                <div class="flex flex-col md:flex-row items-left justify-start">
                    <div class="md:w-2/3 text-left">
                        <p class="text-[#4A5310] text-lg md:text-2xl mb-9 md:mb-8 leading-relaxed" style="font-style: normal; font-weight: 400; line-height: 36px;">
                            Our flexible, learner-centred training programs equip individuals and organizations with practical skills for driving social change.
                        </p>
                        <!-- Button -->
                        <button class="btn-bg-animation-learn">
                            <span class="btn-text">Learn more</span>
                        </button>
                    </div>
                    <!-- Illustration Image Inside the Same Div -->
                    <div class="md:w-1/3 flex justify-center mt-0 md:mt-0">
                        <img src="{{ asset('Images/i-5.png') }}" alt="Illustration" class="w-full max-w-xs mt-6 h-54">
                    </div>
                </div>
            </div>

            <div class="bg-[#A3E0AC] p-6 md:p-12 rounded-t-lg m-4 md:h-96 shadow-lg" style="border-radius: 50px 50px 0px 0px;">

                <!-- Heading and Line at the Top -->
                <h2 class="text-2xl md:text-4xl font-semibold text-[#4A5310] mb-4 md:mb-6 text-left" style="font-weight: 600; color: var(--accent-text-collour-2, #0B0B0B); line-height: normal; font-style: normal;">
                    Program Design and Implementation
                </h2>
                <hr class="border-none h-[2px] bg-[#4A5310]  mb-4 md:mb-6" style="background: var(--accent-text-collour-2, #0B0B0B);">

                <!-- Text, Image, and Button in the Same Container -->
                <div class="flex flex-col md:flex-row items-left justify-start">
                    <div class="md:w-2/3 text-left">
                        <p class="text-[#4A5310] text-lg md:text-2xl mb-0 md:mb-8 leading-relaxed" style="font-style: normal; font-weight: 400; line-height: 36px;">
                            We develop and execute innovative programs that address community needs, drive advocacy, and achieve sustainable change.
                        </p>
                        <!-- Button -->
                        <button class="btn-bg-animation-learn">
                            <span class="btn-text">Learn more</span>
                        </button>
                    </div>
                    <!-- Illustration Image Inside the Same Div -->
                    <div class="md:w-1/3 flex justify-center mt-6 md:mt-0">
                        <img src="{{ asset('Images/i-6.png') }}" alt="Illustration" class="w-full max-w-xs mt-6 h-56">
                    </div>
                </div>
            </div>


            </div>
            </section>

            <!-----Five Section---->
            <section class="py-8" style="background: #ECECD5;">
            <div class="max-w-7xl h-80 mx-auto px-4 sm:px-6 lg:px-8">
                     <h2 class="text-6xl mb-6" style="font-family: 'Playfair Display', serif; font-style: normal; font-weight: 500; line-height: normal;">Our clients & partners</h1>
                    <div class="relative overflow-hidden mt-12">
                        <div id="clients" class="flex space-x-8 items-center animate-scroll whitespace-nowrap">
                            <img src="{{ asset('Images/c-1.png') }}" alt="Client 1" class="h-16 fade-in-out">
                            <img src="{{ asset('Images/c-2.png') }}" alt="Client 2" class="h-16 fade-in-out">
                            <img src="{{ asset('Images/c-3.png') }}" alt="Client 3" class="h-16 fade-in-out">
                            <img src="{{ asset('Images/c-4.png') }}" alt="Client 4" class="h-16 fade-in-out">
                            <img src="{{ asset('Images/c-5.png') }}" alt="Client 5" class="h-16 fade-in-out">
                        </div>

                        <div class="absolute inset-y-0 left-0 w-12 fade-left pointer-events-none"></div>

                        <div class="absolute inset-y-0 right-0 w-12 fade-right pointer-events-none"></div>
                    </div>

            </div>
        </section>
            <!-----Six Section--->
                <div class="container mx-auto px-4 py-16">
                    <h1 class="text-6xl font-serif font-bold text-gray-900 text-left mb-12" style="font-family: 'Playfair Display', serif; font-style: normal; font-weight: 500; line-height: normal;">Our Impact in Action</h1>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                         <div class="bg-white rounded-lg overflow-hidden w-full relative group" style="flex-direction: column; align-items: flex-start;">
                            <!-- Image with grayscale and darkening on hover -->
                            <img src="{{ asset('Images/stories-girl.png') }}" alt="Stories of Girls' Resistance" class="w-full h-96 object-cover rounded-lg transition duration-500 group-hover:filter group-hover:grayscale group-hover:brightness-50">

                            <!-- Caption with sliding animation from bottom to center -->
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                <span class="text-white font-bold text-xl transform translate-y-10 group-hover:translate-y-0 transition-all duration-500 ease-in-out">Read Case Study</span>
                            </div>

                            <!-- Content below the image -->
                            <div class="">
                                <h2 class="font-semibold text-2xl impact-styles">Stories of Girls' Resistance</h2>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg overflow-hidden w-full relative group">
                            <img src="{{ asset('Images/ty.png') }}" alt="The TY Danjuma Foundation" class="w-full h-96 object-cover rounded-lg transition duration-500 group-hover:filter group-hover:grayscale group-hover:brightness-50">
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                <span class="text-white font-bold text-xl transform translate-y-10 group-hover:translate-y-0 transition-all duration-500 ease-in-out">Read Case Study</span>
                            </div>
                            <div class="">
                                <h2 class="font-semibold text-2xl impact-styles">The TY Danjuma Foundation</h2>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg overflow-hidden w-full relative group">
                            <img src="{{ asset('Images/crisis.png') }}" alt="Women's Crisis Center (WCC), Imo State" class="w-full h-96 object-cover rounded-lg transition duration-500 group-hover:filter group-hover:grayscale group-hover:brightness-50">
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                <span class="text-white font-bold text-xl transform translate-y-10 group-hover:translate-y-0 transition-all duration-500 ease-in-out">Read Case Study</span>
                            </div>
                            <div class="">
                                <h2 class="font-semibold text-2xl impact-styles">Women's Crisis Center (WCC), Imo State</h2>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg overflow-hidden w-full relative group">
                            <img src="{{ asset('Images/benmore.png') }}" alt="Benmore Foundation & First Lady, Ondo State Government" class="w-full h-96 object-cover rounded-lg transition duration-500 group-hover:filter group-hover:grayscale group-hover:brightness-50">
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                <span class="text-white font-bold text-xl transform translate-y-10 group-hover:translate-y-0 transition-all duration-500 ease-in-out">Read Case Study</span>
                            </div>
                            <div class="">
                                <h2 class="font-semibold text-2xl impact-styles">Benmore Foundation & First Lady, Ondo State Government</h2>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg overflow-hidden w-full relative group">
                            <img src="{{ asset('Images/or.png') }}" alt="Orphans in South Africa Documentary" class="w-full h-96 object-cover rounded-lg transition duration-500 group-hover:filter group-hover:grayscale group-hover:brightness-50">
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                <span class="text-white font-bold text-xl transform translate-y-10 group-hover:translate-y-0 transition-all duration-500 ease-in-out">Read Case Study</span>
                            </div>
                            <div class="">
                                <h2 class="font-semibold text-2xl impact-styles">Orphans in South Africa Documentary</h2>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg overflow-hidden w-full relative group">
                            <img src="{{ asset('Images/in.png') }}" alt="Inuadada Foundation" class="w-full h-96 object-cover rounded-lg transition duration-500 group-hover:filter group-hover:grayscale group-hover:brightness-50">
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                <span class="text-white font-bold text-xl transform translate-y-10 group-hover:translate-y-0 transition-all duration-500 ease-in-out">Read Case Study</span>
                            </div>
                            <div class="">
                                <h2 class="font-semibold text-2xl impact-styles">Inuadada Foundation</h2>
                            </div>
                        </div>


                    </div>
                </div>
      <!----Footer section--->
      @include('components.footer')
    </body>
</html>


<script>
  document.getElementById('scrollLink').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default behavior

    // Get the target element by its ID
    const target = document.getElementById('impact');
    
    // Get the position of the target element
    const targetPosition = target.getBoundingClientRect().top + window.scrollY;
    
    // Set the scrolling duration (1000ms = 1 second)
    const duration = 1000;

    // Smooth scroll function
    const smoothScrollTo = (targetPosition, duration) => {
      const startPosition = window.scrollY;
      const distance = targetPosition - startPosition;
      let startTime = null;

      const animationScroll = (currentTime) => {
        if (startTime === null) startTime = currentTime;
        const timeElapsed = currentTime - startTime;
        const run = ease(timeElapsed, startPosition, distance, duration);
        window.scrollTo(0, run);

        if (timeElapsed < duration) requestAnimationFrame(animationScroll);
      };

      // Easing function to smoothen the scroll effect
      const ease = (t, b, c, d) => {
        t /= d / 2;
        if (t < 1) return (c / 2) * t * t + b;
        t--;
        return (-c / 2) * (t * (t - 2) - 1) + b;
      };

      requestAnimationFrame(animationScroll);
    };

    // Call the smooth scroll function
    smoothScrollTo(targetPosition, duration);
  });
</script>