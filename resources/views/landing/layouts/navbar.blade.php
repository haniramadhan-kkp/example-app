<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
    <a href="index.html" class="navbar-brand d-flex align-items-center">
        <h2 class="m-0 text-primary"><img class="img-fluid me-2" src="img/icon-1.png" alt=""
                                          style="width: 45px;">CryptoCoin</h2>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-4 py-lg-0">
            <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
            <a href="{{route('about')}}" class="nav-item nav-link">About</a>
            <a href="{{route('service')}}" class="nav-item nav-link">Service</a>
            <a href="{{route('roadmap')}}" class="nav-item nav-link">Roadmap</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <a href="{{route('feature')}}" class="dropdown-item">Feature</a>
                    <a href="{{route('token')}}" class="dropdown-item">Token Sale</a>
                    <a href="{{route('faq')}}" class="dropdown-item">FAQs</a>
                </div>
            </div>
            <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            @auth
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{auth()->user()->name}}</a>
                    <div class="dropdown-menu shadow-sm m-0">
                        <a href="{{route('admin.home')}}" class="dropdown-item">My Dashboard</a>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item" href="#"><i
                                    class="bi bi-box-arrow-in-right"></i> Logout</button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
            @endauth
        </div>
    </div>
</nav>
<!-- Navbar End -->
