<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Empowering Change Through Storytelling: The lolo cynthia show</title>
    <link rel="stylesheet" href="../style.css" />
    <script src="./scroll.js" defer></script>
  </head>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
  <body class="text-accentTextDark">
     @include('components.header')
    <main>
      <!-- our innitiantives insider -->
      <section class="py-16 rounded md:mt-0 mt-[-30px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
            <div class="flex gap-3 items-center mb-2 text-[16px] font-[400]">
              <a href="{{ url('Initiatives-Initiatives') }}" class="flex items-center gap-1">
                Our initiative
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="8 4 16 12 8 20" />
                </svg>
              </a>
              <p class="text-primary font-[600]">The Lolo Cynthia Show</p>
            </div>
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
             <h1
                class="md:text-5xl lg:text-[3.5rem] text-[40px] md:mb-6 mb-2 font-playfair font-[00] leading-normal"
              >
               <!--  Empowering Change Through Storytelling:
                <span class="text-primary"> The lolo cynthia show </span> -->
                The lolo cynthia show
              </h1>
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 lg:pl-10 lg:ml-52">
                <p
                class="text-accentTextDark font-[400] md:mb-6 mb-0 md:text-[26px] text-[16px] font-opensans font-[400]"
              >
                <!-- note also how some start wiht boldness why some dont  -->
                <strong> The Lolo Cynthia Show </strong> is a powerful 30-minute
                program that blends education and entertainment to spark
                positive social change. We challenge harmful narratives,
                influence cultural beliefs, and promote positive social norms,
                empowering individuals, families, and communities.
              </p>
            </div>
          </div>
          <!-- Image Section -->
<!--           <div class="my-6 w-full h-96">
            <img
              src="{{ asset('Images/show-1.jpeg') }}"
              alt="the founder of LSIV "
              class="w-full h-full object-cover object-center rounded-md"
            />
          </div> -->
        </div>
      </section>
        <section class="p-6 mt-[-30px]">
          <div class="overflow-hidden w-full">
            <div
              class="flex transition-transform duration-500 ease-in-out w-max"
              id="carouselTrack"
            >
              <!-- card 1 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                     src="https://www.youtube.com/embed/WU_nneqxAR4?si=mOUV_Hinh8bypQDz"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <!-- card 2 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    src="https://www.youtube.com/embed/oaG-PvkqH8o?si=EW2fym0Q1ulH7VtZ" 
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <!-- card 3 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    src="https://www.youtube.com/embed/3ZxBUHcbM0E?si=oO1Jp6wzqhoO8l8e"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <!-- card 4 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                   src="https://www.youtube.com/embed/pPrtGkXlFr4?si=NDjLZb5qpwY_KWQR"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <!-- card 4 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    src="https://www.youtube.com/embed/MgrzcO6LHBM?si=WrFPHNULC-Hp2ZMo"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
            <!-- card 5 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    src="https://www.youtube.com/embed/5-anwVcP4sk?si=A2Sw18gegutMtdAl"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    src="https://www.youtube.com/embed/zZuriRoA4Mk?si=7gX-zb-dIgrXZi1Z" 
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>

              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    src="https://www.youtube.com/embed/P8jmqFxOfEE?si=l1Zg4zdWAKbxxUaC" 
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    src="https://www.youtube.com/embed/nsgT8Oo02Rc?si=y_74oFbHEpih3nzz"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    src="https://www.youtube.com/embed/xjwh0_zzd3A?si=cFVI0npgiG-JeAn8" 
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    src="https://www.youtube.com/embed/umCV8WgrJEI?si=smCtlExPWD_bo02-"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div> 
        <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                     src="https://www.youtube.com/embed/Q4dSIwv4NlA?si=R0eiF0kfTxKZbJ1H"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
                </div>
              </div>
              <!-- card 3 -->
              <div
                class="flex-shrink-0 md:p-4 p-2 md:w-[23.62875rem] card-image-container"
              >
                <div class="w-full h-[18.75rem]">
                 <iframe
                    src="https://www.youtube.com/embed/JL6T8kFp57I?si=RUJQ6RVNxwrRWg_7"
                    title="The founder of LSIV"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                     class="md:w-full w-[240px] md:h-full h-[200px] object-cover object-center"
                ></iframe>
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
            </div>
      </section>
      <!-- our approach  -->
      <section class="bg-secondary py-16 rounded">
        <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-6 md:p-4 p-1 md:mt-[-30px] mt-[-40px]">
          <!-- Our Approach List -->
          <h2
            class="md:text-[48px] text-[32px] md:mb-4 m-2 font-playfair font-[500] leading-normal md:p-2"
          >
            Our Approach
          </h2>
         <ul class="custom-bullet-list md:pl-5 pl-3">
          <li class="flex items-start flex-wrap gap-1 text-[20px]">
            <span class="flex-shrink-0 mt-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
              </svg>
            </span>
            <div>
              <span class="font-[600]">Human-Centered Stories:</span> We showcase real-life stories that resonate with viewers, tackling critical issues like:
              <ul class="list-disc pl-5 mt-3 space-y-3">
                <li>Sexual autonomy and health</li>
                <li>Family dynamics and education</li>
                <li>Community development and masculinity</li>
                <li>Financial independence</li>
              </ul>
            </div>
          </li>
        <li class="flex items-start gap-1 text-[20px] mt-4">
          <span class="flex-shrink-0 mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
              <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
            </svg>
          </span>
          <div>
            <span class="font-[600]">Engaging Format:</span> The show combines interviews, documentaries, animations, and re-enactments to create an informative and entertaining experience.
          </div>
        </li>

        </ul>

        </div>
      </section>
      <!-- Images of Impact -->
      <section class="bg-accentTextLight py-16 rounded p-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">

          <!-- IMPACTS List -->
          <div class="mt-4">
            <h3 class="md:text-5xl text-3xl mb-6 font-playfair font-[500] leading-normal">
              Impact
            </h3>
           <ul class="custom-bullet-list">
          <li class="flex items-start gap-2 text-[20px] mt-4">
            <span class="flex-shrink-0 mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
              </svg>
            </span>
            <div>
              <span class="font-[600]">Pilot Season Success:</span> Our pilot season tackled sensitive issues like addiction, Down syndrome, HIV, and domestic abuse, receiving positive feedback for its authenticity and impact.
            </div>
          </li>

          <li class="flex items-start gap-2 text-[20px] mt-4">
            <span class="flex-shrink-0 mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
              </svg>
            </span>
            <div>
              <span class="font-[600]">Global Reach:</span> We've curated stories from over 45 people across six African countries, with a growing online community in the USA, India, Africa, and the UK.
            </div>
          </li>

          <li class="flex items-start gap-2 text-[20px] mt-4">
            <span class="flex-shrink-0 mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
              </svg>
            </span>
            <div>
              <span class="font-[600]">Inspiring Action:</span> The show's influence extends beyond viewership.
              <ul class="list-disc pl-5 mt-1 space-y-3 ml-5">
                <li>The Leratong Joy for One orphanage featured in our documentary received a 10,000 South African Rands donation, a radio feature, and an award for community work.</li>
                <li>Our episodes—Widows Plights and Child-Free Women—were used as conversation starters on South Africa's popular radio show, On the Move.</li>
                <li>Our episode on child-free African women is featured on the First Lady of Ondo State, Nigeria, women empowerment panel.</li>
                <li>Leading Nigerian gynaecologists use the animation from our PCOS episode as explainer videos for their patients.</li>
              </ul>
            </div>
          </li>

          <li class="flex items-start gap-2 text-[20px] mt-4">
            <span class="flex-shrink-0 mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
              </svg>
            </span>
            <div>
              <span class="font-[600]">Creating a Safe Space:</span> We provide a platform for personal stories, empowering individuals to share their experiences and break down stigma. For instance:
              <ul class="list-disc pl-5 mt-1 space-y-3 ml-5">
                <li>Mothers in Kenya and Nigeria openly discussed the realities of raising children with Down syndrome to create awareness of Down syndrome family support groups and early therapy interventions.</li>
                <li>A young Nigerian man disclosed his HIV status for the first time to his family on the show to challenge the narrative of HIV as a killer and introduce the HIV medications ARVs and PREP to the public.</li>
                <li>Prominent feminists from Haiti, South Africa, and Nigeria share their domestic abuse stories to create awareness of available domestic shelters and early signs of abuse.</li>
              </ul>
            </div>
          </li>
        </ul>



            <!-- note you might want to render that dynamically only if there is more added -->
            <!-- <div class="pl-6 mt-4 text-base flex flex-col gap-5">
              <p>
                <strong> MyBodyIsMine</strong> equips young people with the
                knowledge and confidence to navigate the complexities of
                adolescence and make informed choices about their sexual and
                reproductive health.
              </p>
              <strong>
                By investing in SRH education, we invest in a healthier and more
                empowered future for all.
              </strong>
            </div> -->
          </div>
        </div>
      </section>
        <section class="flex flex-col items-center bg-miscellanous py-16">
       <div class="text-center w-full h-auto sm:h-52 md:text-6xl lg:h-auto md:p-0 p-4">
          <h2
            class="text-3xl md:text-[60px] lg:text-[60px] xl:text-[60px] font-medium md:mb-6 mb-2 font-playfair"
          >
            Join us in using storytelling
          </h2>
          <h2
            class="text-3xl md:text-[60px] lg:text-[60px] xl:text-[60px] font-medium md:mb-6 mb-2 font-playfair"
          >
            to create a more just and
          </h2>
          <h2
            class="text-3xl md:text-[60px] lg:text-[60px] xl:text-[60px] font-medium md:mb-6 mb-2 font-playfair"
          >
           equitable world.
          </h2>
          <p class="md:text-[24px] text-[16px] font-[400] mb-4 font-medium font-opensans"> 
                   Learn more about The Conversation and how you can connect young people with experienced mentors.
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
<script type="text/javascript">
const scrollButton = document.getElementById("scrollBtn");
const carouselTrack = document.getElementById("carouselTrack");

let startX;
let isDragging = false;
let initialScrollPosition = 0;

// Function to determine the number of visible cards based on screen width
function getVisibleCards() {
  if (window.innerWidth >= 1024) {
    return 3;
  } else if (window.innerWidth >= 768) {
    return 2;
  } else {
    return 1;
  }
}

const totalCards = document.querySelectorAll(".card-image-container").length;
let visibleCards = getVisibleCards();
const cardWidth = document.querySelector(".card-image-container").offsetWidth;
let maxScroll = (totalCards - visibleCards) * cardWidth;
let scrollPosition = 0;

function updateMaxScroll() {
  visibleCards = getVisibleCards();
  maxScroll = (totalCards - visibleCards) * cardWidth;
}

function scrollOn() {
  scrollPosition += cardWidth;

  if (scrollPosition > maxScroll) {
    scrollPosition = 0;
  }

  carouselTrack.style.transition = "transform 0.5s ease-in-out";
  carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
}

scrollButton.addEventListener("click", scrollOn);
document.addEventListener("keyup", (e) => {
  if (e.key === "ArrowRight") {
    scrollOn();
  }
});

window.addEventListener("resize", updateMaxScroll);

// Drag and Swipe Functionality
carouselTrack.addEventListener("mousedown", (e) => {
  isDragging = true;
  startX = e.pageX;
  initialScrollPosition = scrollPosition;
  carouselTrack.style.transition = "none";
});

carouselTrack.addEventListener("mousemove", (e) => {
  if (!isDragging) return;
  const deltaX = e.pageX - startX;
  scrollPosition = initialScrollPosition - deltaX;
  
  // Clamp the scroll position
  if (scrollPosition < 0) scrollPosition = 0;
  if (scrollPosition > maxScroll) scrollPosition = maxScroll;

  carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
});

carouselTrack.addEventListener("mouseup", () => {
  isDragging = false;
  carouselTrack.style.transition = "transform 0.5s ease-in-out";
});

carouselTrack.addEventListener("mouseleave", () => {
  isDragging = false;
  carouselTrack.style.transition = "transform 0.5s ease-in-out";
});

// Touch events for mobile
carouselTrack.addEventListener("touchstart", (e) => {
  startX = e.touches[0].pageX;
  initialScrollPosition = scrollPosition;
  isDragging = true;
  carouselTrack.style.transition = "none";
});

carouselTrack.addEventListener("touchmove", (e) => {
  if (!isDragging) return;
  const deltaX = e.touches[0].pageX - startX;
  scrollPosition = initialScrollPosition - deltaX;

  if (scrollPosition < 0) scrollPosition = 0;
  if (scrollPosition > maxScroll) scrollPosition = maxScroll;

  carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
});

carouselTrack.addEventListener("touchend", () => {
  isDragging = false;
  carouselTrack.style.transition = "transform 0.5s ease-in-out";
});
</script>