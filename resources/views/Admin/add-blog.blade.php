<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta name="csrf-token" content="{{ csrf_token() }}">

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
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
   @include('components.admin-sidenav')

    <!-- Main Content -->
    <div class="flex flex-col flex-1">
        <!-- Header -->
      @include('components.admin-header')
        

        <div class="container mt-1">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <!-- Card container -->
                    <div class="card p-4">
                        <h2 class="card-title font-bold">Create Case Study</h2>
                        
                 @if (session('success'))
                      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                          <strong class="font-bold">Success!</strong> {{ session('success') }}
                          <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3 focus:outline-none" onclick="this.parentElement.remove()">
                              <span class="text-green-700">&times;</span>
                          </button>
                      </div>
                  @endif

                  @if ($errors->any())
                      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                          <strong class="font-bold">Validation Error!</strong>
                          <ul class="ml-4 list-disc list-inside">
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                          <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3 focus:outline-none" onclick="this.parentElement.remove()">
                              <span class="text-red-700">&times;</span>
                          </button>
                      </div>
                  @endif

                        
                <form action="{{ route('posts.create') }}" method="POST" enctype="multipart/form-data" class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-2 m-2">
                    @csrf

                    <!-- Title Field -->
                    <div class="mb-4">
                        <label for="title" class="block font-semibold text-gray-800">Title</label>
                        <input type="text" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" id="title" name="title" placeholder="Enter title" required>
                    </div>

                    <!-- Client Name Field -->
                    <div class="mb-4">
                        <label for="sub_title" class="block font-semibold text-gray-800">Client Name</label>
                        <input type="text" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" id="sub_title" name="sub_title" placeholder="Enter client name" required>
                    </div>

                    <!-- Project Timeline Field -->
                    <div class="mb-4">
                        <label for="project_timeline" class="block font-semibold text-gray-800">Project Timeline</label>
                        <input type="text" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" id="project_timeline" name="project_timeline" placeholder="Enter project timeline" required>
                    </div>

                    <!-- Our Service Field -->
                    <div class="mb-4">
                        <label for="our_service" class="block font-semibold text-gray-800">Our Service</label>
                        <input type="text" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" id="our_service" name="our_service" placeholder="Enter service provided" required>
                    </div>

                    <!-- Cover Image Upload -->
                    <div class="mb-4">
                        <label for="cover_image" class="block font-semibold text-gray-800">Cover Image</label>
                        <input type="file" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" id="cover_image" name="cover_image" accept="image/*" required>
                    </div>

                    <!-- Content Field -->
                    <div class="mb-4">
                        <label for="content" class="block font-semibold text-gray-800">Content</label>
                        <textarea class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" id="content" name="content" rows="8" placeholder="Write your content here..." required></textarea>
                    </div>

                    <div class="text-right mt-4">
                        <button type="submit" class="px-6 py-3 bg-orange-600 text-white text-lg font-semibold rounded-md hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                            Add Case Study
                        </button>
                    </div>
                </form>

                    </div>
                </div>
            </div>
        </div>

<script>
    console.log(document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

CKEDITOR.replace('content', {
    filebrowserUploadUrl: "{{ route('upload.image') }}",  // URL for image upload
    filebrowserUploadMethod: 'form',  // Using the 'form' method
    on: {
        fileUploadRequest: function(evt) {
            console.log('Uploading image...');

            var file = evt.data.file;
            var formData = new FormData();
            formData.append('upload', file);
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

            // Perform the AJAX request to upload the image
            $.ajax({
                url: "{{ route('upload.image') }}",  // URL to handle the image upload
                type: 'POST',
                data: formData,
                contentType: false,  // Don't set content-type manually
                processData: false,  // Don't process the data automatically
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Include CSRF token in the request header
                },
                success: function(response) {
                    if (response.uploaded) {
                        evt.data.url = response.url;
                        console.log('Upload successful!');
                    } else {
                        console.error('Error uploading image: ' + response.error.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error uploading image:', error);
                }
            });

            // Cancel the default file upload behavior, as we are handling the upload via AJAX
            evt.cancel();
        },
        fileUploadResponse: function(evt) {
            console.log('Upload complete.');
        },
        fileUploadError: function(evt) {
            console.error('Error uploading image.');
        }
    }
});

</script>

    </div>
</body>
</html>
