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
        <link href="/project_resources/css/animate.css" rel="stylesheet">
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="/project_resources/MDB-Free/js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="/project_resources/MDB-Free/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="/project_resources/MDB-Free/js/mdb.min.js"></script>
        <script>
            window.onload = function(editableCodeMirror){
                window['editableCodeMirror'] = CodeMirror.fromTextArea(document.getElementById('codesnippet_editable'), {
                    mode: "javascript",
                    theme: "night",
                    lineNumbers: true
                });
                window['console_log'] = 'Console:~$ Welcome to the codeplanet code editor';
                $('#result').val(console_log);
            }
            function run_stuff(){
                var too_big = false;
                try {
                    if(editableCodeMirror.getValue().length >= 0){
                        var input = editableCodeMirror.getValue('\n');
                        if(input.includes('Infinity') == false){
                            var output = eval(input) + " ";
                            
                            if(output.toString().length <= 1000){
                                //Decides if window is redirecting and displays a special message if it is
                                window['redirecting'] = false;
                                window.onbeforeunload = function(){
                                    window['redirecting'] = true;
                                    return '';
                                };
                                if(redirecting == false){
                                    console_log += "\nConsole:~$ " +  output;
                                    $('#result').val(console_log);
                                }
                                setInterval(function(){
                                    if(redirecting){
                                        setTimeout(function(){
                                            console_log += "\nConsole:~$ There was an attempt to redirect to "  +  output;
                                            $('#result').val(console_log);
                                        }, 0);
                                    }
                                    window['redirecting'] = false;
                                }, 100);
                                window.removeEventListener("beforeunload", function(){
                                    return null;
                                });
                            }else if(output.toString().length > 1000){
                                window['output'];
                                throw 'JustUsError: Please do not output anything greater than 1000 characters. K thanks.';
                            }
                        }else{
                            window['output'];
                            throw 'JustUsError: Please refrain from using the word \'Infinity.\' Infinite loops are bad.';
                        }    
                    }
                } catch(err){
                    console_log += '\nConsole:~$ ' + err.name + ': ' + err.message;
                    $('#result').val(console_log);
                }
                var textarea = document.getElementById('result');
                textarea.scrollTop = textarea.scrollHeight;
            }
            
            function clear_stuff(){
                editableCodeMirror.setValue('');
                console_log = "Console:~$ Welcome to the codeplanet code editor";
                $('#result').val(console_log);
            }
        </script>
    </head>
        <body style="padding-top: 10%; overflow-x:hidden;">
                <div class="row animated fadeIn" style="padding-left: 6%; padding-right: 6%;">
                    <div class="col-lg">
                        <div style="width: 100%; height: 100%; margin: auto;">
                            <textarea rows="4" cols="50" name="codesnippet_editable" id="codesnippet_editable" style="width: 100%; height: 5%;">//Have a function return a value to get a text output</textarea>
                        </div>
                        <!--CodeMirror editable code window-->
                        <div id="editable"></div>
                    </div>
                    <div class="col-lg" style="vertical-align: middle; margin-top: 2%;">
                        <div style="height: 100%">
                        <div class="row">
                            <div class="btn-group" role="group" style="margin: auto;">
                                <button role="button" class="btn deep-purple btn-md" id="run_btn" onClick="run_stuff();"><span><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Run</span></button>
                                <button role="button" class="btn deep-purple btn-md" id="clear_btn" onClick="clear_stuff();"><span><i class="fa fa-times" aria-hidden="true"></i> Clear</span></button>
                                <button role="button" class="btn deep-purple btn-md disabled" id="save_btn" onClick="save_stuff();"><span><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</span></button>
                            </div>
                        </div>
                        <div class="row" style="height: inherit;">
                            <textarea rows="4" cols="25" style="margin-top: 5%; margin-bottom: 5%; width: 100%; height: 77%; overflow: auto;outline: none;-webkit-box-shadow: none;-moz-box-shadow: none;box-shadow: none;font-family: Lucida Console,Lucida Sans Typewriter,monaco,Bitstream Vera Sans Mono,Lucida Console,monospace;font-size:12px;background-color: #000000;color: #00ff00;" id="result" onkeydown="return false;" onClick="return false;"></textarea>
                        </div>
                        </div>
                    </div>
        </body>
</html>