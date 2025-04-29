<?php
// Set the page title here
$page_title = "PHP Lessons | INDEX";
// Set the root asset path
$root_asset_path = 'assets';
// Include header of this page
include_once __DIR__ . '/partials/head.php';
?>

<div class="container">
    <nav>
        <ul>
            <li>
                <a href="index.php">HOME</a>
            </li>
        </ul>
    </nav>
    <div class="card">
        <nav>
            <ul>
                <?php
                $pages_dir = 'pages/';

                // Get all PHP files from the pages directory
                $pages = array_filter(scandir($pages_dir), function ($file) {
                    return pathinfo($file, PATHINFO_EXTENSION) === 'php';
                });

                foreach ($pages as $file) {
                    $file_path = $pages_dir . $file;
                    $page_title = 'Untitled Page'; // Default title

                    // Extract $page_title variable without executing the file
                    $file_content = file_get_contents($file_path);
                    if (preg_match('/\$page_title\s*=\s*["\'](.*?)["\']\s*;/', $file_content, $matches)) {
                        $page_title = $matches[1];
                    }

                    // Generate clean URL by removing .php extension
                    $link = str_replace('.php', '', $file);

                    echo "<li>
                        <a href=\"pages\\$link.php\">$page_title</a>
                      </li>";
                }
                ?>
            </ul>
        </nav>
    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/partials/foot.php';
?>