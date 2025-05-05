<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 11 | PHP Operators";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <h1>PHP Operators</h1>

        <h2>Operator Categories</h2>
        <h3>By Number of Operands</h3>
        <ul>
            <li><strong>Unary:</strong> ! (NOT), ++, --, - (negation)</li>
            <li><strong>Binary:</strong> =, +, -, *, /, ==, ===</li>
            <li><strong>Ternary:</strong> ? : (conditional operator)</li>
        </ul>

        <h2>Arithmetic Operators</h2>
        <code>
        &lt;?php<br>
        $x = 5; $y = 2;<br>
        echo $x + $y;   // 7<br>
        echo $x - $y;   // 3<br>
        echo $x * $y;   // 10<br>
        echo $x / $y;   // 2.5<br>
        echo $x % $y;   // 1<br>
        echo $x ** $y;  // 25<br>
        ?&gt;
    </code>

        <h2>Assignment Operators</h2>
        <code class="correct">
        &lt;?php<br>
        $x = 5;<br>
        $x += 3;  // 8<br>
        $x **= 2; // 64<br>
        $x .= " apples"; // "64 apples"<br>
        ?&gt;
    </code>

        <h2>String Operators</h2>
        <code>
        &lt;?php<br>
        $greet = "Hello" . " " . "World";<br>
        $greet .= "!";  // "Hello World!"<br>
        ?&gt;
    </code>

        <h2>Comparison Operators</h2>
        <div class="grid">
            <code>
            // Loose comparison<br>
            5 == "5";   // true<br>
            1 == true;  // true<br>
        </code>
            <code class="correct">
            // Strict comparison<br>
            5 === "5";  // false<br>
            1 === true; // false<br>
        </code>
        </div>
        <code>
        &lt;?php<br>
        echo 5 <=> 3;  // 1 (spaceship operator)<br>
        echo 2 <=> 5;  // -1<br>
        echo 5 <=> 5;  // 0<br>
        ?&gt;
    </code>

        <h2>Logical Operators</h2>
        <table>
            <tr>
                <th>Operator</th>
                <th>Example</th>
                <th>Note</th>
            </tr>
            <tr>
                <td>&&</td>
                <td>$a && $b</td>
                <td>Higher precedence</td>
            </tr>
            <tr>
                <td>and</td>
                <td>$a and $b</td>
                <td>Lower precedence</td>
            </tr>
            <tr>
                <td>||</td>
                <td>$a || $b</td>
                <td>Higher precedence</td>
            </tr>
            <tr>
                <td>xor</td>
                <td>$a xor $b</td>
                <td>True if either true, not both</td>
            </tr>
        </table>

        <h3>Operator Precedence</h3>
        <code class="wrong">
        &lt;?php<br>
        $result = true && false;  // $result = false<br>
        ?&gt;
    </code>
        <code class="correct">
        &lt;?php<br>
        $result = (true and false); // Explicit grouping<br>
        ?&gt;
    </code>

        <p class="note">Always use parentheses to clarify precedence - <code>&&</code> has higher priority than
            <code>=</code>!</p>

        <strong>Key Precedence Order (High to Low):</strong>
        <ol>
            <li>** (exponentiation)</li>
            <li>++ -- (increment/decrement)</li>
            <li>* / %</li>
            <li>+ - .</li>
            <li>
                < <=> >=
            </li>
            <li>== != === !== <=>
            </li>
            <li>&&</li>
            <li>||</li>
            <li>?? (null coalescing)</li>
            <li>?: (ternary)</li>
            <li>= += -= etc.</li>
            <li>and</li>
            <li>xor</li>
            <li>or</li>
        </ol>

        <h2>Best Practices</h2>
        <ul>
            <li>Use <code>===</code> instead of <code>==</code> for type-safe comparisons</li>
            <li>Avoid complex operator combinations in single expressions</li>
            <li>Use parentheses for explicit precedence control</li>
            <li>Prefer <code>&&</code> over <code>and</code> for consistency</li>
        </ul>
    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>