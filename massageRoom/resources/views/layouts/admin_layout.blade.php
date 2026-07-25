<!doctype html>
<html lang="en">
   <head>
      @include('admin.admin_header')
   </head>

    
    <body class="sidebar-expand-lg sidebar-open bg-body-tertiary">
      <div class="app-wrapper">
 {{--  @if(auth()->user()?->hasAdminUI())
   @endif --}}
      @include('admin.admin_nav')
      @include('admin.admin_sideBar')
 
       <main class="app-main">
         @yield('dashboard')
       </main>
       
      @include('admin.admin_footer')
      
    </div>
</body>
</html>
