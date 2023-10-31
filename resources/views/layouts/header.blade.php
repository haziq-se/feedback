<div class="border_bottom nav-scroll">
    <div class="container-fluid pt-2">
        <header class="top-wrapper ">

            <h1 class="page-title">
                <i class="fa fa-bars min_display"></i>
                @yield('header')
            </h1>

            <div class="select-drop">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle for_bg_color px-0" type="button" id="triggerId"
                        data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="account-user-avatar">
                            <img src="{{ asset('images/user.svg') }}" alt="user-image">
                        </span>
                        <span class="account-user-name">
                            {{ Auth::user()->name }}
                        </span>
                    </button>
                    <ul class="dropdown-menu py-2 menuBorder" aria-labelledby="triggerId">
                        <!-- <li><a class="dropdown-item"
                                href="#">
                                <img class="imgFilter px-2" src="{{ asset('images/profIcon.svg')}}" alt="">
                                {{ __('messages.header.my_profile') }}</a>
                        </li> -->
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="dropdown-item px-4"
                                    type="submit">
                                    <img class="imgFilter px-1" src="{{ asset('images/logIcon.svg')}}" alt="">
                                    {{ __('Logout') }}</button>
                            </form>
                        </li>
                    </ul>
        </header>
    </div>
</div>
