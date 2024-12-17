    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSIV - Case Study Aspen New Voices Fellowship</title>
    <link rel="stylesheet" href="../style.css" />
  </head>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <body class="bg-[#F8F8FF] text-accentTextDark">
 <main>
       <!----First section--->
      <section class="bg-[#FFC6DB]">
             @include('components.header')
        <div
          class="flex mx-auto max-w-7xl p-4 lg:px-6 flex-col md:flex-row justify-center md:justify-between items-center w-full px-6 py-16 mt-[-40px]"
        >
          <!-- Left Section: Heading and Subtext -->
           <div class="md:w-3/5">
            <h1
              class="md:text-[48px] text-[32px] capitalize md:leading-normal text-accentTextDark font-playfair font-[500]"
            >
              Crafting Your Brand:<br> Our Branding & Design Services
            </h1>
              <p class="mt-4 text-accentTextDark md:w-full md:text-[20px] text-[16px] font-opensans font-[400]" style="line-height: 33px;">
               <span class="italic font-[600]">
                We understand that a strong brand identity is crucial for making
                a lasting impact.
              </span>
              <br />
              Our branding and design services are tailored to create a powerful
              and cohesive visual identity that resonates with your audience and
              amplifies your social impact.
            </p>
          </div>

            <div class="md:w-1/3">
              <img
                src="{{ asset('Images/i-2.png') }}"
                alt="Illustration"
                class="w-full md:w-2/3 lg:w-full h-auto mt-6"
              />
            </div>   
           </div>
      </section>
      <!--    How we can help you build and communicate your brand  -->
      <section class="py-16 rounded bg-accentTextLight">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-col justify-between gap-4">
          <div class="w-full flex justify-center">
            <h2
              class="md:text-[48px] lg:text-[3.5rem] text-center text-[32px] mb-2 font-playfair font-[500] leading-normal md:w-2/3"
            >
              How we can help you build and communicate your brand
            </h2>
          </div>
          </div>
          <!-- discussion Section -->
           <div class="md:mt-12 mt-2 w-full">
            <!-- more discussion -->
            <div class="grid font-opensans md:grid-cols-2 grid-cols-1 gap-4">
              <!-- disscuss 1 -->
              <div
                class="border-b bg-[#F1DAB7] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer p-2"
                >
                 <h3
                    class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[32px]"
                  >
                    Graphic Design & Multimedia
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap p-2"
                >
                   <p class="leading-7 mb-2 text-base font-[400] text-[16px]">
                    From infographics and social media graphics to brochures and
                    reports, we design materials that capture attention and
                    communicate your message effectively. Our multimedia
                    approach includes designing engaging video content,
                    compelling photojournalism, and interactive elements that
                    enhance your brand’s presence.
                  </p>
                </div>
              </div>
              <!-- disscuss 2 -->
              <div
                class="border-b bg-secondary p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer p-2"
                >
                 <h3
                    class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[32px]"
                  >
                    Brand Development & Strategy
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap p-2"
                >
                   <p class="leading-7 mb-2 text-base font-[400] text-[16px]">
                    We define your brand’s core values, mission, and unique
                    positioning. Through in-depth research and strategic
                    planning, we craft a brand strategy that aligns with your
                    social impact goals and sets you apart in a crowded
                    landscape.
                  </p>
                </div>
              </div>
              <!-- disscuss 3 -->
              <div
                class="border-b bg-[#FFC6DB] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer p-2"
                >
                 <h3
                    class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[32px]"
                  >
                    Visual Identity Design
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap p-2"
                >
                   <p class="leading-7 mb-2 text-base font-[400] text-[16px]">
                    Our design team creates a visually compelling brand identity
                    that includes logos, colour schemes, typography, and other
                    graphic elements. We ensure that your visual identity is not
                    only aesthetically pleasing but also reflects the essence of
                    your mission and values
                  </p>
                </div>
              </div>
              <!-- disscuss 4-->
              <div
                class="border-b bg-[#DDC2FF] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer p-2"
                >
                 <h3
                    class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[32px]"
                  >
                    Brand Guidelines & Consistency
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap p-2"
                >
                   <p class="leading-7 mb-2 text-base font-[400] text-[16px]">
                    To maintain a cohesive brand experience, we develop
                    comprehensive brand guidelines that detail how to use your
                    visual identity across various platforms and media. This
                    ensures consistency and reinforces your brand’s credibility
                    and recognition.
                  </p>
                </div>
              </div>
              <!-- disscuss 5-->
              <div
                class="border-b bg-[#FFDED0] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer p-2"
                >
                 <h3
                    class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[32px]"
                  >
                    Website & Digital Presence
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap p-2"
                >
                   <p class="leading-7 mb-2 text-base font-[400] text-[16px]">
                    We create and design websites that not only look great but
                    also function seamlessly to enhance user experience. Our
                    digital branding includes optimizing your online presence
                    with responsive design, engaging content, and intuitive
                    navigation.
                  </p>
                </div>
              </div>
              <!-- disscuss 6-->
              <div
                class="border-b bg-[#FFE4BB] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer p-2"
                >
                 <h3
                    class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[32px]"
                  >
                    Custom Campaign Design
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap p-2"
                >
                   <p class="leading-7 mb-2 text-base font-[400] text-[16px]">
                    We apply your brand identity to custom campaigns, including
                    digital ads, social media campaigns, and event materials.
                    Our design solutions are crafted to ensure that every
                    touchpoint reinforces your brand and drives engagement.
                  </p>
                </div>
              </div>

              <!--  -->
            </div>
          </div>
        </div>
      </section>
</main>
@include('components.footer')
        <script>
      // Select all the discussion head elements
      const discussHeads = document.querySelectorAll(".disscuss-head");

      // Loop through each discussion head
      discussHeads.forEach((head) => {
        head.addEventListener("click", function () {
          // Toggle the hidden class on the corresponding answer (next sibling)
          const answer = this.nextElementSibling;
          answer.classList.toggle("hidden");
          // Toggle the "+" and "-" icons
          const icon = this.querySelector(".icon");
          if (icon.textContent === "+") {
            icon.textContent = "-";
          } else {
            icon.textContent = "+";
          }
        });
      });
    </script>
  </body>
</html>
