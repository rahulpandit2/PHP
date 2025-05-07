<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 15 | PHP Match Expression";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <h1>PHP Match Expressions</h1>

        <h2>Basic Syntax</h2>
        <code>
        &lt;?php<br>
        $result = match (input) {<br>
            value1 => output1,<br>
            value2 => output2,<br>
            default => fallback<br>
        };<br>
        ?&gt;
    </code>

        <h3>Grade Calculator Example</h3>
        <code class="correct">
        &lt;?php<br>
        $score = 85;<br>
        $grade = match(true) {<br>
            $score >= 90 => 'A+',<br>
            $score >= 80 => 'A',<br>
            $score >= 70 => 'B',<br>
            default => 'F'<br>
        };<br>
        echo "Score: $score → Grade: $grade";<br>
        // Output: Score: 85 → Grade: A<br>
        ?&gt;
    </code>

        <h2>Key Features</h2>
        <div class="grid">
            <code>
            // Multiple conditions<br>
            $day = 'Sat';<br>
            $type = match($day) {<br>
                'Sat', 'Sun' => 'Weekend',<br>
                default => 'Weekday'<br>
            };
        </code>

            <code>
            // Different return types<br>
            $status = match(404) {<br>
                200 => ['success' => true],<br>
                404 => 'Not Found',<br>
                500 => false<br>
            };
        </code>
        </div>

        <h2>Comparison Table: match vs switch</h2>
        <table>
            <tr>
                <th></th>
                <th>match</th>
                <th>switch</th>
            </tr>
            <tr>
                <td>Comparison</td>
                <td>Strict (===)</td>
                <td>Loose (==)</td>
            </tr>
            <tr>
                <td>Returns Value</td>
                <td>Yes</td>
                <td>No</td>
            </tr>
            <tr>
                <td>Fall-Through</td>
                <td>Not allowed</td>
                <td>Allowed</td>
            </tr>
            <tr>
                <td>Error Handling</td>
                <td>UnhandledMatchError</td>
                <td>Silent failure</td>
            </tr>
        </table>

        <h3>HTML-Embedded Syntax</h3>
        <code>
        &lt;?php $role = 'editor'; ?&gt;<br>
        &lt;?= match($role) {<br>
            'admin' => "&lt;div class='badge admin'&gt;Administrator&lt;/div&gt;",<br>
            'editor' => "&lt;div class='badge editor'&gt;Content Editor&lt;/div&gt;",<br>
            default => "&lt;div class='badge'&gt;Guest&lt;/div&gt;"<br>
        } ?&gt;
    </code>

        <h2>Error Handling</h2>
        <div class="grid">
            <code class="wrong">
            // Dangerous - no default<br>
            match(5) {<br>
                1 => 'One',<br>
                2 => 'Two'<br>
            }; // Throws UnhandledMatchError
        </code>

            <code class="correct">
            // Safe with default<br>
            match(5) {<br>
                1 => 'One',<br>
                2 => 'Two',<br>
                default => 'Unknown'<br>
            };
        </code>
        </div>

        <p class="note">Match expressions are exhaustive - they <strong>must</strong> handle all possible values or
            include a default case.</p>

        <strong>Best Practices:</strong>
        <ul>
            <li>Use for simple value comparisons (3+ cases)</li>
            <li>Prefer over switch when needing return values</li>
            <li>Always include default case</li>
            <li>Use with <code>match(true)</code> for complex conditions</li>
            <li>Keep arms short - avoid complex logic</li>
        </ul>

        <h2>Advanced Usage</h2>
        <code>
        &lt;?php<br>
        // Multiple conditions with same result<br>
        $age = 25;<br>
        $category = match(true) {<br>
            $age < 13 => 'Child',<br>
            $age >= 13 && $age < 20 => 'Teen',<br>
            $age >= 20 && $age < 65 => 'Adult',<br>
            default => 'Senior'<br>
        };<br>
        ?&gt;
    </code>

        <h3>Real-World Use Cases</h3>
        <ul>
            <li>API response mapping</li>
            <li>Status code handling</li>
            <li>Configuration value resolution</li>
            <li>Localization lookups</li>
        </ul>
    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>