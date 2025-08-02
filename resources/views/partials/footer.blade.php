@php
    // Set default values for all variables
    $businessName = config('app.name', 'Wish-Bakery');
    $currentYear = date('Y');
    
    $socialLinks = [
        ['icon' => 'facebook', 'url' => 'https://facebook.com', 'name' => 'Facebook'],
        ['icon' => 'instagram', 'url' => 'https://instagram.com', 'name' => 'Instagram'],
        ['icon' => 'twitter', 'url' => 'https://twitter.com', 'name' => 'Twitter']
    ];
    
    $contactInfo = [
        'address' => 'Maldahiya , Varanasi',
        'phone' => '+91 9999999999',
        'email' => 'info@wish-bakery.com',
        'hours' => 'Mon-Sat: 8:00 AM - 8:00 PM'
    ];
    
    // Define routes (these should match your web.php routes)
    $routes = [
        'home' => route('home'),
        'products' => route('products'),
        'about' => route('about'),
        'contact' => route('contact')
    ];
@endphp

<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Business Info -->
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="pe-lg-4">
                    <h5 class="mb-4">{{ $businessName }}</h5>
                    <p class="mb-4">Delicious baked goods made with love and the finest ingredients.</p>
                    <div class="social-links">
                        @foreach($socialLinks as $social)
                            <a href="{{ $social['url'] }}" aria-label="{{ $social['name'] }}" class="me-2">
                                <i class="bi bi-{{ $social['icon'] }}"></i>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h5 class="mb-4">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ $routes['home'] }}" class="text-decoration-none">Home</a></li>
                    <li class="mb-2"><a href="{{ $routes['products'] }}" class="text-decoration-none">Our Menu</a></li>
                    <li class="mb-2"><a href="{{ $routes['about'] }}" class="text-decoration-none">About Us</a></li>
                    <li><a href="{{ $routes['contact'] }}" class="text-decoration-none">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4 col-md-6">
                <h5 class="mb-4">Contact Us</h5>
                <ul class="list-unstyled">
                    <li class="mb-3 d-flex align-items-start">
                        <i class="bi bi-geo-alt mt-1 me-2"></i>
                        <span>{{ $contactInfo['address'] }}</span>
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-telephone me-2"></i>
                        <a href="tel:{{ str_replace(' ', '', $contactInfo['phone']) }}" class="text-decoration-none">{{ $contactInfo['phone'] }}</a>
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-envelope me-2"></i>
                        <a href="mailto:{{ $contactInfo['email'] }}" class="text-decoration-none">{{ $contactInfo['email'] }}</a>
                    </li>
                    <li class="d-flex align-items-start">
                        <i class="bi bi-clock mt-1 me-2"></i>
                        <span>{{ $contactInfo['hours'] }}</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Divider -->
        <hr class="my-4" style="border-color: rgba(255,255,255,0.1);">
        
        <!-- Footer Bottom -->
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <p class="mb-0">&copy; {{ $currentYear }} {{ $businessName }}. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="d-flex justify-content-md-end justify-content-center">
                    <a href="#" class="text-decoration-none me-3">Privacy Policy</a>
                    <a href="#" class="text-decoration-none">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>
