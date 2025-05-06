<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 12 | PHP Control Structures if/elseif/else Statements";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <h1>PHP Control Structures: if/elseif/else</h1>

        <h2>Basic Syntax Structure</h2>
        <code>
        &lt;?php<br>
        if (condition) {<br>
            // code block<br>
        } elseif (condition2) {<br>
            // code block<br>
        } else {<br>
            // default code block<br>
        }<br>
        ?&gt;
    </code>

        <h3>Traditional Syntax Example</h3>
        <code class="correct">
        &lt;?php<br>
        $score = 85;<br>
        if ($score >= 90) {<br>
            echo "Grade: A";<br>
        } elseif ($score >= 75) {<br>
            echo "Grade: B";<br>
        } else {<br>
            echo "Grade: C";<br>
        }<br>
        // Output: Grade: B<br>
        ?&gt;
    </code>

        <h2>HTML-Embedded Syntax</h2>
        <code>
        &lt;?php $temperature = 32; ?&gt;<br>
        &lt;?php if ($temperature > 30): ?&gt;<br>
            &lt;div class="alert"&gt;Heat Warning!&lt;/div&gt;<br>
        &lt;?php elseif ($temperature <= 0): ?&gt;<br>
            &lt;div class="alert"&gt;Freezing Warning!&lt;/div&gt;<br>
        &lt;?php else: ?&gt;<br>
            &lt;div&gt;Normal temperature&lt;/div&gt;<br>
        &lt;?php endif; ?&gt;
    </code>

        <h3>Key Syntax Differences</h3>
        <table>
            <tr>
                <th>Traditional</th>
                <th>HTML-Embedded</th>
            </tr>
            <tr>
                <td>Uses curly braces {}</td>
                <td>Uses colons and endif</td>
            </tr>
            <tr>
                <td>Supports "else if" (space)</td>
                <td>Requires "elseif" (no space)</td>
            </tr>
            <tr>
                <td>Better for pure PHP logic</td>
                <td>Ideal for mixing PHP/HTML</td>
            </tr>
        </table>

        <h2>Important Notes</h2>
        <div class="grid">
            <code class="wrong">
            &lt;?php if ($x > 5): ?&gt;<br>
                &lt;p&gt;Valid&lt;/p&gt;<br>
            &lt;?php else if ($x > 3): ?&gt; // ERROR<br>
                &lt;p&gt;Invalid&lt;/p&gt;<br>
            &lt;?php endif; ?&gt;
        </code>

            <code class="correct">
            &lt;?php if ($x > 5): ?&gt;<br>
                &lt;p&gt;Valid&lt;/p&gt;<br>
            &lt;?php elseif ($x > 3): ?&gt; // Correct<br>
                &lt;p&gt;Invalid&lt;/p&gt;<br>
            &lt;?php endif; ?&gt;
        </code>
        </div>

        <p class="note">The HTML-embedded syntax requires:<br>
            1. Colon after condition (<code>if():</code>)<br>
            2. No space in <code>elseif</code><br>
            3. Closing <code>endif;</code> statement</p>

        <h2>Best Practices</h2>
        <ul>
            <li>Use HTML-embedded syntax for templates/mixed content</li>
            <li>Prefer traditional syntax for complex logic blocks</li>
            <li>Always use identical comparison (<code>===</code>) when possible</li>
            <li>Keep conditions simple - avoid nested ifs when possible</li>
        </ul>

        <strong>Common Use Cases:</strong>
        <ul>
            <li>Form validation handling</li>
            <li>User role-based content display</li>
            <li>Error message conditional rendering</li>
            <li>Dynamic CSS class assignment</li>
        </ul>
    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>