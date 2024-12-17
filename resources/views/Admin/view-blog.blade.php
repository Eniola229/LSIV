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

      <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>



<body class="bg-gray-200">
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        @include('components.admin-sidenav')

        <!-- Main Content -->
        <div class="flex flex-col flex-1">
            <!-- Header -->
            @include('components.admin-header')

            <!-- End Navbar -->
            <div class="flex justify-between items-center px-4 py-2">
                <h4 class="text-lg font-semibold mb-0">Case Study</h4>
                <div class="flex space-x-2">
                    <a href="{{ route('admin.blog.edit', $blog->id) }}">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Edit</button>
                    </a>
                    <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST" onsubmit="return confirmDeletion();" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md">Delete</button>
                    </form>
                </div>
            </div>

            <!-- Case Study Content -->
            <div class="container mx-auto my-4 px-4">
                <div class="flex flex-col items-center mb-4">
                    <img src="{{ $blog->cover_image }}" class="w-full h-60 object-cover rounded-lg" alt="Cover Image">
                </div>
                <div class="border p-4 rounded-lg shadow-md bg-white">
                    <div class="prose max-w-full">
                    <a href="{{ url('client/blog', $blog->id) }}" target="_blank">
                     <button class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-md">Click here to view</button>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDeletion() {
            return confirm('Are you sure you want to delete this case study?');
        }
    </script>
</body>

</html>