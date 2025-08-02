<header>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <i class="fas fa-bread-slice me-2"></i>Wish Bakery
      </a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
              <i class="fas fa-home me-1"></i> Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('products*') ? 'active' : '' }}" href="{{ url('/products') }}">
              <i class="fas fa-birthday-cake me-1"></i> Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">
              <i class="fas fa-info-circle me-1"></i> About
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">
              <i class="fas fa-envelope me-1"></i> Contact
            </a>
          </li>
          <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
            <a class="nav-link nav-cart {{ request()->is('cart') ? 'active' : '' }}" href="{{ url('/cart') }}">
              <i class="fas fa-shopping-cart"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

@push('scripts')
<script>
  // Add scroll effect to header
  window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
  
  // Trigger scroll event on page load in case page is reloaded while scrolled
  window.dispatchEvent(new Event('scroll'));
</script>
@endpush
