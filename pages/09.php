<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter 09 | PHP Array";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <h1>PHP Arrays</h1>

        <h2>Array Basics</h2>
        <code>
        &lt;?php<br>
        // Indexed array creation<br>
        $colors = array("Red", "Blue", "Green"); // Legacy syntax<br>
        $fruits = ["Apple", "Banana", "Cherry"]; // Short syntax (PHP 5.4+)<br>
        ?&gt;
    </code>

        <h2>Array Access & Modification</h2>
        <code class="correct">
        &lt;?php<br>
        // Access elements<br>
        echo $fruits[0];          // Apple<br>
        $fruits[1] = "Mango";    // Modify value<br>
        $fruits[] = "Orange";     // Add to end (auto-index)<br>
        ?&gt;
    </code>

        <code class="wrong">
        &lt;?php<br>
        // Negative index error<br>
        echo $fruits[-1];         // Undefined offset error<br>
        ?&gt;
    </code>

        <h2>Array Functions for Indexed Arrays</h2>
        <div class="grid">
            <code>
            // Add elements<br>
            array_push($fruits, "Grape");     // End<br>
            array_unshift($fruits, "Kiwi");   // Start<br>
        </code>

            <code>
            // Remove elements<br>
            array_pop($fruits);      // Last element<br>
            array_shift($fruits);    // First element<br>
            unset($fruits[2]);       // Specific index<br>
        </code>
        </div>

        <h3>Middle Position Operations</h3>
        <code>
        &lt;?php<br>
        // Insert at position 2<br>
        array_splice($fruits, 2, 0, "Peach");<br>
        <br>
        // Replace 1 element at position 1<br>
        array_splice($fruits, 1, 1, "Pineapple");<br>
        ?&gt;
    </code>

        <h2>Associative Arrays</h2>
        <code class="correct">
        &lt;?php<br>
        // Create and extend<br>
        $user = [<br>
            "name" => "John",<br>
            "age" => 25<br>
        ];<br>
        <br>
        // Add multiple elements<br>
        $user += ["country" => "USA", "email" => "john@mail.com"];<br>
        $user = array_merge($user, ["status" => "active", "role" => "user"]);<br>
        ?&gt;
    </code>

        <h3>Multi-dimensional Arrays</h3>
        <code>
        &lt;?php<br>
        $company = [<br>
            "departments" => [<br>
                "IT" => ["Alice", "Bob"],<br>
                "HR" => ["Charlie", "David"]<br>
            ],<br>
            "products" => [<br>
                ["name" => "Laptop", "price" => 999],<br>
                ["name" => "Phone", "price" => 699]<br>
            ]<br>
        ];<br>
        <br>
        echo $company["departments"]["IT"][0];    // Alice<br>
        echo $company["products"][1]["name"];      // Phone<br>
        ?&gt;
    </code>

        <h2>Key Array Functions</h2>
        <table>
            <tr>
                <th>Function</th>
                <th>Indexed Arrays</th>
                <th>Associative Arrays</th>
            </tr>
            <tr>
                <td>Add Elements</td>
                <td><code>array_push()</code><br><code>array_unshift()</code></td>
                <td><code>+=</code> operator<br><code>array_merge()</code></td>
            </tr>
            <tr>
                <td>Remove Elements</td>
                <td><code>array_pop()</code><br><code>array_shift()</code></td>
                <td><code>unset()</code></td>
            </tr>
            <tr>
                <td>Middle Operations</td>
                <td colspan="2"><code>array_splice()</code></td>
            </tr>
        </table>

        <p class="note">Use <code>array_values()</code> to reindex arrays after using <code>unset()</code>:</p>
        <code>
        &lt;?php<br>
        unset($fruits[1]);<br>
        $reindexed = array_values($fruits);<br>
        ?&gt;
    </code>

        <strong>Best Practices:</strong>
        <ul>
            <li>Use <code>[]</code> syntax for modern array creation</li>
            <li>Avoid mixing indexed and associative styles</li>
            <li>Use <code>isset()</code> to check array keys exist</li>
            <li><code>array_slice()</code> for safe middle element access</li>
        </ul>

        <div class="card">
            <h1>PHP Arrays (Additional Concepts)</h1>

            <h2>Key Existence Checking</h2>
            <div class="grid">
                <code class="correct">
            &lt;?php<br>
            $data = ["name" => "John", "age" => null];<br>
            <br>
            // Check key existence<br>
            var_dump(array_key_exists("age", $data));  // bool(true)<br>
            var_dump(isset($data["age"]));             // bool(false)<br>
            ?&gt;
        </code>

                <code class="wrong">
            &lt;?php<br>
            // Undefined index check<br>
            if (isset($data["email"])) {<br>
                // This won't execute<br>
            }<br>
            ?&gt;
        </code>
            </div>

            <h2>Key Type Casting Behavior</h2>
            <code>
        &lt;?php<br>
        $specialKeys = [<br>
            1 => 'Rohit',       // int(1)<br>
            true => 'Aman',     // bool(true) → int(1)<br>
            '1' => 'Mangal',    // string(1) → int(1)<br>
            1.1 => 'Rahul',     // float(1.1) → int(1)<br>
            null => 'Pandit'    // null → string(0) ""<br>
        ];<br>
        <br>
        print_r($specialKeys);<br>
        /* Output:<br>
        Array<br>
        (<br>
            [1] => Rahul<br>
            [] => Pandit<br>
        ) */<br>
        ?&gt;
    </code>
            <p class="note">PHP automatically casts keys to integers when possible. Last duplicate key overwrites
                previous values.</p>

            <h2>Index Inflation & Management</h2>
            <code>
        &lt;?php<br>
        $numbers = [<br>
            'a',               // 0<br>
            'b',               // 1<br>
            100 => 'c',        // 100<br>
            'd',               // 101<br>
            'e'                // 102<br>
        ];<br>
        <br>
        array_shift($numbers);  // Removes index 0 ('a')<br>
        unset($numbers[101]);   // Removes 'd'<br>
        <br>
        print_r($numbers);<br>
        /* Output:<br>
        Array<br>
        (<br>
            [0] => b<br>
            [100] => c<br>
            [102] => e<br>
        ) */<br>
        ?&gt;
    </code>

            <h3>Associative Array Behavior</h3>
            <code>
        &lt;?php<br>
        $assoc = ['fruit' => 'apple', 'color' => 'red'];<br>
        array_shift($assoc);<br>
        print_r($assoc);<br>
        /* Output:<br>
        Array<br>
        (<br>
            [color] => red<br>
        ) */<br>
        ?&gt;
    </code>

            <h2>Null Conversion</h2>
            <code>
        &lt;?php<br>
        $nullVar = null;<br>
        $arr = (array)$nullVar;<br>
        var_dump($arr);  // array(0) { }<br>
        ?&gt;
    </code>

            <strong>Key Function Comparison</strong>
            <table>
                <tr>
                    <th></th>
                    <th><code>isset()</code></th>
                    <th><code>array_key_exists()</code></th>
                </tr>
                <tr>
                    <td>Null values</td>
                    <td>false</td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>Undefined keys</td>
                    <td>false</td>
                    <td>false</td>
                </tr>
                <tr>
                    <td>Performance</td>
                    <td>Faster</td>
                    <td>Slower</td>
                </tr>
            </table>

            <h2>Key Takeaways</h2>
            <ul>
                <li>Array keys follow strict type casting rules:
                    <ul>
                        <li><span class="inline">true</span> → 1</li>
                        <li><span class="inline">"1"</span> → 1</li>
                        <li><span class="inline">null</span> → ""</li>
                    </ul>
                </li>
                <li>Index inflation continues from last explicit numeric index</li>
                <li><code>array_shift()</code> reindexes numeric arrays but preserves string keys</li>
                <li><code>unset()</code> maintains original indexes</li>
            </ul>

            <p class="note">Always use <code>array_key_exists()</code> when checking for potentially null values in
                associative arrays.</p>

            <strong>Best Practices:</strong>
            <ul>
                <li>Use <code>isset()</code> for general existence checks</li>
                <li>Use <code>array_key_exists()</code> when null is a valid value</li>
                <li>Avoid mixing numeric and string keys in same array</li>
                <li>Use <code>array_values()</code> to reset numeric indexes</li>
            </ul>
        </div>

        <div class="card">
            <h1>PHP Arrays (Additional Concepts)</h1>

            <h2>Key Existence Checking</h2>
            <div class="grid">
                <code class="correct">
            &lt;?php<br>
            $data = ["name" => "John", "age" => null];<br>
            <br>
            // Check key existence<br>
            var_dump(array_key_exists("age", $data));  // bool(true)<br>
            var_dump(isset($data["age"]));             // bool(false)<br>
            ?&gt;
        </code>

                <code class="wrong">
            &lt;?php<br>
            // Undefined index check<br>
            if (isset($data["email"])) {<br>
                // This won't execute<br>
            }<br>
            ?&gt;
        </code>
            </div>

            <h2>Key Type Casting Behavior</h2>
            <code>
        &lt;?php<br>
        $specialKeys = [<br>
            1 => 'Rohit',       // int(1)<br>
            true => 'Aman',     // bool(true) → int(1)<br>
            '1' => 'Mangal',    // string(1) → int(1)<br>
            1.1 => 'Rahul',     // float(1.1) → int(1)<br>
            null => 'Pandit'    // null → string(0) ""<br>
        ];<br>
        <br>
        print_r($specialKeys);<br>
        /* Output:<br>
        Array<br>
        (<br>
            [1] => Rahul<br>
            [] => Pandit<br>
        ) */<br>
        ?&gt;
    </code>
            <p class="note">PHP automatically casts keys to integers when possible. Last duplicate key overwrites
                previous values.</p>

            <h2>Index Inflation & Management</h2>
            <code>
        &lt;?php<br>
        $numbers = [<br>
            'a',               // 0<br>
            'b',               // 1<br>
            100 => 'c',        // 100<br>
            'd',               // 101<br>
            'e'                // 102<br>
        ];<br>
        <br>
        array_shift($numbers);  // Removes index 0 ('a')<br>
        unset($numbers[101]);   // Removes 'd'<br>
        <br>
        print_r($numbers);<br>
        /* Output:<br>
        Array<br>
        (<br>
            [0] => b<br>
            [100] => c<br>
            [102] => e<br>
        ) */<br>
        ?&gt;
    </code>

            <h3>Associative Array Behavior</h3>
            <code>
        &lt;?php<br>
        $assoc = ['fruit' => 'apple', 'color' => 'red'];<br>
        array_shift($assoc);<br>
        print_r($assoc);<br>
        /* Output:<br>
        Array<br>
        (<br>
            [color] => red<br>
        ) */<br>
        ?&gt;
    </code>

            <h2>Null Conversion</h2>
            <code>
        &lt;?php<br>
        $nullVar = null;<br>
        $arr = (array)$nullVar;<br>
        var_dump($arr);  // array(0) { }<br>
        ?&gt;
    </code>

            <strong>Key Function Comparison</strong>
            <table>
                <tr>
                    <th></th>
                    <th><code>isset()</code></th>
                    <th><code>array_key_exists()</code></th>
                </tr>
                <tr>
                    <td>Null values</td>
                    <td>false</td>
                    <td>true</td>
                </tr>
                <tr>
                    <td>Undefined keys</td>
                    <td>false</td>
                    <td>false</td>
                </tr>
                <tr>
                    <td>Performance</td>
                    <td>Faster</td>
                    <td>Slower</td>
                </tr>
            </table>

            <h2>Key Takeaways</h2>
            <ul>
                <li>Array keys follow strict type casting rules:
                    <ul>
                        <li><span class="inline">true</span> → 1</li>
                        <li><span class="inline">"1"</span> → 1</li>
                        <li><span class="inline">null</span> → ""</li>
                    </ul>
                </li>
                <li>Index inflation continues from last explicit numeric index</li>
                <li><code>array_shift()</code> reindexes numeric arrays but preserves string keys</li>
                <li><code>unset()</code> maintains original indexes</li>
            </ul>

            <p class="note">Always use <code>array_key_exists()</code> when checking for potentially null values in
                associative arrays.</p>

            <strong>Best Practices:</strong>
            <ul>
                <li>Use <code>isset()</code> for general existence checks</li>
                <li>Use <code>array_key_exists()</code> when null is a valid value</li>
                <li>Avoid mixing numeric and string keys in same array</li>
                <li>Use <code>array_values()</code> to reset numeric indexes</li>
            </ul>
        </div>
    </div>

    <?php
    // Include footer files of this page
    include_once __DIR__ . '/../partials/foot.php';
    ?>