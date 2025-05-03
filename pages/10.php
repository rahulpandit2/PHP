<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 10 | PHP Expressions";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <h1>PHP Expressions</h1>

        <h2>Expression Basics</h2>
        <p>An expression is any valid PHP code that resolves to a value. Every expression has:</p>
        <ul>
            <li>A <strong>value</strong> (literal/variable/result)</li>
            <li>A <strong>type</strong> (int/string/bool/etc.)</li>
        </ul>

        <code>
        &lt;?php<br>
        // Simple expressions<br>
        42;                     // Literal integer expression<br>
        "Hello World";          // Literal string expression<br>
        $price * 1.18;          // Arithmetic expression<br>
        $isValid ? 1 : 0;       // Ternary conditional expression<br>
        getUserRole($userId);   // Function call expression<br>
        ?&gt;
    </code>

        <h2>Types of Expressions</h2>
        <div class="grid">
            <code class="correct">
            // Variable expressions<br>
            $counter = 5;<br>
            $message = "Item count: " . $counter;
        </code>

            <code class="correct">
            // Compound expressions<br>
            ($temperature > 25) && ($isSummer = true);
        </code>
        </div>

        <h3>Complex Expression Example</h3>
        <code>
        &lt;?php<br>
        $result = (($price * $quantity) - $discount) + ($taxRate / 100);<br>
        /* Breakdown:<br>
        1. $price * $quantity<br>
        2. Subtract $discount<br>
        3. Add tax percentage<br>
        */<br>
        ?&gt;
    </code>

        <h2>Operator Precedence</h2>
        <code class="wrong">
        &lt;?php<br>
        $calc = 5 + 3 * 2;      // 11 (not 16)<br>
        $bool = true && false;  // false (&& has higher precedence than =)<br>
        ?&gt;
    </code>

        <code class="correct">
        &lt;?php<br>
        $calc = (5 + 3) * 2;    // 16<br>
        $bool = (true and false); // Uses lower-precedence 'and' operator<br>
        ?&gt;
    </code>

        <table>
            <tr>
                <th>Operator</th>
                <th>Precedence</th>
                <th>Example</th>
            </tr>
            <tr>
                <td>()</td>
                <td>Highest</td>
                <td>(2 + 3) * 4</td>
            </tr>
            <tr>
                <td>**</td>
                <td>1</td>
                <td>2 ** 3 → 8</td>
            </tr>
            <tr>
                <td>* / %</td>
                <td>2</td>
                <td>6 * 3 / 2 → 9</td>
            </tr>
            <tr>
                <td>+ - .</td>
                <td>3</td>
                <td>5 + "2" → 7</td>
            </tr>
            <tr>
                <td>== ===</td>
                <td>4</td>
                <td>5 == "5" → true</td>
            </tr>
        </table>

        <h2>Expression Best Practices</h2>
        <ul>
            <li>Break complex expressions into multiple steps</li>
            <li>Use parentheses for clarity even when not required</li>
            <li>Avoid side effects in expressions (e.g., assignments in comparisons)</li>
        </ul>

        <p class="note">All PHP scripts ultimately resolve to a sequence of expressions - even control structures like
            <span class="inline">if</span> and <span class="inline">while</span> use boolean expressions.</p>

        <strong>Key Characteristics:</strong>
        <ul>
            <li>Expressions can be used as statements</li>
            <li>Every expression evaluates to <span class="inline">true</span> or <span class="inline">false</span> in
                boolean context</li>
            <li>Function/method calls are expressions with return values</li>
        </ul>
    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>