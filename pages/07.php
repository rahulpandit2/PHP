<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 07 | PHP Strings, Heredoc & Nowdoc Syntax";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <h1>PHP Strings, Heredoc & Nowdoc Syntax</h1>

        <h2>String Basics</h2>
        <code>
        &lt;?php<br>
        $name = "Rahul";<br>
        echo $name[0];       // R<br>
        $name[0] = "r";      // Modifies first character<br>
        echo $name;          // rahul<br>
        echo $name[-1];      // l (negative index support)<br>
        ?&gt;
    </code>
        <p class="note">PHP strings are <strong>immutable at the structural level</strong> but allow <em>character-level
                modifications</em> via index access.</p>

        <h2>String Interpolation</h2>
        <code class="correct">
        &lt;?php<br>
        // Double quotes (parses variables)<br>
        echo "Hello $name";          // Hello Rahul<br>
        echo "Hello {$name}!";       // Hello Rahul!<br>
        <br>
        // Single quotes (no parsing)<br>
        echo 'Hello $name';          // Hello $name<br>
        ?&gt;
    </code>

        <h2>Heredoc Syntax</h2>
        <code>
        &lt;?php<br>
        $heredoc = &lt;&lt;&lt;HTML<br>
        &lt;div&gt;<br>
            &lt;h1&gt;Hello $name&lt;/h1&gt;<br>
            &lt;p&gt;Multi-line text with variables&lt;/p&gt;<br>
        &lt;/div&gt;<br>
        HTML;<br>
        <br>
        echo nl2br($heredoc);  // Convert newlines to &lt;br&gt;<br>
        ?&gt;
    </code>

        <h2>Nowdoc Syntax</h2>
        <code>
        &lt;?php<br>
        $nowdoc = &lt;&lt;&lt;'TEXT'<br>
        Raw content without variable parsing:<br>
        $name will appear literally<br>
        TEXT;<br>
        ?&gt;
    </code>

        <h3>Identifier Rules</h3>
        <ul>
            <li>Use <strong>any valid PHP label</strong> (EOT, MARKUP, DOC, etc.)</li>
            <li>Closing identifier must:
                <ul>
                    <li>Be on its own line</li>
                    <li>Start at the first column</li>
                    <li>Match opening identifier exactly</li>
                </ul>
            </li>
        </ul>

        <strong>Key Differences:</strong>
        <table>
            <tr>
                <th>Heredoc</th>
                <th>Nowdoc</th>
            </tr>
            <tr>
                <td>Parses variables</td>
                <td>Treats content as raw text</td>
            </tr>
            <tr>
                <td>Uses &lt;&lt;&lt;IDENTIFIER</td>
                <td>Uses &lt;&lt;&lt;'IDENTIFIER'</td>
            </tr>
        </table>

        <p class="note">Always assign <span class="inline">nl2br()</span> result to a variable:
            <code>$formatted = nl2br($heredoc);</code></p>
    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>