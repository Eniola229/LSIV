<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Igniting Potential: The Conversation</title>
    <link rel="stylesheet" href="../style.css" />
    <script src="./scroll.js" defer></script>
  </head>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <body class="bg-accentTextLight">
   @include('components.header')
    <main>
      <!-- our innitiantives insider -->
     <section class="md:p-6 p-2 rounded md:mt-0 mt-[50px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6 md:mt-0 mt-[-50px]">
            <div class="flex gap-3 items-center mb-2 text-[16px] font-[400]">
              <a href="{{ url('Initiatives-Initiatives') }}" class="flex items-center gap-1">
                Our initiative
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="8 4 16 12 8 20" />
                </svg>
              </a>
              <p class="text-primary font-[600]">The Conversation</p>
            </div>
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
              <h1
                class="md:text-5xl lg:text-[3.5rem] text-[40px] md:mb-6 mb-2 font-playfair font-[00] leading-normal"
              >
               The Conversation
              </h1>
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 lg:pl-10 lg:ml-52">
              <p
                class="text-accentTextDark font-[400] md:mb-6 mb-0 md:text-[26px] text-[16px] font-opensans font-[400]"
              >
                <!-- note also how some start wiht boldness why some dont  -->
                 <span class="font-[600]"> The Conversation </span> fosters meaningful dialogue
                between generations, connecting young people with established
                mentors to inspire growth. Through engaging conferences, we
                create a platform for knowledge exchange and empower young
                individuals to navigate their life journeys.
              </p>
            </div>
          </div>
          <!-- Image Section -->
   <!--        <div class="my-6 w-full h-96">
            <img
              src="{{ asset('Images/po-1.jpeg') }}"
              alt="the founder of LSIV "
              class="w-full h-full object-cover object-center rounded-md"
            />
          </div> -->
        </div>
      </section class="px-6">
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
                  <img
                    src="{{ asset('Images/tc-1.jpeg') }}"
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
                    src="{{ asset('Images/tc-2.jpeg') }}"
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
                    src="{{ asset('Images/tc-3.jpeg') }}"
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
                    src="{{ asset('Images/tc-4.jpeg') }}"
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
                    src="{{ asset('Images/tc-1.jpeg') }}"
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
                    src="{{ asset('Images/tc-2.jpeg') }}"
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
                    src="{{ asset('Images/tc-3.jpeg') }}"
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
            Fostering Connections
          </h2>
            <ul class="custom-bullet-list">
              <li class="flex items-start gap-2 mb-4 text-[20px]">
                <span class="flex-shrink-0 mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                  </svg>
                </span>
                <div>
                   <span class="font-[600]">Intergenerational Dialogue:</span> We organize conferences that bring together experienced mentors and young people to learn from each other's perspectives.
                </div>
              </li>

              <li class="flex items-start gap-2 mb-4 text-[20px]">
                <span class="flex-shrink-0 mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                  </svg>
                </span>
                <div>
                   <span class="font-[600]">Knowledge Sharing:</span> Established professionals share their knowledge and experiences, equipping young people with valuable personal and professional development insights.
                </div>
              </li>

              <li class="flex items-start gap-2 mb-4 text-[20px]">
                <span class="flex-shrink-0 mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                  </svg>
                </span>
                <div>
                   <span class="font-[600]">Mentorship Opportunities:</span> The Conversation Initiative facilitates connections between young people and potential mentors, fostering long-term guidance and support.
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
              <ul class="custom-bullet-list">
                <li class="flex items-start gap-2 mb-4 text-[20px]">
                  <span class="flex-shrink-0 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                    </svg>
                  </span>
                  <div>
                     <span class="font-[600]">Empowering Youth:</span> Our inaugural teenagers' conference attracted over 100 secondary school students in Lagos, providing them with valuable learning opportunities and mentorship connections.
                  </div>
                </li>

                <li class="flex items-start gap-2 mb-4 text-[20px]">
                  <span class="flex-shrink-0 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                    </svg>
                  </span>
                  <div>
                     <span class="font-[600]">Building a Brighter Future:</span> By bridging the generational gap, we empower young people to reach their full potential and contribute meaningfully to society.
                  </div>
                </li>
              </ul>


            <!-- note you might want to render that dynamically only if there is more added -->
            <!-- <div class="pl-6 mt-4 text-base flex flex-col gap-5">
              <p>
                 <span class="font-[600]"> MyBodyIsMine</span> equips young people with the
                knowledge and confidence to navigate the complexities of
                adolescence and make informed choices about their sexual and
                reproductive health.
              </p>
               <span class="font-[600]">
                By investing in SRH education, we invest in a healthier and more
                empowered future for all.
              </span>
            </div> -->
          </div>
        </div>
      </section>

      <!-- Section Six -->
  <section class="flex flex-col items-center bg-miscellanous py-16">
       <div class="text-center w-full h-auto sm:h-52 md:text-6xl lg:h-auto md:p-0 p-4">
          <h2
            class="text-3xl md:text-[60px] lg:text-[60px] xl:text-[60px] font-medium md:mb-6 mb-2 font-playfair"
          >
          Join us in fostering
          </h2>
         <h2
            class="text-3xl md:text-[60px] lg:text-[60px] xl:text-[60px] font-medium md:mb-6 mb-2 font-playfair"
          >
         impactful conversations.
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