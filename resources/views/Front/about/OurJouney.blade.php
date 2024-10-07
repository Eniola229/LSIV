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
    
<div class="p-12 mx-auto py-12">
        <!-- Section: Our Journey -->
        <div class="bg-white overflow-hidden">
            <!-- Heading -->
            <div class="px-2 py-2 flex flex-col lg:flex-row">
                <!-- Heading Section -->
                <div class="lg:w-1/2">
                    <h2 class="text-4xl lg:text-6xl mb-6" style="font-family: 'Playfair Display', serif; font-style: normal; font-weight: 500; line-height: normal;">
                        Our Journey
                    </h2>
                </div>
                
                <!-- Text Section -->
                <div class="lg:w-2/3">
                    <p class="mt-4 text-gray-700" style="font-family: 'Open Sans', font-style: normal; font-weight: 400; line-height: 30px">
                        Lolo Social Impact Venture (LSIV) originally started as a grassroots organization called LoloTalks in 2014. Through our school, community, and multimedia advocacy programs and campaigns, we focused on enhancing the socioeconomic status and well-being of underrepresented individuals, specifically girls, women, children, and youth.
                    </p>
                </div>
            </div>

            <!-- Image -->
            <div class="w-full mt-6 mb-6">
                <img src="{{ asset('Images/o-j-1.png') }}" alt="Lolo Talks Group" class="w-full h-auto">
            </div>

            <!-- Shift in 2023 -->
            <div class="px-2 py-2 lg:flex-row mt-12 relative h-60">
                <!-- Heading Section -->
                <div class="w-full lg:w-1/2 mb-4 lg:mb-0">
                    <h2 class="text-4xl lg:text-64px mb-6" style="font-family: 'Playfair Display', serif; font-style: normal; font-weight: 500; line-height: normal;">
                       However, in 2023, we strategically shifted to become a social impact consulting firm.
                    </h2>
                </div>
                
                <!-- Text Section -->
                <div class="w-full lg:w-2/3 absolute bottom-0 right-0 p-4">
                    <p class="mt-4 text-gray-700 text-20px" style="font-family: 'Open Sans'; font-style: normal; font-weight: 400; line-height: 30px;">
                        We leverage our deep understanding of the complex dynamics of social impact work and practical, effective strategies for grassroots initiatives, media, and digital advocacy to help organizations amplify their social impact goals.
                    </p>
                </div>
            </div>

        </div>
    </div>

      <div class="p-12 mx-auto" style="background: var(--miscellanous-colour, #ECECD5);">
         <h1 class="text-4xl lg:text-6xl mt-6 underline-offset-2" style="font-family: 'Playfair Display', serif; font-style: normal; font-weight: 500; line-height: normal;">We’ve been pushing since 2014</h1>
         <hr class="border-[#0B0B0B] mb-12">
        <div id="card-container" class="flex space-x-4 overflow-x-auto snap-x snap-mandatory no-scrollbar mt-12">
          <!-- Card 1 -->
          <div class="min-w-[250px] rounded-lg p-4 snap-center" style="width: 339px;">
            <img src="{{ asset('Images/p-1.png') }}" alt="2014" class="w-full h-32 object-cover rounded-md mb-4" style="height: 226px;">
            <h3 class="text-xl font-bold" style="font-family: 'pen Sans'; font-style: normal; font-weight: 600; line-height: 42px;">2014</h3>
            <p class="text-lg md:text-2xl" style="font-family: 'pen Sans'; font-style: normal; font-weight: 400; line-height: 36px;">Founded as a grassroots organization empowering women, children, and youth.</p>
          </div>

          <div class="min-w-[250px] rounded-lg p-4 snap-center" style="width: 339px;">
            <img src="{{ asset('Images/p-2.png') }}" alt="2014" class="w-full h-32 object-cover rounded-md mb-4" style="height: 226px;">
            <h3 class="text-xl font-bold" style="font-family: 'pen Sans'; font-style: normal; font-weight: 600; line-height: 42px;">2015</h3>
            <p class="text-lg md:text-2xl" style="font-family: 'pen Sans'; font-style: normal; font-weight: 400; line-height: 36px;"> Launched "The Conversation," our first youth conference, fostering mentorship and personal development.</p>
          </div>

          <div class="min-w-[250px] rounded-lg p-4 snap-center" style="width: 339px;">
            <img src="{{ asset('Images/p-3.png') }}" alt="2014" class="w-full h-32 object-cover rounded-md mb-4" style="height: 226px;">
            <h3 class="text-xl font-bold" style="font-family: 'pen Sans'; font-style: normal; font-weight: 600; line-height: 42px;">2017</h3>
            <p class="text-lg md:text-2xl" style="font-family: 'pen Sans'; font-style: normal; font-weight: 400; line-height: 36px;">Expanded through documentaries (Stories Untold) and community-based initiative - Adopt a Community, addressing the pressing needs in underserved communities..</p>
          </div>

        <div class="min-w-[250px] rounded-lg p-4 snap-center" style="width: 339px;">
            <img src="{{ asset('Images/p-4.png') }}" alt="2014" class="w-full h-32 object-cover rounded-md mb-4" style="height: 226px;">
            <h3 class="text-xl font-bold" style="font-family: 'pen Sans'; font-style: normal; font-weight: 600; line-height: 42px;">2018</h3>
            <p class="text-lg md:text-2xl" style="font-family: 'pen Sans'; font-style: normal; font-weight: 400; line-height: 36px;">Introduced "MyBodyIsMine" program for comprehensive sexuality education and the "No Day Off" initiative to address pe</p>
          </div>

        </div>
      </div>


      <div class="container mx-auto px-4 py-8">
  <h1 class="text-4xl lg:text-6xl mt-6 mb-6 underline-offset-2" style="font-family: 'Playfair Display', serif; font-style: normal; font-weight: 500; line-height: normal; ">Our Key Achievements</h2>
  
  <!-- Section 1: Empowering Youth -->
<div class="flex flex-col md:flex-row md:items-start p-6 rounded-lg mb-8 h-auto relative md:mb-12">
  <!-- Text Block -->
  <div class="w-full md:w-1/2 bg-[#C4E1A4] p-6 md:py-12 md:px-16 rounded-lg z-10 px-2">
    <h3 class="text-xl md:text-2xl font-bold mb-4" style="font-family: 'Open Sans'; font-size: 32px; font-style: normal; font-weight: 600; line-height: 44px; letter-spacing: 0.64px;">
      Empowering Youth
    </h3>
    <ul class="list-none">
      <li class="flex items-start mb-2 gap-2" style="font-style: normal; font-weight: 400; line-height: normal; letter-spacing: 0.32px;">
        <span class="mt-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
        </svg>
    </span>
        Trained over 3,000 secondary school students through the "MyBodyIsMine" program.
      </li>
      <li class="flex items-start mb-2 gap-2" style="font-style: normal; font-weight: 400; line-height: normal; letter-spacing: 0.32px;">
        <span class="mt-4">
         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
        </svg>
    </span>
        Hosted a conference attended by over 100 students, offering mentorship and learning opportunities.
      </li>
      <li class="flex items-start mb-2 gap-2" style="font-style: normal; font-weight: 400; line-height: normal; letter-spacing: 0.32px;">
        <span class="mt-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
        </svg>
    </span>
        Partnered with the Lagos State Juvenile Prison to provide sex education classes for 80 juvenile boys.
      </li>
      <li class="flex items-start mb-2 gap-2" style="font-style: normal; font-weight: 400; line-height: normal; letter-spacing: 0.32px;">
        <span class="mt-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
        </svg>
    </span>
        Educational sex-ed posters, available in four languages, used by over 10 million people across Africa, North America, Europe & Asia.
      </li>
      <li class="flex items-start gap-2" style="font-style: normal; font-weight: 400; line-height: normal; letter-spacing: 0.32px;">
        <span class="mt-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
        </svg>
    </span>
        Collaborated with AMAZE to develop African-friendly teenage school posters.
      </li>
    </ul>
  </div>

  <!-- Image Block -->
  <div class="w-full md:w-1/2 mt-6 md:mt-0 relative">
    <div class="relative">
      <img src="{{ asset('Images/a-1.png') }}" alt="Empowering Youth" 
           class="rounded-lg absolute z-20 w-full md:w-[500px] h-72 md:right-[25%] md:top-[60px]">
    </div>
  </div>
</div>


<div class="flex flex-col md:flex-row md:items-start p-6 rounded-lg mb-8 h-auto relative md:h-96 md:mb-12">
  <!-- Text Block -->
  <div class="w-full md:w-1/2 bg-[#C4E1A4] p-6 md:py-12 md:px-16 rounded-lg z-10 md:h-96 px-2 p-10">
    <h3 class="text-xl md:text-2xl font-bold mb-4" style="font-family: 'Open Sans'; font-size: 32px; font-style: normal; font-weight: 600; line-height: 44px; letter-spacing: 0.64px;">
     Improving Health Outcomes
    </h3>
    <ul class="list-none">
      <li class="flex items-start mb-2 gap-2" style="font-style: normal; font-weight: 400; line-height: normal; letter-spacing: 0.32px;">
        <span class="mt-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
        </svg>
    </span>
        Distributed over 600 sanitary pads and 4,000 condoms to sex workers and community members through the Adopt a Community initiative.
      </li>
      <li class="flex items-start mb-2 gap-2" style="font-style: normal; font-weight: 400; line-height: normal; letter-spacing: 0.32px;">
        <span class="mt-4">
         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
        </svg>
    </span>
        Delivered six sensitization programs on menstrual hygiene, domestic abuse, and safe sex in Lagos State slums.
      </li>
      <li class="flex items-start mb-2 gap-2" style="font-style: normal; font-weight: 400; line-height: normal; letter-spacing: 0.32px;">
        <span class="mt-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
        </svg>
    </span>
        Partnered with the Government and trained over 250 girls and adolescents on menstrual hygiene and the creation of reusable pads through the No Days Off initiative.
      </li>
    </ul>
  </div>

  <!-- Image Block -->
  <div class="w-full md:w-1/2 mt-6 md:mt-0 relative">
    <div class="relative">
      <img src="{{ asset('Images/a-2.png') }}" alt="Empowering Youth" 
           class="rounded-lg absolute z-20 w-full md:w-[500px] h-72 md:right-[25%] md:top-[50px]">
    </div>
  </div>
</div>
    

<div class="flex flex-col md:flex-row md:items-start p-6 rounded-lg mb-8 h-auto relative md:mb-12">
  <!-- Text Block -->
  <div class="w-full md:w-1/2 bg-[#C4E1A4] p-6 md:py-12 md:px-16 rounded-lg z-10 px-2">
    <h3 class="text-xl md:text-2xl font-bold mb-4" style="font-family: 'Open Sans'; font-size: 32px; font-style: normal; font-weight: 600; line-height: 44px; letter-spacing: 0.64px;">
      Media Influence & Community Transformation
    </h3>
    <ul class="list-none">
      <li class="flex items-start mb-2 gap-2" style="font-style: normal; font-weight: 400; line-height: normal; letter-spacing: 0.32px;">
        <span class="mt-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
        </svg>
    </span>
        Produced The Lolo Cynthia Show, curating stories from six African countries. This led to significant donations and educational impacts, including a grant for an orphanage in South Africa.
      </li>
      <li class="flex items-start mb-2 gap-2" style="font-style: normal; font-weight: 400; line-height: normal; letter-spacing: 0.32px;">
        <span class="mt-4">
         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
        </svg>
    </span>
        Produced documentaries under Stories Unheard, reaching over 500,000 viewers and republished by CNN Africa.
      </li>
      <li class="flex items-start mb-2 gap-2" style="font-style: normal; font-weight: 400; line-height: normal; letter-spacing: 0.32px;">
        <span class="mt-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
        </svg>
    </span>
        Implemented successful initiatives addressing issues like menstrual hygiene, gender-based violence, and economic empowerment.
      </li>
      <li class="flex items-start mb-2 gap-2" style="font-style: normal; font-weight: 400; line-height: normal; letter-spacing: 0.32px;">
        <span class="mt-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
        <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
        </svg>
    </span>
       Garnered over 1 million impressions of digital advocacy campaigns.
      </li>
    </ul>
  </div>

  <!-- Image Block -->
  <div class="w-full md:w-1/2 mt-6 md:mt-0 relative">
    <div class="relative">
      <img src="{{ asset('Images/a-3.png') }}" alt="Empowering Youth" 
           class="rounded-lg absolute z-20 w-full md:w-[500px] h-72 md:right-[25%] md:top-[90px]">
    </div>
  </div>
</div>

</div>

@include('components.footer')
</body>
</html>