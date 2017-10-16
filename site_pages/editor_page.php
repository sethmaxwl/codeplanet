<!DOCTYPE html>
<html>
    <?php include('navbar.php'); ?>
    <head>
        <title>Code Editor - codeplanet</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" href="/images/planet.ico" type="image/x-icon">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="/project_resources/MDB-Free/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="/project_resources/MDB-Free/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="/project_resources/MDB-Free/css/style.css" rel="stylesheet">
        <!--Codemirror resources-->
        <link rel="stylesheet" href="/project_resources/codemirror.css">
        <link rel="stylesheet" href="/project_resources/night.css">
        <script src="/project_resources/codemirror.js"></script>
        <script src="/project_resources/matchbrackets.js"></script>
        <script src="/project_resources/javascript.js"></script>
        <script src="/project_resources/xml.js"></script>
        <script src="/project_resources/solemirror.js"></script>
        <link rel="stylesheet" href="/project_resources/editor_page.css">
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="/project_resources/MDB-Free/js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="/project_resources/MDB-Free/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="/project_resources/MDB-Free/js/mdb.min.js"></script>
        <script>
            var editableCodeMirror;
            window.onload = function(editableCodeMirror){
                editableCodeMirror = CodeMirror.fromTextArea(document.getElementById('codesnippet_editable'), {
                    mode: "javascript",
                    theme: "night",
                    lineNumbers: true
                });
                return(editableCodeMirror);
            }
            function save_stuff(editableCodeMirror){
                var myCodeMirror = CodeMirror.fromTextArea('codesnippet_editable');
                console.log(text);
            }
        </script>
    </head>
    <div id="editor_body">
    <body>
        <header>
        <div style="width: 75%; margin: auto;">
        <textarea rows="4" cols="50" name="codesnippet_editable" id="codesnippet_editable">//Enter code here
        </textarea>
        </div>
        <!--CodeMirror editable code window-->
        <div id="editable">
        </div>
        <div style="text-align:center;margin:auto;">
        <button type="button" value="save" id="save" onClick="save_stuff();">Save</button>
        </div>
        </div>
            </header>
    </body>
    </div>
</html>