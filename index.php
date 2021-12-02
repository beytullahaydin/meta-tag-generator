<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="Meta Tag Generator">
    <meta name="description" content="Meta Tag Generator is generate Meta-Tag for your site. So Your site provide Seo Critier. Free Meta-Tag Generator Tools 2021.">
    <meta name="keywords" content="meta tag, meta tag generator, meta tag creater, free tools, meta tag tools, meta tag generator for free 2021,">
    <meta name="robots" content="index, follow">
    <meta name="language" content="english">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="Meta Tag Generator">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <title>Meta Tag Generator | Free Meta-Tag Generator Tools 2021</title>
</head>
<body>
    <div class="container">
        <div class="header" translate="no">
            <h1><a href="/" style="color:#fff;text-decoration:none;">Meta Tag Generator</h1>
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="48px" viewBox="0 0 24 24" width="48px" fill="#fff"><g><rect fill="none" height="24" width="24"/></g><g><g/><g><path d="M17,19.22H5V7h7V5H5C3.9,5,3,5.9,3,7v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-7h-2V19.22z"/><path d="M19,2h-2v3h-3c0.01,0.01,0,2,0,2h3v2.99c0.01,0.01,2,0,2,0V7h3V5h-3V2z"/><rect height="2" width="8" x="7" y="9"/><polygon points="7,12 7,14 15,14 15,12 12,12"/><rect height="2" width="8" x="7" y="15"/></g></g></a></svg>
        </div>
        <div class="content">
            <form action="" method="post">
                <div class="title">
                    <label for="sitename">Enter Site Name: </label>
                    <input type="text" name="sitename" id="sitename">
                </div>
                <div class="desc">
                    <label for="desc">Enter Site Description: </label>
                    <input type="text" name="desc" id="desc">
                </div>
                <div class="keywords">
                    <label for="keywords">Enter Site Keywords: </label>
                    <input type="text" name="keywords" id="keywords">
                </div>
                <div class="robots">
                    <label for="index">Allow robots to index your website?: </label>
                    <select name="index" id="index">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="watch">
                    <label for="watch">Allow robots to follow all links?: </label>
                    <select name="watch" id="watch">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="charset">
                    <label for="charset">Which Charset? (Recommended: UTF-8): </label>
                    <select name="charset" id="charset">
                        <option value="utf-8">UTF-8</option>
                        <option value="utf-16">UTF-16</option>
                        <option value="iso-8859-1">ISO-8859-1</option>
                        <option value="windows-1252">WINDOWS-1252</option>
                    </select>
                </div>
                <div class="lang">
                    <label for="language">What is Language of Your Site?: </label>
                    <select name="language" id="language">
                        <option value="english">English</option>
                        <option value="spanish">Spanish</option>
                        <option value="french">French</option>
                        <option value="kurdish">Kurdish</option>
                        <option value="turkish">Turkish</option>
                    </select>
                </div>
                <div class="revisit">
                    <label for="revisit">How many days should search engines visit your site?: </label>
                    <input type="number" name="revisit" id="revisit" min="1">
                </div>
                <div class="author">
                    <label for="author">Author of Contents?: </label>
                    <input type="text" name="author" id="author">
                </div>
                <div class="create">
                    <input type="submit" value="Generate Meta Tag">
                </div>
                <div class="result">
                <?php
                    if (isset($_POST["sitename"], $_POST["desc"], $_POST["keywords"], $_POST["index"], $_POST["watch"], $_POST["charset"], $_POST["language"], $_POST["revisit"], $_POST["author"])) {
                        $sitename = $_POST["sitename"];
                        $desc = $_POST["desc"];
                        $keys = $_POST["keywords"];
                        $index = $_POST["index"];
                        $watch = $_POST["watch"];
                        $char = $_POST["charset"];
                        $lang = $_POST["language"];
                        $revisit = $_POST["revisit"];
                        $author = $_POST["author"];
                        
                        if ($index == "no") {
                           $index = "";
                        } else {
                            $index = '&lt;meta name="robots" content="index"&gt;';
                        }
                        if ($watch == "no") {
                            $watch = "";
                        } else {
                            $watch = '&lt;meta name="robots" content="follow"&gt;';
                        }
                        echo '<div class="resultcontent">';
                        echo '&lt;meta name="title" content="' . $sitename . '"&gt; <br />';
                        echo '&lt;meta name="description" content="' . $desc . '"&gt; <br />';
                        echo '&lt;meta name="keywords" content="' . $keys . '"&gt; <br />';
                        echo $index, '<br />';
                        echo $watch, '<br />';
                        echo '&lt;meta http-equiv="Content-Type" content="text/html; charset=' . $char . '"&gt; <br />';
                        echo '&lt;meta name="language" content="' . $lang . '"&gt; <br />';
                        echo '&lt;meta name="revisit-after" content="' . $revisit . ' days"&gt; <br />';
                        echo '&lt;meta name="author" content="' . $author . '"&gt; <br />';
                        echo '</div>';
                    } 
                ?>
                </div>
            </form>
        </div>
        <div class="footer" translate="no">
            <p>Created by Beytullah AYDIN</p>
        </div>
    </div>
</body>
</html>