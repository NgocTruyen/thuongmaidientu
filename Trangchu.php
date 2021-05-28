<?php
session_start();
if (isset($_SESSION['user'])) {
    if ($_SESSION['level'] == 1) {
        header("location: Trangchu1.php");
        die;
    } else {
        header("location: Trangchu2.php");
        die;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Trang chủ</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/border.css">
        <style>
            .fakeimg {
                height: 200px;
                background: #aaa;
            }
        </style>

    </head>

    <body>
<?php
include 'menu.php';
?>







        <!-- The Modal -->

    </div>  
</div>
</div>






<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-4">
            <h2>About Me</h2>
            <h5>Photo of me:</h5>

<?php
include 'java.php';
?>

            <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
            <h3>Some Links</h3>
            <p>Lorem ipsum dolor sit ame.</p>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <hr class="d-sm-none">
        </div>
        <div class="col-sm-8">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Dec 7, 2017</h5>
            <div class="fakeimg">Fake Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            <br>
            <h2>TITLE HEADING</h2>
            <h5>Title description, Sep 2, 2017</h5>
            <div class="fakeimg">Fake Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
    </div>
</div>

<div class="jumbotron " style="margin-bottom:0">
    <div class="container mt-3">
        <h2>Media Object</h2>
        <p>Create a media object with the .media and .media-body classes:</p>
        <div class="media border p-3">
            <img src="img/anh3.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:70px;">
            <div class="media-body">
                <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>      
            </div>
        </div>
    </div>



    <div class="container">
        <h2> <p class="text-primary">Phản Hồi</p> </h2>
        <h2>Form control: textarea</h2>
        <p>The form below contains a textarea for comments:</p>
        <form action="/action_page.php">
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<ul class="pagination justify-content-center">

    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="Trangchu.php">1</a></li>
    <li class="page-item "><a class="page-link" href="Trangchu2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="Trangchu3.php">3</a></li>
    <li class="page-item"><a class="page-link" href="Trangchu2.php">Next</a></li>

</ul>
</body>
</html>
