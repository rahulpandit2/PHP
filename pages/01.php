<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 01 | PHP Basics and Syntax";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <h1>PHP Basics and Syntax</h1>
        <p>PHP is a server-side scripting language designed primarily for web development but also used as a general-purpose programming language. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by The PHP Group.</p>
        <h2>Syntex</h2>
        <p>A php code starts with <span class="inline">"&lt;?php"</span> and ends with <span class="inline">"?&gt;"</span></p>
        <p class="note">A php file that only containes php code shall not have the closing php tags i.e "?&gt;"</p>
        <p>Each php statement ends with a semicolon ";"</p>
        <code>
            &lt;?php <br>
            echo "Hello World"; <br>
            ?&gt;
            <br>
            <br>
            // output
            <br>
            Hello World
        </code>
        <br>
        <?php echo "Hello Rahul. Output using php code example used above"; ?>
        <br>
        <p>We can also output something in php using the print statement however it has a return value of 1 hence it adds a 1 at the end of the output.</p>
        <code>
            &lt;?php <br>
            print "Hello World"; <br>
            ?&gt;
            <br>
            <br>
            // The above statement can also be written as <br>
            &lt;?= "Hello World"; =&gt;
            <br>
            <br>
            // output
            <br>
            Hello World
        </code>
        <?php print("Hello Rahul. Output using php code example used above"); ?>
        <br>
        <br>
        <?= "Hello Rahul. Output using php code example used above" ?>
        <br>
        <br>
        <br>
        <code class="wrong">
            &lt;?php <br>
            print echo "Hello World"; <br>
            ?&gt;
            <br>
            <br>
            // results in error
        </code>
        <code class="correct">
            &lt;?php <br>
            echo print "Hello World"; <br>
            ?&gt;
            <br>
            <br>
            // output
            <br>
            Hello World1
        </code>
        <?php
        echo print("Hello Rahul. Output using php code example used above");
        ?>
        <strong>The "echo and print" commands outputs the value that we see as output in our case. and the text wrapped inside "" is a string.</strong>

        <h2>PHP Variables</h2>
        <p>In php a variable is definded using <span class="inline">"$"</span> symbol.</p>
        <p class="note">A variable can only start with "_", or "a-z". It cannot contain special characters, it cannot start with a number but can have numbers in between.</p>
        <code>
            &lt;?php <br>
            $name = "Rahul"; <br>
            $age = 23; <br>
            $_country = "India"; <br>
            echo "Name: $name, Age: $age, Country: $_country"; <br>
            ?&gt;
            <br>
            <br>
            // output
            <br>
            Name: Rahul, Age: 23, Country: India
        </code>
        <code class="wrong">
            &lt;?php <br>
            $1name = "Rahul"; <br>
            $@ge = 23; <br>
            $cou%ntry = "India"; <br>
            echo "Name: $1name, Age: $age, Country: $country"; <br>
            ?&gt;
            <br>
            <br>
            // results in error
        </code>
        <strong>Accessing the variables</strong>
        <code>
            &lt;?php <br>
            $name = "Rahul"; <br>
            $age = 23; <br>
            $_country = "India"; <br><br>
            // use "" to parse the variable<br>
            echo "Name: $name, Age: $age, Country: $_country"; <br><br>
            //or use {} to make the code more readable.<br>
            echo "Name: {$name}, Age: {$age}, Country: {$_country}"; <br><br>
            //or use '' with concatanation operator i.e. "."<br>
            echo 'Name: ' . $name, 'Age: ' . $age, 'Country: ' . $_country'; <br>
            ?&gt;
            <br>
            <br>
            // output
            <br>
            Name: Rahul, Age: 23, Country: India
        </code>
        <p class="note">A variable written inside <span class="inline">""</span> is parced as variable but it will only be treated as a simple string with no additional value if wrapped inside <span class="inline">''</span></p>
        <h2>Assigned by Value vs Assigned by Reference</h2>
        <p>In PHP, variables can be assigned in two different ways: by <strong>value</strong> or by <strong>reference</strong>.</p>

        <h3>Assigned by Value (Default)</h3>
        <p>When a variable is assigned by value, PHP creates a <strong>copy</strong> of the value. Changes to one variable do not affect the other.</p>
        <code>
            &lt;?php <br>
            $a = 1; <br>
            $b = $a; <br>
            $a = 0; <br>
            echo $b; <br>
            ?&gt; <br>
            <br>
            // output <br>
            1
        </code>
        <p class="note">In the example above, $b is assigned the value of $a, but when $a changes, $b still holds the original value since it's a copy.</p>

        <h3>Assigned by Reference</h3>
        <p>When a variable is assigned by reference using the <span class="inline">&</span> symbol, both variables point to the same memory location. Changes to one will reflect in the other.</p>
        <code>
            &lt;?php <br>
            $a = 1; <br>
            $b = &amp;$a; <br>
            $a = 0; <br>
            echo $b; <br>
            ?&gt; <br>
            <br>
            // output <br>
            0
        </code>
        <p class="note">In the example above, $b is a reference to $a. Any changes to $a are directly reflected in $b since both refer to the same value.</p>

        <strong>Key Difference:</strong>
        <ul>
            <li><strong>By Value:</strong> Copies the data. Changes are independent.</li>
            <li><strong>By Reference:</strong> Shares the data. Changes affect both variables.</li>
        </ul>

    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>