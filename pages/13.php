<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 13 | PHP Loops (While/Do While)/For/Foreach";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
    <h1>PHP Loops</h1>

    <h2>Loop Types</h2>
    <table>
        <tr>
            <th>Loop Type</th>
            <th>Syntax</th>
            <th>Best Use Case</th>
        </tr>
        <tr>
            <td>while</td>
            <td><code>while (condition) { ... }</code></td>
            <td>Unknown iterations</td>
        </tr>
        <tr>
            <td>do-while</td>
            <td><code>do { ... } while (condition);</code></td>
            <td>Guaranteed first execution</td>
        </tr>
        <tr>
            <td>for</td>
            <td><code>for (init; condition; increment) { ... }</code></td>
            <td>Fixed iterations</td>
        </tr>
        <tr>
            <td>foreach</td>
            <td><code>foreach ($array as $value) { ... }</code></td>
            <td>Array traversal</td>
        </tr>
    </table>

    <h2>While Loops</h2>
    <code class="correct">
        &lt;?php<br>
        // Traditional syntax<br>
        $i = 1;<br>
        while ($i <= 5) {<br>
            echo $i++;<br>
        }<br>
        // Output: 12345<br>
        ?&gt;
    </code>

    <code>
        &lt;?php<br>
        // Alternative syntax<br>
        $count = 3;<br>
        while ($count > 0): ?&gt;<br>
            &lt;p&gt;Countdown: &lt;?= $count-- ?&gt;&lt;/p&gt;<br>
        &lt;?php endwhile; ?&gt;
    </code>

    <h3>Flow Control</h3>
    <div class="grid">
        <code>
            // Continue example<br>
            $i = 0;<br>
            while ($i++ < 5) {<br>
                if ($i == 3) continue;<br>
                echo $i;<br>
            }<br>
            // Output: 1245
        </code>

        <code>
            // Break example<br>
            while (true) {<br>
                if ($i >= 10) break;<br>
                echo $i++;<br>
            }
        </code>
    </div>

    <h2>For Loops</h2>
    <code>
        &lt;?php<br>
        // Multiple expressions<br>
        for ($i=0, $j=10; $i<10; $i++, $j--) {<br>
            echo "$i-$j ";<br>
        }<br>
        // Output: 0-10 1-9 ... 9-1<br>
        ?&gt;
    </code>

    <h2>Foreach Loops</h2>
    <div class="grid">
        <code>
            // Indexed array<br>
            $colors = ["Red", "Green", "Blue"];<br>
            foreach ($colors as $index => $color) {<br>
                echo "$index: $color";<br>
            }
        </code>

        <code>
            // Associative array<br>
            $user = ["name" => "John", "age" => 30];<br>
            foreach ($user as $key => $value) {<br>
                echo "$key: $value";<br>
            }
        </code>
    </div>

    <h3>Nested Arrays Handling</h3>
    <code>
        &lt;?php<br>
        $data = [<br>
            "name" => "John",<br>
            "skills" => ["PHP", "JavaScript"],<br>
            "projects" => [<br>
                "Web" => ["E-commerce", "CMS"],<br>
                "Mobile" => ["Android"]<br>
            ]<br>
        ];<br>
        <br>
        foreach ($data as $key => $value) {<br>
            if (is_array($value)) {<br>
                echo "$key:";<br>
                foreach ($value as $subKey => $subValue) {<br>
                    if (is_array($subValue)) {<br>
                        echo " $subKey:";<br>
                        foreach ($subValue as $item) {<br>
                            echo " $item";<br>
                        }<br>
                    } else {<br>
                        echo " $subValue";<br>
                    }<br>
                }<br>
            } else {<br>
                echo "$key: $value";<br>
            }<br>
        }<br>
        ?&gt;
    </code>
    <p class="note">For multi-dimensional arrays, use recursive functions or implement depth checking with <code>is_array()</code> at each level.</p>

    <h2>Best Practices</h2>
    <ul>
        <li>Avoid modifying array pointers during foreach loops</li>
        <li>Use <code>count()</code> for array length checks in for loops</li>
        <li>Always initialize loop counters before use</li>
        <li>Prefer foreach for array traversal</li>
        <li>Use <code>break 2;</code> to exit nested loops</li>
    </ul>

    <strong>Common Pitfalls:</strong>
    <ul>
        <li>Infinite loops from missing increment statements</li>
        <li>Modifying the original array during foreach</li>
        <li>Confusing <code>continue</code> and <code>break</code> levels</li>
        <li>Off-by-one errors in loop conditions</li>
    </ul>
</div>
</div>
<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>