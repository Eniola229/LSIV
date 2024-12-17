<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    LSIV - DASHBOARD
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>


<body class="g-sidenav-show  bg-gray-200">
<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
   @include('components.admin-sidenav')

    <!-- Main Content -->
    <div class="flex flex-col flex-1">
        <!-- Header -->
      @include('components.admin-header')

        <!-- Content Area -->
        <main class="flex-1 p-2 bg-gray-50">
          <div class="flex justify-between items-center px-4">
                <h4 class="mb-0 text-xl font-semibold">Case Study</h4>
                <a href="{{ url('/admin/add-blog') }}">
                    <button class="bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 px-4 rounded">
                        Add New Case Study
                    </button>
                </a>
            </div>

          <div class="w-full mt-4 mb-4 flex flex-wrap gap-2">
                  @foreach($blogs as $blog)
                      <a href="{{ route('admin.blog.view', $blog->id) }}" class="mt-4 no-underline w-full md:w-1/2 lg:w-1/3">
                          <div class="card shadow-lg w-full max-w-lg">
                              <!-- Card Header with Background Image -->
                              <div class="relative mt-[-1rem] mx-3 shadow-lg bg-transparent">
                                  <div class="rounded-lg overflow-hidden h-72 bg-cover bg-center" 
                                       style="background-image: url('{{ asset($blog->cover_image) }}');">
                                  </div>
                              </div>
                              
                              <!-- Card Body -->
                              <div class="p-4">
                                  <h6 class="mb-0 font-semibold text-gray-800">{{ $blog->title }}</h6>
                                  @php
                                      $lines = explode("\n", $blog->content);
                                      $limitedLines = array_slice($lines, 0, 10); 
                                  @endphp
                                  <!-- Display limited lines of content -->
                                  <!-- 
                                  @foreach($limitedLines as $line)
                                      <p class="text-gray-600">{{ $line }}</p>
                                  @endforeach 
                                  -->
                                  <hr class="my-2 border-gray-300">
                                  <div class="flex items-center text-gray-500 text-sm">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><g fill="none"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2m0 2a8 8 0 1 0 0 16a8 8 0 0 0 0-16m0 2a1 1 0 0 1 .993.883L13 7v4.586l2.707 2.707a1 1 0 0 1-1.32 1.497l-.094-.083l-3-3a1 1 0 0 1-.284-.576L11 12V7a1 1 0 0 1 1-1"/></g></svg>
                                      <p class="mb-0">Uploaded {{ $blog->created_at->format('F j, Y') }}</p>
                                  </div>
                              </div>
                          </div>
                      </a>
                  @endforeach
              </div>


        </main>
    </div>
</div>

</body>
</html>