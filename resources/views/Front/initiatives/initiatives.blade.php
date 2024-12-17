<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSIV - our initiatives</title>
    <link rel="stylesheet" href="../style.css" />
  </head>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  <body>
    <main class="bg-secondary">
      @include('components.header')
      <!-- our initialtives  -->
    <section class="bg-secondary py-16 rounded text-accentTextDark max-w-7xl mx-auto md:mt-0 mt-[-10px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6 justify-center items-center md:mt-0 mt-[-40px]">
          <div class="mb-6 space-y-2">
            <h1
              class="md:text-5xl lg:text-7xl text-[40px] font-playfair font-medium leading-normal"
            >
              Driving Change,One <span class="text-primary"> Initiative </span>
              at a Time.
            </h1>
            <p class="font-opensans md:text-2xl text-[16px]">
              Discover how our initiatives are shaping a brighter future
            </p>
          </div>
        <div class="container mt-8">
          <!-- GRID -->
          <div class="grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-y-8">
            <!-- card one -->
            <div class="px-4 h-auto w-full font-opensans flex flex-col">
              <!-- Image Section -->
              <div class="w-full h-[17.8125rem]">
                <img
                  src="{{ asset('Images/body-1.jpeg') }}"
                  alt="the founder of LSIV"
                  class="w-full h-full  md:w-[424px] md:h-[285px] object-cover rounded-lg object-center"
                />
              </div>
              <div class="bg-accentTextLight p-6 drop-shadow rounded-lg gap-4 flex flex-col h-full">
                <h3 class="md:text-[28px] text-[24px] leading-[2.3325rem] font-playfair font-[400]">
                  MyBodyIsMine
                </h3>
                <p class="leading-[1.625rem] font-[400] text-[16px] font-opensans flex-1">
                  A human-rights comprehensive sexuality education program empowering children, teenagers and young adults with the knowledge and confidence to make informed choices about their sexual and reproductive health (SRH).
                </p>
                <a href="{{ url('Initiatives-MyBodyIsMine') }}"  class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2"
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

            <!-- card 2 -->
            <div class="px-4 h-auto w-full font-opensans flex flex-col">
              <!-- Image Section -->
              <div class="w-full h-[17.8125rem]">
                <img
                  src="{{ asset('Images/body-2.jpeg') }}"
                  alt="the founder of LSIV"
                  class="w-full h-full  md:w-[424px] md:h-[285px] object-cover rounded-lg object-center"
                />
              </div>
              <div class="bg-accentTextLight p-6 drop-shadow rounded-lg gap-4 flex flex-col h-full">
                <h3 class="md:text-[28px] text-[24px] leading-[2.3325rem] font-playfair font-[400]">
                  Adopt a Community
                </h3>
                <p class="leading-[1.625rem] font-[400] text-[16px] font-opensans flex-1">
                  A collaborative effort to empower grassroots and marginalised communities through participatory development programs, addressing issues like menstrual hygiene, safe sex, gender-based violence, and vocational skills training.
                </p>
                <a href="{{ url('Initiatives-AdoptCommunity') }}"  class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2"
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

            <!-- card 3 -->
            <div class="px-4 h-auto w-full font-opensans flex flex-col">
              <!-- Image Section -->
              <div class="w-full h-[17.8125rem]">
                <img
                  src="{{ asset('Images/no-day.jpeg') }}"
                  alt="the founder of LSIV"
                  class="w-full h-full  md:w-[424px] md:h-[285px] object-cover rounded-lg object-center"
                />
              </div>
              <div class="bg-accentTextLight p-6 drop-shadow rounded-lg gap-4 flex flex-col h-full">
                <h3 class="md:text-[28px] text-[24px] leading-[2.3325rem] font-playfair font-[400]">
                  No Day Off
                </h3>
                <p class="leading-[1.625rem] font-[400] text-[16px] font-opensans flex-1">
                  Fights period poverty and improves girls' school attendance by providing them with reusable sanitary pads and menstrual hygiene education.
                </p>
                <a href="{{ url('Initiatives-Nodaysoff') }}"  class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2"
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

            <!-- card 4 -->
            <div class="px-4 h-auto w-full font-opensans flex flex-col">
              <!-- Image Section -->
              <div class="w-full h-[17.8125rem]">
                <img
                  src="{{ asset('Images/p-2.png') }}"
                  alt="the founder of LSIV"
                  class="w-full h-full  md:w-[424px] md:h-[285px] object-cover rounded-lg object-center"
                />
              </div>
              <div class="bg-accentTextLight p-6 drop-shadow rounded-lg gap-4 flex flex-col h-full">
                <h3 class="md:text-[28px] text-[24px] leading-[2.3325rem] font-playfair font-[400]">
                  The Conversation
                </h3>
                <p class="leading-[1.625rem] font-[400] text-[16px] font-opensans flex-1">
                  Fosters meaningful dialogue between generations by connecting young people with experienced mentors for inspiration, knowledge sharing, and mentorship opportunities.
                </p>
                <a href="{{ url('Initiatives-Conversation') }}"  class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2"
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

            <!-- card 5 -->
            <div class="px-4 h-auto w-full font-opensans flex flex-col">
              <!-- Image Section -->
              <div class="w-full h-[17.8125rem]">
                <img
                  src="{{ asset('Images/stories-un.jpeg') }}"
                  alt="the founder of LSIV"
                  class="w-full h-full  md:w-[424px] md:h-[285px] object-cover rounded-lg object-center"
                />
              </div>
              <div class="bg-accentTextLight p-6 drop-shadow rounded-lg gap-4 flex flex-col h-full">
                <h3 class="md:text-[28px] text-[24px] leading-[2.3325rem] font-playfair font-[400]">
                  Stories Untold
                </h3>
                <p class="leading-[1.625rem] font-[400] text-[16px] font-opensans flex-1">
                  Uses the power of documentary filmmaking to shed light on critical social issues often ignored or silenced, promoting awareness and advocating for positive change.
                </p>
                <a href="{{ url('Initiatives-Storiesunhear') }}"  class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2"
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

            <!-- card 6 -->
            <div class="px-4 h-auto w-full font-opensans flex flex-col">
              <!-- Image Section -->
              <div class="w-full h-[17.8125rem]">
                <img
                  src="{{ asset('Images/lolo-show.jpeg') }}"
                  alt="the founder of LSIV"
                  class="w-full h-full  md:w-[424px] md:h-[285px] object-cover rounded-lg object-center"
                />
              </div>
              <div class="bg-accentTextLight p-6 drop-shadow rounded-lg gap-4 flex flex-col h-full">
                <h3 class="md:text-[28px] text-[24px] leading-[2.3325rem] font-playfair font-[400]">
                  The Lolo Cynthia Show
                </h3>
                <p class="leading-[1.625rem] font-[400] text-[16px] font-opensans flex-1">
                  An award-winning program that tackles sensitive social issues through powerful storytelling. By amplifying real-life experiences and fostering open conversations, the show empowers individuals and communities to drive positive social change.
                </p>
                <a href="{{ url('Initiatives-Lolocythia') }}"  class="hover-effect-arrow font-[600] text-[1.125rem] flex items-center space-x-2"
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
