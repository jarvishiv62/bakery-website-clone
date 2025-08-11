@extends('layouts.app')

@section('title', 'Contact Us | ' . config('app.name'))

@section('content')
<section class="about-hero position-relative d-flex align-items-center">
    <div class="container position-relative z-index-1">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="display-3 fw-bold text-white mb-4" data-aos="fade-up">Get in Touch</h1>
                <p class="lead text-white mb-4" data-aos="fade-up" data-aos-delay="100">We're here to make your day sweeter.</p>
                <div class="d-flex justify-content-center gap-3" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('products') }}" class="btn btn-light btn-lg px-4">Products</a>
                    <a href="#" class="btn btn-outline-light btn-lg px-4">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Contact Information Block -->
    <section class="contact-info py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <!-- Phone -->
                <div class="col-md-4">
                    <div class="contact-card h-100 text-center p-4 rounded-3">
                        <div class="contact-icon mb-3">
                            <i class="fas fa-phone-alt fa-3x"></i>
                        </div>
                        <h3 class="h5 mb-3">Call Us</h3>
                        <p class="mb-0">
                            <a href="tel:+1234567890" class="text-decoration-none">+1 (234) 567-890</a>
                        </p>
                        <p class="small text-muted mt-2">Mon-Sat: 8:00 AM - 8:00 PM</p>
                    </div>
                </div>
                
                <!-- Email -->
                <div class="col-md-4">
                    <div class="contact-card h-100 text-center p-4 rounded-3">
                        <div class="contact-icon mb-3">
                            <i class="fas fa-envelope fa-3x"></i>
                        </div>
                        <h3 class="h5 mb-3">Email Us</h3>
                        <p class="mb-0">
                            <a href="mailto:info@bakery.com" class="text-decoration-none">info@bakery.com</a>
                        </p>
                        <p class="small text-muted mt-2">We'll respond within 24 hours</p>
                    </div>
                </div>
                
                <!-- Location -->
                <div class="col-md-4">
                    <div class="contact-card h-100 text-center p-4 rounded-3">
                        <div class="contact-icon mb-3">
                            <i class="fas fa-map-marker-alt fa-3x"></i>
                        </div>
                        <h3 class="h5 mb-3">Visit Us</h3>
                        <p class="mb-2">123 Bakery Street</p>
                        <p class="mb-0">New York, NY 10001</p>
                        <p class="small text-muted mt-2">Open in <a href="#" class="text-decoration-none">Google Maps</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">Frequently Asked Questions</h2>
                    <p class="lead">Find answers to common questions about our bakery</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ Item 1 -->
                        <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button bg-white text-dark fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-question-circle me-2 text-primary"></i> Do you deliver custom cakes?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-light">
                                    Yes, we offer custom cake delivery within a 10-mile radius for orders placed at least 48 hours in advance. For custom designs, we recommend placing your order 1-2 weeks in advance to ensure availability.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 2 -->
                        <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed bg-white text-dark fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fas fa-question-circle me-2 text-primary"></i> How far in advance should I place an order?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-light">
                                    For standard orders, 24 hours' notice is appreciated. For custom cakes and large orders, we recommend 1-2 weeks' notice. During holidays and special occasions, we suggest placing orders at least 2 weeks in advance as we tend to book up quickly.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 3 -->
                        <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed bg-white text-dark fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-question-circle me-2 text-primary"></i> Do you offer gluten-free or vegan options?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-light">
                                    Yes! We have a selection of gluten-free and vegan pastries available daily. For special dietary requirements on custom orders, please contact us at least 72 hours in advance so we can accommodate your needs.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 4 -->
                        <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed bg-white text-dark fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fas fa-question-circle me-2 text-primary"></i> What are your business hours?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-light">
                                    We're open Tuesday through Sunday from 7:00 AM to 7:00 PM. We're closed on Mondays to prepare fresh batches for the week. Holiday hours may vary, so please check our website or social media for updates.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ Item 5 -->
                        <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed bg-white text-dark fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <i class="fas fa-question-circle me-2 text-primary"></i> Do you offer catering for events?
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body bg-light">
                                    Absolutely! We offer a variety of catering options for events of all sizes. Our catering menu includes breakfast pastries, dessert tables, and custom cakes. Please contact us with your event details at least 2 weeks in advance for the best selection.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section py-5 position-relative bg-pattern">
        <div class="container position-relative z-index-1">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="newsletter-content bg-white p-4 p-md-5 rounded-3 shadow-sm">
                        <div class="newsletter-icon mb-4">
                            <i class="fas fa-cupcake fa-3x text-accent"></i>
                        </div>
                        <h2 class="display-5 fw-bold mb-3">Subscribe to Our Sweet Newsletter</h2>
                        <p class="lead mb-4">Exclusive offers, recipes, and baking tips straight to your inbox.</p>
                        
                        <form class="newsletter-form needs-validation" novalidate>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control form-control-lg" placeholder="Your email address" required>
                                <button class="btn btn-primary btn-lg px-4" type="submit">Subscribe</button>
                            </div>
                            <div class="form-text">We'll never share your email. Unsubscribe anytime.</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


