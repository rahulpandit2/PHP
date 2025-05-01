<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 00 | PHP Naming Conventions & Best Practices";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <h1>PHP Naming Conventions</h1>
        <p>While PHP allows flexibility in naming variables, constants, functions, and other identifiers, following
            consistent naming conventions improves code readability, maintainability, and team collaboration.</p>

        <h2>Valid but Not Recommended</h2>
        <code>
    &lt;?php <br>
    $_Variable123 = "Valid"; // Valid but not readable or meaningful <br>
    $a1b2c3 = "Also valid"; // But confusing <br>
    ?&gt;
</code>
        <p class="note">Just because you *can* do something doesn’t mean you *should*. Poor naming leads to confusing
            code and bugs that are hard to trace.</p>

        <h2>Best Practices by Identifier Type</h2>

        <h3>1. Variables</h3>
        <ul>
            <li>Use <strong>camelCase</strong>: <code>$productName</code>, <code>$userEmail</code></li>
            <li>Make names descriptive: <code>$x</code> is okay in loops, but <code>$totalAmount</code> is better in
                logic</li>
            <li>Avoid special characters, overly short or long names</li>
        </ul>

        <h3>2. Constants</h3>
        <ul>
            <li>Use <strong>UPPER_SNAKE_CASE</strong>: <code>MAX_LOGIN_ATTEMPTS</code>, <code>API_KEY</code></li>
            <li>Should be defined using <code>define()</code> or <code>const</code></li>
        </ul>

        <h3>3. Functions</h3>
        <ul>
            <li>Use <strong>snake_case</strong> or <strong>camelCase</strong> (consistent throughout project):</li>
            <li><code>calculate_total()</code> or <code>calculateTotal()</code></li>
            <li>Function names should describe an action or behavior</li>
        </ul>

        <h3>4. Classes & Objects</h3>
        <ul>
            <li>Use <strong>PascalCase</strong> (UpperCamelCase): <code>ProductManager</code>, <code>UserService</code>
            </li>
            <li>Class names are usually nouns or noun phrases</li>
        </ul>

        <h3>5. Files & Folders</h3>
        <ul>
            <li>Use lowercase with underscores or hyphens: <code>user_controller.php</code>,
                <code>product-list.php</code></li>
            <li>Class files typically follow the class name: <code>User.php</code> for class <code>User</code></li>
        </ul>

        <h3>6. Database Identifiers</h3>
        <ul>
            <li>Table names: <code>snake_case_plural</code> — e.g., <code>users</code>, <code>order_items</code></li>
            <li>Column names: <code>snake_case_singular</code> — e.g., <code>user_id</code>, <code>created_at</code>
            </li>
        </ul>

        <h3>7. General Guidelines</h3>
        <ul>
            <li>Be consistent throughout the project</li>
            <li>Use meaningful, self-explanatory names</li>
            <li>Avoid abbreviations unless extremely common (<code>id</code>, <code>url</code>, etc.)</li>
            <li>Don’t mix naming styles in the same scope (e.g., don’t use both <code>$UserName</code> and
                <code>$user_name</code>)</li>
        </ul>

        <p class="note">A good name tells you what the variable or function does without needing a comment.</p>

    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>