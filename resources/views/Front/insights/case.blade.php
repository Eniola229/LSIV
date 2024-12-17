<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSIV - case studies</title>
    <link rel="stylesheet" href="../style.css" />
  </head>
   @vite('resources/css/app.css')
   @vite('resources/js/app.js')
  <body class="bg-accentTextLight">
     @include('components.header')
    <main>
      <!-- our work in action -->
      <section class=" py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <h1
            class="md:text-5xl lg:text-7xl text-3xl mb-6 font-playfair font-normal md:w-1/2 leading-normal"
          >
            A Collection Of Our <span class="text-primary"> Impact </span>
            In Action
          </h1>
            <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 my-8"
          >
            <!-- Card  -->
            @foreach($blogs as $blog)
             <a href="{{ url('client/blog', $blog->id) }}">
            <div
              class=" rounded-lg overflow-hidden w-full relative group flex flex-col items-start"
            >
              <img
                src="{{ asset($blog->cover_image) }}"
                alt="{{ $blog->title }}"
                class="w-full h-96 object-cover rounded-lg transition duration-500 group-hover:filter group-hover:grayscale group-hover:brightness-50"
              />
              <div
                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500"
              >
                <span
                  class="text-white font-bold text-xl transform translate-y-10 group-hover:translate-y-0 transition-all duration-500 ease-in-out"
                  >Read Case Study</span
                >
              </div>
              <div class="p-0">
               <h2 class="font-semibold text-[16px] md:text-[20px] font-[600] font-opensans mt-2">
                {{ $blog->title }}
                </h2>
              </div>
            </div>
          </a>
            @endforeach

          </div>
          </div>
      </section>  
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
