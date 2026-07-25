<!doctype html>
<html lang="en">
   <head>
      @include('admin.admin_header')
   </head>

    
    <body class="sidebar-expand-lg sidebar-open bg-body-tertiary">
      <div class="app-wrapper">
 
       <main class="app-main">
         @yield('Users')
       </main>
      
    </div>
    @yield('scripts')
</body>
</html>


