<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 02 | PHP Constants and Variable Variables";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <h1>PHP Constants and Variable Variables</h1>

        <h2>PHP Constants</h2>
        <p>A constant is similar to a variable, except that once it is defined, it <strong>cannot be changed or undefined</strong>.</p>
        <p>Constants follow the same naming convention as variables but <strong>do not use the <span class="inline">$</span> symbol</strong> when being accessed.</p>

        <h3>Defining Constants</h3>
        <p>Constants are typically defined using the <span class="inline">define()</span> function:</p>
        <code>
            &lt;?php <br>
            define('SITE_NAME', 'MyWebsite'); <br>
            echo SITE_NAME; <br>
            ?&gt;
            <br><br>
            // output <br>
            MyWebsite
        </code>
        <p class="note">Constants are global and can be accessed anywhere after they are defined.</p>

        <h3>Checking if a Constant is Defined</h3>
        <code>
            &lt;?php <br>
            if (defined('SITE_NAME')) { <br>
            &nbsp;&nbsp;&nbsp;&nbsp;echo "Constant is defined"; <br>
            } <br>
            ?&gt;
        </code>
        <p class="note">The <span class="inline">defined()</span> function returns <span class="inline">true</span> (1) if the constant is defined, else it returns <span class="inline">false</span> (0).</p>

        <h3>Using <span class="inline">const</span> Keyword</h3>
        <p>Constants can also be defined using the <span class="inline">const</span> keyword, but these must be declared at the top level of the script, not inside functions or conditionals.</p>
        <code>
            &lt;?php <br>
            const PI = 3.14159; <br>
            echo PI; <br>
            ?&gt;
        </code>

        <h2>Variable Variables</h2>
        <p>PHP allows the creation of variable names dynamically using the value of another variable. This is called a <strong>variable variable</strong>.</p>

        <h3>Basic Example</h3>
        <code>
            &lt;?php <br>
            $foo = 'bar'; <br>
            $$foo = 'bus'; <br>
            <br>// or <br>
            echo $foo . "&" . $$foo; <br>
            <br>// or <br>
            echo $foo . "&" . {$$foo}; <br>
            <br>// or <br>
            echo $foo . "&" . ${$foo}; <br>
            <br>// or <br>
            echo $foo . "&" . $bar; <br>
            ?&gt;
            <br><br>
            // output <br>
            bar & bus
        </code>
        <p class="note">Here, <span class="inline">$$foo</span> becomes <span class="inline">$bar</span> because the value of <span class="inline">$foo</span> is <span class="inline">'bar'</span>.</p>

        <h3>Practical Use Case: Constants with Dynamic Names</h3>
        <code>
            &lt;?php <br>
            $paid = 'PAID'; <br>
            define('STATUS_' . $paid, true); <br>
            echo STATUS_PAID; <br>
            ?&gt;
            <br><br>
            // output <br>
            1
        </code>

        <h2>Magic Constants</h2>
        <p>PHP provides a set of <strong>magic constants</strong> that change depending on where they are used. These include:</p>
        <ul>
            <li><code>__LINE__</code> – The current line number in the file.</li>
            <li><code>__FILE__</code> – The full path and filename of the file.</li>
            <li><code>__DIR__</code> – The directory of the file.</li>
            <li><code>__FUNCTION__</code> – The function name.</li>
            <li><code>__CLASS__</code> – The class name.</li>
            <li><code>__METHOD__</code> – The method name.</li>
            <li><code>__NAMESPACE__</code> – The current namespace.</li>
        </ul>
        <code>
            &lt;?php <br>
            echo __FILE__; <br>
            echo __LINE__; <br>
            ?&gt;
        </code>
        <p class="note">These are very useful for debugging or dynamically generating metadata about your code.</p>

    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>