<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 03 | PHP Data types and Type casting";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <h1>PHP Data Types and Type Casting</h1>

        <h2>Scalar Data Types</h2>
        <p>Scalar data types hold a single value. The main scalar types in PHP are:</p>
        <ul>
            <li><strong>boolean</strong></li>
            <li><strong>integer</strong></li>
            <li><strong>float</strong> (also known as double)</li>
            <li><strong>string</strong></li>
        </ul>

        <h3>Boolean</h3>
        <p>A boolean represents a value of <span class="inline">true</span> or <span class="inline">false</span>.</p>
        <code>
    &lt;?php <br>
    $discounted = true; <br>
    echo $discounted; <br>
    ?&gt;
    <br><br>
    // output <br>
    1
</code>
        <p class="note">When a boolean is echoed directly, <span class="inline">true</span> is output as <span
                class="inline">1</span> and <span class="inline">false</span> is output as an empty string. This happens
            because PHP tries to convert the boolean to a string.</p>

        <h3>Integer</h3>
        <p>Integers are whole numbers without decimal points.</p>
        <code>
    &lt;?php <br>
    $quantity = 10; <br>
    echo $quantity; <br>
    ?&gt;
</code>

        <h3>Float</h3>
        <p>Floats (or doubles) are numbers with decimal points.</p>
        <code>
    &lt;?php <br>
    $price = 9.99; <br>
    echo $price; <br>
    ?&gt;
</code>

        <h3>String</h3>
        <p>Strings are ordered collections of characters, enclosed in single or double quotes.</p>
        <code>
    &lt;?php <br>
    $item_name = "Pen"; <br>
    echo $item_name; <br>
    ?&gt;
</code>
        <p class="note">An empty string <span class="inline">""</span> evaluates to <span class="inline">false</span> in
            boolean context.</p>

        <h2>Getting Information About a Variable</h2>
        <p>You can use the <span class="inline">var_dump()</span> function to get the type and value of any variable.
        </p>
        <code>
    &lt;?php <br>
    var_dump($item_name); <br>
    ?&gt;
    <br><br>
    // output <br>
    string(3) "Pen"
</code>

        <h2>Type Casting</h2>
        <p>PHP is a loosely typed language, but we can manually cast one data type into another using parentheses.</p>
        <code>
    &lt;?php <br>
    $price = 9.99; <br>
    $price = (int) $price; <br>
    echo $price; <br>
    ?&gt;
    <br><br>
    // output <br>
    9
</code>
        <p class="note">Type casting a float to an int will remove the fractional part.</p>

        <h3>Example Summary</h3>
        <code>
    &lt;?php <br>
    $is_in_stock = true; <br>
    $quantity = 10; <br>
    $price = 9.99; <br>
    $item_name = "Pen"; <br><br>

    var_dump($is_in_stock); <br>
    var_dump($quantity); <br>
    var_dump($price); <br>
    var_dump($item_name); <br>
    ?&gt;
</code>

        <p>This chapter introduces how PHP handles different scalar values and how you can control type behavior
            manually through type casting.</p>

        <h2>Other PHP Data Types</h2>

        <h3>Compound Types</h3>
        <p>Compound types can hold multiple values or a combination of different values:</p>
        <ol>
            <li>
                <strong>Array:</strong> Declared using <span class="inline">[]</span> for an empty array or with initial
                values. An array can contain all types of scalar data at once.
                <br>
                <code>
            &lt;?php <br>
            $mixed_array = [1, "two", 3.0, true]; <br>
            var_dump($mixed_array); <br>
            ?&gt;
        </code>
            </li>
            <li><strong>Object:</strong> An instance of a class. Used in object-oriented programming.</li>
            <li><strong>Callable:</strong> A variable that can be called as a function, like an anonymous function or a
                string containing the name of a function.</li>
            <li><strong>Iterable:</strong> A pseudo-type that includes both arrays and objects that can be looped
                through using <span class="inline">foreach</span>.</li>
        </ol>

        <h3>Special Types</h3>
        <ol>
            <li>
                <strong>Resource:</strong> A special variable, holding a reference to an external resource (e.g.,
                database connections, file handles).
            </li>
            <li>
                <strong>NULL:</strong> A variable with no value assigned, or explicitly set using <span
                    class="inline">NULL</span>.
                <br>
                <code>
            &lt;?php <br>
            $name = NULL; <br>
            var_dump($name); <br>
            ?&gt;
        </code>
            </li>
        </ol>

        <h2>Type Hinting and Strict Types</h2>
        <p>By default, PHP does not enforce strict typing. This means it can automatically convert one data type into
            another when needed. However, this behavior can be changed.</p>

        <h3>Enforcing Strict Types</h3>
        <p>Use the <span class="inline">declare(strict_types=1);</span> directive at the top of the file to enable
            strict type enforcement.</p>
        <code>
    &lt;?php <br>
    declare(strict_types=1); <br><br>

    function sum(int $a, int $b): int { <br>
    &nbsp;&nbsp;&nbsp;&nbsp;return $a + $b; <br>
    } <br><br>

    echo sum(5, 10); <br>
    ?&gt;
</code>

        <p class="note">Without strict types, PHP will attempt to convert values to the expected type. With strict
            types, mismatched types will throw a TypeError.</p>

        <h3>Function Return Types</h3>
        <p>Function declarations can also specify return types after a colon. The function above returns an <span
                class="inline">int</span>.</p>

        <p>This concludes our overview of PHP's core data types and how to control type behavior using casting and type
            hinting. Advanced types like object, callable, and iterable will be explored in depth in later chapters.</p>

    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>