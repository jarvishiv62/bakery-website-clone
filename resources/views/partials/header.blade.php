<header class="site-header">
    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Magnolia Bakery" class="img-fluid main-logo">
            </a>

            <div class="d-flex align-items-center order-lg-3">
                <a href="{{ route('cart') }}" class="nav-icon cart-icon position-relative">
                    <i class="fas fa-shopping-bag"></i>
                    <span class="cart-count">0</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto main-nav">
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('products') }}" id="shopDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-has-dropdown="true">
                            Products
                        </a>
                        <div class="dropdown-menu mega-menu" aria-labelledby="shopDropdown">
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
                                        <h5 class="mega-menu-title">Pies & More</h5>
                                        <ul class="mega-menu-list">
                                            <li><a href="#">Seasonal Pies</a></li>
                                            <li><a href="#">Puddings</a></li>
                                            <li><a href="#">Banana Pudding</a></li>
                                            <li><a href="#">Bundt Cakes</a></li>
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
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-center">
                                        <a href="{{ route('products') }}" class="btn btn-outline-dark">View All Products</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('products') }}" id="orderDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-has-dropdown="true">
                            Order Online
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="orderDropdown">
                            <li><a class="dropdown-item" href="#">Fast Delivery</a></li>
                            <li><a class="dropdown-item" href="#">Local Delivery</a></li>
                            <li><a class="dropdown-item" href="#">Pickup in Store</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="cateringDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-has-dropdown="true">
                            Catering
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="cateringDropdown">
                            <li><a class="dropdown-item" href="#">Birthday Cakes</a></li>
                            <li><a class="dropdown-item" href="#">Wedding Cakes</a></li>
                            <li><a class="dropdown-item" href="#">Special Events</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">Our Story</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="locationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Locations
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="locationsDropdown">
                            <li><a class="dropdown-item" href="#">New York</a></li>
                            <li><a class="dropdown-item" href="#">Los Angeles</a></li>
                            <li><a class="dropdown-item" href="#">Chicago</a></li>
                            <li><a class="dropdown-item" href="#">All Locations</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@push('scripts')
<script>
    // Handle clicks on dropdown parent links
    document.addEventListener('DOMContentLoaded', function() {
        // Handle clicks on dropdown toggles with links
        document.querySelectorAll('.dropdown-toggle[data-has-dropdown]').forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                // On mobile, allow default behavior (show dropdown)
                if (window.innerWidth <= 991.98) {
                    e.preventDefault();
                    const dropdown = new bootstrap.Dropdown(this);
                    dropdown.toggle();
                }
                // On desktop, follow the link after a small delay if not showing dropdown
                else if (!this.classList.contains('show')) {
                    setTimeout(() => {
                        if (!this.nextElementSibling.classList.contains('show')) {
                            window.location.href = this.href;
                        }
                    }, 100);
                }
            });
        });
        
        // Close dropdown when clicking on a dropdown item
        document.querySelectorAll('.dropdown-item').forEach(function(item) {
            item.addEventListener('click', function() {
                const dropdown = this.closest('.dropdown');
                if (dropdown) {
                    const toggle = dropdown.querySelector('.dropdown-toggle');
                    if (toggle) {
                        const bsDropdown = bootstrap.Dropdown.getInstance(toggle);
                        if (bsDropdown) {
                            bsDropdown.hide();
                        }
                    }
                }
            });
        });
        // Initialize Bootstrap dropdowns
        const dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
        const dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl, {
                autoClose: true,
                popperConfig: (defaultBsPopperConfig) => ({
                    ...defaultBsPopperConfig,
                    strategy: 'fixed'
                })
            });
        });

        // Handle hover for desktop
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
                            // Add a small delay to prevent accidental closing when moving to dropdown
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
                dropdown.removeEventListener('mouseenter', handleMouseEnter);
                dropdown.removeEventListener('mouseleave', handleMouseLeave);
                
                dropdown.addEventListener('mouseenter', handleMouseEnter);
                dropdown.addEventListener('mouseleave', handleMouseLeave);
            });

            // Handle dropdown menu hover
            const dropdownMenus = document.querySelectorAll('.dropdown-menu');
            dropdownMenus.forEach(menu => {
                menu.addEventListener('mouseleave', function() {
                    if (window.innerWidth > 991.98) {
                        const parentDropdown = this.closest('.dropdown');
                        if (parentDropdown) {
                            const toggle = parentDropdown.querySelector('[data-bs-toggle="dropdown"]');
                            if (toggle) {
                                const dropdown = bootstrap.Dropdown.getInstance(toggle);
                                if (dropdown) {
                                    dropdown.hide();
                                }
                            }
                        }
                    }
                });
            });
        }

        // Handle scroll effect
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
    });
</script>
@endpush
