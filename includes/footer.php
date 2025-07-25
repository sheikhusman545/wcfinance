<!-- Footer Section -->
<footer class="bg-light py-5 mt-5">
    <div class="container">
        <div class="row gy-4 align-items-start">

            <!-- Logo and Description -->
            <div class="col-12 col-md-5">
                <div class="d-flex align-items-center mb-3">
                    <img src="images/footer-logo.png" alt="WCF Logo" height="48" class="me-2" />
                    <h5 class="m-0 fw-bold" style="font-family: 'Clash Display', sans-serif;">WESTERN <br />
                        COMMERCIAL <br /> FINANCE</h5>
                </div>
                <p class="text-muted">
                    We make commercial title loans fast, flexible, and hassle-free—helping business owners access
                    capital without giving up their vehicle or slowing down operations.
                </p>
            </div>

            <!-- Useful Links -->
            <div class="col-12 col-md-2">
                <h6 class="fw-semibold mb-3" style="font-family: 'Clash Display', sans-serif;">Useful Links</h6>
                <ul class="list-unstyled text-muted">
                    <li><a href="#about-us" class="text-decoration-none text-dark">About Us</a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#formModal"
                            class="text-decoration-none text-dark">Apply</a></li>
                    <li><a href="index#western-finance" class="text-decoration-none text-dark">Features</a></li>
                </ul>
            </div>

            <!-- Who Can Apply -->
            <div class="col-12 col-md-2">
                <h6 class="fw-semibold mb-3" style="font-family: 'Clash Display', sans-serif;">Who Can Apply</h6>
                <ul class="list-unstyled text-muted">
                    <li> <a href="index#feature" class="text-decoration-none text-muted"> Independent owner-operators</a>
                    </li>
                    <li> <a href="index#feature" class="text-decoration-none text-muted"> Businessmen</a></li>
                    <li> <a href="index#feature" class="text-decoration-none text-muted"> Self-Employed</a></li>
                    <li> <a href="index#feature" class="text-decoration-none text-muted">Landscaping and snow removal
                            companies</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div class="col-12 col-md-2">
                <h6 class="fw-semibold mb-3" style="font-family: 'Clash Display', sans-serif;">Support</h6>
                <ul class="list-unstyled text-muted">
                    <li><a href="index#faq" class="text-decoration-none text-dark">FAQs</a></li>
                    <li><a href="index#testimonials" class="text-decoration-none text-dark">Testimonials</a></li>
                    <li><a href="contact-us" class="text-decoration-none text-dark">Contact Us</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Footer -->
        <hr class="my-4" />
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
            <p class="mb-2 mb-md-0 text-muted small">
                Copyright © 2025 <span class="text-success fw-semibold">Western Commercial Finance</span> | All
                Rights Reserved.
            </p>
            <div class="d-flex gap-3">
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/24/145/145807.png" alt="LinkedIn"></a>
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/24/733/733547.png" alt="Facebook"></a>
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/24/733/733635.png" alt="Twitter"></a>
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/24/733/733558.png" alt="Instagram"></a>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <!-- <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable"> -->
    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content shadow-lg border-0 rounded-4">

            <form id="loanForm" class="p-0">
                <!-- Header -->
                <div class="modal-header border-0 bg-gradient rounded-top-4"
                    style="background: linear-gradient(to right, #4f46e5, #3b82f6); color: white;">
                    <h5 class="modal-title fw-bold" id="formModalLabel"> Loan Application</h5>
                    <a type="button" class="btn-close btn-close-black" data-bs-dismiss="modal"
                        aria-label="Close"></a>
                </div>

                <!-- Body -->
                <div class="modal-body bg-white px-5 py-4 rounded-bottom-4">
                    <div class="row g-4">

                        <!-- Name -->
                        <div class="col-md-6">
                            <label class="form-label">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control shadow-sm" name="firstName" placeholder="John"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control shadow-sm" name="lastName" placeholder="Doe"
                                required>
                        </div>

                        <!-- Email & Phone -->
                        <div class="col-md-6">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control shadow-sm" name="email"
                                placeholder="you@example.com" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Phone <span class="text-danger">*</span></label>
                            <!-- <input type="tel" class="form-control shadow-sm" name="phone" placeholder="+1 555 1234"
                                    required> -->
                            <input type="tel" class="form-control shadow-sm" name="phone" placeholder="+1 555 1234"
                                required maxlength="15" title="Enter a valid phone number (digits, +, - or spaces)">

                        </div>

                        <!-- City & Province -->
                        <div class="col-md-6">
                            <label class="form-label">City <span class="text-danger">*</span></label>
                            <input type="text" class="form-control shadow-sm" name="city" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Province <span class="text-danger">*</span></label>
                            <input type="text" class="form-control shadow-sm" name="province" required>
                        </div>

                        <!-- Vehicle Questions -->
                        <div class="col-md-6">
                            <label class="form-label">Payments on Vehicle? <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control shadow-sm" name="payments" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Valid Driver’s License? <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control shadow-sm" name="license" required>
                        </div>

                        <!-- Insurance -->
                        <div class="col-12">
                            <label class="form-label">Vehicle Insured & Registered? <span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control shadow-sm" name="insurance" rows="2" required></textarea>
                        </div>

                        <!-- KMs -->
                        <div class="col-12">
                            <label class="form-label">Vehicle Kilometers (KM’s) or Hours <span
                                    class="text-danger">*</span></label>
                            <!-- <input type="number" class="form-control shadow-sm" name="kms" required> -->
                            <input type="number" class="form-control shadow-sm" name="kms" required min="0"
                                max="10000000" title="Enter valid kilometers (0 - 1,000,000)">

                        </div>


                        <div class="mb-4">
                            <label for="vehicleStatus" class="form-label fw-semibold"
                                style="font-size: 1.1rem; color: #3d3d3d;">
                                Is the vehicle insured and registered, If not, why?
                                <span class="text-danger fst-italic">(Required)</span>
                            </label>
                            <textarea class="form-control shadow-sm" name="vehicleStatus" id="vehicleStatus"
                                rows="4" required
                                style="border-radius: 8px; font-size: 1rem; resize: vertical;"></textarea>
                        </div>
                        <hr>

                        <!-- Collateral -->
                        <div class="col-12">
                            <label class="form-label">What collateral do you have? <span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control shadow-sm" name="collateral" id="collateralSelect"
                                rows="4" required
                                style="border-radius: 8px; font-size: 1rem; resize: vertical;"></textarea>

                        </div>

                        <!-- Show when Car or Boat -->



                        <!-- Loan Amount -->
                        <div class="col-12">
                            <label class="form-label">Loan Amount <span class="text-danger">*</span></label>
                            <input type="number" class="form-control shadow-sm" name="amount"
                                placeholder="Up to $1.5 Million" required min="1000" max="1500000"
                                title="Loan must be between $100 and 1.5 Million dollars">

                        </div>

                        <!-- <div class="g-recaptcha" data-sitekey="6Lf3AWgrAAAAAKALewXDJHSgv7HICB2sPVPIljiF" data-callback='onSubmit'
                                data-action='submit'></div> -->

                    </div>
                </div>
                <style>

                </style>
                <!-- Footer -->
                <div class="modal-footer border-0 bg-white rounded-bottom-4 px-5 py-3">
                    <button type="submit" class="btn btn-primary px-4 shadow-sm">Submit</button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!--<script src="https://www.google.com/recaptcha/api.js"></script>-->
<script src="https://www.google.com/recaptcha/api.js?render=6Lf3AWgrAAAAAKALewXDJHSgv7HICB2sPVPIljiF"></script>

<script>
    // Initialize testimonial swiper
    const testimonialSwiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        grabCursor: true,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 3,
            }
        }
    });

    // Initialize construction swiper
    const constructionSwiper = new Swiper(".construction", {
        slidesPerView: 1,
        spaceBetween: 20,
        grabCursor: true,
        loop: true,
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 4,
            }
        }
    });

    // Make drag button also control Swiper (simulate drag)
    const dragBtn = document.getElementById("dragHandle");
    let isDragging = false;
    let startX = 0;

    dragBtn.addEventListener("mousedown", (e) => {
        isDragging = true;
        startX = e.clientX;
        dragBtn.style.cursor = "grabbing";
    });

    document.addEventListener("mousemove", (e) => {
        if (!isDragging) return;
        const diff = startX - e.clientX;
        swiper.setTranslate(swiper.getTranslate() + diff);
        startX = e.clientX;
    });

    document.addEventListener("mouseup", () => {
        if (isDragging) {
            swiper.slideTo(swiper.activeIndex); // snap to slide
            isDragging = false;
            dragBtn.style.cursor = "grab";
        }
    });
</script>

<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        once: true,
        duration: 1000,
        easing: 'ease-in-out'
    });

    const counters = document.querySelectorAll('.counter-text');

    const runCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const duration = 1500;
        let start = 0;
        const stepTime = Math.max(Math.floor(duration / target), 20);

        const step = () => {
            start += 1;
            if (start <= target) {
                counter.innerText = start;
                setTimeout(step, stepTime);
            } else {
                counter.innerText = target;
            }
        };
        step();
    };

    document.addEventListener('aos:in', ({
        detail
    }) => {
        if (detail.querySelector('.counter-text')) {
            const localCounters = detail.querySelectorAll('.counter-text');
            localCounters.forEach(counter => {
                if (!counter.classList.contains('counted')) {
                    runCounter(counter);
                    counter.classList.add('counted');
                }
            });
        }
    });
</script>
<script>
    document.getElementById('loanForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const form = this;
        const submitBtn = form.querySelector('button[type="submit"]');

        // Disable button and show "Submitting..."
        submitBtn.disabled = true;
        const originalBtnText = submitBtn.innerText;
        submitBtn.innerText = 'Submitting...';

        grecaptcha.ready(function() {
            grecaptcha.execute('6Lf3AWgrAAAAAKALewXDJHSgv7HICB2sPVPIljiF', {
                action: 'submit'
            }).then(function(token) {
                const formData = new FormData(form);
                formData.append('recaptcha_token', token);

                const data = Object.fromEntries(formData.entries());

                fetch('sendEmail.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(data)
                    })
                    .then(async res => {
                        const result = await res.json();

                        if (result.success) {
                            alert('Your application has been submitted successfully!');
                            form.reset();
                            submitBtn.innerText = 'Submitted';
                            const modalEl = document.getElementById('formModal');
                            bootstrap.Modal.getOrCreateInstance(modalEl).hide();
                        } else {
                            alert(result.message || 'There was an error submitting your application. Please try again later.');
                            submitBtn.disabled = false;
                            submitBtn.innerText = originalBtnText;
                        }
                    })
                    .catch(err => {
                        alert('Error: ' + err.message);
                        submitBtn.disabled = false;
                        submitBtn.innerText = originalBtnText;
                    });
            });
        });
    });





    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".nav-link");

    function activateNavLink() {
        let scrollY = window.pageYOffset;

        sections.forEach((section) => {
            const sectionTop = section.offsetTop - 120; // adjust for fixed header height
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute("id");

            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                navLinks.forEach((link) => {
                    link.classList.remove("active");
                    if (link.getAttribute("href") === `#${sectionId}`) {
                        link.classList.add("active");
                    }
                });
            }
        });
    }

    window.addEventListener("scroll", activateNavLink);
</script>
</body>

</html>