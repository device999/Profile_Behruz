<?php

if(isset($_GET["lan"]) && $_GET["lan"]!=""){
    $lan = $_GET["lan"];    
}else{
    $lan = "en";
}
$ln = array("en"=>"English", "de"=>"German", "ru"=>"Russian");
$languageData = file_get_contents('./translations/'.$lan.'.json');
$languageData = json_decode($languageData);
$navMenu = $languageData->menu;
$header = $languageData->header;
$about = $languageData->about;
$service = $languageData->service;
$projects = $languageData->projects;
$contact = $languageData->contact;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <title>Admin Side</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
    <link href="css/tab.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<style>
    textarea {
        resize: none;
    }
</style>

<body>
    <div class="container">
        <div class="page-header">
            <h1>Content menu</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <select class="form-control" id="language">
                <?php
                    foreach($ln as $key => $value){
                        if($key == $lan){
                            echo "<option value='".$key."' selected>".$value."</option>";
                        }
                        else{
                            echo "<option value='".$key."'>".$value."</option>";
                        }
                    }
                ?>
                </select>
            </div>
            <script>
                $('#language').on('change', function () {
                    window.location.replace("tab.php?lan="+this.value);
                });
            </script>

            <hr />
            <div class="col-md-12">
                <div class="panel with-nav-tabs panel-primary">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#navMenu" data-toggle="tab">Navigation Menu</a></li>
                            <li><a href="#header" data-toggle="tab">Header</a></li>
                            <li><a href="#about" data-toggle="tab">About</a></li>
                            <li><a href="#services" data-toggle="tab">Services</a></li>
                            <li><a href="#portfolio" data-toggle="tab">Portfolio</a></li>
                            <li><a href="#contact" data-toggle="tab">Contact</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="navMenu">
                                <form action="submit.php" method="POST">
                                    <input type="hidden" value="menu" name="menuType">
                                    <input type="hidden" value="<?php echo $lan; ?>" name="lan">
                                    <div class="form-inline">
                                        <h3>Main menu</h3>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                value="<?php echo $navMenu->about; ?>" name="about" placeholder="About">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                value="<?php echo $navMenu->services; ?>" name="services"
                                                placeholder="Services">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                value="<?php echo $navMenu->portfolio; ?>" name="portfolio"
                                                placeholder="Portfolio">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                value="<?php echo $navMenu->contact;?>" name="contact"
                                                placeholder="Contact">
                                        </div>
                                    </div>
                                    <br />
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="header">
                                <form action="submit.php" method="POST">
                                    <h3>Header</h3>
                                    <input type="hidden" value="header" name="menuType">
                                    <input type="hidden" value="<?php echo $lan; ?>" name="lan">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3"
                                            name="headerTitle"><?php echo $header->title; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3"
                                            name="headerSubtitle"><?php echo $header->subtitle; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $header->button; ?>"
                                            name="headerButton">
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="about">
                                <form action="submit.php" method="POST">

                                    <h3>About</h3>
                                    <input type="hidden" value="about" name="menuType">
                                    <input type="hidden" value="<?php echo $lan; ?>" name="lan">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3"
                                            name="aboutTitle"><?php echo $about->title; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3"
                                            name="aboutSubtitle"><?php echo $about->subtitle; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $about->button; ?>"
                                            name="aboutButton">
                                    </div>

                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="services">
                                <form action="submit.php" method="POST">
                                    <h3>Services</h3>
                                    <input type="hidden" value="service" name="menuType">
                                    <input type="hidden" value="<?php echo $lan; ?>" name="lan">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $service->title; ?>"
                                            name="serviceTitle" placeholder="Title">
                                    </div>
                                    <?php
                                        $todos = $service->todos;
                                        $counter = 0;
                                        foreach($todos as $todo){                                        
                                    ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $todo->title; ?>"
                                            name="todoTitle<?php echo $counter;?>" placeholder="Todo title">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="todoSubtitle<?php echo $counter;?>"
                                            rows="3"><?php echo $todo->subtitle; ?></textarea>
                                    </div>
                                    <?php
                                        $counter++;
                                        }
                                    ?>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="portfolio">

                                <form action="submit.php" method="POST">

                                    <h3>Portfolio</h3>
                                    <input type="hidden" value="portfolio" name="menuType">
                                    <input type="hidden" value="<?php echo $lan; ?>" name="lan">
                                    <?php
                                        $counter = 0;
                                        foreach($projects as $project){                                        
                                    ?>
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                value="<?php echo $project->name; ?>"
                                                name="projectTitle<?php echo $counter;?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                value="<?php echo $project->category; ?>"
                                                name="projectCategory<?php echo $counter;?>">
                                        </div>
                                    </div>
                                    <br>
                                    <?php
                                        $counter++;
                                        }
                                    ?>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>

                            </div>
                            <div class="tab-pane fade" id="contact">
                                <form action="submit.php" method="POST">
                                    <h3>Contact</h3>
                                    <input type="hidden" value="contact" name="menuType">
                                    <input type="hidden" value="<?php echo $lan; ?>" name="lan">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $contact->title; ?>"
                                            name="contactTitle" placeholder="Contact title">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="contactSubtitle"
                                            rows="3"><?php echo $contact->subtitle; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" value="<?php echo $contact->email; ?>"
                                            name="contactEmail" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $contact->number; ?>"
                                            name="contactNumber" placeholder="Number">
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
</body>

</html>