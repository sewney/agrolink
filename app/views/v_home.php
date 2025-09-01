<?php require APPROOT.'/views/inc/components/header.php'; ?>

<!-- Hero Section -->
    <section id="home" class="hero" style="background: url('../public/img/hero-farm.jpg') center center/cover no-repeat; min-height: 500px; position: relative;">
        <div class="container" style="position: relative; z-index: 2;">
            <div class="hero-content">
                <h1>Trade Smarter. Deliver Faster.</h1>
                <p>A centralized digital marketplace that connects farmers, buyers, and transporters to streamline agricultural trade.</p>
                <div class="hero-actions">
                    <a href="login.html" class="btn btn-primary btn-large"> Login</a>
                    <a href="#register" class="btn btn-secondary btn-large" data-modal="registerModal"> Register Now</a>
                </div>
            </div>
            <div class="hero-image">
                <div style="width: 100%; height: 400px; background: transparent; border-radius: var(--radius-lg); display: flex; align-items: center; justify-content: center; color: var(--primary-green); font-size: 4rem; gap: 2rem;">
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title">How AgroLink Works</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>List & Browse Produce</h3>
                    <p>Farmers list fresh products; buyers browse regionally available produce with detailed information.</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Place Orders & Schedule Delivery</h3>
                    <p>Buyers order directly from farmers; transporters coordinate and manage delivery logistics.</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Rate & Review</h3>
                    <p>Build trust with a feedback-based ecosystem that ensures quality and reliability.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features Section -->
    <section id="features" class="section bg-light">
        <div class="container">
            <h2 class="section-title">Why Use AgroLink?</h2>
            <div class="grid grid-3">
                <div class="card">
                    <div class="card-icon">✅</div>
                    <h3>Direct Farm-to-Buyer Sales</h3>
                    <p>Eliminate middlemen and boost farmer profits with direct connections between producers and buyers.</p>
                </div>
                <div class="card">
                    <div class="card-icon">🚚</div>
                    <h3>Transport Coordination</h3>
                    <p>Assign and track deliveries in one place with integrated logistics management.</p>
                </div>
                <div class="card">
                    <div class="card-icon">🧑‍🌾</div>
                    <h3>Role-Based Dashboards</h3>
                    <p>Tailored tools and interfaces designed specifically for each user type and their needs.</p>
                </div>
                <div class="card">
                    <div class="card-icon">📊</div>
                    <h3>Track Orders & Revenue</h3>
                    <p>Real-time updates and comprehensive analytics to monitor your business performance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- User Roles Section -->
    <section id="roles" class="section roles">
        <div class="container">
            <h2 class="section-title">Who is AgroLink for?</h2>
            <div class="grid grid-4">
                <div class="role-card">
                    <div class="role-icon">
                        <img src="assets/img/farmer-icon.png" alt="Farmer" style="height: 48px; width: 48px;">
                    </div>
                    <h3>Farmers</h3>
                    <ul>
                        <li>Easy product listing & Updates</li>
                        <li>Get orders instantly</li>
                        <li>Track sales & payments</li>
                        <li>Connect directly with buyers</li>
                    </ul>
                    <a href="register_farmer.html" class="btn btn-primary mt-md">Register as Farmer</a>
                </div>
                <div class="role-card">
                    <div class="role-icon">
                        <img src="assets/img/buyer-icon.png" alt="Buyer" style="height: 48px; width: 48px;">
                    </div>
                    <h3>Buyers</h3>
                    <ul>
                        <li>Browse fresh products</li>
                        <li>Secure online checkout</li>
                        <li>Track deliveries</li>
                        <li>Request specific crops</li>
                    </ul>
                    <a href="register_buyer.html" class="btn btn-primary mt-md">Register as Buyer</a>
                </div>
                <div class="role-card">
                    <div class="role-icon">
                        <img src="assets/img/transporter-icon.png" alt="Transporter" style="height: 48px; width: 48px;">
                    </div>
                    <h3>Transporters</h3>
                    <ul>
                        <li>Accept & manage delivery tasks</li>
                        <li>Update delivery status</li>
                        <li>Earn more with reliable clients</li>
                    </ul>
                    <a href="register_transporter.html" class="btn btn-primary mt-md">Register as Transporter</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">What Our Users Say</h2>
            <div class="grid grid-2">
                <div class="card">
                    <p>"Finally, a platform that gives farmers full control over pricing! AgroLink has transformed how I sell my produce."</p>
                    <div class="mt-md">
                        <strong>Ranjith Fernando</strong><br>
                        <span class="text-muted">Farmer - Matale</span>
                    </div>
                </div>
                <div class="card">
                    <p>"Our restaurant sources reliably through AgroLink – no middlemen needed! Fresh produce delivered on time, every time."</p>
                    <div class="mt-md">
                        <strong>Duleeka Rathnayake</strong><br>
                        <span class="text-muted">Buyer - Colombo</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="section bg-light">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="grid grid-2">
                <div class="faq-item">
                    <div class="faq-question" style="cursor: pointer; padding: var(--spacing-md); background: var(--white); border-radius: var(--radius-md); margin-bottom: var(--spacing-sm); font-weight: var(--font-weight-bold);">
                        Is AgroLink free to use?
                    </div>
                    <div class="faq-answer" style="display: none; padding: var(--spacing-md); background: var(--white); border-radius: var(--radius-md); border-top: 2px solid var(--primary-green);">
                        Yes, AgroLink is completely free for all registered users including farmers, buyers, and transporters.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" style="cursor: pointer; padding: var(--spacing-md); background: var(--white); border-radius: var(--radius-md); margin-bottom: var(--spacing-sm); font-weight: var(--font-weight-bold);">
                        Can I sign up as both a buyer and a farmer?
                    </div>
                    <div class="faq-answer" style="display: none; padding: var(--spacing-md); background: var(--white); border-radius: var(--radius-md); border-top: 2px solid var(--primary-green);">
                        Yes, you can register for multiple roles using separate registrations with different email addresses.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" style="cursor: pointer; padding: var(--spacing-md); background: var(--white); border-radius: var(--radius-md); margin-bottom: var(--spacing-sm); font-weight: var(--font-weight-bold);">
                        How do I track my deliveries?
                    </div>
                    <div class="faq-answer" style="display: none; padding: var(--spacing-md); background: var(--white); border-radius: var(--radius-md); border-top: 2px solid var(--primary-green);">
                        All users can track delivery status in real-time through their respective dashboards with updates from transporters.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title">Get in Touch</h2>
            <div class="grid grid-2">
                <div class="card">
                    <h3>Contact Information</h3>
                    <p><strong>Email:</strong> agrolink.lk@gmail.com</p>
                    <p><strong>Phone:</strong> +94 xxx xxx xxx</p>
                    <p><strong>Address:</strong> UCSC, University of Colombo<br>Sri Lanka</p>
                </div>
                <div class="card">
                    <h3>Quick Contact</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="contactName">Name</label>
                            <input type="text" id="contactName" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="contactEmail">Email</label>
                            <input type="email" id="contactEmail" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="contactMessage">Message</label>
                            <textarea id="contactMessage" name="message" class="form-control" rows="4" required></textarea>
                        </div>
                        <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary btn-large">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php require APPROOT.'/views/inc/components/footer.php'; ?>