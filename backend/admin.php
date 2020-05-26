<?php

$login = $_POST["login"];
$password = $_POST["password"];

if($login=="demo" && $password =="12345"){
    print "Success";
}else{
}
$homepage = file_get_contents('./translations/en.json');
echo $homepage;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
</head>

<body>
    <style>
        .white {
            color: white !important;
        }
    </style>
    <div class="container" style="margin-top:15vh;">
        <div class="form-group">
            <label for="exampleInputPassword1">Select language</label>
            <select class="form-control">
                <option>English</option>
                <option>Russian</option>
                <option>Deutsch</option>
            </select>
        </div>
        <form>
            <div class="form-inline">
                <h3>Main menu</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
            </div>
            <div>
                <h3>First Slide</h3>
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
            </div>

            <div>
                <h3>About</h3>
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
            </div>

            <div>
                <h3>Services</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>

            <div>
                <h3>Portfolio</h3>
                <div class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                </div>
                <hr>
                <div class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                </div>
                <hr>
                <div class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                </div>
                <hr>
                <div class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                </div>
                <hr>
                <div class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                </div>
                <hr>
                <div class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                </div>
                <hr>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</body>

</html>