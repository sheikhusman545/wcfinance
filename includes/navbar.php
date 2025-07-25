<nav class="navbar navbar-expand-lg bg-white py-3">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="images/wcflogo.png" alt="WCF Logo" style="height: 72px; object-fit: contain;">
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
            aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar Content -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="topnav navbar-nav mx-auto mb-2 mb-lg-0 align-items-lg-center gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($title === 'Home') ? 'active' : ''; ?>" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index#about-us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($title === 'Features') ? 'active' : ''; ?>" href="index#western-finance">Features</a>
                </li>
                <!--add dropdown here-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($title === 'commercial') ? 'active' : ''; ?>" href="#" id="locationsDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Commercial Loans</a>
                    <ul class="dropdown-menu" aria-labelledby="locationsDropdown">
                        <li><a class="dropdown-item" href="commercial-title-loans">Commercial Title
                                Loan</a></li>
                        <li><a class="dropdown-item" href="commercial-truck-title-loan">Commercial Truck
                                Title Loan</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index#faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($title == 'ContactUs') ? 'active' : ''; ?>" href="contact-us">Contact Us</a>
                </li>
            </ul>

            <!-- Phone Section (Visible in desktop only) -->
            <div class="d-none d-lg-flex align-items-center gap-3 ms-4">
                <span class="contact-icon"><i class="bi bi-telephone"></i></span>
                <span class="contact-text"><a class="text-dark text-decoration-none"
                        href="tel:8259010833">825–901–0833</a></span>
                <span class="contact-icon"><i class="bi bi-envelope"></i></span>
                <span class="contact-text"><a class="text-dark text-decoration-none"
                        href="mailto:info@wcfinance.ca">info@wcfinance.ca</a></span>
            </div>
        </div>
    </div>
</nav>