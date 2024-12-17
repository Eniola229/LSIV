<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSIV - Ourthematicareas</title>
    <link rel="stylesheet" href="../style.css" />
    <script src="./themactics.js" defer></script>
  </head>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
  <body class="bg-[#F8F8FF]">
   @include('components.header')
    <main>
      <!-- Ourthematicareas -->
      <section class="bg-[#F8F8FF] py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <div class="flex flex-col lg:flex-col justify-between gap-4">
            <div class="w-full">
              <h1
                class="md:text-5xl lg:text-7xl text-[40px] mb-6 font-playfair font-[500] leading-normal"
              >
                Our Thematic Areas: Advancing the UN Sustainable Development
                Goals (SDGs)
              </h1>
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 lg:pl-10 lg:ml-52">
              <p
                class="text-accentTextDark font-normal leading-[2.1675rem] mb-6 md:text-xl text-[16px] font-opensans"
              >
                Our organization is dedicated to advancing the United Nations
                Sustainable Development Goals (SDGs) and working with our
                partners to tackle pressing global issues that affect
                communities worldwide. We are committed to making a positive
                impact by raising awareness, advocating for change, and
                promoting community development.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- discussion session 1 -->
      <section class="bg-secondary py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- COnatainner flex -->
          <div class="flex items-center lg:flex-row flex-col gap-4 md:mt-[-40px] mt-0">
            <!-- flex card 1 -->

            <!-- Image Section -->
            <div class="lg:mt-20 lg:w-1/2 h-auto md:h-[38rem]">
              <img
                src="{{ asset('Images/gender.jpeg') }}"
                alt="Gender Equality and Empowerment: Building a More Equitable
                World (SDG 5)"
                class="w-full h-full object-cover rounded-md"
              />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 md:p-12 md:mt-[90px]">
              <div>
                <h2
                  class="md:text-[32px] text-[24px] mb-6 font-opensans font-[600] leading-normal font-opensans text-accentTextDark"
                >
                  Gender Equality and Empowerment: Building a More Equitable
                  World (SDG 5)
                </h2>
                <p class="font-opensans font-[400] text-[20px]">
                  We envision a world where everyone, regardless of gender, has
                  equal opportunities to reach their full potential. Our
                  approach includes:
                </p>
                <!-- more discussion -->
                <div class="description-container gap-6 mt-6">
                  <!-- disscuss 1 -->
                  <div class="disscuss-item border border-orange-300 rounded-[15px] py-6 mb-4 p-6">
                    <button
                      class="disscuss-head text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans"
                      onclick="toggleAnswer(this)"
                    >
                      Advocacy for Girls and Women’s Rights
                      <span class="icon text-accentTextDark">+</span>
                    </button>
                    <div class="faq-answer hidden mt-4 text-[16px] font-opensans">
                      We support our partners in promoting gender equality
                      through comprehensive advocacy and awareness campaigns. By
                      conducting targeted focus groups and deep research, we
                      understand societal attitudes and challenges. We then
                      implement campaigns to address systemic barriers, foster
                      behaviour change, and challenge harmful gender norms.
                    </div>
                  </div>

                  <!-- disscuss 2 -->
                   <div class="disscuss-item border border-orange-300 rounded-[15px] py-6 mb-4 p-6">
                    <button
                      class="disscuss-head text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans"
                      onclick="toggleAnswer(this)"
                    >
                      Ending Violence Against Women and Girls (VAWG)
                      <span class="icon text-accentTextDark">+</span>
                    </button>
                    <div class="faq-answer hidden mt-4 text-[16px] font-opensans">
                      We support our partners in tackling Gender-Based Violence
                      (GBV) by addressing its root causes. Through education,
                      media, research, and community outreach, we advocate for
                      girls and women’s rights, challenge societal attitudes
                      perpetuating violence, and empower survivors. We train
                      community leaders and service providers to respond
                      effectively to VAWG cases.
                    </div>
                  </div>

                  <!-- disscuss 3 -->
                   <div class="disscuss-item border border-orange-300 rounded-[15px] py-6 mb-4 p-6">
                    <button
                      class="disscuss-head text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans"
                      onclick="toggleAnswer(this)"
                    >
                      Economic Empowerment of Women
                      <span class="icon text-accentTextDark">+</span>
                    </button>
                    <div class="disscuss-answer hidden mt-4 text-[16px] font-opensans">
                      Recognizing that economic independence is crucial for
                      empowerment, we support our partners in delivering
                      training programs focused on financial literacy,
                      entrepreneurship, and skills development. This helps women
                      access income-generating opportunities and achieve
                      economic security.
                    </div>
                  </div>

                  <!-- disscuss 4 -->
                   <div class="disscuss-item border border-orange-300 rounded-[15px] py-6 mb-4 p-6">
                    <button
                      class="disscuss-head text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans"
                      onclick="toggleAnswer(this)"
                    >
                      Promoting Women’s Leadership
                      <span class="icon text-accentTextDark">+</span>
                    </button>
                    <div class="disscuss-answer hidden mt-4 text-[16px] font-opensans">
                      We support our partners in encouraging women's
                      participation in leadership roles across all sectors. Our
                      leadership development programs and mentorship
                      opportunities equip women with the skills and confidence
                      to advocate for themselves and their communities.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- discussion section 2 -->
      <section class="bg-miscellanous py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- Container flex -->
         <div class="flex items-center lg:flex-row flex-col gap-4 md:mt-[-40px] mt-0">
            <!-- flex card 1 -->

            <!-- Image Section -->
            <div class="lg:mt-20 lg:w-1/2 h-auto md:h-[38rem] text-xl">
              <img
                src="{{ asset('Images/health.jpeg') }}"
                alt=" Health and Well-Being: Promoting Positive Social and
                Behavioral Change (SDG 3)"
                class="w-full h-full object-cover rounded-md"
              />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 md:p-12">
              <div>
                <h2
                  class="md:text-[32px] text-[24px] mb-6 font-opensans font-[600] leading-normal font-opensans text-accentTextDark"
                >
                  Health and Well-Being: Promoting Positive Social and
                  Behavioral Change (SDG 3)
                </h2>
                 <p class="font-opensans font-[400] text-[20px]">
                  We are dedicated to enhancing health by addressing physical,
                  mental, and emotional well-being. We utilize a comprehensive
                  approach to foster health and well-being, with a focus on:
                </p>
                <!-- more discussion -->
                 <div class="description-container gap-6 mt-6">
                  <!-- discuss 1 -->
                   <div class="disscuss-item border border-orange-300 rounded-[15px] py-6 mb-4 p-6">
                    <button
                      class="disscuss-head text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans"
                      onclick="toggleAnswer(this)"
                    >
                      Sexual and Reproductive Health
                      <span class="icon text-accentTextDark">+</span>
                    </button>
                    <div class="faq-answer hidden mt-4 text-[16px] font-opensans">
                      We support our partners in advocating for comprehensive
                      sexuality education, essential SRHR services, and the
                      freedom to make informed choices about sexual and
                      reproductive health. We work to dismantle stigma and
                      ensure equitable access to contraception, safe abortion
                      services (where legal), and sensitive counselling.
                    </div>
                  </div>

                  <!-- discuss 2 -->
                   <div class="disscuss-item border border-orange-300 rounded-[15px] py-6 mb-4 p-6">
                    <button
                      class="disscuss-head text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans"
                      onclick="toggleAnswer(this)"
                    >
                      Community Health
                      <span class="icon text-accentTextDark">+</span>
                    </button>
                    <div class="faq-answer hidden mt-4 text-[16px] font-opensans">
                      Collaborating with communities to identify their unique
                      needs, we support our partners in developing targeted
                      health education campaigns. We organize health fairs,
                      deliver workshops on preventable diseases, and train
                      community health workers. Through peer support networks
                      and partnerships with local healthcare facilities, we
                      empower communities to take charge of their well-being.
                    </div>
                  </div>

                  <!-- discuss 3 -->
                   <div class="disscuss-item border border-orange-300 rounded-[15px] py-6 mb-4 p-6">
                    <button
                      class="disscuss-head text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans"
                      onclick="toggleAnswer(this)"
                    >
                      Adolescent Health
                      <span class="icon text-accentTextDark">+</span>
                    </button>
                    <div class="disscuss-answer hidden mt-4 text-gray-700 font-opensans">
                      We equip adolescents with the knowledge and skills to
                      navigate physical, emotional, and social challenges. We
                      provide education on healthy relationships, responsible
                      decision-making, and access to confidential healthcare
                      services. We partner with schools and youth organizations
                      to deliver interactive programs and peer support groups.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- discussion section 3 -->
      <section class="bg-accentTextLight py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- Container flex -->
         <div class="flex items-center lg:flex-row flex-col gap-4 md:mt-[-40px] mt-0">
            <!-- Image Section -->
            <div class="lg:mt-20 lg:w-1/2 h-auto md:h-[38rem] text-xl">
              <img
                src="{{ asset('Images/ta-2.png') }}"
                alt="education and social development"
                class="w-full h-full object-cover rounded-md"
              />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 md:p-12 md:mt-[50px]">
              <div>
                <h2
                  class="md:text-[32px] text-[24px] mb-6 font-opensans font-[600] leading-normal font-opensans text-accentTextDark"
                >
                  Social Development and Education: Investing in the Future (SDG
                  4)
                </h2>
                 <p class="font-opensans font-[400] text-[20px]">
                  We believe that education and a strong foundation in social
                  development are essential for building a prosperous and
                  equitable future. Our efforts include:
                </p>
                <!-- more discussion -->
                 <div class="description-container gap-6 mt-6">
                  <!-- discuss 1 -->
                   <div class="disscuss-item border border-orange-300 rounded-[15px] py-6 mb-4 p-6">
                    <button
                      class="disscuss-head text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans"
                      onclick="toggleAnswer(this)"
                    >
                      Bridging the Educational Gap
                      <span class="icon text-accentTextDark">+</span>
                    </button>
                    <div class="faq-answer hidden mt-4 text-[16px] font-opensans">
                      We support our partners in ensuring all children have
                      access to quality education, regardless of background. We
                      work with communities to improve infrastructure, develop
                      engaging curriculums, and support students facing
                      challenges.
                    </div>
                  </div>

                  <!-- discuss 2 -->
                   <div class="disscuss-item border border-orange-300 rounded-[15px] py-6 mb-4 p-6">
                    <button
                      class="disscuss-head text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans"
                      onclick="toggleAnswer(this)"
                    >
                      Protecting Children’s Rights
                      <span class="icon text-accentTextDark">+</span>
                    </button>
                    <div class="faq-answer hidden mt-4 text-[16px] font-opensans">
                      We champion every child's right to a safe environment,
                      education, healthcare, and freedom from exploitation and
                      abuse. We work with communities and policymakers to
                      implement child protection measures, raise awareness, and
                      empower children to advocate for themselves.
                    </div>
                  </div>

                  <!-- discuss 3 -->
                   <div class="disscuss-item border border-orange-300 rounded-[15px] py-6 mb-4 p-6">
                    <button
                      class="disscuss-head text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans"
                      onclick="toggleAnswer(this)"
                    >
                      Promoting Equity and Inclusion
                      <span class="icon text-accentTextDark">+</span>
                    </button>
                    <div class="faq-answer hidden mt-4 text-[16px] font-opensans">
                      We support our partners in working with marginalized
                      communities to empower them to address systemic barriers
                      and advocate for their rights. Collaborating with local
                      organizations, we develop programs promoting social
                      inclusion and addressing issues like poverty,
                      discrimination, and lack of access to education and
                      healthcare.
                    </div>
                  </div>

                  <!-- discuss 4 -->
                 <div class="disscuss-item border border-orange-300 rounded-[15px] py-6 mb-4 p-6">
                    <button
                      class="disscuss-head text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans"
                      onclick="toggleAnswer(this)"
                    >
                      Child & Youth Mentorship
                      <span class="icon text-accentTextDark">+</span>
                    </button>
                    <div class="faq-answer hidden font-opensans mt-4 text-gray-700">
                      We facilitate meaningful connections between young people
                      and positive role models. Our mentorship programs provide
                      guidance, support, and encouragement, helping young people
                      reach their full potential and become well-rounded
                      individuals.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- discussion section 4 -->
      <section class="bg-[#FFDED0] py-16 rounded font-opensans">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- Container flex -->
         <div class="flex items-center lg:flex-row flex-col gap-4 md:mt-[-40px] mt-0">
            <!-- Image Section -->
            <div class="lg:mt-20 lg:w-1/2 h-auto md:h-[38rem] text-xl">
              <img
                src="{{ asset('Images/ta-1.png') }}"
                alt="sustainable livelihoods"
                class="w-full h-full object-cover rounded-md"
              />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 md:p-12 font-opensans md:mt-[-120px]">
              <div>
                <h2
                  class="md:text-[32px] text-[24px] mb-6 font-opensans font-[600] leading-normal font-opensans text-accentTextDark"
                >
                  Sustainable Livelihoods and Poverty Alleviation: Empowering
                  Communities for a Brighter Future (SDG 1, SDG 8)
                </h2>
                 <p class="font-opensans font-[400] text-[20px]">
                  We work with communities to develop sustainable livelihoods,
                  alleviate poverty, and build resilience. Our approach
                  includes:
                </p>
                <!-- more discussion -->
                <div class="description-container gap-6 mt-6">
                  <!-- discuss 1 -->
                   <div class="disscuss-item border border-orange-300 rounded-[15px] py-6 mb-4 p-6">
                    <button
                      class="disscuss-head text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans"
                      onclick="toggleAnswer(this)"
                    >
                      Skills Development & Economic Empowerment
                      <span class="icon text-accentTextDark">+</span>
                    </button>
                    <div class="faq-answer hidden mt-4 text-[16px] font-opensans">
                      We support our partners in equipping individuals and
                      communities with the skills, resources, and knowledge
                      needed to generate income and achieve financial security.
                      This includes training on entrepreneurship, financial
                      literacy, and vocational skills development and
                      facilitating access to micro-loans and market linkages.
                    </div>
                  </div>

                  <!-- discuss 2 -->
                   <div class="disscuss-item border border-orange-300 rounded-[15px] py-6 mb-4 p-6">
                    <button
                      class="disscuss-head text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans"
                      onclick="toggleAnswer(this)"
                    >
                      Addressing the Root Causes of Poverty
                      <span class="icon text-accentTextDark">+</span>
                    </button>
                    <div class="faq-answer hidden mt-4 text-[16px] font-opensans">
                      We understand poverty is a complex issue with multiple
                      contributing factors. To tackle this, we work on
                      addressing root causes such as lack of access to
                      education, healthcare, and essential resources. This
                      involves collaborating with local partners on
                      infrastructure development, food security initiatives, and
                      social protection programs.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- discussion section 5 -->
      <section class="bg-secondary py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <!-- Container flex -->
         <div class="flex items-center lg:flex-row flex-col gap-4 md:mt-[-40px] mt-0">
            <!-- Image Section -->
            <div class="lg:mt-20 lg:w-1/2 h-auto md:h-[38rem] text-xl">
              <img
                src="{{ asset('Images/climate.jpeg') }}"
                alt="climate change advocacy"
                class="w-full h-full object-cover rounded-md"
              />
            </div>
            <!-- Text Section -->
            <div class="lg:w-2/3 md:p-12 md:mt-[-90px]">
              <div>
                <h2
                  class="md:text-[32px] text-[24px] mb-6 font-opensans font-[600] leading-normal font-opensans text-accentTextDark"
                >
                  Climate Change and Environmental Sustainability: Protecting
                  Our Planet for Future Generations (SDG 13)
                </h2>
                 <p class="font-opensans font-[400] text-[20px]">
                  We are committed to addressing climate change and promoting
                  environmental sustainability to ensure a healthy planet for
                  future generations. Our efforts include:
                </p>
                <!-- more discussion -->
                 <div class="description-container gap-6 mt-6">
                  <!-- discuss 1 -->
                   <div class="disscuss-item border border-orange-300 rounded-[15px] py-6 mb-4 p-6">
                    <button
                      class="disscuss-head text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans"
                        onclick="toggleAnswer(this)"
                    >
                      Climate Change Advocacy
                      <span class="icon text-accentTextDark">+</span>
                    </button>
                    <div class="faq-answer hidden mt-4 text-[16px] font-opensans">
                      We support our partners in developing and implementing
                      strategies to raise awareness about climate change and its
                      impacts. This includes promoting renewable energy,
                      improving energy efficiency, and supporting sustainable
                      land use practices.
                    </div>
                  </div>

                  <!-- discuss 2 -->
                   <div class="disscuss-item border border-orange-300 rounded-[15px] py-6 mb-4 p-6">
                    <button
                      class="disscuss-head text-primary flex justify-between items-center w-full text-left text-lg font-medium font-opensans"
                      onclick="toggleAnswer(this)"
                    >
                      Environmental Education and Awareness
                      <span class="icon text-accentTextDark">+</span>
                    </button>
                    <div class="faq-answer hidden mt-4 text-[16px] font-opensans">
                      We support our partners in raising awareness about
                      environmental issues and the importance of sustainability
                      through educational programs, community workshops, and
                      media campaigns. We empower individuals and communities to
                      take action to protect the environment.
                    </div>
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
          <p class="md:text-lg text-[24px] font-[400] mb-4 font-medium font-opensans"> 
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
function toggleAnswer(button) {
  const answer = button.nextElementSibling;
  answer.classList.toggle('hidden');
  const icon = button.querySelector('.icon');
  icon.textContent = answer.classList.contains('hidden') ? '+' : '-';
}


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
