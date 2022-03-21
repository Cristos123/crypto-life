 <div class="col-xl-12">
     <div class="card sub-menu">
         <div class="card-body">
             <ul class="d-flex">
                 <li class="nav-item">
                     <a href="{{ route('admin.dashboard') }}" class="nav-link">
                         <i class="mdi mdi-bullseye"></i>
                         <span>Dashboard</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.category.index') }}" class="nav-link">
                         {{-- <i class="mdi mdi-heart"></i> --}}
                         <span>Category</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.asset.index') }}" class="nav-link">
                         {{-- <i class="mdi mdi-pentagon"></i> --}}
                         <span>Assets</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.duration.index') }}" class="nav-link">
                         <i class="mdi mdi-heart"></i>
                         <span>Duration</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.investment.index') }}" class="nav-link">
                         <i class="mdi mdi-diamond"></i>
                         <span>Investment</span>
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </div>