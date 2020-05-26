<?php
$language = $_GET["lan"];
$contents = file_get_contents('./translations/'.$language.'.json');
$obj = json_decode($contents,true);
var_dump($obj["service"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="./js/include.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
</head>

<body>
    <style>
        .white {
            color: white !important;
        }
    </style>

    <div w3-include-html="header.html"></div>

    <script>
        includeHTML();
    </script>

    <div class="container">
        <div class="page-header">
            <h1>Menu bar</h1>
        </div>
        <form class="form-horizontal">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">About</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj["menu"]["about"]; ?>" name="about" class="form-control"
                        id="inputEmail3" placeholder="Title name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Services</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj["menu"]["services"]; ?>" name="services"
                        class="form-control" id="inputEmail3" placeholder="Title name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Portfolio</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj["menu"]["portfolio"]; ?>" name="portfolio"
                        class="form-control" id="inputEmail3" placeholder="Title name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Contact</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj["menu"]["contact"]; ?>" name="contact"
                        class="form-control" id="inputEmail3" placeholder="Title name">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Save</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
    <div class="container">
        <div class="page-header">
            <h1>Header</h1>
        </div>
        <form class="form-horizontal">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj["header"]["title"]; ?>" name="about" class="form-control"
                        id="inputEmail3" placeholder="Title name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Subtitle</label>
                <div class="col-sm-10">
                    <textarea type="text" name="portfolio" class="form-control" id="inputEmail3"
                        placeholder="Title name"><?php echo $obj["header"]["subtitle"];?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Button</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj["header"]["button"]; ?>" name="services"
                        class="form-control" id="inputEmail3" placeholder="Title name">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Save</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
    <div class="container">
        <div class="page-header">
            <h1>About</h1>
        </div>
        <form class="form-horizontal">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj["about"]["title"]; ?>" name="about" class="form-control"
                        id="inputEmail3" placeholder="Title name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Subtitle</label>
                <div class="col-sm-10">
                    <textarea type="text" name="portfolio" class="form-control" id="inputEmail3"
                        placeholder="Title name"><?php echo $obj["about"]["subtitle"];?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Button</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj["about"]["button"]; ?>" name="portfolio"
                        class="form-control" id="inputEmail3" placeholder="Title name">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Save</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
    <div class="container">
        <div class="page-header">
            <h1>Service</h1>
        </div>
        <form class="form-horizontal">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj["about"]["title"]; ?>" name="about" class="form-control"
                        id="inputEmail3" placeholder="Title name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Subtitle</label>
                <div class="col-sm-10">
                    <textarea type="text" name="portfolio" class="form-control" id="inputEmail3"
                        placeholder="Title name"><?php echo $obj["about"]["subtitle"];?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Button</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj["about"]["button"]; ?>" name="portfolio"
                        class="form-control" id="inputEmail3" placeholder="Title name">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Save</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
    <div class="container">
        <div class="page-header">
            <h1>Contact</h1>
        </div>
        <form class="form-horizontal">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj["contact"]["title"]; ?>" name="about" class="form-control"
                        id="inputEmail3" placeholder="Title name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Subtitle</label>
                <div class="col-sm-10">
                    <textarea type="text" name="portfolio" class="form-control" id="inputEmail3"
                        placeholder="Title name"><?php echo $obj["contact"]["subtitle"];?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Number</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj["contact"]["number"]; ?>" name="about"
                        class="form-control" id="inputEmail3" placeholder="Title name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php echo $obj["contact"]["email"]; ?>" name="contact"
                        class="form-control" id="inputEmail3" placeholder="Title name">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Save</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>