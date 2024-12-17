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

<body class="g-sidenav-show bg-gray-200">
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        @include('components.admin-sidenav')

        <!-- Main Content -->
        <div class="flex flex-col flex-1">
            <!-- Header -->
            @include('components.admin-header')

            <div class="mb-4">
                <div class="mb-4">
                    @if (session('success'))
                        <div class="bg-green-500 border border-green-700 text-white px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="bg-white shadow-lg rounded-lg p-4">
                        <div class="pb-0">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h6 class="text-lg font-semibold">Admins</h6>
                                    <p class="text-sm text-gray-500 mb-0">
                                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                                        <span class="font-semibold ml-1">{{ $adminsCount }} </span> Admin
                                    </p>
                                </div>
                                <div class="text-right">
                                    <a href="{{ url('add/admin') }}">
                                        <button class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600">
                                            Add Admin
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="px-0 pb-2 mt-4">
                            <div class="overflow-x-auto">
                                <table class="min-w-full bg-white">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                                            <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Email</th>
                                            <th class="px-4 py-2 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Role</th>
                                            <th class="px-4 py-2 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($admins as $admin)
                                            <tr>
                                                <td class="px-4 py-2">{{ $admin->name }}</td>
                                                <td class="px-4 py-2">{{ $admin->email }}</td>
                                                <td class="px-4 py-2 text-center">{{ $admin->role }}</td>
                                                <td class="px-4 py-2 flex justify-center gap-2">
                                                    <!-- View Button -->
                                                    <a href="{{ url('/admin/edit', $admin->id) }}">
                                                        <button class="bg-orange-500 text-white px-2 py-1 rounded-md hover:bg-orange-600">
                                                            View
                                                        </button>
                                                    </a>
                                                    <!-- Delete Button -->
                                             <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this admin?');">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded-md hover:bg-red-600">
                                                      Delete
                                                  </button>
                                              </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>

</html>