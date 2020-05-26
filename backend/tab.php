<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Panels with nav tabs - Bootsnipp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
    <link href="css/tab.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="./js/include.js"></script>
    <script type="text/javascript">
        window.alert = function () {};
        var defaultCSS = document.getElementById('bootstrap-css');

        function changeCSS(css) {
            if (css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css +
                '" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Content menu</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel with-nav-tabs panel-primary">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#navMenu" data-toggle="tab">Navigation Menu</a></li>
                            <li><a href="#firstSlide" data-toggle="tab">First Slide</a></li>
                            <li><a href="#about" data-toggle="tab">About</a></li>
                            <li><a href="#services" data-toggle="tab">Services</a></li>
                            <li><a href="#portfolio" data-toggle="tab">Portfolio</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="navMenu">
                            <div w3-include-html="./forms/menu.php"></div>
                            </div>
                            <div class="tab-pane fade" id="firstSlide">
                                <div w3-include-html="./forms/firstSlide.php"></div>
                            </div>
                            <div class="tab-pane fade" id="about">
                                <div w3-include-html="./forms/about.php"></div>
                            </div>
                            <div class="tab-pane fade" id="services">
                                <div w3-include-html="./forms/services.php"></div>
                            </div>
                            <div class="tab-pane fade" id="portfolio">
                                <div w3-include-html="./forms/portfolio.php"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
</body>
<script>
    includeHTML();
</script>

</html>