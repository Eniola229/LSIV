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
  <body class="bg-secondary">
    @include('components.header')
     <main>
      <section class="bg-secondary rounded md:mt-0">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4">
          <!-- Container flex -->
          <div class="flex lg:flex-row-reverse flex-col-reverse gap-4 md:mt-4">
            <!-- Image Section -->
            <div class="lg:w-1/2 h-auto md:h-[30rem] text-xl">
              <img
                src="{{ asset($blog->cover_image) }}"
                alt="climate change advocacy"
                class="md:w-[588px] w-full h-[380px] object-cover rounded-[16px]"
              />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 md:p-12">
              <div>
            <div class="flex gap-3 items-center mb-2 text-[16px] font-[400]">
              <a href="{{ url('Insights-Case') }}" class="flex items-center gap-1">
               Case Study 
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="8 4 16 12 8 20" />
                </svg>
              </a>
              <p class="text-primary font-[600]">{{ $blog->sub_title }}</p>
            </div>
                <h1
                 class="md:text-5xl lg:text-[3.5rem] text-[40px] md:mb-6 mb-2 font-playfair font-[00] leading-normal"
                >
                  {{ $blog->title }}
                </h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-accentTextLight py-12 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- Container grid -->
          <div
            class="grid lg:grid-cols-[1fr_25rem_20rem] grid-cols-1 gap-12 relative"
          >
            <!-- descrition -->
             <div class="lg:col-span-2 w-full lg:w-auto md">
            <iframe 
                srcdoc="{!! htmlspecialchars($blog->content) !!}" 
                class="w-full border-none" 
                style="overflow: hidden;" 
                scrolling="no"
                onload="resizeIframe(this)">
            </iframe>
        </div>

        <script>
            function resizeIframe(iframe) {
                // Ensure the content height fits perfectly
                const iframeDoc = iframe.contentWindow.document;
                iframe.style.height = iframeDoc.documentElement.scrollHeight + "px";
            }
        </script>



            <!-- client-information -->
            <div
              class="bg-miscellanous h-auto lg:h-[31rem] lg:top-0 lg:sticky w-full lg:w-[28.125rem] right-0 py-5"
            >
              <div class="divide-y-2 divide-[#353535] px-6 font-opensans">
                <div class="py-4">
                  <h2 class="text-[16px] font-opensans font-[600] leading-normal">Client Name</h2>
                  <p class="font-opensans font-[400] text-[14px] leading-normal">{{ $blog->sub_title }}</p>
                </div>
                <div class="flex-1 py-4">
                  <h2 class="text-[16px] font-opensans font-[600] leading-normal">Project Timeline</h3>
                  <p class="font-opensans font-[400] text-[14px] leading-normal">{{ $blog->project_timeline }}</p>
                </div>
                <div class="flex-1 py-4">
                  <h2 class="text-[16px] font-opensans font-[600] leading-normal">Our Service</h3>
                  <p class="font-opensans font-[400] text-[14px] leading-normal">{{ $blog->our_service }}</p>
                </div>
                <div class="py-4">
                  <h2 class="text-[16px] font-opensans font-[600] leading-normal">Other Case Studies:</h3>
                  <ul class="list-disc">
                   @foreach($blogs as $blogging)
                  <a href="{{ url('client/blog', $blogging->id) }}">
                    <p class="font-opensans font-[400] text-[14px] leading-normal">
                     {{ $blogging->title }}
                    </p>
                  </a>.
                    @endforeach
                  </ul>
                  <a
                    href="#"
                    class="text-primary font-[400] text-[14px] underline justify-center flex"
                    >View all case studies</a
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- pagination button -->
      <div
        class="flex flex-col md:flex-row justify-center items-center mt-12 md:mt-24 gap-4 md:gap-3"
      >
        <!-- Previous Button -->
        @if ($currentBlogIndex > 0)
          <a
            href="{{ url('client/blog', $blogs[$currentBlogIndex - 1]->id) }}"
            class="bg-miscellanous text-gray-700 font-semibold py-2 px-4 rounded-full hover:bg-gray-300"
          >
            &lt; Previous case study
          </a>
        @else
          <button
            class="bg-gray-300 text-gray-500 font-semibold py-2 px-4 rounded-full cursor-not-allowed"
            disabled
          >
            &lt; Previous case study
          </button>
        @endif

        <!-- Case study numbers -->
        <div class="flex justify-center flex-wrap gap-2 md:space-x-4">
          @foreach($blogs as $index => $blogging)
            <a
              href="{{ url('client/blog', $blogging->id) }}"
              class="bg-primary text-white py-2 px-4 rounded-full hover:bg-primary-light"
            >
              {{ $index + 1 }}
            </a>
          @endforeach
        </div>

        <!-- Next Button -->
        @if ($currentBlogIndex < count($blogs) - 1)
          <a
            href="{{ url('client/blog', $blogs[$currentBlogIndex + 1]->id) }}"
            class="bg-miscellanous text-gray-700 font-semibold py-2 px-4 rounded-full hover:bg-gray-300"
          >
            Next case study &gt;
          </a>
        @else
          <button
            class="bg-gray-300 text-gray-500 font-semibold py-2 px-4 rounded-full cursor-not-allowed"
            disabled
          >
            Next case study &gt;
          </button>
        @endif
      </div>

          <!--  -->
        </div>
      </section>
    </main>

      <!-- Section for Clients & Partners -->
      <section class="py-8 bg-accentTextLight">
        <div class="max-w-7xl h-80 mx-auto px-4 sm:px-6">
          <h2 class="md:text-6xl text-[40px] mb-6 font-playfair font-medium leading-normal">
            Our clients & partners
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
      <!-----Six Section--->

      <!-- Section Seven -->
 <section class="flex flex-col items-center bg-miscellanous py-16">
       <div class="text-center w-full h-auto sm:h-52 md:text-6xl lg:h-auto md:p-0 p-4">
          <h2
            class="text-3xl md:text-5xl lg:text-6xl font-medium mb-4 font-playfair"
          >
            We don’t just tell stories
          </h2>
          <h2
            class="text-3xl md:text-5xl lg:text-6xl font-medium mb-4 font-playfair"
          >
            We drive change
          </h2>
          <p class="text-[24px] mb-6 font-medium font-opensans">
            Let's Make Impact Together
          </p>
          <button class="btn-bg-animation hover-effect-arrow" onclick="window.location.href='mailto:info@lsiv.org';">
          <span class="btn-text font-opensans">Contact us <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
      </button>
        </div>
      </section>
      </section>
    </main>
   @include('components.footer')
  </body>
</html>
<script type="text/javascript">
    const scrollButton = document.getElementById("scrollBtn");
const carouselTrack = document.getElementById("carouselTrack");

// Function to determine the number of visible cards based on screen width
function getVisibleCards() {
  if (window.innerWidth >= 1024) {
    // Large screens (lg)
    return 3;
  } else if (window.innerWidth >= 768) {
    // Medium screens (md)
    return 2;
  } else {
    // Small screens (sm)
    return 1;
  }
}

const totalCards = document.querySelectorAll(".card-image-container").length;
let visibleCards = getVisibleCards(); // Get initial visible cards
const cardWidth = document.querySelector(".card-image-container").offsetWidth;
let maxScroll = (totalCards - visibleCards) * cardWidth; // Max scroll value
let scrollPosition = 0;

function updateMaxScroll() {
  visibleCards = getVisibleCards(); // Update visible cards
  maxScroll = (totalCards - visibleCards) * cardWidth; // Recalculate max scroll
}

function scrollOn() {
  // Scroll forward by the width of one card
  scrollPosition += cardWidth;

  // If we've reached the end, reset to the beginning
  if (scrollPosition > maxScroll) {
    scrollPosition = 0; // Go back to the first card
  }

  // Apply smooth scroll transition
  carouselTrack.style.transition = "transform 0.5s ease-in-out";
  carouselTrack.style.transform = `translateX(-${scrollPosition}px)`;
}

scrollButton.addEventListener("click", scrollOn);
document.addEventListener("keyup", (e) => {
  // Scroll if the arrow key is pressed
  if (e.key === "ArrowRight") {
    scrollOn();
  }
});

// Update max scroll on window resize
window.addEventListener("resize", updateMaxScroll);

</script>