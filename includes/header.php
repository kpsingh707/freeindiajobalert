<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'FreeIndiaJobAlert.com - Latest Government Jobs & Employment News'; ?></title>
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : 'Find latest government jobs, private jobs, GK updates and employment news across India'; ?>">
    
    <!-- Schema.org markup for Google -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "FreeIndiaJobAlert.com",
      "url": "https://www.freeindiajobalert.com"
    }
    </script>
    
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">
    
    <!-- Favicon -->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
</head>
<body>
    <!-- Header Section -->
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <h1><a href="/"><span class="saffron">Free</span><span class="white">India</span><span class="green">JobAlert</span><span class="com">.com</span></a></h1>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="/" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="/latest-jobs.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'latest-jobs.php' ? 'active' : ''; ?>">Latest Jobs</a></li>
                    <li><a href="/general-knowledge.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'general-knowledge.php' ? 'active' : ''; ?>">General Knowledge</a></li>
                    <li><a href="/news.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'news.php' ? 'active' : ''; ?>">News</a></li>
                    <li><a href="/about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About Us</a></li>
                    <li><a href="/contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </nav>
            <div class="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
