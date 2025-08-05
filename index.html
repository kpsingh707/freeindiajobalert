<?php
require_once 'includes/db.php';
require_once 'includes/functions.php';

$page_title = "FreeIndiaJobAlert.com - Latest Government Jobs & Employment News";
$meta_description = "Find latest government jobs, private jobs, GK updates and employment news across India";

// Get latest content
$latest_jobs = get_jobs(6);
$gk_posts = get_gk_posts(3);
$news_posts = get_news_posts(3);

include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="job-banners">
            <!-- Banner slides will be loaded via JavaScript -->
            <div class="banner active" style="background-image: url('/assets/images/banner1.jpg')">
                <div class="banner-content">
                    <h2>UPSC Civil Services 2024 Notification Released</h2>
                    <p>1056 Vacancies | Apply Before March 5, 2024</p>
                    <a href="/upsc-civil-services-2024" class="btn">View Details</a>
                </div>
            </div>
            <div class="banner" style="background-image: url('/assets/images/banner2.jpg')">
                <div class="banner-content">
                    <h2>SSC CGL 2024 Recruitment</h2>
                    <p>7500+ Vacancies | Apply Online Now</p>
                    <a href="/ssc-cgl-2024" class="btn">View Details</a>
                </div>
            </div>
        </div>
        <div class="job-search">
            <div class="container">
                <form action="/search.php" method="GET">
                    <div class="search-field">
                        <input type="text" name="keywords" placeholder="Job title, keywords or company">
                    </div>
                    <div class="search-field">
                        <select name="location">
                            <option value="">All India</option>
                            <option value="delhi">Delhi</option>
                            <option value="mumbai">Mumbai</option>
                            <!-- More locations -->
                        </select>
                    </div>
                    <div class="search-field">
                        <select name="category">
                            <option value="">All Categories</option>
                            <option value="government">Government</option>
                            <option value="private">Private</option>
                            <option value="banking">Banking</option>
                            <!-- More categories -->
                        </select>
                    </div>
                    <button type="submit" class="search-btn">Search Jobs</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container main-content">
        <!-- Latest Jobs Section -->
        <section class="latest-jobs">
            <h2 class="section-title"><span>Latest Jobs</span></h2>
            <div class="job-cards">
                <?php foreach ($latest_jobs as $job): ?>
                <article class="job-card" itemscope itemtype="https://schema.org/JobPosting">
                    <div class="job-header">
                        <h3 itemprop="title"><?php echo htmlspecialchars($job['title']); ?></h3>
                        <p class="organization" itemprop="hiringOrganization"><?php echo htmlspecialchars($job['organization']); ?></p>
                    </div>
                    <div class="job-details">
                        <div class="detail" itemprop="jobLocation">
                            <i class="icon location"></i>
                            <span><?php echo htmlspecialchars($job['location']); ?></span>
                        </div>
                        <div class="detail">
                            <i class="icon calendar"></i>
                            <span>Posted: <time datetime="<?php echo date('Y-m-d', strtotime($job['post_date'])); ?>"><?php echo date('M j, Y', strtotime($job['post_date'])); ?></time></span>
                        </div>
                        <div class="detail">
                            <i class="icon deadline"></i>
                            <span>Apply by: <time datetime="<?php echo date('Y-m-d', strtotime($job['apply_by'])); ?>"><?php echo date('M j, Y', strtotime($job['apply_by'])); ?></time></span>
                        </div>
                    </div>
                    <div class="job-actions">
                        <a href="/job/<?php echo $job['slug']; ?>" class="btn">View Details</a>
                        <a href="#" class="bookmark"><i class="icon bookmark"></i></a>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
            <div class="section-footer">
                <a href="/latest-jobs.php" class="view-all">View All Jobs →</a>
            </div>
        </section>

        <!-- General Knowledge Section -->
        <section class="general-knowledge">
            <h2 class="section-title"><span>General Knowledge</span></h2>
            <div class="gk-cards">
                <?php foreach ($gk_posts as $gk): ?>
                <article class="gk-card">
                    <div class="gk-category <?php echo strtolower($gk['category']); ?>"><?php echo htmlspecialchars($gk['category']); ?></div>
                    <h3><?php echo htmlspecialchars($gk['title']); ?></h3>
                    <p><?php echo htmlspecialchars(substr($gk['content'], 0, 100)); ?>...</p>
                    <a href="/gk/<?php echo $gk['slug']; ?>" class="read-more">Read More</a>
                </article>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Sidebar -->
        <aside class="sidebar">
            <!-- Advertisement Slot 1 -->
            <div class="ad-slot">
                <div class="ad-label">Advertisement</div>
                <div id="ad-sidebar-top" class="ad-content">
                    <!-- Ad content will be loaded via JavaScript or admin panel -->
                    <img src="/assets/images/ad-placeholder.jpg" alt="Advertisement">
                </div>
            </div>

            <!-- Quick Links -->
            <div class="widget quick-links">
                <h3 class="widget-title">Quick Links</h3>
                <ul>
                    <li><a href="/sarkari-yojana.php">Sarkari Yojana</a></li>
                    <li><a href="/results.php">Results</a></li>
                    <li><a href="/admit-card.php">Admit Card</a></li>
                    <li><a href="/answer-key.php">Answer Key</a></li>
                    <li><a href="/syllabus.php">Syllabus</a></li>
                </ul>
            </div>

            <!-- Daily GK Quiz -->
            <div class="widget daily-quiz">
                <h3 class="widget-title">Daily GK Quiz</h3>
                <div class="quiz-question">
                    <p>Who is known as the "Father of the Indian Constitution"?</p>
                    <ul class="quiz-options">
                        <li><button>Mahatma Gandhi</button></li>
                        <li><button>Jawaharlal Nehru</button></li>
                        <li><button class="correct">Dr. B.R. Ambedkar</button></li>
                        <li><button>Sardar Patel</button></li>
                    </ul>
                </div>
                <div class="quiz-result hidden">
                    <p>Correct answer: <strong>Dr. B.R. Ambedkar</strong></p>
                    <button class="try-another">Try Another Question</button>
                </div>
            </div>

            <!-- Advertisement Slot 2 -->
            <div class="ad-slot">
                <div class="ad-label">Advertisement</div>
                <div id="ad-sidebar-bottom" class="ad-content">
                    <!-- Ad content will be loaded via JavaScript or admin panel -->
                    <img src="/assets/images/ad-placeholder.jpg" alt="Advertisement">
                </div>
            </div>
        </aside>
    </main>

<?php include 'includes/footer.php'; ?>
