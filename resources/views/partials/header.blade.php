<header class="site-header">
    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Brand Logo -->
            <a class="navbar-brand" href="{{ url('/') }}" aria-label="Home">
                <img src="{{ asset('images/home/logo.png') }}" alt="{{ config('app.name') }}" class="img-fluid main-logo">
            </a>

            <!-- Mobile Menu Toggle & Cart -->
            <div class="d-flex align-items-center order-lg-3">
                <a href="{{ route('cart') }}" class="nav-icon cart-icon position-relative" aria-label="Shopping Cart">
                    <i class="fas fa-shopping-bag" aria-hidden="true"></i>
                    <span class="cart-count">0</span>
                    <span class="visually-hidden">items in cart</span>
                </a>
                <button class="navbar-toggler" type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#mainNav" 
                        aria-controls="mainNav" 
                        aria-expanded="false" 
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <!-- Main Navigation Menu -->
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto main-nav">
                    <!-- Products Dropdown -->
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" 
                           href="{{ route('products') }}" 
                           id="productsDropdown" 
                           role="button" 
                           data-bs-toggle="dropdown" 
                           aria-expanded="false" 
                           aria-haspopup="true" 
                           data-has-dropdown="true">
                           <h4>Products</h4>
                        </a>
                        <div class="dropdown-menu mega-menu" aria-labelledby="shopDropdown" data-bs-auto-close="outside">
                            <div class="container">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <h5 class="mega-menu-title">Cupcakes</h5>
                                        <ul class="mega-menu-list">
                                            <li><a href="#">Classic Cupcakes</a></li>
                                            <li><a href="#">Seasonal Cupcakes</a></li>
                                            <li><a href="#">Mini Cupcakes</a></li>
                                            <li><a href="#">Cupcake Cakes</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3">
                                        <h5 class="mega-menu-title">Cakes</h5>
                                        <ul class="mega-menu-list">
                                            <li><a href="#">Layer Cakes</a></li>
                                            <li><a href="#">Cheesecakes</a></li>
                                            <li><a href="#">Celebration Cakes</a></li>
                                            <li><a href="#">Custom Cakes</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3">
                                        <h5 class="mega-menu-title">Cookies & Bars</h5>
                                        <ul class="mega-menu-list">
                                            <li><a href="#">Cookies</a></li>
                                            <li><a href="#">Brownies</a></li>
                                            <li><a href="#">Bars & Bites</a></li>
                                            <li><a href="#">Gift Boxes</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3">
                                        <h5 class="mega-menu-title">Order Online</h5>
                                        <ul class="mega-menu-list">
                                            <li><a href="#">Fast Delivery</a></li>
                                            <li><a href="#">Local Delivery</a></li>
                                            <li><a href="#">Pickup in Store</a></li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-center">
                                        <a href="{{ route('products') }}" class="btn btn-outline-dark">
                                            View All Products
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Catering Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" 
                           href="{{ route('catering') }}" 
                           id="cateringDropdown" 
                           role="button" 
                           data-bs-toggle="dropdown" 
                           aria-expanded="false" 
                           aria-haspopup="true" 
                           data-has-dropdown="true">
                            <h4>Catering</h4>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="cateringDropdown">
                            <li><a class="dropdown-item" href="{{ route('catering') }}#birthday">Birthday Cakes</a></li>
                            <li><a class="dropdown-item" href="{{ route('catering') }}#wedding">Wedding Cakes</a></li>
                            <li><a class="dropdown-item" href="{{ route('catering') }}#events">Special Events</a></li>
                        </ul>
                    </li>
                    <!-- Account Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" 
                           href="{{ route('account') }}" 
                           id="accountDropdown" 
                           role="button" 
                           data-bs-toggle="dropdown" 
                           aria-expanded="false" 
                           aria-haspopup="true"
                           data-has-dropdown="true">
                            <h4>Account</h4>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                            @auth
                                <li><a class="dropdown-item" href="{{ route('account') }}">My Account</a></li>
                                <li><a class="dropdown-item" href="#">Order History</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            @else
                                <li><a class="dropdown-item" href="#">Login</a></li>
                                <li><a class="dropdown-item" href="#">Register</a></li>
                            @endauth
                        </ul>
                    </li>

                    <!-- Contact Dropdown -->
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" 
                           href="{{ route('contact') }}" 
                           id="contactDropdown" 
                           role="button" 
                           data-bs-toggle="dropdown" 
                           aria-expanded="false" 
                           aria-haspopup="true" 
                           data-has-dropdown="true">
                           <h4>Contact</h4>
                        </a>
                        <div class="dropdown-menu mega-menu" aria-labelledby="shopDropdown" data-bs-auto-close="outside">
                            <div class="container">
                                <div class="row g-6">
                                    <div class="col-lg-4">
                                        <h5 class="mega-menu-title">Talk To Us</h5>
                                        <ul class="mega-menu-list">
                                            <li><a href="{{ route('contact') }}" class="dropdown-item">Contact Us</a></li>
                                            <li><a href="#" class="dropdown-item">Newsletter</a></li>
                                            <li><a href="#" class="dropdown-item">FAQ</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5 class="mega-menu-title">Our Locations</h5>
                                        <ul class="mega-menu-list">
                                            <li><a href="#" class="dropdown-item">Varanasi</a></li>
                                            <li><a href="#" class="dropdown-item">Bhadohi</a></li>
                                            <li><a href="#" class="dropdown-item">Mirzapur</a></li>
                                            <li><a href="#" class="dropdown-item">Ghazipur</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </li>

                    <!-- About Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">
                            <h4>Our Story</h4>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Bootstrap dropdowns
        const dropdownElements = document.querySelectorAll('.dropdown-toggle');
        const dropdowns = [];
        
        // Handle dropdown click behavior
        function handleDropdownClick(e) {
            if (window.innerWidth <= 991.98) { // Mobile behavior
                e.preventDefault();
                const dropdown = bootstrap.Dropdown.getInstance(this);
                if (dropdown) {
                    dropdown.toggle();
                }
            } else { // Desktop behavior
                const dropdownMenu = this.nextElementSibling;
                if (!dropdownMenu || !dropdownMenu.classList.contains('show')) {
                    window.location.href = this.href;
                }
            }
        }
        
        // Initialize all dropdowns
        dropdownElements.forEach(function(dropdownToggle) {
            const dropdown = new bootstrap.Dropdown(dropdownToggle, {
                autoClose: true,
                popperConfig: (defaultConfig) => ({
                    ...defaultConfig,
                    strategy: 'fixed'
                })
            });
            dropdowns.push(dropdown);
            
            // Add click handler for dropdown toggles with links
            if (dropdownToggle.hasAttribute('data-has-dropdown')) {
                dropdownToggle.addEventListener('click', handleDropdownClick);
            }
        });
        
        // Close dropdown when clicking on a dropdown item
        document.addEventListener('click', function(e) {
            if (e.target.closest('.dropdown-item')) {
                const dropdown = e.target.closest('.dropdown');
                if (dropdown) {
                    const toggle = dropdown.querySelector('.dropdown-toggle');
                    if (toggle) {
                        const bsDropdown = bootstrap.Dropdown.getInstance(toggle);
                        if (bsDropdown) {
                            bsDropdown.hide();
                        }
                    }
                }
            }
        });
        
        // Handle dropdown hover for desktop
        function setupDropdownHover() {
            const dropdowns = document.querySelectorAll('.dropdown');
            
            function handleMouseEnter() {
                if (window.innerWidth > 991.98) {
                    const toggle = this.querySelector('[data-bs-toggle="dropdown"]');
                    if (toggle) {
                        const dropdown = bootstrap.Dropdown.getInstance(toggle);
                        if (dropdown) {
                            dropdown.show();
                        }
                    }
                }
            }
            
            function handleMouseLeave() {
                if (window.innerWidth > 991.98) {
                    const toggle = this.querySelector('[data-bs-toggle="dropdown"]');
                    if (toggle) {
                        const dropdown = bootstrap.Dropdown.getInstance(toggle);
                        if (dropdown) {
                            // Add a small delay to prevent accidental closing
                            setTimeout(() => {
                                const isHovered = this.matches(':hover') || 
                                                this.querySelector('.dropdown-menu:hover') !== null;
                                if (!isHovered) {
                                    dropdown.hide();
                                }
                            }, 100);
                        }
                    }
                }
            }
            
            // Add event listeners
            dropdowns.forEach(dropdown => {
                // Remove existing listeners to prevent duplicates
                dropdown.removeEventListener('mouseenter', handleMouseEnter);
                dropdown.removeEventListener('mouseleave', handleMouseLeave);
                
                // Add new listeners
                dropdown.addEventListener('mouseenter', handleMouseEnter);
                dropdown.addEventListener('mouseleave', handleMouseLeave);
            });
        }
        
        // Handle scroll effect for header
        function handleScroll() {
            const header = document.querySelector('.site-header');
            if (!header) return;
            
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
        
        // Initialize everything
        setupDropdownHover();
        window.addEventListener('scroll', handleScroll);
        handleScroll(); // Initialize scroll state

        // Re-initialize on window resize
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                setupDropdownHover();
            }, 250);
        });
        
        // Cleanup function for when the component is removed
        return () => {
            dropdowns.forEach(dropdown => dropdown.dispose());
            window.removeEventListener('scroll', handleScroll);
            window.removeEventListener('resize', setupDropdownHover);
            clearTimeout(resizeTimer);
        };
    });
</script>
@endpush
