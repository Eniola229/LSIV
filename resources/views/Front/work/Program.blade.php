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
      <section class="bg-[#FFDED0]">
             @include('components.header')
        <div
          class="flex mx-auto max-w-7xl p-4 lg:px-6 flex-col md:flex-row justify-center md:justify-between items-center w-full "
        >
          <!-- Left Section: Heading and Subtext -->
          <div class="md:w-3/5">
            <h1
              class="md:text-[48px] text-[32px] capitalize md:leading-[3.2rem] text-accentTextDark font-playfair font-[500]"
            >
              building bridges for change:<br> program design & implementation
            </h1>
              <p class="mt-4 text-accentTextDark md:w-full md:text-[20px] text-[16px] font-opensans font-[400]" style="line-height: 33px;">
               <span class="italic font-[600]">
                Effective social impact requires innovative programming.
              </span>
              <br />
              At LSIV, we go beyond strategy. We help you design and implement
              impactful programs that empower communities, drive advocacy
              efforts, and achieve sustainable change.
            </p>
          </div>

          <div class="md:w-1/3">
            <img
              src="{{ asset('Images/i-6.png') }}"
              alt="Illustration"
              class="w-full h-auto sm:w-[300px] sm:h-[250px] md:w-[447.857px] md:h-[380px]"
            />
          </div>
        </div>
      </section>
      <!--Tailored Programs for Real-World Impact  -->
      <section class="py-16 rounded bg-accentTextLight">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
             <h2
                class="md:text-[48px] lg:text-[3.5rem] text-center text-[32px] mb-2 font-playfair font-[500] leading-normal"
              >
                Tailored Programs for Real-World Impact
              </h2>
              <p
                class="mt-4 md:w-3/4 mx-auto text-center text-xl leading-[2.1rem] font-opensans font-[400]"
              >
                We believe in creating programs that are community-driven,
                evidence-based, and culturally relevant. Here are the kind of
                program types we specialize In
              </p>
            </div>
          </div>
          <!-- discussion Section -->
          <div class="md:mt-12 mt-2 w-full">
            <!-- more discussion -->
            <div class="grid font-opensans md:grid-cols-3 grid-cols-1 gap-6">
              <!-- disscuss 1 -->
              <div
                class="border-b bg-secondary p-6 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                   class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem]"
                  >
                    Advocacy Programs
                  </h3>
                </div>
                <div class="mt-4 text-accentTextDark font-normal mb-2">
                  <p class="leading-7 text-base">
                    We develop strategic advocacy programs that raise awareness
                    of social issues, secure resources for social good, mobilise
                    supporters, and influence policy changes at local, national,
                    or international levels.
                  </p>
                </div>
              </div>

              <!-- disscuss 2 -->
              <div
                class="border-b bg-[#F1DAB7] p-6 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                   class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem]"
                  >
                    Community Programs
                  </h3>
                </div>
                <div class="mt-4 text-accentTextDark mb-2 font-normal">
                  <p class="leading-7 text-base">
                    We design and implement community-based programs that
                    address local needs and empower communities to become agents
                    of change.
                  </p>
                </div>
              </div>
              <!-- disscuss 3-->
              <div
                class="border-b bg-[#DDC2FF] p-6 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                   class="capitalize font-[600] text-left md:leading-[2.72375rem] text-[20px] md:text-[2rem]"
                  >
                    Grassroots Mobilization
                  </h3>
                </div>
                <div class="mt-4 text-accentTextDark font-normal mb-2">
                  <p class="leading-7 text-base">
                    We support grassroots movements by providing training,
                    resources, and strategic guidance to amplify their voices
                    and drive social change from the ground up.
                  </p>
                </div>
              </div>

              <!--  -->
            </div>
          </div>
        </div>
      </section>
      <!--Our Comprehensive Program Design Services  -->
      <section class="py-16 rounded bg-accentTextLight">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
              <h2
                class="md:text-5xl lg:text-[3.5rem] text-center w-full mx-auto text-3xl mb-2 font-playfair font-medium leading-normal"
              >
                Our Comprehensive Program Design Services
              </h2>
              <p
                class="mt-4 md:w-3/4 mx-auto text-center text-xl leading-[2.1rem] font-opensans font-[400]"
              >
                We offer a comprehensive suite of program design services
                tailored to your specific needs
              </p>
            </div>
          </div>
          <!-- discussion Section -->
          <div class="md:mt-12 mt-2 w-full">
            <!-- more discussion -->
            <div class="grid font-opensans md:grid-cols-2 grid-cols-1 gap-6">
              <!-- disscuss 1-->
              <div
                class="border-b bg-[#FFDED0] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-semibold text-left md:leading-[2.72375rem] text-xl md:text-[2rem]"
                  >
                    Program Design & Theory of Change Development
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base">
                    Our team of experts will guide you in crafting a
                    comprehensive program design that outlines clear objectives,
                    evidence-based interventions, and a robust theory of change
                    that maps your program's pathway to impact.
                  </p>
                </div>
              </div>

              <!-- disscuss 2-->
              <div
                class="border-b bg-miscellanous p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-semibold text-left md:leading-[2.72375rem] text-xl md:text-[2rem]"
                  >
                    Curriculum Design & Implementation
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base">
                    For capacity-building initiatives, we specialize in
                    designing engaging and culturally appropriate curriculum
                    materials and facilitating training that equips program
                    participants with the knowledge and skills needed to drive
                    social change.
                  </p>
                </div>
              </div>

              <!-- disscuss 3 -->
              <div
                class="border-b bg-secondary p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-semibold text-left md:leading-[2.72375rem] text-xl md:text-[2rem]"
                  >
                    Concept Development
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base">
                    We work collaboratively with you to develop innovative
                    program concepts that address the root causes of social
                    issues and align with your organization's mission.
                  </p>
                </div>
              </div>
              <!-- disscuss 4 -->
              <div
                class="border-b bg-[#FFC6DB] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-semibold text-left md:leading-[2.72375rem] text-xl md:text-[2rem]"
                  >
                    Community Needs Assessments
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base">
                    We conduct thorough community needs assessments to
                    understand the specific challenges and priorities of the
                    communities your program will serve.
                  </p>
                </div>
              </div>

              <!-- disscuss 5 -->

              <div
                class="border-b bg-[#F1DAB7] p-12 rounded-[16px] transition-[all] duration-700"
              >
                <div
                  class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer"
                >
                  <h3
                    class="capitalize font-semibold text-left md:leading-[2.72375rem] text-xl md:text-[2rem]"
                  >
                    Stakeholder Engagement
                  </h3>
                </div>
                <div
                  class="mt-10 text-accentTextDark font-normal mb-2 flex justify-between flex-col gap"
                >
                  <p class="leading-7 mb-2 text-base">
                    We actively engage stakeholders throughout the program
                    design process to ensure buy-in and ownership.
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
            class="text-3xl md:text-5xl lg:text-[4rem] font-normal mb-4 font-playfair md:w-4/5 mx-auto"
          >
            We can turn program ideas into tangible solutions that create
            lasting social change
          </h2>
          <p class="text-[24px] mb-6 font-normal font-opensans md:w-1/2 mx-auto">
            Contact us today to discuss how our program design and
            implementation services can help your organization achieve its
            social impact goals.
          </p>
                  <button class="btn-bg-animation hover-effect-arrow" onclick="window.location.href='mailto:info@lsiv.org';">
          <span class="btn-text font-opensans">Contact us <span class="hover-arrow" style="color: white;"><img src="{{ asset('Images/Vector.png') }}"></span></span>
      </button>       </div>
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
