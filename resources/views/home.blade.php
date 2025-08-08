@extends('layouts.app')

@section('title', 'Home')

@section('content')

   <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true"></button>
    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2"></button>
  </div>

  <!-- Slides -->
  <div class="carousel-inner" style="top: 60px;">
    <div class="carousel-item active">
      <a href="{{ route('products') }}">
        <img src="{{ asset('images/hero1.jpg') }}" class="d-block w-100" alt="Vanilla Cake">
      </a>
    </div>
    <div class="carousel-item">
      <a href="{{ route('products') }}">
        <img src="{{ asset('images/hero2.jpg') }}" class="d-block w-100" alt="Chocolate Cake">
      </a>
    </div>
    <div class="carousel-item">
      <a href="{{ route('products') }}">
        <img src="{{ asset('images/hero3.jpg') }}" class="d-block w-100" alt="Strawberry Cake">
      </a>
    </div>
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
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
    <section class="home-section products-bg">
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
                            <img src="{{ asset('images/' . $product['image']) }}" class="card-img-top" alt="{{ $product['name'] }}">
                            <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2">{{ $product['category'] }}</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="card-title mb-0">{{ $product['name'] }}</h5>
                                <span class="text-primary fw-bold">{{ $product['price'] }}</span>
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
    <section class="home-section gifts-bg">
        <div class="container">
            <div class="section-title">
                <h2>Gift for Any Occasion</h2>
                <p>Perfect treats for every celebration, specially crafted to make your moments memorable.</p>
            </div>
            
            <div class="row g-4">
                <!-- Birthday -->
                <div class="col-md-6 col-lg-4">
                    <div class="gift-card h-100 position-relative overflow-hidden rounded-4 shadow-sm">
                        <img src="{{ asset('images/cake5.webp') }}" class="w-100 h-100 object-fit-cover" alt="Birthday Gifts">
                        <div class="gift-overlay d-flex flex-column justify-content-center p-4">
                            <h3 class="text-white fw-bold mb-2">Birthday Delights</h3>
                            <p class="text-white-50 mb-3">Make their special day sweeter with our custom cakes.</p>
                            <a href="{{ route('products') }}?occasion=birthday" class="btn btn-light align-self-start">Explore →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Anniversary -->
                <div class="col-md-6 col-lg-4">
                    <div class="gift-card h-100 position-relative overflow-hidden rounded-4 shadow-sm">
                        <img src="{{ asset('images/ocake3.jpeg') }}" class="w-100 h-100 object-fit-cover" alt="Anniversary Gifts">
                        <div class="gift-overlay d-flex flex-column justify-content-center p-4">
                            <h3 class="text-white fw-bold mb-2">Anniversary Specials</h3>
                            <p class="text-white-50 mb-3">Celebrate love with our romantic dessert collections.</p>
                            <a href="{{ route('products') }}?occasion=anniversary" class="btn btn-light align-self-start">Explore →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Wedding -->
                <div class="col-md-6 col-lg-4">
                    <div class="gift-card h-100 position-relative overflow-hidden rounded-4 shadow-sm">
                        <img src="{{ asset('images/ocake1.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Wedding Gifts">
                        <div class="gift-overlay d-flex flex-column justify-content-center p-4">
                            <h3 class="text-white fw-bold mb-2">Wedding Favors</h3>
                            <p class="text-white-50 mb-3">Elegant treats for your special day.</p>
                            <a href="{{ route('products') }}?occasion=wedding" class="btn btn-light align-self-start">Explore →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Corporate -->
                <div class="col-md-6 col-lg-4">
                    <div class="gift-card h-100 position-relative overflow-hidden rounded-4 shadow-sm">
                        <img src="{{ asset('images/ocake2.webp') }}" class="w-100 h-100 object-fit-cover" alt="Corporate Gifts">
                        <div class="gift-overlay d-flex flex-column justify-content-center p-4">
                            <h3 class="text-white fw-bold mb-2">Corporate Gifts</h3>
                            <p class="text-white-50 mb-3">Impress your clients with our premium gift boxes.</p>
                            <a href="{{ route('products') }}?occasion=corporate" class="btn btn-light align-self-start">Explore →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Holiday -->
                <div class="col-md-6 col-lg-4">
                    <div class="gift-card h-100 position-relative overflow-hidden rounded-4 shadow-sm">
                        <img src="{{ asset('images/cake.webp') }}" class="w-100 h-100 object-fit-cover" alt="Holiday Gifts">
                        <div class="gift-overlay d-flex flex-column justify-content-center p-4">
                            <h3 class="text-white fw-bold mb-2">Holiday Specials</h3>
                            <p class="text-white-50 mb-3">Festive treats for every holiday season.</p>
                            <a href="{{ route('products') }}?occasion=holiday" class="btn btn-light align-self-start">Explore →</a>
                        </div>
                    </div>
                </div>
                <!-- surprise -->
                <div class="col-md-6 col-lg-4">
                    <div class="gift-card h-100 position-relative overflow-hidden rounded-4 shadow-sm">
                        <img src="{{ asset('images/ocake4.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Surprise Gifts">
                        <div class="gift-overlay d-flex flex-column justify-content-center p-4">
                            <h3 class="text-white fw-bold mb-2">Surprise Gift</h3>
                            <p class="text-white-50 mb-3">Surprise your loved ones with our custom cakes.</p>
                            <a href="{{ route('products') }}?occasion=surprise" class="btn btn-light align-self-start">Explore →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Delivery and Pick Up Options -->
    <section class="home-section delivery-options-bg">
        <div class="container">
            <div class="section-title text-center">
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


    <section class="home-section our-promise-bg">
        <div class="container">
            <h2>Our Promise to You</h2>
            <div class="promise-grid">
                <div class="promise-item">
                    <i class="bi bi-award"></i>
                    <h3>Premium Quality</h3>
                    <p>Only the finest ingredients for the best bakery experience</p>
                </div>
                <div class="promise-item">
                    <i class="bi bi-heart"></i>
                    <h3>Made with Love</h3>
                    <p>Every treat is crafted with care and attention to detail</p>
                </div>
                <div class="promise-item">
                    <i class="bi bi-shield-check"></i>
                    <h3>Quick and Safe delivery</h3>
                    <p>100% satisfaction guaranteed with us.</p>
                </div>
            </div>
            <a href="{{ url('/about') }}" class="btn btn-outline-light">Learn More About Us</a>
        </div>
    </section>
@endsection
