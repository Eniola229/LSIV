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
      <section class="py-16 rounded bg-accentTextLight">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
           <h1
              class="md:text-5xl lg:text-7xl text-[40px] font-playfair font-medium leading-normal"
            >
                Your Partner in Building a More Just and Equitable World
              </h1>
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 lg:pl-10 lg:ml-52">
              <p
                class="text-accentTextDark font-normal leading-[2.1675rem] mb-2 text-xl font-opensans"
              >
                We are dedicated to fostering a world where everyone can thrive
                by driving positive change. Our diverse services empower
                individuals, organizations, and communities with the tools and
                knowledge to create meaningful transformation.
              </p>
            </div>
          </div>
          <!-- discussion Section -->
          <div class="mt-20 w-full">
            <!-- more discussion -->
            <div class="grid font-opensans md:grid-cols-2 grid-cols-1 gap-6">
              <!-- disscuss 1 -->
            <div
              class="border-b bg-secondary rounded-[16px] transition-[all] duration-700 md:p-12 p-6 flex flex-col justify-between"
            >
              <div class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer">
                <h3
                  class="capitalize font-semibold text-left md:leading-[2.72375rem] text-[24px] md:text-[2rem]"
                >
                  Communications & Storytelling
                </h3>
              </div>
              <div class="mt-10 text-accentTextDark font-normal mb-2 flex flex-col gap">
                <p class="leading-7 mb-2 text-base font-opensans min-h-[8rem]">
                  <strong class="italic font-semibold">
                    Stories have the power to drive change.
                  </strong>
                  <br />
                  Our multimedia communication and storytelling services are designed to
                  amplify your voice and elevate your impact. From engaging digital media
                  campaigns and human-centred storytelling to high-quality video and
                  photojournalism, we transform your social impact stories into powerful
                  tools for change.
                </p>
              </div>
              <div class="mt-auto">
                <a
                  href="{{ url('Work-Communication') }}"
                  class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2"
                >
                  <span class="btn-text">Learn more</span>
                  <span class="hover-arrow" style="color: orange;">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-arrow-right"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M11.293 8.707a1 1 0 0 0 0-1.414L7.707 4.707a1 1 0 1 0-1.414 1.414L8.586 7H3a1 1 0 1 0 0 2h5.586l-2.293 2.293a1 1 0 1 0 1.414 1.414l4-4z"
                      />
                    </svg>
                  </span>
                </a>
              </div>
            </div>

            <!-- Box 2 -->
            <div
              class="border-b bg-[#FFC6DB] rounded-[16px] transition-[all] duration-700 md:p-12 p-6 flex flex-col justify-between"
            >
              <div class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer">
                <h3
                  class="capitalize font-semibold text-left md:leading-[2.72375rem] text-[24px] md:text-[2rem]"
                >
                  Branding & Design Services
                </h3>
              </div>
              <div class="mt-10 text-accentTextDark font-normal mb-2 flex flex-col gap">
                <p class="leading-7 mb-2 text-base font-opensans min-h-[8rem]">
                  <strong class="italic font-semibold">
                    A compelling brand identity is key to driving your mission forward and
                    making a lasting impression.
                  </strong>
                  <br />
                  We specialize in creating powerful visual identities that resonate with
                  your audience and amplify your social impact. From developing your brand
                  strategy and crafting striking visual elements to designing engaging
                  multimedia content and ensuring consistency across all platforms, our
                  branding and design services are designed to set you apart and reinforce
                  your message.
                </p>
              </div>
              <div class="mt-auto">
                <a
                  href="{{ url('Work-Branding') }}"
                  class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2"
                >
                  <span class="btn-text">Learn more</span>
                  <span class="hover-arrow" style="color: orange;">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-arrow-right"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M11.293 8.707a1 1 0 0 0 0-1.414L7.707 4.707a1 1 0 1 0-1.414 1.414L8.586 7H3a1 1 0 1 0 0 2h5.586l-2.293 2.293a1 1 0 1 0 1.414 1.414l4-4z"
                      />
                    </svg>
                  </span>
                </a>
              </div>
            </div>

              <!-- disscuss 3 -->
          <!-- Section 1: Strategy Development And Implementation -->
          <div class="border-b bg-[#F1DAB7] md:p-12 p-6 rounded-[16px] transition-all duration-700 md:mt-4 flex flex-col h-full">
            <div class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer">
              <h3 class="capitalize font-semibold text-left md:leading-[2.72375rem] text-[24px] md:text-[2rem]">
                Strategy Development And Implementation
              </h3>
            </div>
            <div class="mt-10 text-accentTextDark font-normal mb-2 flex flex-col gap-4 flex-grow">
              <p class="leading-7 mb-2 text-base font-opensans">
                <strong class="italic font-semibold">
                  Strategic planning is key to achieving long-term social change.
                </strong><br />
                We offer bespoke strategies, including impactful advocacy, tailored communication plans, and cutting-edge digital campaigns. By combining data-driven insights with a deep understanding of your goals, we help you craft strategies that drive meaningful and sustainable impact.
              </p>
              <div class="md:mt-12 mt-4 flex-grow flex items-end">
                <a href="{{ url('Work-Strategy') }}" class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2">
                  <span class="btn-text">Learn more</span>
                  <span class="hover-arrow text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path d="M11.293 8.707a1 1 0 0 0 0-1.414L7.707 4.707a1 1 0 1 0-1.414 1.414L8.586 7H3a1 1 0 1 0 0 2h5.586l-2.293 2.293a1 1 0 1 0 1.414 1.414l4-4z" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <!-- Section 2: Training & Capacity Building -->
          <div class="border-b bg-[#DDC2FF] md:p-12 p-6 rounded-[16px] transition-all duration-700 md:mt-4 flex flex-col h-full">
            <div class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer">
              <h3 class="capitalize font-semibold text-left md:leading-[2.72375rem] text-[24px] md:text-[2rem]">
                Training & Capacity Building
              </h3>
            </div>
            <div class="mt-10 text-accentTextDark font-normal mb-2 flex flex-col gap-4 flex-grow">
              <p class="leading-7 mb-2 text-base font-opensans">
                <strong class="italic font-semibold">
                  A skilled and empowered workforce is crucial for social change.
                </strong><br />
                Our flexible, learner-centered training programs cover communication, advocacy, impact storytelling, campaign development, and more. Through interactive methodologies and customized content, we equip individuals and organizations with the practical skills needed to drive positive social change.
              </p>
              <div class="md:mt-12 mt-4 flex-grow flex items-end">
                <a href="{{ url('Work-Traning') }}" class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2">
                  <span class="btn-text">Learn more</span>
                  <span class="hover-arrow text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path d="M11.293 8.707a1 1 0 0 0 0-1.414L7.707 4.707a1 1 0 1 0-1.414 1.414L8.586 7H3a1 1 0 1 0 0 2h5.586l-2.293 2.293a1 1 0 1 0 1.414 1.414l4-4z" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <!-- Section 3: Engagement Events -->
          <div class="border-b bg-[#FFE4BB] md:p-12 p-6 rounded-[16px] transition-all duration-700 md:mt-6 flex flex-col h-full">
            <div class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer">
              <h3 class="capitalize font-semibold text-left md:leading-[2.72375rem] text-[24px] md:text-[2rem]">
                Engagement Events
              </h3>
            </div>
            <div class="mt-10 text-accentTextDark font-normal mb-2 flex flex-col gap-4 flex-grow">
              <p class="leading-7 mb-2 text-base font-opensans">
                <strong class="italic font-semibold">
                  Meaningful change thrives on connection and collaboration.
                </strong><br />
                We organize impactful events, including conferences, focus group discussions, webinars, and community dialogues, to foster dialogue and drive action. We also push the boundaries with art exhibitions, public performances, and interactive simulations to engage and inspire.
              </p>
              <div class="md:mt-12 mt-4 lg:mt-28 flex-grow flex items-end">
                <a href="{{ url('Work-Engagement') }}" class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2">
                  <span class="btn-text">Learn more</span>
                  <span class="hover-arrow text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path d="M11.293 8.707a1 1 0 0 0 0-1.414L7.707 4.707a1 1 0 1 0-1.414 1.414L8.586 7H3a1 1 0 1 0 0 2h5.586l-2.293 2.293a1 1 0 1 0 1.414 1.414l4-4z" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <!-- Section 4: Program Design and Implementation -->
          <div class="border-b bg-[#FFDED0] md:p-12 p-6 rounded-[16px] transition-all duration-700 md:mt-6 flex flex-col h-full">
            <div class="text-accentTextDark flex justify-between items-center gap-4 cursor-pointer">
              <h3 class="capitalize font-semibold text-left md:leading-[2.72375rem] text-[24px] md:text-[2rem]">
                Program Design and Implementation
              </h3>
            </div>
            <div class="mt-10 text-accentTextDark font-normal mb-2 flex flex-col gap-4 flex-grow">
              <p class="leading-7 mb-2 text-base font-opensans">
                <strong class="italic font-semibold">
                  Effective social impact requires innovative program design and flawless execution.
                </strong><br />
                We collaborate with you to develop and implement programs that address community needs, drive advocacy, and achieve sustainable change. From concept development to curriculum design, we turn ideas into tangible solutions that create lasting social impact.
              </p>
              <div class="md:mt-12 mt-4 flex-grow flex items-end">
                <a href="{{ url('Work-Program') }}" class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2">
                  <span class="btn-text">Learn more</span>
                  <span class="hover-arrow text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path d="M11.293 8.707a1 1 0 0 0 0-1.414L7.707 4.707a1 1 0 1 0-1.414 1.414L8.586 7H3a1 1 0 1 0 0 2h5.586l-2.293 2.293a1 1 0 1 0 1.414 1.414l4-4z" />
                    </svg>
                  </span>
                </a>
              </div>
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
            class="text-3xl md:text-5xl lg:text-6xl font-meduim mb-4 font-playfair"
          >
            We don’t just tell stories
          </h2>
          <h2
          class="text-3xl md:text-5xl lg:text-6xl font-meduim mb-4 font-playfair"
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
  </body>
</html>
