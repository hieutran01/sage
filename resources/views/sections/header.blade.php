<nav class="navbar navbar-expand-lg navbar-light shadow-sm" id="mainNav">
    <div class="container px-5">
        <a class="navbar-brand fw-bold" href="{{ route('schedules.index') }}">LiveScore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            @php 
            /*
            wp_nav_menu([
                'theme_location'    => 'primary_navigation', 
                'menu_class'        => 'navbar-nav ms-auto me-4 my-3 my-lg-0', 
                'container' => 'ul',
                'container_class' => 'navbar-nav ms-auto me-4 my-3 my-lg-0',
                'walker' => new Custom_Walker_Nav_Menu(),
            ]);
            */
            @endphp
            <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('schedules.index') }}">Schedules</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('teams.index') }}">Teams</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('sclasses.index') }}">Sclasses</a></li>
            </ul>
            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                <span class="d-flex align-items-center">
                    <i class="bi-chat-text-fill me-2"></i>
                    <span class="small">Send Feedback</span>
                </span>
            </button>
        </div>
    </div>
</nav>
