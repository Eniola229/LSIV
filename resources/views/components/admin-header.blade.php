    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <!-- <i class="fa fa-bell cursor-pointer"></i> -->
              </a>
            </li>
            <li class="nav-item d-flex align-items-center">
                <form action="{{ route('admin-logout') }}" method="post">
                  <button class="d-sm-inline d-none btn btn-danger" style="background: darkorange;"><i class="fa fa-sign-out me-sm-1"></i> Logout</button>
                </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>