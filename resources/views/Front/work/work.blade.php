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
  <body class="text-accentTextDark">
    <div class="bg-accentTextLight">
           @include('components.header')
    </div>
    <main>
      <!-- our  services -->
      <section class="py-16 rounded bg-accentTextLight md:mt-0 mt-[-30px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
          <div class="mb-6 space-y-2">
            <h1
              class="md:text-5xl lg:text-7xl text-[40px] font-playfair font-medium leading-normal"
            >
                How we work with our clients
              </h1>
            </div>
            <!-- Text Section -->
            <div class="lg:w-3/3 lg:pl-10 lg:ml-52">
              <p
                class="text-accentTextDark font-normal leading-[2.1675rem] mb-2 md:text-xl text-[16px] font-opensans"
              >
                At LSIV, we recognize the distinct strengths and objectives of
                each organization and individual. That's why we adopt a
                collaborative approach, tailoring our services to meet your
                specific requirements.
              </p>
              <p
                class="text-primary leading-[2.1675rem] mb-6 md:text-xl text-[16px] font-normal font-opensans"
              >
                Here's a peek into our partnerships with different change-makers
                and our key client groups
              </p>
            </div>
          </div>
          <!-- discussion Section -->
          <div class="my-6 w-full">
            <!-- more discussion -->
            <div
              class="description-container grid md:grid-cols-2 grid-cols-1 gap-4"
            >
              <!-- disscuss 1 -->
              <div
                class="disscuss-item border-b bg-secondary md:p-6 p-2 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="disscuss-head text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-playfair font-[500] md:w-4/5 text-left md:leading-[2.3325rem] text-xl md:text-[28px]  p-6"
                  >
                    Philanthropy Organizations & NGOs/Non-Profits
                  </h3>
                  <span class="icon text-xl md:text-[28px] font-[400] font-sans">+</span>
                </div>
                <div
                  class="faq-answer hidden mt-4 text-accentTextDark font-[400] leading-[2.1675rem] mb-2 md:text-[16px] text-[16px] p-6"
                >
                  We work closely with you to design and implement effective program strategies that align with your funding priorities. Our services include program designs, capacity-building programs for your grantees, impactful communication materials, and advocacy campaigns to amplify the impact of your philanthropic investments and enhance your social impact efforts.
                </div>
              </div>
              <!-- disscuss 2 -->
              <div
                class="disscuss-item border-b bg-[#FFC6DB] md:p-6 p-2 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="disscuss-head text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-playfair font-[500] md:w-4/5 text-left md:leading-[2.3325rem] text-xl md:text-[28px]  p-6"
                  >
                    Research & Academic Institutions
                  </h3>
                  <span class="icon text-xl md:text-[28px] font-[400] font-sans">+</span>
                </div>
              <div
                  class="faq-answer hidden mt-4 text-accentTextDark  leading-[2.1675rem] mb-2 font-[400] md:text-[16px] text-[16px] p-6"
                >
                    Our expertise helps you enhance your research projects on social impact. We support research communication by analyzing data, providing valuable insights, and visualizing findings. Our services also include fostering community engagement, disseminating knowledge, and developing curriculum materials and training programs.
                </div>
              </div>
              <!-- disscuss 3 -->
              <div
                class="disscuss-item border-b bg-[#F1DAB7] md:p-6 p-2 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="disscuss-head text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-playfair font-[500] md:w-4/5 text-left md:leading-[2.3325rem] text-xl md:text-[28px]  p-6"
                  >
                    International Development Organizations & Government
                    Agencies
                  </h3>
                  <span class="icon text-xl md:text-[28px] font-[400] font-sans">+</span>
                </div>
             <div
                  class="faq-answer hidden mt-4 text-accentTextDark  leading-[2.1675rem] mb-2 font-[400] md:text-[16px] text-[16px] p-6"
                >
                Our work with you is not just about adapting international programs and campaigns to local contexts. It's about making a real impact on social issues and driving sustainable development. We partner to co-create and implement social development initiatives. Our capacity-building initiatives also equip government staff with the skills to create and sustain impactful social programs.
                </div>
              </div>
              <!-- disscuss 4 -->
              <div
                class="disscuss-item border-b bg-[#DDC2FF] md:p-6 p-2 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="disscuss-head text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-playfair font-[500] md:w-4/5 text-left md:leading-[2.3325rem] text-xl md:text-[28px]  p-6"
                  >
                    Media Firms
                  </h3>
                  <span class="icon text-xl md:text-[28px] font-[400] font-sans">+</span>
                </div>
               <div
                  class="faq-answer hidden mt-4 text-accentTextDark leading-[2.1675rem] mb-2 font-[400] md:text-[16px] text-[16px] p-6"
                >
                  We bridge the gap between media and social impact organizations by collaborating with journalists and media producers to create compelling stories and campaigns that illuminate social issues and inspire action
                </div>
              </div>
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
        <div class="text-center w-full h-52 sm:h-52 md:text-6xl lg:h-72">
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
         <p class="md:text-[24px] text-[16px] font-[400] mb-4 font-medium font-opensans"> 
            Let's Make Impact Together
          </p>
      <button class="btn-bg-animation hover-effect-arrow" onclick="window.location.href='mailto:info@lsiv.org';">
          <span class="btn-text font-opensans">Contact us <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
      </button>
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
