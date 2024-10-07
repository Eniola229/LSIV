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
     @include('components.header')
     
    <!--Lolo Social Impact Venture -->
    <section class="bg-white py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <!-- Image Section -->
                <div class="mb-8 lg:mb-0 lg:w-1/3 text-xl">
                    <div class="flex justify-center md:justify-start">
                        <img src="{{ asset('Images/women.png') }}" alt="Social Justice Image" class="w-90 h-auto">
                    </div>
                </div>
                <!-- Text Section -->
                <div class="lg:w-2/3 lg:pl-10">
                	<h1 class="text-6xl font-serif text-dark-900 text-left md:text-left mb-16" style="font-family: 'Playfair Display', serif; font-style: normal; font-weight: 500; line-height: normal;">Lolo Social Impact Venture is a dedicated force for positive change.</h1>
                    <p class="text-dark-700 mb-6 text-xl" style="font-style: normal; font-weight: 400; line-height: 32px;">
                       We drives impactful solutions through strategic advocacy, multimedia campaigns, and community-centred initiatives. Founded by renowned international communication strategist and social entrepreneur Lolo Cynthia, our agency transforms challenges into opportunities for sustainable development, gender equality, health, education, and environmental sustainability.
                    </p>
                </div>
            </div>
        </div>
    </section>

     <section class="py-16 rounded bg-[#ECECD5]" style="background: #ECECD5;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-4">
                <!-- Text Section -->
                <div class="lg:w-2/3 lg:pl-10">
                	<h1 class="text-6xl font-serif font-bold text-dark-900 text-left md:text-left mb-6" style="font-family: 'Playfair Display', serif; font-style: normal; font-weight: 500; line-height: normal">We connect grassroots voices with powerful platforms.</h1>
                    <p class="text-dark-700 mb-6 font-normal text-xl pr-px" style="font-style: normal; font-weight: 400; line-height: 32px;">
                       At LSIV, we bridge the gap between grassroots efforts and high-level advocacy, ensuring marginalized communities are not only heard but compellingly represented. Our approach leverages cutting-edge digital strategies and powerful storytelling to create lasting impact.
                    </p>
                      <p class="text-dark-700 mb-6 font-normal text-xl pr-px" style="font-style: normal; font-weight: 400; line-height: 32px;">
						Collaboration is at the heart of our mission. We partner with organizations to co-create innovative solutions addressing the root causes of social issues. Together, we strive to foster enduring change and contribute to a brighter, more equitable future for all.
                    </p>
                </div>
                    <!-- Image Section -->
                <div class="mb-8 lg:mb-0 lg:w-1/3 text-xl">
                    <div class="flex justify-center md:justify-start">
                        <img src="{{ asset('Images/women-2.png') }}" alt="Social Justice Image" class="w-90 h-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="bg-gray-100 py-8 px-4">
        <!-- Heading Section -->
        <div class="max-w-7xl mx-auto text-center mb-4">
            <h2 class="text-6xl font-serif font-bold text-dark-900 text-left md:text-left" style="font-family: 'Playfair Display', serif; font-style: normal; font-weight: 500; line-height: normal;">Behind the Scenes</h2>
            <div class="flex font-semibold justify-end text-dark-500" style="font-style: normal; font-weight: 600; line-height: 32px;">
                <span>Scroll →</span>
            </div>
        </div>

        <!-- Scrollable Image Section -->
        <div class="max-w-7xl mx-auto overflow-x-auto scroll-container">
		<div class="flex space-x-4 overflow-x-auto">
	    <!-- Image 1 -->
	    <div class="min-w-[250px]">
	        <img src="{{ asset('Images/scene-1.png') }}" alt="Behind the Scenes Image 1" class="h-72 w-full object-cover">
	    </div>
	    <!-- Image 2 -->
	    <div class="min-w-[250px]">
	        <img src="{{ asset('Images/scene-2.png') }}" alt="Behind the Scenes Image 2" class="h-72 w-full object-cover">
	    </div>
	    <!-- Image 3 -->
	    <div class="min-w-[250px]">
	        <img src="{{ asset('Images/scene-3.png') }}" alt="Behind the Scenes Image 3" class="h-72 w-full object-cover">
	    </div>
	    <!-- Image 4 -->
	    <div class="min-w-[250px]">
	        <img src="{{ asset('Images/scene-4.png') }}" alt="Behind the Scenes Image 4" class="h-72 w-full object-cover">
	    </div>
	   	<!-- Image 1 -->
	    <div class="min-w-[250px]">
	        <img src="{{ asset('Images/scene-1.png') }}" alt="Behind the Scenes Image 1" class="h-72 w-full object-cover">
	    </div>
	    <!-- Image 2 -->
	    <div class="min-w-[250px]">
	        <img src="{{ asset('Images/scene-2.png') }}" alt="Behind the Scenes Image 2" class="h-72 w-full object-cover">
	    </div>
	    <!-- Image 3 -->
	    <div class="min-w-[250px]">
	        <img src="{{ asset('Images/scene-3.png') }}" alt="Behind the Scenes Image 3" class="h-72 w-full object-cover">
	    </div>
	    <!-- Image 4 -->
	    <div class="min-w-[250px]">
	        <img src="{{ asset('Images/scene-4.png') }}" alt="Behind the Scenes Image 4" class="h-72 w-full object-cover">
	    </div>
    	</div>
        </div>
    </div>

     <!-- Vision and Mission Section -->
    <section class="p-8 mt-12">
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Vision -->
            <div class="bg-[#FFC6DB] p-6 rounded-lg shadow-lg md:h-[394px] pt-[68px] pr-[34px] pb-[67px] pl-[40px]">
                 <h2 class="text-4xl font-serif font-bold text-dark-900 text-left md:text-left mb-6" style="font-family: 'Playfair Display', serif; font-style: normal; font-weight: 500; line-height: normal;">Our Vision</h2>
                <p class="text-dark-400 font-semibold mt-4" style="font-style: normal; font-weight: 400; line-height: 33px;">We envision a world where every individual and community has the opportunity to thrive. A world where gender equality is the norm, health and well-being are prioritized, educational opportunities are accessible, livelihoods are sustainable, and the environment is protected for future generations.</p>
            </div>
            <!-- Mission -->
            <div class="bg-[#FFDED0] p-6 rounded-lg shadow-lg md:h-[394px] pt-[68px] pr-[34px] pb-[67px] pl-[40px]">
            	 <h2 class="text-4xl font-serif font-bold text-dark-900 text-left md:text-left mb-6" style="font-family: 'Playfair Display', serif; font-style: normal; font-weight: 500; line-height: normal;">Our Mission</h2>
                <p class="text-dark-400 font-semibold mt-4" style="font-style: normal; font-weight: 400; line-height: 33px;">Our mission is to support our partners in driving positive social change through strategic advocacy, effective communication, and community-centered approaches. We aim to empower communities, amplify marginalized voices, and create lasting impact by fostering collaboration and leveraging innovative solutions to address the world's most pressing challenges.</p>
            </div>
        </div>
    </section>

    <!-- Unique Factors Section -->
    <section class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8"></h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="p-6 rounded-lg h-80">
               <h2 class="text-5xl font-serif font-bold text-dark-900 text-left md:text-left mb-6 w-40" style="font-family: 'Playfair Display', serif; font-style: normal; font-weight: 500; line-height: normal;">What Makes Us Unique?</h2>
            </div>

            <!-- Deep-rooted Expertise -->
           <div class="bg-[#C4E1A4] p-6 rounded-lg shadow-lg flex flex-col justify-between h-80 pt-[24px] pr-[16px] pb-[24px] pl-[24px]">
			    <h3 class="text-3xl font-semibold mb-4" style="font-style: normal; font-weight: 600; line-height: normal;">Deep-rooted Expertise</h3>
			    <p class="mt-auto" style="font-weight: 400;">Our team possesses in-depth knowledge of the subject matters we advocate for, allowing us to develop more targeted and impactful campaigns.</p>
			</div>

			 <!-- Collaborative Approach -->
           <div class="bg-[#ECECD5] p-6 rounded-lg shadow-lg flex flex-col justify-between h-80 pt-[24px] pr-[16px] pb-[24px] pl-[24px]">
			    <h3 class="text-3xl font-semibold mb-4" style="font-style: normal; font-weight: 600; line-height: normal;">Collaborative Approach</h3>
			    <p class="mt-auto" style="font-weight: 400;">We engage deeply with communities, understanding their needs and amplifying their stories through innovative digital strategies.</p>
			</div>
			 <!-- Global Impact -->
           <div class="bg-[#FFDED0] p-6 rounded-lg shadow-lg flex flex-col justify-between h-80 pt-[24px] pr-[16px] pb-[24px] pl-[24px]">
			    <h3 class="text-3xl font-semibold mb-4" style="font-style: normal; font-weight: 600; line-height: normal;">Global Impact</h3>
			    <p class="mt-auto" style="font-weight: 400;">Our ability to translate local insights into global action sets us apart. We form strategic partnerships across sectors to foster sustainable solutions to complex social issues.</p>
			</div>
			<!-- Results-Driven -->
           <div class="bg-[#DDC2FF] p-6 rounded-lg shadow-lg flex flex-col justify-between h-80 pt-[24px] pr-[16px] pb-[24px] pl-[24px]">
			    <h3 class="text-3xl font-semibold mb-4" style="font-style: normal; font-weight: 600; line-height: normal;">Results-Driven</h3>
			    <p class="mt-auto" style="font-weight: 400;">Our ability to translate local insights into global action sets us apart. We form strategic partnerships across sectors to foster sustainable solutions to complex social issues.</p>
			</div>
									 <!-- Global Impact -->
           <div class="bg-[#FFE4BB] p-6 rounded-lg shadow-lg flex flex-col justify-between h-80 pt-[24px] pr-[16px] pb-[24px] pl-[24px]">
			    <h3 class="text-3xl font-semibold mb-4" style="font-style: normal; font-weight: 600; line-height: normal;">Holistic Approach</h3>
			    <p class="mt-auto" style="font-weight: 400;">We integrate education, advocacy, and storytelling to help our clients communicate their impact in ways that inspire and mobilize.</p>
			</div>
        </div>
    </section>

    <div class="bg-[#C4E1Ad] py-10">
      <h1 class="text-center text-6xl font-bold" style="font-family: 'Playfair Display', serif; font-size: 72px; font-style: normal; font-weight: 500; line-height: normal; text-transform: capitalize;">Meet The Team</h1>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 p-24">
        
        <!-- Team Member Card 1 -->
        <div class="bg-white rounded-xl p-6 text-center shadow-md w-72">
          <img src="{{ asset('Images/ceo-lolo.png') }}" alt="Team member photo" class="w-24 h-24 mx-auto rounded-full mb-4">
          <h2 class="text-xl font-semibold" style="font-family: 'Helvetica Neue' font-size: 20px; font-style: normal; font-weight: 500; line-height: 32px; /* 160% */ letter-spacing: 0.4px;">Lolo Cynthia</h2>
          <p class="text-gray-600 mb-4 mt-4">CEO</p>
          <a href="#" class="inline-block mt-4 text-black hover:text-orange-500">
            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-8 19h-3v-8h3v8zm-1.5-9.268c-.966 0-1.75-.797-1.75-1.732s.784-1.732 1.75-1.732 1.75.797 1.75 1.732-.784 1.732-1.75 1.732zm10.5 9.268h-3v-4.604c0-1.109-.026-2.536-1.548-2.536-1.548 0-1.786 1.211-1.786 2.462v4.678h-3v-8h2.878v1.094h.041c.401-.761 1.381-1.562 2.844-1.562 3.042 0 3.603 2.003 3.603 4.609v3.859z"/>
            </svg>
          </a>
        </div>

        <!-- Team Member Card 2 -->
        <div class="bg-white rounded-xl p-6 text-center shadow-md w-72">
          <img src="{{ asset('Images/p-d-lolo.png') }}" alt="Team member photo" class="w-24 h-24 mx-auto rounded-full mb-4">
          <h2 class="text-xl font-semibold" style="font-family: 'Helvetica Neue' font-size: 20px; font-style: normal; font-weight: 500; line-height: 32px; /* 160% */ letter-spacing: 0.4px;">Akogun Elizabeth</h2>
          <p class="text-gray-600 mb-4 mt-4">Product Designer</p>
          <a href="#" class="inline-block mt-4 text-black hover:text-orange-500">
            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-8 19h-3v-8h3v8zm-1.5-9.268c-.966 0-1.75-.797-1.75-1.732s.784-1.732 1.75-1.732 1.75.797 1.75 1.732-.784 1.732-1.75 1.732zm10.5 9.268h-3v-4.604c0-1.109-.026-2.536-1.548-2.536-1.548 0-1.786 1.211-1.786 2.462v4.678h-3v-8h2.878v1.094h.041c.401-.761 1.381-1.562 2.844-1.562 3.042 0 3.603 2.003 3.603 4.609v3.859z"/>
            </svg>
          </a>
        </div>

        <!-- Team Member Card 3 -->
        <div class="bg-white rounded-xl p-6 text-center shadow-md w-72">
          <img src="{{ asset('Images/m-1-lolo.png') }}" alt="Team member photo" class="w-24 h-24 mx-auto rounded-full mb-4">
          <h2 class="text-xl font-semibold" style="font-family: 'Helvetica Neue' font-size: 20px; font-style: normal; font-weight: 500; line-height: 32px; /* 160% */ letter-spacing: 0.4px;">Team member name</h2>
          <p class="text-gray-600 mb-4 mt-4">Team member position</p>
          <a href="#" class="inline-block mt-4 text-black hover:text-orange-500">
            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-8 19h-3v-8h3v8zm-1.5-9.268c-.966 0-1.75-.797-1.75-1.732s.784-1.732 1.75-1.732 1.75.797 1.75 1.732-.784 1.732-1.75 1.732zm10.5 9.268h-3v-4.604c0-1.109-.026-2.536-1.548-2.536-1.548 0-1.786 1.211-1.786 2.462v4.678h-3v-8h2.878v1.094h.041c.401-.761 1.381-1.562 2.844-1.562 3.042 0 3.603 2.003 3.603 4.609v3.859z"/>
            </svg>
          </a>
        </div>

         <!-- Team Member Card 4 -->
        <div class="bg-white rounded-xl p-6 text-center shadow-md w-72">
          <img src="{{ asset('Images/m-2-lolo.png') }}" alt="Team member photo" class="w-24 h-24 mx-auto rounded-full mb-4">
          <h2 class="text-xl font-semibold" style="font-family: 'Helvetica Neue' font-size: 20px; font-style: normal; font-weight: 500; line-height: 32px; /* 160% */ letter-spacing: 0.4px;">Team member name</h2>
          <p class="text-gray-600 mb-4 mt-4">Team member position</p>
          <a href="#" class="inline-block mt-4 text-black hover:text-orange-500">
            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-8 19h-3v-8h3v8zm-1.5-9.268c-.966 0-1.75-.797-1.75-1.732s.784-1.732 1.75-1.732 1.75.797 1.75 1.732-.784 1.732-1.75 1.732zm10.5 9.268h-3v-4.604c0-1.109-.026-2.536-1.548-2.536-1.548 0-1.786 1.211-1.786 2.462v4.678h-3v-8h2.878v1.094h.041c.401-.761 1.381-1.562 2.844-1.562 3.042 0 3.603 2.003 3.603 4.609v3.859z"/>
            </svg>
          </a>
        </div>

        <!-- Team Member Card 5 -->
        <div class="bg-white rounded-xl p-6 text-center shadow-md w-72">
          <img src="{{ asset('Images/m-3-lolo.png') }}" alt="Team member photo" class="w-24 h-24 mx-auto rounded-full mb-4">
          <h2 class="text-xl font-semibold" style="font-family: 'Helvetica Neue' font-size: 20px; font-style: normal; font-weight: 500; line-height: 32px; /* 160% */ letter-spacing: 0.4px;">Team member name</h2>
          <p class="text-gray-600 mb-4 mt-4">Team member position</p>
          <a href="#" class="inline-block mt-4 text-black hover:text-orange-500">
            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-8 19h-3v-8h3v8zm-1.5-9.268c-.966 0-1.75-.797-1.75-1.732s.784-1.732 1.75-1.732 1.75.797 1.75 1.732-.784 1.732-1.75 1.732zm10.5 9.268h-3v-4.604c0-1.109-.026-2.536-1.548-2.536-1.548 0-1.786 1.211-1.786 2.462v4.678h-3v-8h2.878v1.094h.041c.401-.761 1.381-1.562 2.844-1.562 3.042 0 3.603 2.003 3.603 4.609v3.859z"/>
            </svg>
          </a>
        </div>

        <!-- Team Member Card 6 -->
        <div class="bg-white rounded-xl p-6 text-center shadow-md w-72">
          <img src="{{ asset('Images/m-4-lolo.png') }}" alt="Team member photo" class="w-24 h-24 mx-auto rounded-full mb-4">
          <h2 class="text-xl font-semibold" style="font-family: 'Helvetica Neue' font-size: 20px; font-style: normal; font-weight: 500; line-height: 32px; /* 160% */ letter-spacing: 0.4px;">Team member name</h2>
          <p class="text-gray-600 mb-4 mt-4">Team member position</p>
          <a href="#" class="inline-block mt-4 text-black hover:text-orange-500">
            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-8 19h-3v-8h3v8zm-1.5-9.268c-.966 0-1.75-.797-1.75-1.732s.784-1.732 1.75-1.732 1.75.797 1.75 1.732-.784 1.732-1.75 1.732zm10.5 9.268h-3v-4.604c0-1.109-.026-2.536-1.548-2.536-1.548 0-1.786 1.211-1.786 2.462v4.678h-3v-8h2.878v1.094h.041c.401-.761 1.381-1.562 2.844-1.562 3.042 0 3.603 2.003 3.603 4.609v3.859z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
                 <div class="container mx-auto px-4 py-16">
                    <p  style="font-family: 'Open Sans'; font-style: normal; font-weight: 600; line-height: normal;">Our Work</p>
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

            <section class="py-8" style="background: white;">
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
         @include('components.footer')
</body>
</html>