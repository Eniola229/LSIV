<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stories unheard</title>
    <link rel="stylesheet" href="../style.css" />
    <script src="./scroll.js" defer></script>
  </head>
    @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <body class="bg-accentTextLight">
    @include('components.header')
    <main>
      <!-- our innitiantives insider -->
      <section class="md:p-6 p-2 rounded md:mt-0 mt-[10px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex gap-3 items-center mb-2">
            Our initiative >
            <p class="text-primary capitalize">stories unheard</p>
          </div>
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
             <h1
                class="md:text-5xl lg:text-[3.5rem] text-[40px] md:mb-6 mb-2 font-playfair font-[00] leading-normal"
              >
                Stories Unheard
              </h1>
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 lg:pl-10 lg:ml-52">
              <p
                class="text-accentTextDark font-[400] md:mb-6 mb-0 md:text-[26px] text-[16px] font-opensans font-[400]"
              >
                <!-- note also how some start wiht boldness why some dont  -->
                An expository documentary production investigating critical
                social issues often ignored or silenced in underdeveloped
                communities to promote awareness and advocate for positive
                change.
              </p>
            </div>
          </div>
          <!-- Image Section -->
      <!--     <div class="my-6 w-full h-96">
            <img
              src="{{ asset('Images/or.png') }}"
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
                    
                    src="https://www.youtube.com/embed/03BopKEZcj8?si=hoIVuN-VOVkT6iUE"
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
                    
                    src="https://www.youtube.com/embed/4VH5JUakQGM?si=-NlIRU6mDkhJSIf8"
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
                    
                    src="https://www.youtube.com/embed/4ZIS0TmRZkg?si=RnmLL57nRlfhIVja"
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
                    
                    src="https://www.youtube.com/embed/Af8iWtyWFdw?si=ZfBf7MYgkMFfhX8J"
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
                    
                   src="https://www.youtube.com/embed/J43r6cOYIkI?si=dCXPUti8AjZ1VJla" 
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
                    
                    src="https://www.youtube.com/embed/L4bDdTrdLao?si=40LhDggjWKcSikV8"
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
                    
                    src="https://www.youtube.com/embed/OyO_EUyY1f8?si=aMYRrBgHOs4deXK7"
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
      <section class="bg-secondary py-6 rounded">
        <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-6 md:p-4 p-1 md:mt-[-30px] mt-[-40px]">
          <!-- Our Approach List -->
          <h2
            class="md:text-[48px] text-[32px] md:mb-0 m-2 font-playfair font-[500] leading-normal md:p-2"
          >
            <!-- note some are our aproach -->
            Our Approach
          </h2>
          <ul class="custom-bullet-list p-6 md:pl-5 pl-3 md:mt-[-30px]">
            <li class="flex items-start gap-2 mt-2 text-[20px]">
              <span class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                </svg>
              </span>
              <div>
                <span class="font-[600]">Vulnerability:</span> Street children, widows, orphaned children
              </div>
            </li>

            <li class="flex items-start gap-2 mt-2 text-[20px]">
              <span class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                </svg>
              </span>
              <div>
                 <span class="font-[600]">Health:</span> Malaria medication misuse, caring for children with Down syndrome
              </div>
            </li>

            <li class="flex items-start gap-2 mt-2 text-[20px]">
              <span class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                </svg>
              </span>
              <div>
                 <span class="font-[600]">Economic Realities:</span> Street food vendors, informal work
              </div>
            </li>

            <li class="flex items-start gap-2 mt-2 text-[20px]">
              <span class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                </svg>
              </span>
              <div>
                 <span class="font-[600]">Social Justice:</span> Cannabis legalisation, women's rights, domestic violence
              </div>
            </li>

            <li class="flex items-start gap-2 mt-2 text-[20px]">
              <span class="flex-shrink-0 mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4" />
                </svg>
              </span>
              <div>
                 <span class="font-[600]">Hidden Realities:</span> Sports betting addiction, child adoption system
              </div>
            </li>
          </ul>

          <div class="pl-6 mt-4 text-base flex flex-col gap-5">
            <p>
              By bringing these stories to light, we aim to raise public
              awareness, challenge stigma, and advocate for positive change.
            </p>
          </div>
        </div>
      </section>
      <!-- Images of Impact -->
      <section class="bg-accentTextLight py-6 rounded p-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">

          <!-- IMPACTS List -->
          <div class="mt-4">
            <h3 class="md:text-5xl text-3xl mb-6 font-playfair font-[500] leading-normal">
              Impact
            </h3>
            <ul class="custom-bullet-list">
          <li class="flex flex-wrap gap-2 mt-2">
               <span class="mt-1">
                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                   </svg>
              </span> <span class="font-[600]">Orphanage Grant</span></li>
          <li class="flex flex-wrap gap-2 mt-2">
               <span class="mt-1">
                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                   </svg>
              </span> <span class="font-[600]">Widows Rights</span></li>
          <li class="flex flex-wrap gap-2 mt-2">
               <span class="mt-1">
                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                   </svg>
              </span> <span class="font-[600]">KEKE Women Increased</span></li>
          <li class="flex flex-wrap gap-2 mt-2">
               <span class="mt-1">
                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                   </svg>
              </span> <span class="font-[600]">Sugarcane Man Increased</span></li>
          <li class="flex flex-wrap gap-2 mt-2">
               <span class="mt-1">
                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                   </svg>
              </span>
                 <span class="font-[600]">Street Food Vendor GTB, CNN, Used as Storytelling</span
                >
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