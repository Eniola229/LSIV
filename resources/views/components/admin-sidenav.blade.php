<!--   <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="">
        <img src="{{ asset('Images/LSIV-Logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{ Route::currentRouteName() == 'admin-dashboard' ? 'active' : '' }}" href="{{ url('admin/dashboard') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Route::currentRouteName() == 'admin-blog' ? 'active' : '' }}" href="{{ url('/admin/blog') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Case Study</span>
          </a>
        </li>
<!--         <li class="nav-item">
          <a class="nav-link text-white " href="../pages/billing.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Contacts</span>
          </a>
        </li> --
        @if(Auth::user()->role == "Super-Admin")
        <li class="nav-item">
          <a class="nav-link text-white {{ Route::currentRouteName() == 'admin-register' ? 'active' : '' }}" href="{{ url('/admin/register') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">Admins</span>
          </a>
        </li>
        @endif
      </ul>
    </div>
  </aside> -->

<div class="flex flex-col w-64 bg-gray-900 text-white sticky top-0 h-screen">
    <div class="flex items-center justify-center h-16 border-b border-gray-700">
        <span class="text-xl font-semibold">
            <img class="h-9 w-auto" src="{{ asset('Images/LSIV-Logo.png') }}" alt="LSIV LOGO" />
        </span>
    </div>
    <div class="flex flex-col mt-4">
        <!-- Navigation Links -->
        <a class="flex items-center px-4 py-2 text-gray-300 gap-2 hover:bg-gray-700 {{ Route::currentRouteName() == 'admin-dashboard' ? 'bg-gray-700' : '' }}" href="{{ url('admin/dashboard') }}"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M13 9V3h8v6zM3 13V3h8v10zm10 8V11h8v10zM3 21v-6h8v6z"/></svg>
            Dashboard
        </a>
        <a class="flex items-center px-4 py-2 text-gray-300 gap-2 hover:bg-gray-700 {{ Route::currentRouteName() == 'admin-blog' ? 'bg-gray-700' : '' }}" href="{{ url('/admin/blog') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M27.193 23.74v-3.02h13.511v3.116m-6.755-5.76v2.644m-4.11 3.304h8.031l-3.78 2.927v6.797h-2.74m-4.157-5.193h13.511"/><rect width="19.593" height="28.186" x="23.907" y="12.458" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" rx="1.05"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M30.288 7.417a1.2 1.2 0 0 0-.478.098L14.03 14.22a1.225 1.225 0 0 0-.648 1.609l10.047 23.689a1.22 1.22 0 0 0 .768.687a1.22 1.22 0 0 1-.29-.785V13.683a1.22 1.22 0 0 1 1.225-1.225h8.105l-1.82-4.292a1.22 1.22 0 0 0-1.129-.749"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M17.847 7.356a1.22 1.22 0 0 0-.866.359L4.86 19.848a1.223 1.223 0 0 0 0 1.733l18.182 18.198a1.22 1.22 0 0 0 .966.35a1.22 1.22 0 0 1-.58-.61L13.382 15.826a1.22 1.22 0 0 1 .649-1.606l7.851-3.335l-3.169-3.171a1.22 1.22 0 0 0-.865-.36"/></svg>
            Case Study
        </a>
        @if(Auth::user()->role == "Super-Admin")
        <a class="flex items-center px-4 py-2 text-gray-300 gap-2 hover:bg-gray-700 {{ Route::currentRouteName() == 'admin-register' ? 'bg-gray-700' : '' }}" href="{{ url('/admin/register') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 10a4 4 0 1 0 0-8a4 4 0 0 0 0 8m-6.5 3a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5M21 10.5a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0m-9 .5a5 5 0 0 1 5 5v6H7v-6a5 5 0 0 1 5-5m-7 5c0-.693.1-1.362.288-1.994l-.17.014A3.5 3.5 0 0 0 2 17.5V22h3zm17 6v-4.5a3.5 3.5 0 0 0-3.288-3.494c.187.632.288 1.301.288 1.994v6z"/></svg>
            Team
        </a>
        @endif

        <!-- Teams Section -->
        <div class="px-4 mt-6">
            <h3 class="text-xs font-semibold text-gray-400 uppercase">Personal</h3>
            <div class="flex items-center mt-2 text-gray-300 gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M8 7a4 4 0 1 1 8 0a4 4 0 0 1-8 0m0 6a5 5 0 0 0-5 5a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3a5 5 0 0 0-5-5z" clip-rule="evenodd"/></svg>
                Profile
            </div>
            <div class="flex items-center mt-2 text-gray-300 gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 3.095A10 10 0 0 0 12.6 3C7.298 3 3 7.03 3 12s4.298 9 9.6 9q.714 0 1.4-.095M21 12H11m10 0c0-.7-1.994-2.008-2.5-2.5M21 12c0 .7-1.994 2.008-2.5 2.5" color="currentColor"/></svg>
                <form action="{{ route('admin-logout') }}" method="post">
                    @csrf
                    <button class="text-danger"> Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
