    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <div class="newsletter-content">
                <h2>Get Job Alerts Directly to Your Inbox</h2>
                <p>Subscribe to our daily newsletter and never miss an important job update</p>
            </div>
            <form class="newsletter-form" action="/subscribe.php" method="POST">
                <input type="email" name="email" placeholder="Enter your email address" required>
                <input type="hidden" name="csrf_token" value="<?php echo generate_csrf_token(); ?>">
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col about">
                    <h3>About FreeIndiaJobAlert</h3>
                    <p>We provide the latest information about government jobs, private sector jobs, and employment news across India.</p>
                    <div class="social-links">
                        <a href="#"><i class="icon facebook"></i></a>
                        <a href="#"><i class="icon twitter"></i></a>
                        <a href="#"><i class="icon linkedin"></i></a>
                        <a href="#"><i class="icon youtube"></i></a>
                    </div>
                </div>
                <div class="footer-col links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="/privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="/disclaimer.php">Disclaimer</a></li>
                        <li><a href="/terms-conditions.php">Terms & Conditions</a></li>
                        <li><a href="/sitemap.php">Sitemap</a></li>
                    </ul>
                </div>
                <div class="footer-col categories">
                    <h3>Job Categories</h3>
                    <ul>
                        <li><a href="/jobs/engineering.php">Engineering Jobs</a></li>
                        <li><a href="/jobs/medical.php">Medical Jobs</a></li>
                        <li><a href="/jobs/teaching.php">Teaching Jobs</a></li>
                        <li><a href="/jobs/banking.php">Banking Jobs</a></li>
                    </ul>
                </div>
                <div class="footer-col contact">
                    <h3>Contact Us</h3>
                    <p><i class="icon email"></i> contact@freeindiajobalert.com</p>
                    <p><i class="icon phone"></i> +91 98765 43210</p>
                    <p><i class="icon address"></i> 123 Job Street, New Delhi, India - 110001</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> FreeIndiaJobAlert.com. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="/assets/js/main.js"></script>
    
    <!-- Schema.org markup for Organization -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "FreeIndiaJobAlert.com",
      "url": "https://www.freeindiajobalert.com",
      "logo": "https://www.freeindiajobalert.com/assets/images/logo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+919876543210",
        "contactType": "customer service"
      }
    }
    </script>
</body>
</html>
