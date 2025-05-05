<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 12 | PHP Control Structures if/elseif/else Statements";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <h2>Chapter 12: if / elseif / else Statements</h2>

        <p>
            PHP provides structured conditional logic using <code class="inline">if</code>, <code
                class="inline">elseif</code>, and <code class="inline">else</code> statements. These are essential for
            executing different blocks of code based on varying conditions.
        </p>

        <p>
            The <code class="inline">if</code> block runs only when its condition evaluates to <strong>true</strong>.
            Additional scenarios can be handled using <code class="inline">elseif</code>, and <code
                class="inline">else</code> serves as a fallback when no prior conditions are met.
        </p>

        <h3>Standard Syntax</h3>

        <pre><code class="correct">
$age = 20;

if ($age &lt; 18) {
    echo "&lt;p&gt;You are a minor.&lt;/p&gt;";
} elseif ($age &gt;= 18 &amp;&amp; $age &lt; 65) {
    echo "&lt;p&gt;You are an adult.&lt;/p&gt;";
} else {
    echo "&lt;p&gt;You are a senior citizen.&lt;/p&gt;";
}
</code></pre>

        <p><strong>Output:</strong> <span class="output">You are an adult.</span></p>

        <h3>Alternative Syntax for Embedded HTML</h3>

        <p>
            PHP allows an alternative syntax for better readability when mixing logic with HTML. This version uses
            colons and <code class="inline">endif</code>, and requires <code class="inline">elseif</code> (not <code
                class="inline">else if</code>).
        </p>

        <pre><code class="correct">
&lt;?php $age = 80; ?&gt;

&lt;?php if ($age &lt; 18): ?&gt;
    &lt;p&gt;You are a minor.&lt;/p&gt;
&lt;?php elseif ($age &gt;= 18 &amp;&amp; $age &lt; 65): ?&gt;
    &lt;p&gt;You are an adult.&lt;/p&gt;
&lt;?php else: ?&gt;
    &lt;p&gt;You are a senior citizen.&lt;/p&gt;
&lt;?php endif; ?&gt;
</code></pre>

        <p><strong>Output:</strong> <span class="output">You are a senior citizen.</span></p>

        <div class="note">
            <strong>Note:</strong> In HTML-embedded syntax, always use <code class="inline">elseif</code>. The
            traditional <code class="inline">else if</code> is not valid in this format.
        </div>

    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>