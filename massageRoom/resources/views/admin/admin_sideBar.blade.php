<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="./index.html" class="brand-link">
          <span class="brand-text fw-light">Admin Panel</span>
        </a>
    </div>
         
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul
             class="nav sidebar-menu flex-column"
             data-lte-toggle="treeview"
             role="navigation"
             aria-label="Main navigation"
             data-accordion="false"
             id="navigation">
                 

                <li class="nav-item">
                 <a href="#" class="nav-link">
                     <i class="nav-icon bi bi-box-arrow-in-right"></i>
                     <p>
                         Users
                         <i class="nav-arrow bi bi-chevron-right"></i>
                     </p>
                 </a>
                    <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{route('users.allUsers')}}" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>All Users</p>
                        </a>
                     </li>
               
                    </ul>
                    <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="{{route('users.create')}}" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Create User</p>
                        </a>
                     </li>
               
                    </ul>
               </li>
                <li class="nav-item">
                 <a href="#" class="nav-link">
                     <i class="nav-icon bi bi-box-arrow-in-right"></i>
                     <p>
                         Events
                         <i class="nav-arrow bi bi-chevron-right"></i>
                     </p>
                 </a>
                 <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="./auth/login" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Past events</p>
                        </a>
                     </li>
                    <li class="nav-item">
                        <a href="./examples/register.html" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Current events</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./examples/register.html" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Upcoming events</p>
                        </a>
                    </li>
                       <li class="nav-item">
                        <a href="./examples/register.html" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Create event</p>
                        </a>
                    </li>
                </ul>
               </li>

                 <li class="nav-item">
                 <a href="#" class="nav-link">
                     <i class="nav-icon bi bi-box-arrow-in-right"></i>
                     <p>
                         Profile
                         <i class="nav-arrow bi bi-chevron-right"></i>
                     </p>
                 </a>
                 <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="./auth/login" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Edit Profile</p>
                        </a>
                     </li>
                    <li class="nav-item">
                       <form method="POST" action="{{ route('logout')}}">
                           @csrf
                           <button type="submit" class="nav-link border-0 bg-transparent w-100 text-start">
                               <i class="nav-icon bi bi-circle"></i>
                               <p class="d-inline">Log Out</p> 
                           </button>
                       </form>
                    </li>
                </ul>
               </li>
                
            </ul>
       </nav>
 </div>

</aside>