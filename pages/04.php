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

        <p class="note"><strong>Important:</strong> The string <code>'false'</code> is <em>not</em> false. It is
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

        <p>Alternatively, <code>var_dump()</code> alone will also show the data type and its value directly.</p>
    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>