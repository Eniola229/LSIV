<footer class="bg-[#F8F8FF] py-8 p-2 md:p-6">
       <!-- Section Eight -->
      <section class="w-full px-0 py-16 relative bg-[#F8F8FF]">
        <div
          class="flex mx-auto max-w-7xl p-2 md:p-4 lg:px-4 flex-col md:flex-row justify-center items-center w-full relative"
        >
          <!-- Left Section: Heading and Subtext -->
          <div class="w-full md:w-lg">
            <h2
              class="text-[40px] md:text-[96px] lg:text-[96px] font-playfair font-medium text-gray-900 leading-tight tracking-tight"
            >
              Ready to Amplify <br />
              Your Impact?
            </h2> 
          </div>
          <div
            class="flex items-center justify-center w-full md:w-auto rounded-full"
          >
            <button
             id="scrollUpButton"
              class="md:h-52 md:w-52 w-52 h-52 text-white p-4 rounded-full flex items-center justify-center orange-round-down transition duration-300"
            >
              <svg xmlns="http://www.w3.org/2000/svg" width="70" height="108" viewBox="0 0 70 108" fill="none">
                <path d="M37.8284 1.17157C36.2663 -0.390526 33.7337 -0.390526 32.1716 1.17157L6.71573 26.6274C5.15363 28.1895 5.15363 30.7222 6.71573 32.2843C8.27783 33.8464 10.8105 33.8464 12.3726 32.2843L35 9.65685L57.6274 32.2843C59.1895 33.8464 61.7222 33.8464 63.2843 32.2843C64.8464 30.7222 64.8464 28.1895 63.2843 26.6274L37.8284 1.17157ZM39 104L39 4H31L31 104H39Z" fill="white"/>
              </svg>
            </button>
          </div>
        </div>
      </section>

      <!-- Top section -->
      <div
        class="grid grid-cols-2 md:grid-cols-5 gap-x-4 gap-y-8 md:gap-4 justify-between px-4"
      >
        <!-- Logo and description -->
        <div class="md:col-span-1 col-span-2">
          <img
            src="{{ asset('https://res.cloudinary.com/dww7q9k1e/image/upload/v1734349188/LSIV_Logo-13_df4e3b.png') }}"
            alt="LSIV Logo"
            class="w-24 md:mx-0 mb-4"
          />
          <p
            class="text-gray-700 font-medium text-base font-opensans"
            style="font-weight: 400; line-height: 26px"
          >
            A strategic advocacy and communications agency dedicated to creating
            a more equitable world.
          </p>
          <p
            class="text-gray-700 mt-2 font-medium text-base font-opensans"
            style="font-weight: 400; line-height: 26px"
          >
            <a href="mailto:info@lsiv.org" class="text-black-600 font-bold"
              >info@lsiv.org</a
            >
            <a
              href="mailto:partnership@lsiv.org"
              class="text-black-600 font-bold"
              >partnership@lsiv.org</a
            >
          </p>
        </div>

        <!-- About us section -->
        <div>
          <h3
            class="text-gray-800 font-semibold mb-3 footer-text-header font-opensans"
          >
            About us
          </h3>
          <ul class="text-gray-600 space-y-2">
            <li>
              <a
                href="{{ url('About-WhoWeAre') }}"
                class="hover:text-orange-600 font-opensans"
                >Who we are</a
              >
            </li>
            <li>
              <a
                href="{{ url('About-OurJouney') }}"
                class="hover:text-orange-600 font-opensans"
                >Our Journey</a
              >
            </li>
            <li>
              <a
                href="{{ url('About-Thematics') }}"
                class="hover:text-orange-600 font-opensans"
                >Our Thematic areas</a
              >
            </li>
            <li>
              <a
                href="{{ url('About-Founder') }}"
                class="hover:text-orange-600 font-opensans"
                >About the Founder</a
              >
            </li>
          </ul>
        </div>

        <!-- Initiatives section -->
        <div>
          <h3
            class="text-gray-800 font-semibold mb-3 footer-text-header font-opensans"
          >
            Initiatives
          </h3>
          <ul class="text-gray-600 space-y-2">
            <li>
              <a
                href="{{ url('Initiatives-MyBodyIsMine') }}"
                class="hover:text-orange-600 font-opensans"
                >MyBodyIsMine</a
              >
            </li>
            <li>
              <a
                href="{{ url('Initiatives-Adopt') }}"
                class="hover:text-orange-600 font-opensans"
                >Adopt a Community</a
              >
            </li>
            <li>
              <a
                href="{{ url('Initiatives-Nodaysoff') }}"
                class="hover:text-orange-600 font-opensans"
                >No Day Off</a
              >
            </li>
            <li>
              <a
                href="{{ url('Initiatives-Conversation') }}"
                class="hover:text-orange-600 font-opensans"
                >The Conversation</a
              >
            </li>
            <li>
              <a
                href="{{ url('Initiatives-Storiesunhear') }}"
                class="hover:text-orange-600 font-opensans"
                >Stories Untold</a
              >
            </li>
            <li>
              <a
                href="{{ url('Initiatives-Lolocythia') }}"
                class="hover:text-orange-600 font-opensans"
                >The Lolo Cynthia Show</a
              >
            </li>
          </ul>
        </div>

        <!-- Work with us section -->
        <div>
          <h3
            class="text-gray-800 font-semibold mb-3 footer-text-header font-opensans"
          >
            Work with us
          </h3>
          <ul class="text-gray-600 space-y-2">
            <li>
              <a
                href="{{ url('Work-Services') }}"
                class="hover:text-orange-600 font-opensans"
                >Services</a
              >
            </li>
            <li>
              <a
                href="{{ url('Work-Work') }}"
                class="hover:text-orange-600 font-opensans"
                >How we Work</a
              >
            </li>
          </ul>
        </div>

        <!-- Insights section -->
        <div>
          <h3
            class="text-gray-800 font-semibold mb-3 footer-text-header font-opensans"
          >
            Insights
          </h3>
          <ul class="text-gray-600 space-y-2">
            <li>
              <a
                href="{{ url('Insights-Case') }}"
                class="hover:text-orange-600 font-opensans"
                >Case studies</a
              >
            </li>
            <li>
              <a
                href="{{ url('Insights-Media') }}"
                class="hover:text-orange-600 font-opensans"
                >Media & Knowledge Hub</a
              >
            </li>
          </ul>
        </div>
      </div>

      <!-- Bottom section -->
      <div
        class="flex space-x-4 mt-6 md:mt-0 justify-start md:justify-end px-4"
      >
        <!-- Social icons (replace with actual icons or images) -->
        <a
          href="https://www.youtube.com/@TheLoloCynthiaShow"
          class="text-dark-600 hover:text-orange-600"
        >
          <!-- YouTube Icon -->
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-6 w-6"
          >
            <path
              d="M23.5 6.6c-.2-1.5-1.5-2.7-3-2.9C17.6 3 12 3 12 3s-5.6 0-8.5.7c-1.5.2-2.8 1.4-3 2.9-.4 2-.4 6-.4 6s0 4 .4 6c.2 1.5 1.5 2.7 3 2.9 2.9.7 8.5.7 8.5.7s5.6 0 8.5-.7c1.5-.2 2.8-1.4 3-2.9.4-2 .4-6 .4-6s0-4-.4-6zM9.8 15.5v-7l6.3 3.5-6.3 3.5z"
            />
          </svg>
        </a>

        <a
          href="https://www.linkedin.com/company/lsivconsulting/"
          class="text-dark-600 hover:text-orange-600"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
          >
            <g clip-path="url(#clip0_1758_1786)">
              <mask
                id="mask0_1758_1786"
                style="mask-type: luminance"
                maskUnits="userSpaceOnUse"
                x="0"
                y="0"
                width="24"
                height="24"
              >
                <path d="M0 0H24V24H0V0Z" fill="white" />
              </mask>
              <g mask="url(#mask0_1758_1786)">
                <path
                  d="M22.2235 0H1.772C0.792 0 0 0.7735 0 1.73V22.265C0 23.222 0.792 24 1.772 24H22.2235C23.2035 24 24 23.222 24 22.27V1.73C24 0.773 23.203 0 22.2235 0ZM7.12 20.4515H3.558V8.9955H7.1205L7.12 20.4515ZM5.339 7.435C5.06781 7.43546 4.79918 7.38246 4.54849 7.27903C4.29779 7.17559 4.06995 7.02376 3.87798 6.83221C3.686 6.64065 3.53367 6.41314 3.4297 6.16267C3.32572 5.9122 3.27213 5.64369 3.272 5.3725C3.27213 5.10131 3.32572 4.8328 3.4297 4.58233C3.53367 4.33186 3.686 4.10435 3.87798 3.91279C4.06995 3.72124 4.29779 3.56941 4.54849 3.46597C4.79918 3.36254 5.06781 3.30954 5.339 3.31C5.88601 3.31 6.41061 3.5273 6.79741 3.91409C7.1842 4.30089 7.4015 4.82549 7.4015 5.3725C7.4015 5.91951 7.1842 6.44411 6.79741 6.83091C6.41061 7.2177 5.88601 7.435 5.339 7.435ZM20.4515 20.452H16.894V14.883C16.894 13.5565 16.8705 11.8455 15.042 11.8455C13.1905 11.8455 12.9095 13.2935 12.9095 14.789V20.4515H9.356V8.9955H12.769V10.5605H12.8155C13.289 9.6605 14.4515 8.7095 16.181 8.7095C19.786 8.7095 20.4515 11.0815 20.4515 14.1655V20.452Z"
                  fill="#0B0B0B"
                />
              </g>
            </g>
            <defs>
              <clipPath id="clip0_1758_1786">
                <rect width="24" height="24" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </a>
        <a
          href="https://x.com/lsivconsulting/"
          class="text-dark-600 hover:text-orange-600 icon-hover"
        >
          <!-- Twitter (X) Icon -->
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="currentColor"
          >
            <path
              d="M18.3265 1.9043H21.7L14.33 10.3278L23 21.7903H16.2115L10.894 14.8383L4.81 21.7903H1.4345L9.3175 12.7803L1 1.9043H7.961L12.7675 8.2588L18.3265 1.9043ZM17.1425 19.7703H19.0115L6.9455 3.8173H4.9395L17.1425 19.7703Z"
            />
          </svg>
        </a>
        <a
          href="https://www.instagram.com/lsivconsulting/"
          class="text-dark-600 hover:text-orange-600"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
          >
            <g clip-path="url(#clip0_1630_1749)">
              <path
                d="M18.7266 0.914062H5.27344C2.775 0.914062 0.75 2.93906 0.75 5.4375V18.5625C0.75 21.0609 2.775 23.0859 5.27344 23.0859H18.7266C21.225 23.0859 23.25 21.0609 23.25 18.5625V5.4375C23.25 2.93906 21.225 0.914062 18.7266 0.914062ZM12 17.2969C9.075 17.2969 6.70312 14.925 6.70312 12C6.70312 9.075 9.075 6.70312 12 6.70312C14.925 6.70312 17.2969 9.075 17.2969 12C17.2969 14.925 14.925 17.2969 12 17.2969ZM18.8297 6.56719C18.2063 6.56719 17.7 6.06094 17.7 5.4375C17.7 4.81406 18.2063 4.30781 18.8297 4.30781C19.4531 4.30781 19.9594 4.81406 19.9594 5.4375C19.9594 6.06094 19.4531 6.56719 18.8297 6.56719Z"
                fill="#0B0B0B"
              />
            </g>
            <defs>
              <clipPath id="clip0_1630_1749">
                <rect width="24" height="24" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </a>
      </div>

      <div
        class="border-t border-dark-600 mt-8 pt-4 flex flex-col md:flex-row justify-between items-right md:items-center text-gray-400 px-4"
      >
        <p
          class="text-sm font-opensans font-[400] font-gray-400"
          style="color: black"
        >
          ©2024 LSIV. All rights reserved
        </p>
        <div class="text-sm mt-4 md:mt-0 last-footer">
          <a href="#" class="hover:text-orange-600 text-gray-500 font-opensans"
            >Privacy Policy</a
          >
          |
          <a href="#" class="hover:text-orange-600 font-opensans"
            >Terms & Conditions</a
          >
          |
          <a href="#" class="hover:text-orange-600 font-opensans"
            >Cookies Policy</a
          >
        </div>
      </div>
    </footer>


<script>
  document.getElementById("scrollUpButton").addEventListener("click", function () {
    const duration = 500; // Duration in milliseconds (0.5 seconds)
    const distance = -420; // Distance to scroll (negative = up)
    const steps = 30; // Number of animation steps for smoothness
    const interval = duration / steps;
    const stepDistance = distance / steps;

    let currentStep = 0;

    const scrollInterval = setInterval(() => {
      window.scrollBy(0, stepDistance); // Move a bit per step
      currentStep++;

      if (currentStep >= steps) {
        clearInterval(scrollInterval); // Stop the animation after steps are complete
      }
    }, interval);
  });
</script>

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

function clampScrollPosition() {
  if (scrollPosition < 0) scrollPosition = 0;
  if (scrollPosition > maxScroll) scrollPosition = maxScroll;
}

function updateScrollPosition() {
  carouselTrack.style.transition = "transform 0.2s ease-in-out";
  carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
}

function scrollOn() {
  scrollPosition += cardWidth;

  if (scrollPosition > maxScroll) {
    scrollPosition = maxScroll;
    // Allow scrolling down the page after reaching the end
    carouselTrack.style.overflow = "hidden";
    return;
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

  clampScrollPosition();
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

  clampScrollPosition();
  carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
});

carouselTrack.addEventListener("touchend", () => {
  isDragging = false;
  carouselTrack.style.transition = "transform 0.5s ease-in-out";
});

// Add trackpad and mouse wheel scrolling support
carouselTrack.addEventListener("wheel", (e) => {
  // Prevent horizontal scroll on the page until carousel scrolls fully
  if (scrollPosition < maxScroll) {
    e.preventDefault();
    let delta = e.deltaX || e.deltaY;
    scrollPosition += delta;

    clampScrollPosition();
    updateScrollPosition();
  }
});
    </script>