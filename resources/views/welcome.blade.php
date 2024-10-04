<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LSIV - HOME</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">
        <!---Styles--->
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    
    </head>
    <body class="font-sans antialiased">
    
      @include('components.header')
      <section class="bg-[#ECECD5] py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <!-- Section Title -->
                <h2 class="text-4xl font-bold mb-4">
                    Designing <span class="text-[#F76C3C]">Campaigns</span> For a Better <span class="text-[#F76C3C]">Tomorrow</span>
                </h2>
                <!-- Subtitle -->
                <p class="text-lg text-gray-700 mb-12">
                    We craft compelling advocacy, multimedia, and community campaigns for organizations committed to social impact and lasting change.
                </p>
                
                <!-- Call to Action Circle -->
                <div class="relative mx-auto mt-8 mb-12">
                    <div class="flex items-center justify-center w-24 h-24 bg-[#F76C3C] rounded-full text-white text-lg font-bold">
                        VIEW OUR SERVICES
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center text-gray-900 text-sm">
                        <p class="tracking-wider rotate-90">VIEW OUR SERVICES</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Driving Social Justice Section -->
        <section class="bg-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-center justify-between">
                    <!-- Image Section -->
                    <div class="mb-8 lg:mb-0 lg:w-1/3">
                        <h1 class="text-5xl font-serif font-bold text-gray-900 text-center md:text-left mb-12" style="font-family: 'Playfair Display', serif;">Driving Social Justice </h1>
                          <div class="flex justify-center md:justify-start">
                            <img src="{{ asset('Images/Lolo-Social-Impact-Venture.png') }}" alt="Social Justice Image" class="w-56 h-auto">
                        </div>

                    </div>
                    <!-- Text Section -->
                    <div class="lg:w-2/3 lg:pl-10">
                        <p class="text-dark-700 mb-6">
                            LSIV is a strategic advocacy and communications agency dedicated to creating a more equitable world. We partner with a wide range of organizations to develop and implement impactful advocacy and multimedia communications campaigns that amplify the voices of marginalized communities and drive systemic change.
                        </p>
                        <p class="text-dark-700 mb-6">
                            Our approach combines the energy of grassroots activism with the strategic expertise of high-level advocacy to ensure that our communication efforts are practical and grounded in real-world experiences.
                        </p>
                        <p class="text-dark-700 mb-6">
                            We empower organizations to achieve social change goals through innovative solutions, compelling storytelling, and community-focused initiatives. By integrating education, advocacy, and storytelling, we help our clients convey their impact in inspiring ways.
                        </p>
                        <p class="text-dark-700 mb-6">
                            So, whether you're a nonprofit seeking to expand your reach, a corporation aiming to enhance its social responsibility, or a government agency striving for positive impact, LSIV is your partner in building a better future. Let's create lasting change together.
                        </p>
                        <a href="#" class="text-1xl font-serif font-bold text-gray-900 text-left mb-12" style="font-family: 'Playfair Display', serif;">Learn more about us</a>
                    </div>
                </div>
            </div>
        </section> 

        <!-- What Makes Us Unique Section -->
        <section class="py-16" style="background: #C4E1A4;">
            <div class="container mx-auto text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">What Makes Us Unique?</h2>
            <p class="text-lg md:text-xl text-gray-700 w-11/12 md:w-3/5 mx-auto leading-relaxed">
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
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-900" style="font-family: 'Playfair Display', serif;">OUR THEMATIC AREAS</h2>
                    <div class="flex justify-center">
                        <p class="mt-4 text-gray-600 text-lg w-full sm:w-2/3 text-center">
                            Our organization is dedicated to advancing the United Nations Sustainable Development Goals (SDGs) and working with our partners to tackle pressing global issues that affect communities worldwide.
                            We aim to turn challenges into opportunities, promoting:
                        </p>
                    </div>

                </div>
                
                <!-- Thematic Areas Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-gray-100 rounded-lg overflow-hidden h-72 flex flex-col justify-end" style="background-image: url('{{ asset('Images/gender.png') }}'); background-size: cover; background-position: center;">
                        <div class="p-4 bg-opacity-70">
                            <h3 class="text-xl text-xl text-white font-bold">Gender Equality & Empowerment</h3>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-gray-100 rounded-lg overflow-hidden h-72 flex flex-col justify-end" style="background-image: url('{{ asset('Images/health.png') }}'); background-size: cover; background-position: center;">
                        <div class="p-4 bg-opacity-70">
                            <h3 class="text-xl text-5x4 text-white font-bold">Health and Well-Being</h3>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-gray-100 rounded-lg overflow-hidden h-72 flex flex-col justify-end" style="background-image: url('{{ asset('Images/social.png') }}'); background-size: cover; background-position: center;">
                        <div class="p-4 bg-opacity-70">
                            <h3 class="text-xl text-5x4 text-white font-bold">Social Development & Education</h3>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-gray-100 rounded-lg overflow-hidden h-72 flex flex-col justify-end" style="background-image: url('{{ asset('Images/sustainable.png') }}'); background-size: cover; background-position: center;">
                        <div class="p-4 bg-opacity-70">
                            <h3 class="text-xl text-5x4 text-white font-bold">Sustainable Livelihoods & Poverty Alleviation</h3>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="bg-gray-100 rounded-lg overflow-hidden h-72 flex flex-col justify-end" style="background-image: url('{{ asset('Images/sustainable.png') }}'); background-size: cover; background-position: center;">
                        <div class="p-4 bg-opacity-70">
                            <h3 class="text-xl text-5x4 text-white font-bold">Climate Change & Environmental Sustainability</h3>
                        </div>
                    </div>
                    <!-- Call to Action Card -->
                    <div class="bg-[#F76C3C] text-white rounded-lg overflow-hidden flex items-center justify-center">
                        <div class="p-6 text-center">
                            <h3 class="text-2xl font-bold mb-4">We'd love to help amplify your social impact</h3>
                              <a href="#" class="text-sm font-semibold leading-6 text-gray-900">
                                <button class="bg-[#E76A35] text-white py-2 px-4 rounded-full hover:bg-[#d95f2f]">
                                  Contact us <span aria-hidden="true">&rarr;</span>
                                </button>
                              </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


            <!-----Five Section---->
            <section class="py-8" style="background: #ECECD5;">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="text-5xl font-serif font-bold text-gray-900 text-left mb-12" style="font-family: 'Playfair Display', serif;">Our clients & partners</h1>
                <div class="relative overflow-hidden">
                    <div id="clients" class="flex space-x-8 items-center animate-scroll whitespace-nowrap">
                      <img src="{{ asset('Images/c-1.png') }}" alt="Client 1" class="h-16">
                      <img src="{{ asset('Images/c-2.png') }}" alt="Client 2" class="h-16">
                      <img src="{{ asset('Images/c-3.png') }}" alt="Client 3" class="h-16">
                      <img src="{{ asset('Images/c-4.png') }}" alt="Client 4" class="h-16">
                      <img src="{{ asset('Images/c-5.png') }}" alt="Client 5" class="h-16">
                        <!-- Add more logos as needed -->
                    </div>
                </div>
            </div>
        </section>
            <!-----Six Section--->
                <div class="container mx-auto px-4 py-16">
                    <h1 class="text-4xl font-serif font-bold text-gray-900 text-left mb-12" style="font-family: 'Playfair Display', serif;">Our Impact in Action</h1>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-white rounded-lg overflow-hidden ">
                            <img src="{{ asset('Images/stories-girl.png') }}" alt="Stories of Girls' Resistance" class="w-full h-56 object-cover rounded-lg">
                            <div class="p-4">
                                <h2 class="font-semibold text-lg">Stories of Girls' Resistance</h2>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg overflow-hidden ">
                            <img src="{{ asset('Images/ty.png') }}" alt="Stories of Girls' Resistance" class="w-full h-56 object-cover rounded-lg">
                            <div class="p-4">
                                <h2 class="font-semibold text-lg">The TY Danjuma Foundation</h2>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg overflow-hidden ">
                             <img src="{{ asset('Images/crisis.png') }}" alt="Stories of Girls' Resistance" class="w-full h-56 object-cover rounded-lg">
                            <div class="p-4">
                                <h2 class="font-semibold text-lg">Women's Crisis Center (WCC), Imo State</h2>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg overflow-hidden ">
                            <img src="{{ asset('Images/benmore.png') }}" alt="Stories of Girls' Resistance" class="w-full h-56 object-cover rounded-lg">
                            <div class="p-4">
                                <h2 class="font-semibold text-lg">Benmore Foundation & First Lady, Ondo State Government</h2>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg overflow-hidden ">
                            <img src="{{ asset('Images/or.png') }}" alt="Stories of Girls' Resistance" class="w-full h-56 object-cover rounded-lg">
                            <div class="p-4">
                                <h2 class="font-semibold text-lg">Orphans in South Africa Documentary </h2>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg overflow-hidden ">
                            <img src="{{ asset('Images/in.png') }}" alt="Stories of Girls' Resistance" class="w-full h-56 object-cover rounded-lg">
                            <div class="p-4">
                                <h2 class="font-semibold text-lg">Inuadada Foundation</h2>
                            </div>
                        </div>
                    </div>
                </div>
            <!----Seven Section---->
             <div class="flex flex-col items-center">
                  <!-- Seven section -->
                  <div class="text-center py-16 px-4 w-full" style="background: #ECECD5;">
                    <h1 class="text-5xl font-semibold mb-4" style="font-family: 'Playfair Display', serif;">We don’t just tell stories</h1>-
                    <h2 class="text-5xl font-semibold mb-6" style="font-family: 'Playfair Display', serif;">We drive change</h2>
                    <p class="text-lg mb-6 font-medium">Let's Make Impact Together</p>
                        <button class="bg-[#E76A35] text-white py-2 px-4 rounded-full hover:bg-[#d95f2f]">
                          Contact us <span aria-hidden="true">&rarr;</span>
                        </button>
                  </div>
                  <!-- Eight section -->
                <div class="flex flex-col md:flex-row justify-center md:justify-between items-center w-full px-4 py-16 bg-gray-50 relative">
                    <div class="flex flex-col items-center justify-center w-full md:w-1/2 h-auto">
                       <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif font-semibold text-gray-900 leading-tight text-center md:text-left" style="font-family: 'Playfair Display', serif;">
                            Ready to Amplify <br> Your Impact?
                        </h1>

                    </div>
                    <div class="flex items-center justify-center w-full md:w-auto mt-8 md:mt-0">
                        <button class="bg-orange-600 h-36 w-36 md:h-52 md:w-52 text-white p-4 rounded-full hover:bg-orange-500 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 md:h-56 md:w-56" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
      <!----Footer section--->
      @include('components.footer')
    </body>
</html>
