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
                    <i class="fa-solid fa-users"></i>
                     <p>
                         Users
                     </p>
                 </a>
                  </li>
                    <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="<?php echo e(route('users.allUsers')); ?>" class="nav-link">
                            <p>All Users</p>
                        </a>
                     </li>
               
                </ul>
                 <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="./auth/login" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Create User</p>
                        </a>
                     </li>
               
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="./auth/login" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Find User</p>
                        </a>
                    </li>

               </ul>

                <li class="nav-item">
                 <a href="#" class="nav-link">
                     <i class="fa-solid fa-business-time"></i>
                     <p>
                         Events

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
                    <li class="nav-item">
                        <a href="./examples/register.html" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Find event</p>
                        </a>
                    </li>
                </ul>
               </li>

                 <li class="nav-item">
                 <a href="#" class="nav-link">
                    <i class="fa-solid fa-gears"></i>
                     <p>
                         Profile

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
                        <a href="./auth/login" class="nav-link">
                            <i class="nav-icon bi bi-circle"></i>
                            <p>Log Out</p>
                        </a>
                    </li>
                </ul>
               </li>
                
            </ul>
       </nav>
       <br><br><br>
       <div class="sidebar-widgets">
          <?php echo $__env->make('admin.widgets.sideBarWidgets', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
       </div>

 </div>

</aside>
<?php /**PATH D:\work\web\PHP\laraHerd\Projects\massageRoom\resources\views/admin/admin_sideBar.blade.php ENDPATH**/ ?>