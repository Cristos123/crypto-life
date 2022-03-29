 <div class="header dashboard">
     <div class="container-fluid">
         <div class="row">
             <div class="col-xl-12">
                 <nav class="navbar navbar-expand-lg navbar-light px-0 justify-content-between">
                     <a class="navbar-brand" href="dashboard.html"><img src="{{ asset('assets/images/logo.png') }}"
                             alt=""></a>

                     <div class="header-right d-flex my-2 align-items-center">

                         <div class="dashboard_log">
                             <div class="profile_log dropdown">
                                 <div class="user" data-toggle="dropdown">
                                     <span class="thumb"><i class="mdi mdi-account"></i></span>
                                     <span class="arrow"><i class="la la-angle-down"></i></span>
                                 </div>

                                 <div class="dropdown-menu dropdown-menu-right">
                                     <div class="user-email">
                                         <div class="user">
                                             <span class="thumb"><i class="mdi mdi-account"></i></span>
                                             <div class="user-info">
                                                 <h6>{{ auth()->user()->fullname }}</h6>
                                                 <span>{{ auth()->user()->email }}</span>
                                             </div>
                                         </div>
                                     </div>

                                     <div class="user-balance">
                                         <div class="available">
                                             <p>Available Balance</p>
                                             <span>{{ toMoney(auth()->user()->balance()) }} USD</span>
                                         </div>
                                     </div>
                                     <a href="{{ route('account-settings') }}" class="dropdown-item">
                                         <i class="mdi mdi-account"></i> Account
                                     </a>
                                     <a href="{{ route('logout') }}"
                                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                         class="dropdown-item logout">
                                         <i class="mdi mdi-logout"></i> Logout
                                     </a>

                                     <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                         @csrf
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </nav>
             </div>
         </div>
     </div>
 </div>
