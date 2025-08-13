@extends('layouts.app')

@section('title', 'Catering Services | ' . config('app.name'))

@section('content')

<!-- Hero Section-->
<div class="catering-hero d-flex align-items-center">
    <div class="container text-white text-center py-5">
        <h1 class="display-4 fw-bold mb-3">Catering for Every Occasion</h1>
        <p class="lead mb-4">From intimate gatherings to grand celebrations, we bring artisanal sweetness to your special moments</p>
        <div class="d-flex justify-content-center">    
            <a href="{{ route('catering') }}" class="btn btn-outline-dark">Explore Our Services</a>
        </div>    
    </div>
</div>
 
<!-- Category Grid -->
<section id="catering-categories">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Catering Services</h2>
            <p class="lead text-muted">Customized to make your event truly special</p>
            <div class="divider mx-auto my-3"></div>
        </div>
        <div class="row g-4">
    <div class="row">
            <!-- Birthday Cakes -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm hover-effect">
                    <div class="position-relative overflow-hidden">
                        <img src="{{ asset('images/catering/ocake4.jpg') }}" class="card-img-top" alt="Birthday Cakes">
                        <div class="card-img-overlay d-flex align-items-end p-0">
                            <div class="bg-dark bg-opacity-75 w-100 py-2 text-center">
                                <h3 class="text-white mb-0">Birthday Cakes</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text text-muted mb-4">Celebrate life's special moments with our custom-designed birthday cakes that are as unique as the guest of honor.</p>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#birthdayModal">
                            <i class="bi bi-cake2 me-2"></i>View Options
                        </button>
                    </div>
                </div>
            </div>

            <!-- Wedding Cakes -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm hover-effect">
                    <div class="position-relative overflow-hidden">
                        <img src="{{ asset('images/catering/ocake1.jpg') }}" class="card-img-top" alt="Wedding Cakes">
                        <div class="card-img-overlay d-flex align-items-end p-0">
                            <div class="bg-dark bg-opacity-75 w-100 py-2 text-center">
                                <h3 class="text-white mb-0">Wedding Cakes</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text text-muted mb-4">Create lasting memories with our exquisite wedding cakes, designed to reflect your love story in every delicious detail.</p>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#weddingModal">
                            <i class="bi bi-heart me-2"></i>View Options
                        </button>
                    </div>
                </div>
            </div>

            <!-- Special Events -->
            <div class="col-lg-4 col-md-6 mx-auto events">
                <div class="card h-100 border-0 shadow-sm hover-effect">
                    <div class="position-relative overflow-hidden">
                        <img src="{{ asset('images/catering/cake3.webp') }}" class="card-img-top" alt="Special Events">
                        <div class="card-img-overlay d-flex align-items-end p-0">
                            <div class="bg-dark bg-opacity-75 w-100 py-2 text-center">
                                <h3 class="text-white mb-0">Special Events</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text text-muted mb-4">Impress your guests with our premium dessert selections perfect for corporate events, anniversaries, and milestone celebrations.</p>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#eventsModal">
                            <i class="bi bi-stars me-2"></i>View Options
                        </button>
                    </div>
                </div>
            </div>
    </div>3
</div>

<!-- Birthday Cakes Modal -->
<div class="modal fade" id="birthdayModal" tabindex="-1" aria-labelledby="birthdayModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #e3f2fd;">
                <h2 class="modal-title" id="birthdayModalLabel">Birthday Cakes</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Product 1 -->
                    <div class="col-md-6 mb-4">
                        <div class="modal-product-card">
                            <img src="{{ asset('images/catering/modal1.jpg') }}" alt="Vanilla Overload" class="modal-product-img">
                            <div class="modal-product-body">
                                <h4 class="modal-product-title">Vanilla Dream</h4>
                                <p class="text-muted">Rich vanilla sponge cake with layers of vanilla buttercream and fresh berries.</p>
                                <p class="modal-product-price">From Rs 459</p>
                            </div>
                        </div>
                    </div>
                    <!-- Product 2 -->
                    <div class="col-md-6 mb-4">
                        <div class="modal-product-card">
                            <img src="{{ asset('images/catering/modal2.jpg') }}" alt="Vanilla Dream" class="modal-product-img">
                            <div class="modal-product-body">
                                <h4 class="modal-product-title">Chocolate Overload</h4>
                                <p class="text-muted">Classic chocolate layers with chocolate ganache.</p>
                                <p class="modal-product-price">From Rs 399</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="/order?category=birthday" class="btn btn-order w-100">Order Now</a>
            </div>
        </div>
    </div>
</div>

<!-- Wedding Cakes Modal -->
<div class="modal fade" id="weddingModal" tabindex="-1" aria-labelledby="weddingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #fce4ec;">
                <h2 class="modal-title" id="weddingModalLabel">Wedding Cakes</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Product 1 -->
                    <div class="col-md-6 mb-4">
                        <div class="modal-product-card">
                            <img src="{{ asset('images/catering/modal3.jpg') }}" alt="Royal Elegance" class="modal-product-img">
                            <div class="modal-product-body">
                                <h4 class="modal-product-title">Royal Elegance</h4>
                                <p class="text-muted">Five-tier vanilla and red velvet cake with buttercream and gold leaf accents.</p>
                                <p class="modal-product-price">From Rs 1999</p>
                            </div>
                        </div>
                    </div>
                    <!-- Product 2 -->
                    <div class="col-md-6 mb-4">
                        <div class="modal-product-card">
                            <img src="{{ asset('images/catering/modal4.jpg') }}" alt="Naked Beauty" class="modal-product-img">
                            <div class="modal-product-body">
                                <h4 class="modal-product-title">Naked Beauty</h4>
                                <p class="text-muted">Semi-naked cake with fresh flowers and seasonal fruits.</p>
                                <p class="modal-product-price">From Rs 1699</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="/order?category=wedding" class="btn btn-order w-100">Order Now</a>
            </div>
        </div>
    </div>
</div>

<!-- Special Events Modal -->
<div class="modal fade" id="eventsModal" tabindex="-1" aria-labelledby="eventsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #f3e5f5;">
                <h2 class="modal-title" id="eventsModalLabel">Special Events</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Product 1 -->
                    <div class="col-md-6 mb-4">
                        <div class="modal-product-card">
                            <img src="{{ asset('images/catering/modal5.webp') }}" alt="Cupcake Tower" class="modal-product-img">
                            <div class="modal-product-body">
                                <h4 class="modal-product-title">Cupcake Tower</h4>
                                <p class="text-muted">Assorted cupcakes in a beautiful display tower. Perfect for any event.</p>
                                <p class="modal-product-price">From Rs 499 each</p>
                            </div>
                        </div>
                    </div>
                    <!-- Product 2 -->
                    <div class="col-md-6 mb-4">
                        <div class="modal-product-card">
                            <img src="{{ asset('images/catering/modal6.jpg') }}" alt="Dessert Bar" class="modal-product-img">
                            <div class="modal-product-body">
                                <h4 class="modal-product-title">Dessert Bar</h4>
                                <p class="text-muted">Assortment of mini desserts including tarts, macarons, and cake pops.</p>
                                <p class="modal-product-price">From Rs 199 per person</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="/order?category=events" class="btn btn-order w-100">Order Now</a>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<section class="py-5 text-dark">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <i class="bi bi-gift display-4 mb-4"></i>
                <h2 class="display-5 fw-bold mb-4 ">Ready to Plan Your Event?</h2>
                <p class="lead mb-4">Our expert bakers are ready to create something extraordinary for your special occasion. Whether it's a custom cake design or a full dessert spread, we'll make it unforgettable.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-4">
                        <i class="bi bi-chat-dots me-2"></i>Get a Quote
                    </a>
                    <a href="tel:+1234567890" class="btn btn-lg px-4">
                        <i class="bi bi-telephone me-2"></i>Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const targetId = this.getAttribute('href');
                if (targetId !== '#' && document.querySelector(targetId)) {
                    e.preventDefault();
                    window.scrollTo({
                        top: document.querySelector(targetId).offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>
@endpush
@endsection