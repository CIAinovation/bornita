<!DOCTYPE html>
<html>
<head>
    <title>Mi página</title>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        $(function() {
          $('#padre > div').hover(function() {
            $('#otro_div').css('background-color', '#336699');
            $('#otro_p').css('color', '#336699');
          }, function() {
            // vuelve a dejar el <div> como estaba al hacer el "mouseout"
            $('#otro_div').css('background-color', '');
            $('#otro_p').css('color', '');
          });
        });
    </script>
</head>
<body>
    <div id="padre">
        <div id="hijo1"> ... </div>
        <div id="hijo2"> ... </div>
        <div id="hijo3"> ... </div>
    </div>
 
    ...
 
    <div id="otro_div"> ... </div>
    <p id="otro_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>