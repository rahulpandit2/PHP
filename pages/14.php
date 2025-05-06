<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 14 | PHP Switch Statement";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <h1>PHP Switch Statements</h1>

        <h2>Basic Syntax</h2>
        <code>
        &lt;?php<br>
        switch (expression) {<br>
            case value1:<br>
                // code block<br>
                break;<br>
            case value2:<br>
                // code block<br>
                break;<br>
            default:<br>
                // default code block<br>
        }<br>
        ?&gt;
    </code>

        <h3>Traditional Syntax Example</h3>
        <code class="correct">
        &lt;?php<br>
        $userType = 'moderator';<br>
        switch ($userType) {<br>
            case 'admin':<br>
                echo "Full access granted";<br>
                break;<br>
            case 'moderator':<br>
                echo "Partial access granted";<br>
                break;<br>
            default:<br>
                echo "Guest access";<br>
        }<br>
        // Output: Partial access granted<br>
        ?&gt;
    </code>

        <h2>Key Advantages over if-else</h2>
        <div class="grid">
            <code class="wrong">
            // if-else approach<br>
            if (getStatus() === 'pending') {}<br>
            elseif (getStatus() === 'approved') {}<br>
            elseif (getStatus() === 'rejected') {}<br>
            // Calls getStatus() 3 times
        </code>

            <code class="correct">
            // switch approach<br>
            switch (getStatus()) {<br>
                case 'pending': ... break;<br>
                case 'approved': ... break;<br>
                case 'rejected': ... break;<br>
            }<br>
            // Calls getStatus() once
        </code>
        </div>

        <h2>HTML-Embedded Syntax</h2>
        <code>
        &lt;?php $weather = 'sunny'; ?&gt;<br>
        &lt;?php switch ($weather): ?&gt;<br>
            &lt;?php case 'rainy': ?&gt;<br>
                &lt;div class="alert"&gt;☔ Bring umbrella&lt;/div&gt;<br>
            &lt;?php break; ?&gt;<br>
            &lt;?php case 'sunny': ?&gt;<br>
                &lt;div class="alert"&gt;😎 Wear sunglasses&lt;/div&gt;<br>
            &lt;?php break; ?&gt;<br>
            &lt;?php default: ?&gt;<br>
                &lt;div&gt;Check weather updates&lt;/div&gt;<br>
        &lt;?php endswitch; ?&gt;
    </code>

        <h3>Flow Control Features</h3>
        <div class="grid">
            <code>
            // Intentional fall-through<br>
            switch ($day) {<br>
                case 'Saturday':<br>
                case 'Sunday':<br>
                    echo "Weekend!";<br>
                    break;<br>
                default:<br>
                    echo "Weekday";<br>
            }
        </code>

            <code class="wrong">
            // Missing break<br>
            case 'admin':<br>
                echo "Admin access";<br>
            case 'user':<br>
                echo "User access";  // Both execute!
        </code>
        </div>

        <h2>Comparison Table: switch vs if-else</h2>
        <table>
            <tr>
                <th></th>
                <th>switch</th>
                <th>if-else</th>
            </tr>
            <tr>
                <td>Expression Evaluation</td>
                <td>Once</td>
                <td>Multiple times</td>
            </tr>
            <tr>
                <td>Comparison Type</td>
                <td>Loose (==)</td>
                <td>Strict (===)</td>
            </tr>
            <tr>
                <td>Best For</td>
                <td>Fixed value checks</td>
                <td>Range/complex conditions</td>
            </tr>
        </table>

        <p class="note">Switch statements use <strong>loose comparison</strong>. For strict checks:<br>
            <code>case (true):<br>
    $var === 'value'</code>
        </p>

        <strong>Best Practices:</strong>
        <ul>
            <li>Always include <code>break</code> unless fall-through is intentional</li>
            <li>Use <code>default</code> case for unhandled scenarios</li>
            <li>Prefer for 3+ fixed value comparisons</li>
            <li>Avoid complex expressions in case statements</li>
        </ul>

        <h2>Real-World Use Cases</h2>
        <ul>
            <li>User role/permission checks</li>
            <li>HTTP status code handling</li>
            <li>API response parsing</li>
            <li>Menu/navigation rendering</li>
        </ul>
    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>