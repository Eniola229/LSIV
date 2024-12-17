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
      <section class="bg-[#FFE4BB]">
         @include('components.header')
        <div
          class="flex mx-auto max-w-7xl p-4 lg:px-6 flex-col md:flex-row justify-center md:justify-between items-center w-full px-6 py-16 md:mt-0 mt-[-50px]"
        >
          <!-- Left Section: Heading and Subtext -->
          <div class="md:w-3/5">
            <h1
              class="md:text-[48px] text-[32px] capitalize md:leading-normal text-accentTextDark font-playfair font-[500]"
            >
              cultivating connections:<br> our engagement events
            </h1>
             <p class="mt-4 text-accentTextDark md:w-full md:text-[20px] text-[16px] font-opensans font-[400]" style="line-height: 33px;">
               <span class="italic font-[600]">
                Meaningful social change thrives on connection and
                collaboration.
              </span>
              <br />
              We go beyond traditional events, creating engaging experiences
              that spark dialogue, ignite action, and empower communities to
              drive positive change.
            </p>
          </div>

          <div class="md:w-1/3">
            <img
              src="{{ asset('Images/i-5.png') }}"
              alt="Illustration"
              class="w-full md:w-2/3 lg:w-full h-auto mt-6"
            />
          </div>
        </div>
      </section>
      <!--Impact Summits & Forums  -->
      <section class="py-16 rounded bg-accentTextLight">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
              <h2
                class="md:text-[48px] lg:text-[3.5rem] text-center text-[32px] mb-2 font-playfair font-[500] leading-normal"
              >
                Impact Summits & Forums
              </h2>
              <p
                class="mt-4 font-[400] md:w-3/4 mx-auto text-center text-xl leading-[2.1rem] font-opensans"
              >
                Our event services are meticulously crafted to align with your
                social impact goals.
              </p>
            </div>
          </div>
          <!-- discussion Section -->
          <<div class="md:mt-12 mt-2 w-full">
            <!-- more discussion -->
            <div class="grid font-opensans md:grid-cols-2 grid-cols-1 gap-6">
              <!-- disscuss 1 -->
              <div
                class="border-b bg-secondary p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                     class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem]"
                  >
                    Conferences & Seminars
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base">
                    We curate thought-provoking conferences and seminars that
                    bring together diverse stakeholders - policymakers,
                    community leaders, activists, and social impact
                    organisations to exchange ideas, share best practices, and
                    explore solutions to pressing social issues.
                  </p>
                </div>
              </div>
              <!-- disscuss 2 -->
              <div
                class="border-b bg-[#FFC6DB] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                     class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem]"
                  >
                    Focus Group Discussions
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base">
                    We facilitate intimate focus group discussions to gather
                    qualitative data, gain deep insights into specific social
                    issues, and inform the development of effective
                    interventions.
                  </p>
                </div>
              </div>

              <!-- disscuss 3 -->

              <div
                class="border-b bg-[#F1DAB7] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                     class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem]"
                  >
                    Webinars & Online Forums
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base">
                    We leverage the power of technology to host engaging
                    webinars and online forums that connect participants across
                    geographical boundaries, promote knowledge sharing, and
                    expand the reach of your social impact message.
                  </p>
                </div>
              </div>
              <!-- disscuss 4-->
              <div
                class="border-b bg-[#DDC2FF] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                     class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem]"
                  >
                    Community Dialogues
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base">
                    We organize community dialogues that bring together diverse
                    voices to discuss social issues and co-create solutions.
                  </p>
                </div>
              </div>

              <!--  -->
            </div>
          </div>
        </div>
      </section>

      <!--Multi-Media Engagement  -->
      <section class="py-16 rounded bg-accentTextLight">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
              <h2
                class="md:text-5xl lg:text-[3.5rem] text-center md:w-4/5 mx-auto text-3xl mb-2 font-playfair font-medium leading-normal"
              >
                Multi-Media Engagement
              </h2>
              <p
                class="mt-4 font-[400] md:w-3/4 mx-auto text-center text-xl leading-[2.1rem] font-opensans"
              >
                We believe in pushing the boundaries of traditional event
                formats. In addition to the options above, we offer:
              </p>
            </div>
          </div>
          <!-- discussion Section -->
         <div class="md:mt-12 mt-2 w-full">
            <!-- more discussion -->
            <div class="grid font-opensans md:grid-cols-2 grid-cols-1 gap-6">
              <!-- disscuss 1-->
              <div
                class="border-b bg-[#FFE4BB] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                     class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem]"
                  >
                    Art Exhibitions & Multi-Media Experiences
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base">
                    We curate impactful art exhibitions and immersive
                    multi-media experiences that raise awareness, spark
                    dialogue, and mobilize communities around social issues.
                    This can include multimedia installations, talk shows
                    embedded within the exhibition, movie screenings that
                    showcase real-life stories, and even live podcasts that
                    spark conversations on-site.
                  </p>
                </div>
              </div>
              <!-- disscuss 2-->
              <div
                class="border-b bg-[#FFDED0] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                     class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem]"
                  >
                    Public Performance & Street Art Activism
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base">
                    We facilitate the creation of public performances, street
                    art installations, and other forms of creative protest to
                    engage the public, challenge the status quo, and inspire
                    action.
                  </p>
                </div>
              </div>
              <!-- disscuss 3 -->
              <div
                class="border-b bg-secondary p-12 rounded-[16px] transition-[all] duration-700 md:w-1/2 mx-auto md:col-span-2"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                     class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem]"
                  >
                    Interactive Simulations & Empathy Games
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base">
                    We design and lead interactive simulations and empathy games
                    that allow participants to walk a mile in someone else's
                    shoes, fostering an understanding of complex social issues
                    and promoting behaviour change.
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
         <div class="text-center w-full h-42 sm:h-52 md:text-6xl lg:h-64">
          <h2
            class="text-3xl md:text-5xl lg:text-[4rem] font-medium mb-4 font-playfair md:w-1/2 mx-auto"
          >
           We don't just host events.
          </h2>
             <h2
            class="text-3xl md:text-5xl lg:text-[4rem] font-medium mb-4 font-playfair md:w-1/2 mx-auto"
          >
          We ignite movements.
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
