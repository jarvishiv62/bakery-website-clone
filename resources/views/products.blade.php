@extends('layouts.app')

@section('title', 'Our Products')

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


<!-- Products Section -->
<section class="products-section">
    <div class="container products-container">
        <div class="section-title">
            <h1>Our Fresh Bakes</h1>
            <p>Handcrafted with love and the finest ingredients, each bite is a celebration of flavor and tradition.</p>
        </div>

    <!-- Product Filters -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <select class="form-select">
                <option selected>All Categories</option>
                <option>Cakes</option>
                <option>Bread</option>
                <option>Pastries</option>
                <option>Cookies</option>
                <option>Desserts</option>
            </select>
        </div>
        <div class="col-md-3 mb-3">
            <select class="form-select">
                <option selected>Sort By</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
                <option>Newest</option>
                <option>Most Popular</option>
            </select>
        </div>
        <div class="col-md-6 text-md-end">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search products...">
                <button class="btn btn-outline-secondary" type="button">Search</button>
            </div>
        </div>
    </div>

    <!-- Products Grid -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @php
            $products = [
                ['name' => 'Chocolate Fudge Cake', 'price' => 24.99, 'category' => 'Cakes', 'image' => 'pro1.jpg'],
                ['name' => 'Sourdough Bread', 'price' => 5.99, 'category' => 'Bread', 'image' => 'pro2.webp'],
                ['name' => 'Croissant', 'price' => 3.50, 'category' => 'Pastries', 'image' => 'pro3.jpeg'],
                ['name' => 'Chocolate Chip Cookies', 'price' => 8.99, 'category' => 'Cookies', 'image' => 'pro4.jpg'],
                ['name' => 'Red Velvet Cupcake', 'price' => 3.25, 'category' => 'Desserts', 'image' => 'pro5.webp'],
                ['name' => 'Baguette', 'price' => 2.99, 'category' => 'Bread', 'image' => 'pro6.jpeg']
            ];
        @endphp

        @foreach($products as $product)
        <div class="col">
            <div class="card h-100 product-card shadow-sm">
                <div class="position-relative">
                    <img src="{{asset('images/' . $product['image'])}}" class="card-img-top" alt="{{ $product['name'] }}">
                    <span class="position-absolute top-0 end-0 bg-danger text-white small px-2 py-1 m-2 rounded">{{ $product['category'] }}</span>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $product['name'] }}</h5>
                    <p class="card-text text-muted mb-3">Delicious {{ strtolower($product['category']) }} made with premium ingredients and baked fresh daily.</p>
                    <div class="mt-auto d-flex justify-content-between align-items-center">
                        <span class="h5 mb-0 text-primary">${{ number_format($product['price'], 2) }}</span>
                        <button class="btn btn-primary ">
                            <i class="bi bi-cart-plus me-1"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="row mt-5">
        <div class="col-12">
            <nav aria-label="Product pagination" class="pagination-wrapper">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link page-prev" href="#" aria-label="Previous">
                            <i class="bi bi-chevron-left"></i>
                            <span>Previous</span>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link page-next" href="#" aria-label="Next">
                            <span>Next</span>
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- Features Section -->

<section class="features-section">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-5 fw-bold">Our Unique Features</h1>
            <p class="lead">Experience the art of baking with Wish-Bakery</p>
        </div>
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-box">
                    <i class="bi bi-truck"></i>
                    <h5>Free Shipping</h5>
                    <p>On orders over Rs500</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <i class="bi bi-arrow-clockwise"></i>
                    <h5>Fresh Daily</h5>
                    <p>Baked fresh every morning</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <i class="bi bi-shield-check"></i>
                    <h5>Quality Guaranteed</h5>
                    <p>100% satisfaction</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-content">
            <h2>Join Our Bakery Family</h2>
            <p>Subscribe to our newsletter and be the first to know about our fresh bakes, special offers, and exclusive deals!</p>
            <form class="newsletter-form">
                <input type="email" class="form-control" placeholder="Your email address" required>
                <button type="submit" class="btn-newsletter">
                    <i class="bi bi-envelope-fill me-2"></i> Subscribe Now
                </button>
            </form>
        </div>
    </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endpush

@push('scripts')
<script>
    // Add any product-related JavaScript here
    document.addEventListener('DOMContentLoaded', function() {
        // Example: Add to cart functionality
        document.querySelectorAll('.btn-add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const productName = this.closest('.product-card').querySelector('.card-title').textContent;
                alert(`Added ${productName} to cart!`);
            });
        });
    });
</script>
@endpush
 