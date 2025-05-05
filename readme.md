# List of tags to use along with available class
1. **.container** > use this class once at the begining
2. **.card** > devides chapters into sections
3. **h1 to h3** > use headings
4. **.tags** > tag container
5. **.tag** > tag
6. **.note** > add a highlighted note (_takes the entire width of the screen_)
7. **code** > write code here
    a. **_correct_** > a correct code block
    b. **_wrong_** > an incorrect code block
8. **strong** > highlight anything anywhere (_inline highlighting_)

# Default template for pages/file.php files
```html
<?php
// Set the page title here
$page_title = "PHP Lessons | Chapter ";
// Set the root asset path
$root_asset_path = '../assets';
// Include header of this page
include_once __DIR__ . '/../partials/head.php';
?>

<div class="container">
    <?php require_once __DIR__ . '/../partials/pages_nav.php'; ?>
    <div class="card">
        <!-- rest of the code -->
    </div>
</div>

<?php
// Include footer files of this page
include_once __DIR__ . '/../partials/foot.php';
?>
```

| Symbol | HTML Entity  | Numeric Entity | Notes                            |
|--------|--------------|----------------|----------------------------------|
| `,`    | `&comma;`    | `&#44;`        | Rarely needed (safe as-is)       |
| `<`    | `&lt;`       | `&#60;`        | Required to prevent tag parsing  |
| `>`    | `&gt;`       | `&#62;`        | Required in HTML content         |
| `=`    | `&equals;`   | `&#61;`        | Rarely needed (safe as-is)       |
| `&`    | `&amp;`      | `&#38;`        | Required in all HTML contexts    |
| `|`    | `&verbar;`   | `&#124;`       | Named entity not widely supported|
| `/`    | `&sol;`      | `&#47;`        | Useful in HTML attributes        |
| `\`    | `&bsol;`     | `&#92;`        | Backslash entity                 |
| `$`    | -            | `&#36;`        | No named entity                  |
| `*`    | -            | `&#42;`        | No named entity                  |
| `%`    | `&percnt;`   | `&#37;`        | Useful in URLs                   |
| `!`    | -            | `&#33;`        | No named entity (safe as-is)     |
| `?`    | -            | `&#63;`        | No named entity (safe as-is)     |
| `"`    | `&quot;`     | `&#34;`        | Required in attribute values     |
| `'`    | `&apos;`     | `&#39;`        | HTML5 entity for apostrophe      |
| `` ` ``| `&grave;`    | `&#96;`        | Backtick/grave accent            |
| `-`    | `&hyphen;`   | `&#45;`        | Hyphen (usually safe as-is)      |
| `_`    | -            | `&#95;`        | No named entity (safe as-is)     |
| `.`    | `&period;`   | `&#46;`        | Period (usually safe as-is)      |