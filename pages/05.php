<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 05 | PHP Integers";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <h1>PHP Integers</h1>
        
        <h2>Integer Basics</h2>
        <p>An integer is a whole number without a decimal point. PHP supports various representations:</p>

        <code>
            &lt;?php<br>
            $a = 1234;          // Decimal<br>
            $b = 0b1110111;     // Binary (prefix 0b)<br>
            $c = 0123;          // Octal (prefix 0)<br>
            $d = 0x1A;          // Hexadecimal (prefix 0x)<br>
            $e = 2_000_000;     // Underscore notation (PHP 7.4+)<br>
            ?&gt;
        </code>

        <h3>Representation Formats</h3>
        <ul>
            <li><strong>Decimal:</strong> Regular numbers <code>1234</code></li>
            <li><strong>Binary:</strong> Prefixed with <span class="inline">0b</span> <code>0b1010</code></li>
            <li><strong>Octal:</strong> Prefixed with <span class="inline">0</span> <code>0755</code></li>
            <li><strong>Hexadecimal:</strong> Prefixed with <span class="inline">0x</span> <code>0x1F</code></li>
        </ul>

        <h2>Integer Limits and Behavior</h2>
        <code class="correct">
            &lt;?php<br>
            echo PHP_INT_MAX;    // 9223372036854775807 (64-bit systems)<br>
            echo PHP_INT_MIN;    // -9223372036854775808<br>
            echo PHP_INT_SIZE;   // 8 (bytes)<br>
            <br>
            $large = PHP_INT_MAX + 1;<br>
            var_dump($large);    // float(9.2233720368548E+18)<br>
            ?&gt;
        </code>
        <p class="note">Exceeding integer limits automatically converts values to floats with exponential notation.</p>

        <h2>Type Casting</h2>
        <code>
            &lt;?php<br>
            // Integer to other types<br>
            $num = 123;<br>
            var_dump((string)$num);  // string(3) "123"<br>
            var_dump((bool)$num);    // bool(true)<br>
            <br>
            $zero = 0;<br>
            var_dump((string)$zero); // string(1) "0"<br>
            var_dump((bool)$zero);   // bool(false)<br>
            ?&gt;
        </code>

        <h2>String to Integer Conversion</h2>
        <code class="correct">
            &lt;?php<br>
            echo (int)'12hello';     // 12<br>
            echo (int)'3.14test';    // 3<br>
            echo (int)'test';       // 0<br>
            ?&gt;
        </code>

        <code class="wrong">
            &lt;?php<br>
            // Underscore notation in strings<br>
            echo (int)'2_000_000';  // Outputs 2<br>
            ?&gt;
        </code>
        <p class="note">PHP ignores underscores in numeric literals but <strong>doesn't parse them in strings</strong> during conversion.</p>

        <strong>Key Behavior: Non-numeric leading characters in strings result in 0 during conversion to integer.</strong>
        <p class="note">A <span class="inline">null</span> is also considered as int 0.</p>
    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>