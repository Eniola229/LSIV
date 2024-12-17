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
      <section class="bg-[#F1DAB7]">
            @include('components.header')
        <div
          class="flex mx-auto max-w-7xl p-4 lg:px-6 flex-col md:flex-row justify-center md:justify-between items-center w-full px-6 py-16 mt-[-50px]"
        >
          <!-- Left Section: Heading and Subtext -->
          <div class="md:w-4/5">
            <h1
              class="md:text-[48px] text-[32px] capitalize md:leading-normal text-accentTextDark font-playfair font-[500]"
            >
              building roadmap for impact: strategy development & implementation
            </h1>
            <p class="mt-4 text-accentTextDark md:w-full md:text-[20px] text-[16px] font-opensans font-[400]" style="line-height: 33px;">
               <span class="italic font-[600]">
                We don't just tell stories. We help create effective strategies
                by combining data-driven insight with an understanding of human
                motivation to drive long-term change in communities.
              </span>
              <br />
              Through collaborative strategy development, we focus on
              understanding your organization's objectives, target audience, and
              social context.
            </p>
          </div>

          <div class="md:w-1/3">
            <img
              src="{{ asset('Images/i-3.png') }}"
              alt="Illustration"
              class="w-full md:w-2/3 lg:w-full h-auto mt-6"
            />
          </div>
        </div>
      </section>
      <!--    Our bespoke strategies and services designed to empower your social impact initiatives  -->
      <section class="py-16 rounded bg-accentTextLight">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
              <h2
                class="md:text-5xl lg:text-[3.5rem] text-center md:w-4/5 mx-auto text-[32px] mb-2 font-playfair font-medium leading-normal"
              >
              Our strategy services 
              </h2>
            </div>
          </div>
          <!-- discussion Section -->
            <div class="md:mt-12 mt-2 w-full">
            <!-- more discussion -->
            <div class="grid font-opensans md:grid-cols-2 grid-cols-1 gap-4">
              <!-- disscuss 1 -->
              <div
                class="border-b bg-[#FFC6DB] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem]"
                  >
                    Advocacy Strategies
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base">
                    We develop impactful advocacy strategies to influence social
                    norms and bring about systemic change. Our advocacy
                    strategies result in transformation of social norms,
                    behaviour modification, awareness campaigns, fundraising,
                    support mobilization, high-level policy change, and thought
                    leadership.
                  </p>
                </div>
              </div>
              <!-- disscuss 2 -->
              <div
                class="border-b bg-secondary p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                     class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem]"
                  >
                    Communication Strategies
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base">
                    We devise customized communication strategies both online
                    and offline, to meet your specific needs across different
                    platforms, and target audiences.
                  </p>
                </div>
              </div>

              <!-- disscuss 3 -->
              <div
                class="border-b bg-[#FFDED0] p-12 rounded-[16px] md:w-1/2 mx-auto md:col-span-2 transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                     class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem]"
                  >
                    Digital Strategy
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base">
                    We utilize technology and digital media to enhance your
                    social impact. Our innovative digital campaigns optimize
                    your online presence and utilize data-driven insights to
                    increase engagement and reach. Our services include social
                    media strategy and management, digital content creation, SEO
                    and SEM, email marketing, and online community building.
                  </p>
                </div>
              </div>

              <!--  -->
            </div>
          </div>
        </div>
      </section>

      <!-- Section Seven -->
      <section class="flex flex-col items-center bg-miscellanous py-16">
       <div class="text-center w-full h-auto sm:h-52 md:text-6xl lg:h-auto md:p-0 p-4">
          <h2
            class="text-3xl md:text-5xl lg:text-[4rem] font-medium mb-4 font-playfair md:w-1/2 mx-auto"
          >
           Partner with us to drive long-term change in your community.
          </h2>
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
