<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
            <h3>Input Groups</h3>
            <p>The .input-group class is a container to enhance an input by adding an icon, text or a button in front or behind it as a "help text".</p>
            <p>The .input-group-addon class attaches an icon or help text next to the input field.</p>

            <form>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon">Text</span>
                    <input id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info">
                </div>
            </form>
            <br>

            <p>It can also be used on the right side of the input:</p>
            <form>
                <div class="input-group">
                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>   
                </div>
                <div class="input-group">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                </div>
            </form>
        </div>

    </body>
</html>

