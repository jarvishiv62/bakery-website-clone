@extends('layouts.app')

@section('title', 'Home | ' . config('app.name'))

@section('content')

<!-- pudding-section.blade.php -->
<section class="pudding-section mt-5" id="puddingSection">
    <div class="pudding-card" id="puddingCarousel">
        <!-- Slide 1 -->
        <div class="pudding-slide active" data-bg="{{ asset('images/home/hero1.jpg') }}">
            <h2>This Month's Pudding: Cookies and Cream!</h2>
            <p>Our classic vanilla pudding is layered with bananas and Oreo cookies for a dessert that has all the flavors of cookies and cream. Available until August 24th!</p>
            <a href="{{ route('products') }}" class="order-btn">ORDER NOW</a>
        </div>
        
        <!-- Slide 2 -->
        <div class="pudding-slide" data-bg="{{ asset('images/home/hero2.jpg') }}">
            <h2>Special: Chocolate Fudge Delight!</h2>
            <p>Rich chocolate fudge pudding topped with whipped cream and sprinkles. Perfect for chocolate lovers and for all occasions. Limited time only!</p>
            <a href="{{ route('products') }}" class="order-btn">ENQUIRE NOW</a>
        </div>
        
        <!-- Slide 3 -->
        <div class="pudding-slide" data-bg="{{ asset('images/home/hero3.jpg') }}">
            <h2>Seasonal Berry <br>Pudding !</h2>
            <p>Fresh mixed berries with our signature vanilla custard. A refreshing summer treat that's both light and satisfying. Available until september 27th!</p>
            <a href="{{ route('products') }}" class="order-btn">LIMITED TIME ONLY</a>
        </div>
        
        <!-- Slide 4 -->
        <div class="pudding-slide" data-bg="https://images.unsplash.com/photo-1519869325930-281384150729">
            <h2>Caramel Crunch <br>Supreme !</h2>
            <p>Decadent caramel pudding with a crunchy toffee topping. A perfect balance of sweet and salty flavors and for all occasions.</p>
            <a href="{{ route('products') }}" class="order-btn">LIMITED TIME ONLY</a>
        </div>
        
        <!-- Slide 5 -->
        <div class="pudding-slide" data-bg="https://images.unsplash.com/photo-1549007994-cb92caebd54b">
            <h2>Classic Vanilla <br>Bean !</h2>
            <p>Our signature vanilla bean pudding made with real vanilla. Simple, creamy, and absolutely delicious delight for kids and adults alike.</p>
            <a href="{{ route('products') }}" class="order-btn">ORDER NOW</a>
        </div>
        
        <!-- Navigation -->
        <div class="slider-nav">
            <button class="nav-btn" id="prevBtn" aria-label="Previous slide">&#8592;</button>
            <div class="dots">
                <span class="dot active" data-slide="0" aria-label="Slide 1"></span>
                <span class="dot" data-slide="1" aria-label="Slide 2"></span>
                <span class="dot" data-slide="2" aria-label="Slide 3"></span>
                <span class="dot" data-slide="3" aria-label="Slide 4"></span>
                <span class="dot" data-slide="4" aria-label="Slide 5"></span>
            </div>
            <button class="nav-btn" id="nextBtn" aria-label="Next slide">&#8594;</button>
        </div>
    </div>
</section>

    @php
        $products = [
            [
                'name' => 'Vanilla Cake',
                'price' => '₹1,299',
                'image' => 'cake1.webp',
                'description' => 'Classic vanilla sponge layered with creamy frosting',
                'category' => 'Cakes'
            ],
            [
                'name' => 'Chocolate Fudge',
                'price' => '₹1,499',
                'image' => 'cake2.webp',
                'description' => 'Rich chocolate cake with decadent fudge icing',
                'category' => 'Cakes'
            ],
            [
                'name' => 'Pastry',
                'price' => '₹99',
                'image' => 'cake3.webp',
                'description' => 'Flaky, buttery pastries baked fresh',
                'category' => 'Pastries'
            ],
            [
                'name' => 'Assorted Cake',
                'price' => '₹299',
                'image' => 'cake4.webp',
                'description' => 'Delightful mix of chocolate chip and more',
                'category' => 'Cakes'
            ]
        ];
    @endphp

    <!-- Products Section -->
    <section class="home-section products-bg text-center py-5">
        <div class="container">
            <div class="section-title">
                <h2>Our Products</h2>
                <p>Handcrafted with love and the finest ingredients, each bite is a celebration of flavor and tradition.</p>
            </div>
            
            <div class="row g-4">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100 border-0 shadow-sm">
                        <div class="position-relative">
                            <img src="{{ asset('images/home/' . $product['image']) }}" class="card-img-top" alt="{{ $product['name'] }}">
                            <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2">{{ $product['category'] }}</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-0">{{ $product['name'] }}</h5>
                                <span class="text-dark fw-bold">{{ $product['price'] }}</span>
                            </div>
                            <p class="card-text text-muted small">{{ $product['description'] }}</p>
                        </div>
                        <div class="card-footer bg-transparent border-top-0 text-center">
                            <button class="btn btn-outline-primary w-100 add-to-cart" data-product-id="{{ $loop->index }}">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('products') }}" class="btn btn-view-all">
                    View All Products <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Gift for Any Occasion Section -->
    <section class="home-section gifts-bg text-center">
        <div class="container">
            <div class="section-title">
                <h2>Gift for Any Occasion</h2>
                <p>Perfect treats for every celebration, specially crafted to make your moments memorable.</p>
            </div>
            
            <div class="row g-4">
                <!-- Birthday -->
                <div class="col-md-6 col-lg-4">
                    <div class="gift-card h-100 position-relative overflow-hidden rounded-4 shadow-sm">
                        <img src="{{ asset('images/home/cake5.webp') }}" class="w-100 h-100 object-fit-cover" alt="Birthday Gifts">
                        <div class="gift-overlay d-flex flex-column justify-content-center p-4">
                            <h3 class="text-white fw-bold mb-2">Birthday Delights</h3>
                            <p class="text-dark-50 mb-3">Make their special day sweeter with our custom cakes.</p>
                            <a href="{{ route('products') }}?occasion=birthday" class="btn btn-light align-self-center">Explore →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Anniversary -->
                <div class="col-md-6 col-lg-4">
                    <div class="gift-card h-100 position-relative overflow-hidden rounded-4 shadow-sm">
                        <img src="{{ asset('images/home/ocake3.jpeg') }}" class="w-100 h-100 object-fit-cover" alt="Anniversary Gifts">
                        <div class="gift-overlay d-flex flex-column justify-content-center p-4">
                            <h3 class="text-white fw-bold mb-2">Anniversary Specials</h3>
                            <p class="text-dark-50 mb-3">Celebrate love with our romantic dessert collections.</p>
                            <a href="{{ route('products') }}?occasion=anniversary" class="btn btn-light align-self-center">Explore →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Wedding -->
                <div class="col-md-6 col-lg-4">
                    <div class="gift-card h-100 position-relative overflow-hidden rounded-4 shadow-sm">
                        <img src="{{ asset('images/home/ocake1.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Wedding Gifts">
                        <div class="gift-overlay d-flex flex-column justify-content-center p-4">
                            <h3 class="text-white fw-bold mb-2">Wedding Favors</h3>
                            <p class="text-dark-50 mb-3">Elegant treats for your special day.</p>
                            <a href="{{ route('products') }}?occasion=wedding" class="btn btn-light align-self-center">Explore →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Corporate -->
                <div class="col-md-6 col-lg-4">
                    <div class="gift-card h-100 position-relative overflow-hidden rounded-4 shadow-sm">
                        <img src="{{ asset('images/home/ocake2.webp') }}" class="w-100 h-100 object-fit-cover" alt="Corporate Gifts">
                        <div class="gift-overlay d-flex flex-column justify-content-center p-4">
                            <h3 class="text-white fw-bold mb-2">Corporate Gifts</h3>
                            <p class="text-dark-50 mb-3">Impress your clients with our premium gift boxes.</p>
                            <a href="{{ route('products') }}?occasion=corporate" class="btn btn-light align-self-center">Explore →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Holiday -->
                <div class="col-md-6 col-lg-4">
                    <div class="gift-card h-100 position-relative overflow-hidden rounded-4 shadow-sm">
                        <img src="{{ asset('images/home/cake.webp') }}" class="w-100 h-100 object-fit-cover" alt="Holiday Gifts">
                        <div class="gift-overlay d-flex flex-column justify-content-center p-4">
                            <h3 class="text-white fw-bold mb-2">Holiday Specials</h3>
                            <p class="text-dark-50 mb-3">Festive treats for every holiday season.</p>
                            <a href="{{ route('products') }}?occasion=holiday" class="btn btn-light align-self-center">Explore →</a>
                        </div>
                    </div>
                </div>
                <!-- surprise -->
                <div class="col-md-6 col-lg-4">
                    <div class="gift-card h-100 position-relative overflow-hidden rounded-4 shadow-sm">
                        <img src="{{ asset('images/home/ocake4.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Surprise Gifts">
                        <div class="gift-overlay d-flex flex-column justify-content-center p-4">
                            <h3 class="text-white fw-bold mb-2">Surprise Gift</h3>
                            <p class="text-dark-50 mb-3">Surprise your loved ones with our custom cakes.</p>
                            <a href="{{ route('products') }}?occasion=surprise" class="btn btn-light align-self-center">Explore →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Delivery and Pick Up Options -->
    <section class="home-section delivery-options-bg text-center py-5">
        <div class="container">
            <div class="section-title">
                <h2>Delivery & Pickup</h2>
                <p>We make it easy for you to get Wish Bakery's best, wherever you are</p>
            </div>
            
            <div class="row g-4">
                <!-- Delivery -->
                <div class="col-md-4">
                    <div class="option-card h-100 p-4 p-lg-5 text-center bg-white rounded-4 shadow-sm">
                        <div class="option-icon mb-4">
                            <i class="bi bi-truck fs-1 text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Home Delivery</h3>
                        <p class="text-muted mb-4">Get our delicious treats delivered straight to your doorstep. Fast, reliable, and always fresh.</p>
                        <a href="{{ route('products') }}" class="btn btn-outline-primary">Order Delivery</a>
                    </div>
                </div>
                
                <!-- Pick Up -->
                <div class="col-md-4">
                    <div class="option-card h-100 p-4 p-lg-5 text-center bg-white rounded-4 shadow-sm">
                        <div class="option-icon mb-4">
                            <i class="bi bi-shop fs-1 text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">In-Store Pickup</h3>
                        <p class="text-muted mb-4">Order online and pick up at your convenience. Skip the line and save time for loved ones.</p>
                        <a href="{{ route('products') }}" class="btn btn-outline-primary">Find a Location</a>
                    </div>
                </div>
                
                <!-- Catering -->
                <div class="col-md-4">
                    <div class="option-card h-100 p-4 p-lg-5 text-center bg-white rounded-4 shadow-sm">
                        <div class="option-icon mb-4">
                            <i class="bi bi-cup-hot fs-1 text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Event Catering</h3>
                        <p class="text-muted mb-4">Impress your guests with our catering services. Perfect for any event or celebration.</p>
                        <a href="{{ route('contact') }}?service=catering" class="btn btn-outline-primary">Inquire Now</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <p class="text-muted mb-3">Have questions about our services?</p>
                <a href="{{ route('contact') }}" class="btn btn-primary px-4">Contact Us</a>
            </div>
        </div>
    </section>

<!-- testimonials -->
@php
  $testimonials = [
    ['name'=>'Anjali Mehta','role'=>'Food Enthusiast','quote'=>'Best pastries in town, their custom cakes made my wedding day magical!','rating'=>5],
    ['name'=>'Rahul Singh','role'=>'Regular Customer','quote'=>'Amazing texture, taste and service. Highly recommended!','rating'=>4],
    ['name'=>'Priya Kapoor','role'=>'Event Planner','quote'=>'They nailed our corporate event dessert table. Impressed every guest.','rating'=>5]
  ];
@endphp

<section class="home-section testimonials text-center">
  <div class="container">
    <h2 class="mb-4">Rave Reviews from Our Loved Customers</h2>
    <div class="row justify-content-center g-4">
      @foreach($testimonials as $t)
        <div class="col-md-4">
          <div class="card t-card p-4 h-100">
            <div class="quote-icon mb-3">“</div>
            <p class="t-quote">“{{ $t['quote'] }}”</p>
            <div class="t-stars mb-2">
              @for($i=1;$i<=5;$i++)
                <i class="bi bi-star-fill text-warning @if($i > $t['rating']) text-secondary @endif"></i>
              @endfor
            </div>
            <h5 class="t-name">{{ $t['name'] }}</h5>
            <p class="t-role">{{ $t['role'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.pudding-slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const puddingSection = document.getElementById('puddingSection');
    let currentIndex = 0;
    let slideInterval;
    const SLIDE_INTERVAL = 5000; // 5 seconds

    // Initialize the slider
    function initSlider() {
        // Set initial slide
        showSlide(0);
        
        // Start auto-slide
        startAutoSlide();
        
        // Pause auto-slide on hover
        const slider = document.querySelector('.pudding-card');
        slider.addEventListener('mouseenter', pauseAutoSlide);
        slider.addEventListener('mouseleave', startAutoSlide);
        
        // Touch events for mobile swipe
        let touchStartX = 0;
        let touchEndX = 0;
        
        slider.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
            pauseAutoSlide();
        }, { passive: true });
        
        slider.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
            startAutoSlide();
        }, { passive: true });
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
            }
        }
    }
    
    // Show specific slide
    function showSlide(index) {
        // Update current index
        currentIndex = (index + slides.length) % slides.length;
        
        // Update slides
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === currentIndex);
        });
        
        // Update dots
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === currentIndex);
            dot.setAttribute('aria-selected', i === currentIndex);
        });
        
        // Update background image with fade effect
        if (slides[currentIndex].dataset.bg) {
            puddingSection.style.backgroundImage = `url('${slides[currentIndex].dataset.bg}')`;
        }
    }
    
    // Navigation functions
    function nextSlide() {
        showSlide(currentIndex + 1);
    }
    
    function prevSlide() {
        showSlide(currentIndex - 1);
    }
    
    // Auto-slide functionality
    function startAutoSlide() {
        clearInterval(slideInterval);
        slideInterval = setInterval(() => {
            nextSlide();
        }, SLIDE_INTERVAL);
    }
    
    function pauseAutoSlide() {
        clearInterval(slideInterval);
    }
    
    // Event listeners
    prevBtn.addEventListener('click', () => {
        prevSlide();
        pauseAutoSlide();
        startAutoSlide();
    });
    
    nextBtn.addEventListener('click', () => {
        nextSlide();
        pauseAutoSlide();
        startAutoSlide();
    });
    
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showSlide(index);
            pauseAutoSlide();
            startAutoSlide();
        });
        
        // Keyboard accessibility for dots
        dot.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                showSlide(index);
                pauseAutoSlide();
                startAutoSlide();
            }
        });
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
            pauseAutoSlide();
            startAutoSlide();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            pauseAutoSlide();
            startAutoSlide();
        }
    });
    
    // Initialize the slider
    initSlider();
});
</script>
@endpush
