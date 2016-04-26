<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="tinycolorpicker.css" type="text/css" media="screen"/>

    <script src="jquery.tinycolorpicker.js"></script>
    <script type="text/javascript">
        window.onload = function(){
            var $picker = document.getElementById("colorPicker")
                ,   picker  = tinycolorpicker($picker)
                ;

            var g = document.getElementsByTagName("a");
            g.id = 'someId';

        }

    </script>
</head>
<body>
<div id="colorPicker">
    <a class="color"><div class="colorInner"></div></a>
    <div class="track">
    </div>
    <input type="text" class="colorInput"/>
</div>
</body>

</html>
