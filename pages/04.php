<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 04 | PHP Booleans";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <h1>PHP Booleans</h1>
        <p>Booleans in PHP are used to represent truth values: <strong>true</strong> or <strong>false</strong>. They are
            one of the simplest and most fundamental scalar data types.</p>

        <h2>Understanding Boolean Values</h2>
        <p>PHP considers the following values as <strong>false</strong>:</p>
        <ul>
            <li><code>false</code> (or any capitalization like <code>FALSE</code>, <code>False</code>)</li>
            <li><code>0</code>, <code>-0</code></li>
            <li><code>0.0</code>, <code>-0.0</code></li>
            <li><code>'0'</code> (string containing zero)</li>
            <li><code>''</code> (an empty string)</li>
            <li><code>[]</code> (an empty array)</li>
            <li><code>null</code> (no value)</li>
        </ul>

        <p class="note">Important: The string <span class="inline">'false'</span> is <em>not</em> false. It is
            actually considered <strong>true</strong> because it is a non-empty string.</p>

        <h2>Examples</h2>
        <code>
    &lt;?php <br>
    $isProductInStock = false; <br>
    var_dump($isProductInStock); <br><br>

    $isProductInStock = 0; <br>
    var_dump($isProductInStock); <br><br>

    $isProductInStock = 'false'; <br>
    var_dump($isProductInStock); // Outputs: string(5) "false" => true <br>
    ?&gt;
</code>

        <h2>Checking for Boolean Type</h2>
        <p>You can check whether a variable is a boolean using:</p>
        <code>
    &lt;?php <br>
    $status = true; <br>
    var_dump(is_bool($status)); // Outputs: bool(true) <br>
    ?&gt;
</code>

        <p>Alternatively, <span class="inline">var_dump()</span> alone will also show the data type and its value directly.</p>
    </div>
    <div class="card">
        <h2>Type casting booleans.</h2>
        <p>When booleans are type casted into strings the true and false value becomes "1" and "" i.e. empty string</p>
        <code>
    &lt;?php <br>
    $isProductInStock = true; <br>
    $isProductInStock = (string) $isProductInStock; <br>
    var_dump($isProductInStock); // Outputs: string(1) "1" <br><br>
    $isProductInStock = false; <br>
    $isProductInStock = (string) $isProductInStock; <br>
    var_dump($isProductInStock); // Outputs: string(0) "" <br>
    ?&gt;
        </code>
        <p>When booleans are type casted into int the true and false value becomes 1 and 0</p>
        <code>
    &lt;?php <br>
    $isProductInStock = true; <br>
    $isProductInStock = (int) $isProductInStock; <br>
    var_dump($isProductInStock); // Outputs: integer(1) <br><br>
    $isProductInStock = false; <br>
    $isProductInStock = (int) $isProductInStock; <br>
    var_dump($isProductInStock); // Outputs: integer(0) <br>
    ?&gt;
        </code>
        <p>When booleans are type casted into float the true and false value becomes 1 and 0</p>
        <code>
    &lt;?php <br>
    $isProductInStock = true; <br>
    $isProductInStock = (float) $isProductInStock; <br>
    var_dump($isProductInStock); // Outputs: float(1) <br><br>
    $isProductInStock = false; <br>
    $isProductInStock = (float) $isProductInStock; <br>
    var_dump($isProductInStock); // Outputs: float(0) <br>
    ?&gt;
        </code>
    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>