<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 06 | PHP Floating Point Numbers";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <h1>PHP Floating Point Numbers</h1>

        <h2>Float Basics</h2>
        <p>A float (floating-point number) contains decimal values or uses exponential notation:</p>
        <code>
        &lt;?php<br>
        $a = 13.5;      // Decimal<br>
        $b = -5.0;      // Negative float<br>
        $c = 11.9e4;    // 119000<br>
        $d = 11.9e-4;   // 0.00119<br>
        ?&gt;
    </code>

        <h2>Float Limits</h2>
        <code class="correct">
        &lt;?php<br>
        echo PHP_FLOAT_MAX;  // ~1.7976931348623E+308<br>
        echo PHP_FLOAT_MIN;  // ~2.2250738585072E-308<br>
        <br>
        $inf = PHP_FLOAT_MAX * 2;<br>
        var_dump($inf);      // float(INF)<br>
        ?&gt;
    </code>
        <p class="note">Values exceeding limits become <span class="inline">INF</span> (infinity).</p>

        <h2>Float Validation Functions</h2>
        <code>
        &lt;?php<br>
        $num = 5.75;<br>
        var_dump(is_float($num));    // bool(true)<br>
        var_dump(is_infinite($inf)); // bool(true)<br>
        var_dump(is_finite(5.5));    // bool(true)<br>
        <br>
        $nan = log(-1);<br>
        var_dump(is_nan($nan));      // bool(true)<br>
        ?&gt;
    </code>

        <h2>Precision Issues</h2>
        <code class="wrong">
        &lt;?php<br>
        var_dump(0.23 == (1 - 0.77));        // bool(false)<br>
        var_dump(floor((0.1 + 0.7) * 10));   // float(7) instead of 8<br>
        var_dump(ceil((0.1 + 0.2) * 10));    // float(4) instead of 3<br>
        ?&gt;
    </code>
        <p class="note">Never compare floats directly due to binary representation inaccuracies.</p>

        <h2>Type Casting</h2>
        <code>
        &lt;?php<br>
        // Float → Integer<br>
        $price = 9.99;<br>
        echo (int)$price;  // 9 (truncates decimal)<br>
        <br>
        // Float → String<br>
        $temp = 98.6;<br>
        var_dump((string)$temp); // string(4) "98.6"<br>
        <br>
        // Float → Boolean<br>
        var_dump((bool)0.0);    // bool(false)<br>
        var_dump((bool)5.5);    // bool(true)<br>
        ?&gt;
    </code>

        <strong>Key Float Behavior:</strong>
        <ul>
            <li>Use <span class="inline">round()</span> for precise decimal operations</li>
            <li><span class="inline">NAN</span> propagates through calculations</li>
            <li>Exponential notation auto-converts to float type</li>
        </ul>
    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>