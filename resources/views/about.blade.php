@extends('layouts.app')

@section('title', 'About Us | ' . config('app.name'))

@section('content')

<!-- Hero Intro Section -->
<section class="about-hero position-relative d-flex align-items-center">
    <div class="container position-relative z-index-1">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <img src="/images/catering/logohead.webp" class="img-fluid" alt="Catering Hero">
                <h1 class="display-3 fw-bold text-white mb-4" data-aos="fade-up">Baked with Love,<br>Shared with Joy</h1>
                <p class="lead text-white mb-4" data-aos="fade-up" data-aos-delay="100">Every bite tells a story of passion, tradition, and the finest ingredients</p>
                <div class="d-flex justify-content-center gap-3" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('products') }}" class="btn btn-light btn-lg px-4">Our Creations</a>
                    <a href="#our-story" class="btn btn-outline-light btn-lg px-4">Our Story</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Story Timeline Section -->
<section id="our-story" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Our Sweet Journey</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">From a small family bakery to your favorite neighborhood spot</p>
            </div>
        </div>
        
        <div class="timeline">
            <!-- Timeline Item 1 -->
            <div class="timeline-container left" data-aos="fade-right">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="fas fa-birthday-cake"></i>
                    </div>
                    <h3>2021</h3>
                    <h4>Humble Beginnings</h4>
                    <p>Started as a small home bakery with just one oven and a dream to bake the best pastries in town.</p>
                </div>
            </div>
            
            <!-- Timeline Item 2 -->
            <div class="timeline-container right" data-aos="fade-left">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <h3>2022</h3>
                    <h4>First Store Opens</h4>
                    <p>Opened our first physical location in downtown, becoming a local favorite for fresh bread and pastries.</p>
                </div>
            </div>
            
            <!-- Timeline Item 3 -->
            <div class="timeline-container left" data-aos="fade-right">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>2023</h3>
                    <h4>First Award</h4>
                    <p>Won "Best Bakery in the City" for our signature sourdough bread and croissants.</p>
                </div>
            </div>
            
            <!-- Timeline Item 4 -->
            <div class="timeline-container right" data-aos="fade-left">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>2024</h3>
                    <h4>Expanded Menu</h4>
                    <p>Introduced gluten-free and vegan options, making our treats accessible to everyone.</p>
                </div>
            </div>
            
            <!-- Timeline Item 5 -->
            <div class="timeline-container left" data-aos="fade-right">
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>2025</h3>
                    <h4>Community Love</h4>
                    <p>Served our one millionth customer and expanded to three locations across the city.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Meet the Bakers Section -->
<section id="meet-bakers" class="py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Meet Our Bakers</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">The talented hands behind every delicious creation</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Baker 1 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="baker-card">
                    <div class="baker-img">
                        <img src="{{ asset('images/aboutimg/person1.jpg') }}" alt="Head Baker" class="img-fluid">
                    </div>
                    <div class="baker-info">
                        <h4>Sarfaraj </h4>
                        <p class="text-muted">Head Baker</p>
                        <div class="baker-social">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="baker-hover">
                        <h5>Fun Fact</h5>
                        <p>Sarfaraj can decorate a cake blindfolded in under 5 minutes!</p>
                        <div class="baker-specialty">
                            <i class="fas fa-star"></i>
                            <span>Specialty: Artisan Breads</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Baker 2 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="baker-card">
                    <div class="baker-img">
                        <img src="{{ asset('images/aboutimg/person2.jpg') }}" alt="Pastry Chef" class="img-fluid">
                    </div>
                    <div class="baker-info">
                        <h4>Misti dubey</h4>
                        <p class="text-muted">Pastry Chef</p>
                        <div class="baker-social">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="baker-hover">
                        <h5>Fun Fact</h5>
                        <p>Misti once made a 7-tier wedding cake in just one day!</p>
                        <div class="baker-specialty">
                            <i class="fas fa-star"></i>
                            <span>Specialty: French Pastries</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Baker 3 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="baker-card">
                    <div class="baker-img">
                        <img src="{{ asset('images/aboutimg/person3.jpg') }}" alt="Cake Artist" class="img-fluid">
                    </div>
                    <div class="baker-info">
                        <h4>Mahesh kumar </h4>
                        <p class="text-muted">Cake Artist</p>
                        <div class="baker-social">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="baker-hover">
                        <h5>Fun Fact</h5>
                        <p>Mahesh can sculpt anything out of fondant - even your pet's portrait!</p>
                        <div class="baker-specialty">
                            <i class="fas fa-star"></i>
                            <span>Specialty: Custom Cakes</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Baker 4 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="baker-card">
                    <div class="baker-img">
                        <img src="{{ asset('images/aboutimg/person4.jpg') }}" alt="Bread Master" class="img-fluid">
                    </div>
                    <div class="baker-info">
                        <h4>Jaya kumari</h4>
                        <p class="text-muted">Bread Master</p>
                        <div class="baker-social">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="baker-hover">
                        <h5>Fun Fact</h5>
                        <p>Jaya wakes up at 3 AM every day to start the sourdough!</p>
                        <div class="baker-specialty">
                            <i class="fas fa-star"></i>
                            <span>Specialty: Sourdough & Artisan Breads</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Awards & Recognition Section -->
<section id="awards" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Awards & Recognition</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Celebrating excellence in baking and customer satisfaction</p>
            </div>
        </div>
        
        <div class="awards-slider">
            <div id="awardsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Award 1 -->
                    <div class="carousel-item active">
                        <div class="row g-4 justify-content-center">
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="award-card">
                                    <div class="award-icon">
                                        <i class="fas fa-trophy"></i>
                                    </div>
                                    <h4>Best Bakery 2023</h4>
                                    <p class="text-muted">City Food Awards</p>
                                    <p>Recognized for our exceptional pastries and outstanding customer service.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="award-card">
                                    <div class="award-icon">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <h4>Chef's Choice</h4>
                                    <p class="text-muted">International Baking Association</p>
                                    <p>Awarded for innovation in traditional baking techniques.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="award-card">
                                    <div class="award-icon">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4>5-Star Rating</h4>
                                    <p class="text-muted">Food & Hospitality Magazine</p>
                                    <p>Consistently rated 5 stars for quality and taste by food critics.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Award 2 -->
                    <div class="carousel-item">
                        <div class="row g-4 justify-content-center">
                            <div class="col-md-4">
                                <div class="award-card">
                                    <div class="award-icon">
                                        <i class="fas fa-medal"></i>
                                    </div>
                                    <h4>Best Sourdough</h4>
                                    <p class="text-muted">Artisan Bread Awards</p>
                                    <p>First place for our signature sourdough recipe and technique.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="award-card">
                                    <div class="award-icon">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                    <h4>Customer Favorite</h4>
                                    <p class="text-muted">Local's Choice Awards</p>
                                    <p>Voted #1 bakery by our wonderful community for 5 years running.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="award-card">
                                    <div class="award-icon">
                                        <i class="fas fa-leaf"></i>
                                    </div>
                                    <h4>Sustainable Business</h4>
                                    <p class="text-muted">Green Eats Initiative</p>
                                    <p>Recognized for our commitment to sustainable and ethical sourcing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#awardsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#awardsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                
                <!-- Indicators -->
                <div class="carousel-indicators position-relative mt-4">
                    <button type="button" data-bs-target="#awardsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#awardsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Signature Creations Section -->
<section id="signature-creations" class="py-5 position-relative overflow-hidden">
    <div class="parallax-bg"></div>
    <div class="container position-relative">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="display-5 fw-bold mb-3 text-white" data-aos="fade-up">Signature Creations</h2>
                <p class="lead text-white-50" data-aos="fade-up" data-aos-delay="100">Our most beloved and iconic baked goods</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Creation 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="creation-card">
                    <div class="creation-img">
                        <img src="{{ asset('images/aboutimg/spec1.jpg') }}" alt="Artisan Sourdough" class="img-fluid">
                        <div class="creation-overlay">
                            <div class="creation-content">
                                <h4>Artisan Sourdough</h4>
                                <p>Our 48-hour fermented sourdough with perfect crust and airy crumb.</p>
                                <a href="#" class="btn btn-outline-light btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="creation-info">
                        <h4>Artisan Sourdough</h4>
                        <div class="creation-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(128)</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Creation 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="creation-card">
                    <div class="creation-img">
                        <img src="{{ asset('images/aboutimg/spec2.jpg') }}" alt="Butter Croissant" class="img-fluid">
                        <div class="creation-overlay">
                            <div class="creation-content">
                                <h4>Butter Croissant</h4>
                                <p>Flaky, buttery layers that melt in your mouth. Baked fresh daily.</p>
                                <a href="#" class="btn btn-outline-light btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="creation-info">
                        <h4>Butter Croissant</h4>
                        <div class="creation-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(245)</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Creation 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="creation-card">
                    <div class="creation-img">
                        <img src="{{ asset('images/aboutimg/spec3.jpg') }}" alt="Chocolate Decadence" class="img-fluid">
                        <div class="creation-overlay">
                            <div class="creation-content">
                                <h4>Chocolate Decadence</h4>
                                <p>Rich, moist chocolate cake with layers of ganache and fresh berries.</p>
                                <a href="#" class="btn btn-outline-light btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="creation-info">
                        <h4>Chocolate Decadence</h4>
                        <div class="creation-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(312)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

                
                <!-- Indicators -->
                <div class="carousel-indicators position-relative mt-4">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
            </div>
        </div>
        
        <!-- Trust Badges -->
        <div class="trust-badges mt-5 pt-4 text-center">
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="trust-badge">
                        <i class="fas fa-award"></i>
                        <h5>5-Star Rated</h5>
                        <p>By 500+ Customers</p>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="trust-badge">
                        <i class="fas fa-heart"></i>
                        <h5>100% Natural</h5>
                        <p>Ingredients</p>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="trust-badge">
                        <i class="fas fa-truck"></i>
                        <h5>Free Delivery</h5>
                        <p>On Orders Over $50</p>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="trust-badge">
                        <i class="fas fa-medal"></i>
                        <h5>5+ Years</h5>
                        <p>Of Baking Excellence</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fun Facts Counter Section -->
<section id="fun-facts" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="section-subtitle">Did You Know?</span>
                <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">Fun Facts About Us</h2>
                <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100">Some interesting numbers that make us proud</p>
            </div>
        </div>
        
        <div class="row g-4 text-center">
            <!-- Fact 1 -->
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="fas fa-bread-slice"></i>
                    </div>
                    <div class="fact-number counter" data-count="5000">0</div>
                    <h4 class="fact-title">Loaves Baked</h4>
                    <p class="fact-desc">Fresh bread made with love every month</p>
                </div>
            </div>
            
            <!-- Fact 2 -->
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="fas fa-smile"></i>
                    </div>
                    <div class="fact-number counter" data-count="2500">0</div>
                    <h4 class="fact-title">Happy Customers</h4>
                    <p class="fact-desc">And counting! Your smiles keep us going</p>
                </div>
            </div>
            
            <!-- Fact 3 -->
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="fas fa-coffee"></i>
                    </div>
                    <div class="fact-number counter" data-count="10000">0</div>
                    <h4 class="fact-title">Cups of Coffee</h4>
                    <p class="fact-desc">Brewed to perfection for our bakers</p>
                </div>
            </div>
            
            <!-- Fact 4 -->
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
                <div class="fact-item">
                    <div class="fact-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="fact-number counter" data-count="100">0</div>
                    <h4 class="fact-title">Different Recipes</h4>
                    <p class="fact-desc">From traditional to innovative creations</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-4">Visit Us Today</a>
        </div>
    </div>
</section>

<!-- Instagram Feed Section -->
<section id="instagram-feed" class="py-5">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <span class="section-subtitle">Follow Us</span>
                <h2 class="display-5 fw-bold mb-3" data-aos="fade-up">@Wish-Bakery</h2>
                <p class="lead text-muted mb-4" data-aos="fade-up" data-aos-delay="100">Follow us on Instagram for daily treats and behind-the-scenes!</p>
                <a href="https://www.instagram.com/" target="_blank" class="btn btn-instagram mb-5" data-aos="fade-up" data-aos-delay="200">
                    <i class="fab fa-instagram me-2"></i> Follow Us
                </a>
            </div>
        </div>
        
        <div class="row g-0 instagram-grid">
            <!-- Instagram Post 1 -->
            <div class="col-6 col-md-4 col-lg-2 instagram-item" data-aos="fade-up">
                <div class="instagram-post">
                    <img src="{{ asset('images/aboutimg/insta1.jpg') }}" alt="Instagram Post" class="img-fluid">
                    <div class="instagram-overlay">
                        <div class="instagram-likes">
                            <i class="fas fa-heart me-1"></i> 1.2k
                        </div>
                        <div class="instagram-comments">
                            <i class="fas fa-comment me-1"></i> 89
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Instagram Post 2 -->
            <div class="col-6 col-md-4 col-lg-2 instagram-item" data-aos="fade-up" data-aos-delay="100">
                <div class="instagram-post">
                    <img src="{{ asset('images/aboutimg/insta2.jpg') }}" alt="Instagram Post" class="img-fluid">
                    <div class="instagram-overlay">
                        <div class="instagram-likes">
                            <i class="fas fa-heart me-1"></i> 956
                        </div>
                        <div class="instagram-comments">
                            <i class="fas fa-comment me-1"></i> 42
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Instagram Post 3 -->
            <div class="col-6 col-md-4 col-lg-2 instagram-item" data-aos="fade-up" data-aos-delay="150">
                <div class="instagram-post">
                    <img src="{{ asset('images/aboutimg/insta3.jpg') }}" alt="Instagram Post" class="img-fluid">
                    <div class="instagram-overlay">
                        <div class="instagram-likes">
                            <i class="fas fa-heart me-1"></i> 2.1k
                        </div>
                        <div class="instagram-comments">
                            <i class="fas fa-comment me-1"></i> 134
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Instagram Post 4 -->
            <div class="col-6 col-md-4 col-lg-2 instagram-item" data-aos="fade-up" data-aos-delay="200">
                <div class="instagram-post">
                    <img src="{{ asset('images/aboutimg/insta4.jpg') }}" alt="Instagram Post" class="img-fluid">
                    <div class="instagram-overlay">
                        <div class="instagram-likes">
                            <i class="fas fa-heart me-1"></i> 1.5k
                        </div>
                        <div class="instagram-comments">
                            <i class="fas fa-comment me-1"></i> 97
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Instagram Post 5 -->
            <div class="col-6 col-md-4 col-lg-2 instagram-item" data-aos="fade-up" data-aos-delay="250">
                <div class="instagram-post">
                    <img src="{{ asset('images/aboutimg/insta5.jpg') }}" alt="Instagram Post" class="img-fluid">
                    <div class="instagram-overlay">
                        <div class="instagram-likes">
                            <i class="fas fa-heart me-1"></i> 1.8k
                        </div>
                        <div class="instagram-comments">
                            <i class="fas fa-comment me-1"></i> 112
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Instagram Post 6 -->
            <div class="col-6 col-md-4 col-lg-2 instagram-item" data-aos="fade-up" data-aos-delay="300">
                <div class="instagram-post">
                    <img src="{{ asset('images/aboutimg/insta6.jpg') }}" alt="Instagram Post" class="img-fluid">
                    <div class="instagram-overlay">
                        <div class="instagram-likes">
                            <i class="fas fa-heart me-1"></i> 2.4k
                        </div>
                        <div class="instagram-comments">
                            <i class="fas fa-comment me-1"></i> 156
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="#" class="btn btn-outline-primary btn-lg px-4" data-aos="fade-up">
                View Full Gallery <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Function to check if an element is in the viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Function to animate the counter
    function animateCounter(element, target) {
        const duration = 2000; // Animation duration in milliseconds
        const step = target / (duration / 16); // 60fps
        let current = 0;
        
        // Add a small delay before starting the animation
        setTimeout(() => {
            const updateCounter = () => {
                current += step;
                if (current < target) {
                    // Add comma as thousand separator
                    element.textContent = Math.ceil(current).toLocaleString();
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = target.toLocaleString();
                }
            };
            
            updateCounter();
            element.classList.add('animated');
        }, 200);
    }

    // Function to handle scroll events
    function handleScroll() {
        const counters = document.querySelectorAll('.fact-number');
        
        counters.forEach(counter => {
            if (isInViewport(counter) && !counter.classList.contains('animated')) {
                const target = parseInt(counter.getAttribute('data-count'));
                animateCounter(counter, target);
            }
        });
    }

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
    
    // Initial check in case elements are already in viewport
    handleScroll();
});
</script>
@endpush
