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

<body class="g-sidenav-show">
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        @include('components.admin-sidenav')

        <!-- Main Content -->
        <div class="flex flex-col flex-1">
            <!-- Header -->
            @include('components.admin-header')

            <div class="flex justify-center mb-4">
                <div class="w-full max-w-2xl">
                    <div class="rounded-lg">
                        <div class="container mx-auto mt-5 px-4">
                            <div class="flex justify-center">
                                <div class="w-full md:w-2/3">
                                    <div class="border rounded-lg bg-white shadow-lg">
                                        <div class="bg-orange-600 text-white px-4 py-2 rounded-t-lg">
                                            <h4 class="mb-0">Add Admin</h4>
                                        </div>

                                        @if ($errors->any())
                                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mt-4" role="alert">
                                                <strong class="font-bold">Error!</strong>
                                                <ul class="ml-4 list-disc list-inside">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <div class="p-6">
                                            <form action="{{ route('admin.postRegistration') }}" method="POST">
                                                @csrf
                                                <!-- Name Field -->
                                                <div class="mb-4">
                                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                                    <input type="text" id="name" name="name" placeholder="Enter admin name" required class="mt-1 p-2 w-full border rounded focus:ring-2 focus:ring-orange-500">
                                                </div>

                                                <!-- Email Field -->
                                                <div class="mb-4">
                                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input type="email" id="email" name="email" placeholder="Enter admin email" required class="mt-1 p-2 w-full border rounded focus:ring-2 focus:ring-orange-500">
                                                </div>

                                                <!-- Role Field -->
                                                <div class="mb-4">
                                                    <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                                                    <select id="role" name="role" required class="mt-1 p-2 w-full border rounded focus:ring-2 focus:ring-orange-500">
                                                        <option value="">Select Role</option>
                                                        <option value="Super-Admin">Super-Admin</option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="Moderator">Moderator</option>
                                                    </select>
                                                </div>

                                                <!-- Password Field -->
                                                <div class="mb-4">
                                                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                                    <input type="password" id="password" name="password" placeholder="Enter admin password" required class="mt-1 p-2 w-full border rounded focus:ring-2 focus:ring-orange-500">
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="mt-6">
                                                    <button type="submit" class="w-full bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500">
                                                        Add Admin
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>