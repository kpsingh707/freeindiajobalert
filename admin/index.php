<?php
session_start();

// Authentication check
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

require_once '../config/db.php';

// Get stats for dashboard
$jobs_count = $db->query("SELECT COUNT(*) FROM jobs")->fetchColumn();
$gk_count = $db->query("SELECT COUNT(*) FROM general_knowledge")->fetchColumn();
$news_count = $db->query("SELECT COUNT(*) FROM news")->fetchColumn();
$users_count = $db->query("SELECT COUNT(*) FROM users")->fetchColumn();

$page_title = "Admin Dashboard - FreeIndiaJobAlert.com";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="admin-sidebar">
            <div class="admin-logo">
                <h2>FreeIndiaJobAlert</h2>
                <p>Admin Panel</p>
            </div>
            <nav class="admin-nav">
                <ul>
                    <li class="active"><a href="index.php"><i class="icon dashboard"></i> Dashboard</a></li>
                    <li><a href="jobs.php"><i class="icon jobs"></i> Job Management</a></li>
                    <li><a href="gk.php"><i class="icon gk"></i> GK Management</a></li>
                    <li><a href="news.php"><i class="icon news"></i> News Management</a></li>
                    <li><a href="categories.php"><i class="icon categories"></i> Categories</a></li>
                    <li><a href="ads.php"><i class="icon ads"></i> Advertisements</a></li>
                    <li><a href="seo.php"><i class="icon seo"></i> SEO Settings</a></li>
                    <li><a href="users.php"><i class="icon users"></i> User Management</a></li>
                    <li><a href="settings.php"><i class="icon settings"></i> Settings</a></li>
                    <li><a href="logout.php"><i class="icon logout"></i> Logout</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="admin-main">
            <header class="admin-header">
                <h1>Dashboard</h1>
                <div class="admin-user">
                    <span>Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?></span>
                </div>
            </header>

            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon jobs"></div>
                    <div class="stat-info">
                        <h3>Total Jobs</h3>
                        <p><?php echo $jobs_count; ?></p>
                    </div>
                    <a href="jobs.php" class="stat-link">View All</a>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon gk"></div>
                    <div class="stat-info">
                        <h3>GK Posts</h3>
                        <p><?php echo $gk_count; ?></p>
                    </div>
                    <a href="gk.php" class="stat-link">View All</a>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon news"></div>
                    <div class="stat-info">
                        <h3>News Articles</h3>
                        <p><?php echo $news_count; ?></p>
                    </div>
                    <a href="news.php" class="stat-link">View All</a>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon users"></div>
                    <div class="stat-info">
                        <h3>Registered Users</h3>
                        <p><?php echo $users_count; ?></p>
                    </div>
                    <a href="users.php" class="stat-link">View All</a>
                </div>
            </div>

            <!-- Recent Activity -->
            <section class="recent-activity">
                <h2>Recent Activity</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Action</th>
                            <th>Item</th>
                            <th>User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $activities = $db->query("SELECT * FROM activity_log ORDER BY created_at DESC LIMIT 5");
                        while ($activity = $activities->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>
                                <td>{$activity['created_at']}</td>
                                <td>{$activity['action']}</td>
                                <td>{$activity['item_type']}: {$activity['item_title']}</td>
                                <td>{$activity['user']}</td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>
