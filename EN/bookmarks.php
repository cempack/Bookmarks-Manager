<script src="js/background.js"></script>
<?php

$password = "Elliot_19";

if (empty($_POST['mdp'])) {
    header('Location: index.php');
}

if ($_POST['mdp'] == $password) {
    echo "";
} else {
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bookmarker</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body onload="fetchBookmark()">

    <div class="container">
        <div class="header clearfix">
            <nav>

            </nav>
            <h3 class="text-muted">Bookmarker</h3>
        </div>
        <div class="row marketing">
            <div class="col-lg-12">
                <div id="bookmarksResults"></div>
            </div>
        </div>
        <div class="jumbotron">
            <h2>Add a website to Bookmarker</h2>
            <form id="myForm">
                <div class="form-group">
                    <label>Website Name</label>
                    <input type="text" class="form-control" id="siteName" placeholder="Nom Du Site">
                </div>
                <div class="form-group">
                    <label>Website Url</label>
                    <input type="text" class="form-control" id="siteUrl" value="https://" placeholder="Website Url (exemple.com)">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <footer class="footer">
            <p id="copyright">&copy; 2022 elliotmoreau.</p>
        </footer>

    </div> <!-- /container -->
    <script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</html>
