<header class="bg-body-tertiary">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('app.home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" width="80" height="80"
                         class="d-inline-block align-items-center">
                    GoodVibesConsultancy
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('app.home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('app.about_us') }}">AboutUs</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('app.contact_us') }}">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('app.country') }}">Country</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('app.services') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('app.blog') }}">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('app.teams') }}">Successful Story</a></li>
                    </ul>
                </div>
                <div class="d-flex"><a href="{{ route('app.apply_now') }}" class="btn btn-primary">Apply Now</a></div>
            </div>
        </nav>
    </div>
</header>
