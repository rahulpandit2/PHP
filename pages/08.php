<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 08 | PHP null data type";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <div class="card">
            <h1>PHP null Data Type</h1>

            <h2>Null Basics</h2>
            <p>A variable is considered <span class="inline">null</span> if:</p>
            <code>
        &lt;?php<br>
        // Explicit null assignment<br>
        $task = null;<br>
        var_dump($task);          // NULL<br>
        <br>
        // Accessing undefined variable<br>
        var_dump($undefinedVar);  // NULL (with E_NOTICE)<br>
        <br>
        // After unset()<br>
        $temp = 'data';<br>
        unset($temp);<br>
        var_dump($temp);          // NULL (with E_NOTICE)<br>
        ?&gt;
    </code>

            <h2>Type Juggling with Null</h2>
            <code class="correct">
        &lt;?php<br>
        // Conversion examples<br>
        var_dump((bool)null);    // bool(false)<br>
        var_dump((string)null);  // string(0) ""<br>
        var_dump((int)null);     // int(0)<br>
        var_dump((array)null);   // array(0) { }<br>
        ?&gt;
    </code>

            <h3>Null in Comparisons</h3>
            <code>
        &lt;?php<br>
        $x = null;<br>
        var_dump($x == false);   // bool(true)<br>
        var_dump($x === null);   // bool(true)<br>
        var_dump(isset($x));     // bool(false)<br>
        ?&gt;
    </code>

            <p class="note">Use <span class="inline">is_null()</span> for safe null checks. Avoid using <span
                    class="inline">isset()</span> on unset variables as it returns false for undefined variables.</p>

            <strong>Key Null Behavior:</strong>
            <ul>
                <li>Only <span class="inline">null</span> type variable passes <span class="inline">is_null()</span> check</li>
                <li>Null is case-insensitive (<span class="inline">NULL</span>, <span class="inline">Null</span>, <span class="inline">null</span>)</li>
                <li>Functions without return statements implicitly return null</li>
            </ul>
        </div>
    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>