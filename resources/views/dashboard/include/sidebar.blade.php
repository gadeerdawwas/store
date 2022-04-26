<nav class="sidenav navbar navbar-vertical  fixed-right  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <h2>logo</h2>
                {{-- <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="..."> --}}
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.html">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">لوحة تحكم</span>
                        </a>
                    </li>
                    @if(Auth::guard('store')->check())
                    Hi {{Auth::guard('store')->user()->email}}
                    @elseif(Auth::guard('web')->check())
                        Hiiiii {{Auth::guard('web')->user()->email}}
                    @endif

                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->

                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.users.index') }}">
                            <i class="ni ni-single-02"></i>
                            <span class="nav-link-text">    المشاهير   </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.stores.index') }}">
                            <i class="ni ni-bag-17"></i>
                            <span class="nav-link-text">   أصحاب المتاجر   </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.banks.index') }}">
                            <i class="ni ni-briefcase-24"></i>
                            <span class="nav-link-text">    البنوك   </span>
                        </a>
                    </li>




                </ul>

                
            </div>

            <ul class="navbar-nav mb-md-3 pt-8">


              <li class="nav-item">
                  <a class="nav-link"  style="position: absolute;bottom: 3px;"  href="{{ route('logout') }}"
                      onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      <i class="ni ni-chart-pie-35" style="padding-left: 10px;"></i>
                      <span class="nav-link-text"> تسجيل الخروج </span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>


                  </form>
              </li>
          </ul>
        </div>
    </div>
</nav>
