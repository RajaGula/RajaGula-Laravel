<nav class="navbar center navbar-expand-sm navbar-light bg-light navbar-fixed" >
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item" >
                    <a class="navbar-brand mx-100" href="#">
                        <img src="{{asset('logo.png')}}" width="200" height="60" alt="">
                    </a>
                </li>
            </ul>
        <ul class="navbar-nav  mb-2 mb-lg-0" style="color:black; font-family: 'Montserrat'; font-weight:bold">
            <li class="nav-item">
                <a class="nav-link" href="/" >HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"href="{{ route('activity.index') }}">ACTIVITY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"href="{{ route('cart.index') }}" >CART</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"href="" >FAVORITE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"href="{{ route('account.index') }}">ACCOUNT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"href=""><i class="fa fa-user" aria-hidden="true" style="margin-right: 20px"></i></a>
            </li>
        </ul>
        </div>
    </div>
</nav>