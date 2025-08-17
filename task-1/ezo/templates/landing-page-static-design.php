<?php
/*
Template Name: Landing Page Static Design
*/
get_header();
?>

<header>
    <div class="container">
        <div class="header-content d-flex justify-content-between align-items-center">
            <div class="header-logo">
                <a href="<?= site_url() ?>">
                    <img src="http://localhost/ezo/wp-content/uploads/2025/08/header-logo.webp" alt="header-logo">
                </a>
            </div>
            <div class="header-menu">
                <nav class="d-flex justify-content-between align-items-center gap-4">
                    <a href="">Features</a>
                    <a href="">Pricing</a>
                    <a href="">Resources</a>
                    <a href="">Login</a>
                </nav>
            </div>
        </div>
    </div>
</header>

<section class="banner-section section-padding">
    <div class="container">
        <div class="banner-content d-flex align-items-center gap-5">
            <div class="banner-content-section d-flex flex-column justify-content-between gap-4">
                <p class="text-light">Buy, Sell and Raise Investment for Businesses</p>
                <h1>Build the future of the web today</h1>
                <p>Unlock the power of your technology investments with modern IT asset management. Our accurate,
                    automated,
                    and intelligent solution helps you optimize performance and drive business growth.</p>
                <div class="banner-buttons d-flex gap-3">
                    <a href="" class="btn btn-primary">Plans & Pricing</a>
                    <a href="" class="btn btn-secondary">Get a Quote</a>
                </div>
            </div>
            <div class="banner-image-section">
                <img src="http://localhost/ezo/wp-content/uploads/2025/08/banner-image.png" alt="banner-image">
            </div>
        </div>
    </div>
</section>

<section class="features-section section-padding">
    <div class="container">
        <div class="features-content d-flex flex-column align-items-center">
            <p class="text-light">Power the freedom to create online</p>
            <h2>Solutions built for you</h2>
            <div class="features-wrapper d-flex justify-content-between gap-4">
                <div class="feature">
                    <div class="feature-image">
                        <a href="">
                            <img src="http://localhost/ezo/wp-content/uploads/2025/08/feature-1.webp" alt="feature">
                        </a>
                    </div>
                    <div class="feature-content d-flex flex-column gap-3">
                        <a href="">
                            <h4>Enterprise-grade solutions</h4>
                        </a>
                        <p>Reduce total cost of ownership with top performance, expert support, and security.</p>
                        <a href="" class="learn-more">
                            <span>Learn More</span>
                            <i class="fa-regular fa-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="feature">
                    <div class="feature-image">
                        <a href="">
                            <img src="http://localhost/ezo/wp-content/uploads/2025/08/feature-2.webp" alt="feature">
                        </a>
                    </div>
                    <div class="feature-content d-flex flex-column gap-3">
                        <a href="">
                            <h4>Enterprise-grade solutions</h4>
                        </a>
                        <p>Reduce total cost of ownership with top performance, expert support, and security.</p>
                        <a href="" class="learn-more">
                            <span>Learn More</span>
                            <i class="fa-regular fa-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="feature">
                    <div class="feature-image">
                        <a href="">
                            <img src="http://localhost/ezo/wp-content/uploads/2025/08/feature-3.webp" alt="feature">
                        </a>
                    </div>
                    <div class="feature-content d-flex flex-column gap-3">
                        <a href="">
                            <h4>Enterprise-grade solutions</h4>
                        </a>
                        <p>Reduce total cost of ownership with top performance, expert support, and security.</p>
                        <a href="" class="learn-more">
                            <span>Learn More</span>
                            <i class="fa-regular fa-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-section section-padding">
    <div class="container">
        <div class="testimonial-content d-flex flex-column align-items-center">
            <p class="text-light">See why Flywheel is their preferred hosting partner</p>
            <h2>What our customers think</h2>
            <div class="testimonial-wrapper d-flex align-items-center">
                <div class="testimonial-image-section">
                    <img src="http://localhost/ezo/wp-content/uploads/2025/08/testimonial-image.jpg" alt="testimonial">
                </div>
                <div class="testimonial-content-section">
                    <h4>"Working with the company is about the funnest thing I've done in a while."</h4>
                    <div class="testimonial-meta">
                        <span class="name">Jake Bohall</span>
                        <span class="company">Tennis Garden</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form-section section-padding">
    <div class="container">
        <div class="form-content d-flex gap-4">
            <div class="form-content-section d-flex flex-column gap-3">
                <p class="text-light">Start the conversation</p>
                <h2>Learn more about our solutions or just say hello</h2>
                <p class="text-dark">Talk to a team that understands enterprise and agency complexity and how to scale
                    without overpaying. We’ll explore your goals and share how a smarter strategy for WordPress®
                    can reduce total cost of ownership and drive long-term value.</p>
                <img src="http://localhost/ezo/wp-content/uploads/2025/08/contact-image.png" alt="contact">
            </div>
            <div class="form-submit-section">
                <form>
                    <div class="form-wrapper d-flex flex-column gap-3">
                        <div class="form-row double d-flex gap-3">
                            <div class="form-group">
                                <label for="first-name">
                                    <span>First Name</span>
                                    <input type="text" name="first-name">
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="last-name">
                                    <span>Last Name</span>
                                    <input type="text" name="last-name">
                                </label>
                            </div>
                        </div>
                        <div class="form-row double d-flex gap-3">
                            <div class="form-group">
                                <label for="email">
                                    <span>Email</span>
                                    <input type="email" name="email">
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="phone">
                                    <span>Phone</span>
                                    <input type="tel" name="phone">
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inquiry">
                                <span>Inquiry Type</span>
                                <select name="inquiry">
                                    <option disabled selected>Please Select</option>
                                    <option>General Inquiry</option>
                                    <option>Sales Question</option>
                                    <option>Customer Support</option>
                                    <option>Billing Support</option>
                                </select>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="message">
                                <span>Message</span>
                                <textarea name="message"></textarea>
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>