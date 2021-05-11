
<html>
    <head>
        <meta charset="UTF-8">
        <title>Html test</title>
        <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function (){
                alert( "You have " + $(".overdue").size() + " books overdue." );
            });
            
            $(".overdue").each( function() {
                alert("Your book is overdue.");
            });
        </script>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="overdue"> alo</div>
    </body>
</html>
