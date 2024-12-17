<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSIV - about the founder</title>
    <link rel="stylesheet" href="../style.css" />
  </head>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
  <body class="bg-[#F8F8FF]">
   @include('components.header')
    <main>
      <!-- about the founder Section -->
      <section class="py-4 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6 mb:mt-0 mt-[-30px]">
          <h1
            class="lg:text-7xl text-5xl font-normal font-playfair text-gray-900 text-left md:text-left mb-6 md:mb-16"
          >
            About The Founder
          </h1>
        <div class="flex flex-col lg:flex-row justify-between gap-4 py-16">
          <!-- Image Section -->
          <div class="lg:w-1/3 text-xl sticky top-10 self-start">
              <img
                src="{{ asset('Images/ceo-lolo-2.jpeg') }}"
                alt="the founder of LSIV"
                class="w-full md:h-[565px] h-full rounded-[16px] transform -scale-x-100"
              />
            </div>

            <!-- Text Section -->
            <div class="lg:w-2/3 lg:pl-10">
              <p
                class="text-accentTextDark font-normal leading-[2.1675rem] mb-6 text-[16px] md:text-[16px] font-opensans font-[400]"
              >
                <span class="text-primary text-[16px] md:text-2xl font-[400]">
                  Lolo Cynthia
                </span>
                is an international development multimedia producer, gender expert, and award-winning communication strategist with over a decade of experience driving transformative social impact. Renowned for her innovative advocacy, she blends multimedia content and strategic communications to promote gender equality, sexual health, and social justice. Her work has sparked behavioral change, informed public health policies, and empowered marginalized communities across Africa and beyond.
              </p>
              <p
                class="text-accentTextDark font-normal leading-[2.1675rem] mb-6  font-opensans font-[400] text-[16px] md:text-[16px]"
              >
                As a sexual and reproductive health educator, Lolo has spent over 9 years working with adolescents, women, and young people, educating them on family planning, sexuality education, and gender equity. Her deep understanding of public health gained from degrees in Public Health Sciences and HIV/AIDS & Health Management from Monash University complements her grassroots efforts to create lasting change through dialogue, education, and advocacy.
              </p>
               <p
                class="text-accentTextDark font-normal leading-[2.1675rem] mb-6 font-opensans font-[400] text-[16px] md:text-[16px]"
              >
                Lolo, a sought-after speaker and media personality, has led key conversations on reproductive justice, women’s rights, and power dynamics. Her expertise has made her a trusted voice in conferences, workshops, and high-level platforms, including being a keynote speaker at Porter’s Center for Global Leadership Seminar.
            </p>
              <div>
                <h2
                  class="md:text-5xl text-3xl mb-6 font-playfair font-normal leading-normal"
                >
                  Awards & Recognition
                </h2>
                <p  class="text-[16px] mb-6 font-[400] leading-normal font-opensans text-[16px] md:text-[16px]">Lolo’s dedication to women’s rights has earned her numerous accolades, including:</p>
                <ul
                  class="custom-bullet-list text-accentTextDark leading-[2.1675rem] mb-6 md:text-[16px] font-opensans"
                >
                    <li class="flex gap-2 mb-2 font-[400] text-[16px] md:text-[16px]">
                       <span class="mt-2">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                    Leading Ladies Africa 100 most influential, powerful, and
                    innovative Nigerian women in Nigeria in 2020
                  </li>
                    <li class="flex gap-2 mb-2 font-[400] text-[16px] md:text-[16px]">
                       <span class="mt-2">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>Aspen Institute New Voices Fellow</li>
                    <li class="flex gap-2 mb-2 font-[400] text-[16px] md:text-[16px]">
                       <span class="mt-2">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                   Y! Naija Media Person to Watch – New Establishment List, 2019
                  </li>
                    <li class="flex gap-2 mb-2 font-[400] text-[16px] md:text-[16px]">
                       <span class="mt-2">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>Social Media Person for Social Good 2019</li>
                    <li class="flex gap-2 mb-2 font-[400] text-[16px] md:text-[16px]">
                       <span class="mt-2">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                    UNHCR Media Influencer for the "Telling the Real Story"
                    program
                  </li>
                    <li class="flex gap-2 mb-2 font-[400] text-[16px] md:text-[16px]">
                       <span class="mt-2">
                             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <circle cx="9" cy="9" r="7" fill="#F8F8FF" stroke="#E76A35" stroke-width="4"/>
                            </svg>
                        </span>
                    Keynote Speaker - Porter’s Center for Global Leadership
                    Seminar 2022 and 2024
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- about the founder Section -->
      <section class="bg-[#ECECD5] py-4 rounded">
        <div class="max-w-7xl mx-auto ">
          <div class="flex flex-col lg:flex-row-reverse md:px-6 justify-between gap-4 py-4">
            <!-- Image Section -->
             <div class="lg:w-1/3 text-xl">
              <img
                 src="{{ asset('Images/f-1.jpeg') }}"
                alt="the founder of LSIV "
                class="w-full h-auto rounded-[16px]"
              />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3">
              <div>
                <h2
                  class="md:text-[56px] text-[32px] mb-4 md:mb-6 font-playfair font-normal leading-normal"
                >
                 Early Journey and Advocacy
                </h2>
                <ul
                  class="custom-bullet-list text-accentTextDark leading-[2.1675rem] mb-6 md:text-[16px] font-opensans font-[400] text-[16px]"
                >
                    <li class="flex font-[400] text-[16px] md:text-[16px] mb-12">
                       Lolo’s passion for advocacy began as a public health undergraduate at Monash University, South Africa. Despite personal challenges and a home environment that discouraged learning, she organized forums on gender equality and women’s rights at just 18 years old. This formative experience led her to create LoloTalks, a community-based organization that tackled social and health issues through education and multimedia content.
                  </li>
                    <li class="flex font-[400] text-[16px] md:text-[16px] mb-12">
                       By the time she graduated with her Postgraduate Diploma in HIV/AIDS & Health Management, Lolo had already worked with some of the most vulnerable groups, including refugees, HIV/AIDS patients, youth offenders, and at-risk children. She served as a Youth Educator volunteer for Bosasa Youth Centre, a Community Health Worker for Humana People to People, and an Admin Assistant & Teacher at Bienvenu Shelter for Refugee Women and Children
                  </li>
                  <li class="flex mb-2 font-[400] text-[16px] md:text-[16px]">
                      Her hands-on experience with vulnerable communities deepened her understanding of the complex intersection of gender, health, and social inequality and laid the foundation for her future work in social justice and public health.
                  </li>
                   
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
            <section class="py-4 rounded">
        <div class="max-w-7xl mx-auto md:px-4 ">
          <div class="flex flex-col lg:flex-row-reverse justify-between gap-4 py-4">
           <!-- Image Section -->
             <div class="lg:hidden lg:w-1/3 text-xl">
              <img
                 src="{{ asset('Images/f-2.png') }}"
                alt="the founder of LSIV "
                class="w-full h-auto rounded-[16px]"
              />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 lg:pl-10">
              <div>
                <h2
                  class="md:text-[56px] text-[32px] md:mb-4 mb-4 font-playfair font-normal leading-normal"
                >
                Transformative Leadership & Advocacy
                </h2>
                <ul
                  class="custom-bullet-list text-accentTextDark leading-[2.1675rem] mb-6 md:text-[16px] font-opensans font-[400] text-[16px] md:text-[16px]" 
                >
                    <li class="flex mb-4 font-[400] text-[16px] md:text-[16px]">
                       Lolo is known for her bold, unfiltered discussions on sexual health, gender norms, and bodily autonomy. Her voice as a thought leader focuses on demystifying sex and pleasure as fundamental women's rights and advocating for the financial independence of girls and women as a conduit to genuine liberation. Through her content and engagements, she fosters financial literacy and self-agency and challenges societal expectations of male dependence.
                  </li>
                    <li class="flex mb-4 font-[400] text-[16px] md:text-[16px]">
                      Her career as a broadcaster and documentary producer on national television further amplified her voice as a social change advocate. She is renowned for producing award-winning expository talk shows and documentaries on untold stories of hardship and resilience, particularly in underdeveloped regions.
                  </li>
                  <li class="flex mb-3 font-[400] text-[16px] md:text-[16px]">
                    Lolo’s passion for addressing deeply entrenched social issues propagated by poverty and patriarchy has led her to develop sustainable, community-driven solutions that merge policy advocacy with real-world impact. Her commitment to dismantling harmful gender norms ensures that the voices of the most vulnerable—especially women and girls—are heard, understood, and represented. Her leadership and advocacy continue to inspire change across media, policy, and grassroots mobilisation, always centred on empowering those most affected by injustice.
                  </li>
                   
                </ul>
              </div>
            </div>
             <!-- Image Section -->
             <div class="hidden sm:block lg:w-1/3 text-xl ">
              <img
                 src="{{ asset('Images/f-2.png') }}"
                alt="the founder of LSIV "
                class="w-full h-auto rounded-[16px]"
              />
            </div>
          </div>
        </div>
      </section>
      <!-- HER CORE VALUE -->
      <section class="bg-miscellanous py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6 mb-0 mt-[-30px]">
          <h2
            class="md:text-5xl text-[32px] mb-6 font-playfair font-[500] leading-normal"
          >
            Her Core Values
          </h2>
          <hr class="border-none h-[2px] bg-[#4A5310] mb-4 md:mb-6" />
          <!-- GRID -->
          <div
            class="flex flex-wrap lg:flex-row lg:flex-nowrap gap-4 items-center"
          >
            <!-- card one -->
            <div
              class="p-4 bg-secondary rounded-[12px] h-[15.9375rem] md:w-[19.2rem] w-full font-opensans flex flex-col justify-between"
            >
              <h3
                class="md:text-[2rem] text-[24px] leading-[2.272375rem] font-[600] md:font-semibold font-opensans"
              >
                Resilience
              </h3>
              <p class="font-medium text-base font-opensans">
                Resilience fuels her ability to navigate and overcome societal
                barriers.
              </p>
            </div>
            <!-- card 2 -->
            <div
              class="p-4 bg-[#FFC6DB] rounded-[12px] h-[15.9375rem] md:w-[19.2rem] w-full font-opensans flex flex-col justify-between"
            >
              <h3
                class="md:text-[2rem] text-[24px] leading-[2.272375rem] font-[600] md:font-semibold"
              >
                Integrity
              </h3>
              <p class="font-normal text-base font-opensans">
                Integrity guides her commitment to honest and ethical practices
              </p>
            </div>
            <!-- card 3 -->
            <div
              class="p-4 bg-[#F1DAB7] rounded-[12px] h-[15.9375rem] md:w-[19.2rem] w-full font-opensans flex flex-col justify-between"
            >
              <h3
                class="md:text-[2rem] text-[24px] leading-[2.272375rem] font-[600] md:font-semibold"
              >
                Empowerment
              </h3>
              <p class="font-normal text-base font-opensans">
                Empowerment underscores her focus on uplifting communities and
                individuals to realize their potential.
              </p>
            </div>
            <!-- card 4 -->
            <div
              class="p-4 bg-[#DDC2FF] rounded-[12px] h-[15.9375rem] md:w-[19.2rem] w-full font-opensans flex flex-col justify-between"
            >
              <h3
                class="md:text-[2rem] text-[24px] leading-[2.272375rem] font-[600] md:font-semibold"
              >
                Respect
              </h3>
              <p class="font-normal text-base font-opensans">
                Respect is fundamental to her approach, ensuring that all
                interactions honour the dignity and agency of those she works
                with.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- Section for Clients & Partners -->
      <section class="py-8 bg-accentTextLight">
        <div class="max-w-7xl h-80 mx-auto px-4 sm:px-6">
          <h2
            class="md:text-6xl text-4xl mb-6 font-playfair font-medium leading-normal"
          >
            Clients & Partners
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
          <p class="md:text-lg text-[16px] font-[400] mb-4 font-medium font-opensans"> 
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