<?php
$message = "This is the default blog";
if (isset($_GET['blog-id']) && !empty($_GET['blog-id'])) {
    $message = include $_GET['blog-id'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        /* Add a gray background color with some padding */
        body {
            font-family: Arial;
            padding: 20px;
            background: #f1f1f1;
        }

        /* Header/Blog Title */
        .header {
            padding: 30px;
            font-size: 40px;
            text-align: center;
            background: white;
        }

        /* Create two unequal columns that floats next to each other */
        /* Left column */
        .leftcolumn {
            float: left;
            width: 75%;
        }

        /* Right column */
        .rightcolumn {
            float: left;
            width: 25%;
            padding-left: 20px;
        }

        /* Fake image */
        .fakeimg {
            background-color: #aaa;
            width: 100%;
            padding: 20px;
        }

        /* Add a card effect for articles */
        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Footer */
        .footer {
            padding: 20px;
            text-align: center;
            background: #ddd;
            margin-top: 20px;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 800px) {

            .leftcolumn,
            .rightcolumn {
                width: 100%;
                padding: 0;
            }
        }
    </style>
</head>

<body>

    <div class="header">
        <h2>The hacker's blog</h2>
    </div>

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>Is this inclusion?</h2>
                <h5>A brief intro to the world of inclusion, Dec 7, 2017</h5>
                <div class="fakeimg" style="height:200px;"></div>
                <p>Some text..</p>
                <p>What you give is what the seek.</p>
            </div>
            <div class="card">
                <h2>TITLE HEADING</h2>
                <h5>Title description, Sep 2, 2017</h5>
                <div class="fakeimg"><img style="height:100px; width:1000px;" src='./blog.jpeg'></div>
                <p>Blog content.</p>
                <p><?= $message; ?></p>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h2>About Me</h2>
                <div class="fakeimg" style="height:100px;">Image</div>
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
            </div>
            <div class="card">
                <h3>Popular Post</h3>
                <a href='./index.php?blog-id=blog1.txt'>
                    <div class="fakeimg">Blog 1</div>
                </a><br>
                <a href='./index.php?blog-id=blog2.txt'>
                    <div class="fakeimg">Blog 2</div>
                </a><br>
                <a href='./index.php?blog-id=blog3.txt'>
                    <div class="fakeimg">Blog 3</div>
                </a>
            </div>
            <div class="card">
                <h3>Follow Me</h3>
                <p>Some text..</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <h2>Footer</h2>
    </div>

</body>

</html>