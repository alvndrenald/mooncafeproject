<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <div class="d-flex">
            <a class="navbar-brand" href="{{ route('home.index') }}">Moon Cafe</a>
            <div class="collapse navbar-collapse" id="navbarNavLightDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @admin
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.manage') }}">Manage product</a>
                        </li>
                    @endadmin
                </ul>
            </div>
        </div>
        @guest
            <div class="d-flex gap-3">
                <a href="{{ route('login.index') }}" class="text-decoration-none text-black">Login</a>
                <a href="{{ route('register.show') }}" class="text-decoration-none text-black">Register</a>
            </div>
        @endguest
        @auth
            <div class="d-flex gap-3">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('transaction') }}" class="dropdown-item">History</a></li>
                            <li><a href="{{ route('cart') }}" class="dropdown-item">Cart</a></li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <li><button class="dropdown-item" type="submit">Logout</button></li>
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
        @endauth
    </div>
</nav>
