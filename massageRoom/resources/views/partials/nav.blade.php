    <nav class="navbar navbar-dark bg-dark p-3 position-relative">
        <div class="d-flex gap-1  justify-between">
               @if (request()->routeIs('home'))
            <a class="btn btn-info btn-outline-light btn-lg"
               href="{{ route('calendar.index') }}">
                Make an appointment
            </a>
        @else
            <a class="btn btn-info btn-outline-light btn-lg"
               href="{{ route('home') }}">
                Home Page
            </a>
        @endif

            <h3 class="navbar-brand mx-auto position-absolute start-50 translate-middle-x" >@yield('nav_title','Main Page')</h3>
        </div>

        <div class="d-flex gap-1 nav-btn">
            <a class="btn btn-success" href="https://www.google.com/maps/dir/?api=1&destination=Incubatorul+de+Afaceri+Singerei" target="_blank">Location</a>
            {{-- <a class="btn btn-primary" href="calendar/index">Calendar</a>  Эту кнопку добавить, когда будут  Login,Reviews и.т.д--}}
            <a class="btn btn-primary" href="{{ route('admin.layout')}}">Admin</a>
            <button class="btn btn-warning">Reviews</button>
            <button class="btn btn-danger ">Login</button>
            <button class="btn btn-outline-light btn-no-hover">Lang</button>
        </div>
    </nav>
