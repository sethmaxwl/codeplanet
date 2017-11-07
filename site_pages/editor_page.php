<!DOCTYPE html>
<html lang="en">
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
        <script src="/project_resources/codemirror.js"></script>
        <script src="/project_resources/matchbrackets.js"></script>
        <script src="/project_resources/javascript.js"></script>
        <script src="/project_resources/xml.js"></script>
        <script src="/project_resources/MDB-Free/js/matchbrackets.js"></script>
        <script src="/project_resources/active-line.js"></script>
        <script src="/project_resources/closebrackets.js"></script>
        <script src="/project_resources/search.js"></script>
        <script src="/project_resources/searchcursor.js"></script>
        <script src="/project_resources/jump-to-line.js"></script>
        <script src="/project_resources/dialog.js"></script>
        <script src="/project_resources/matchesonscrollbar.js"></script>
        <script src="/project_resources/annotatescrollbar.js"></script>
        <script src="/project_resources/lint-javascript.js"></script>
        <script src="/project_resources/lint.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jshint/r07/jshint.js"></script>
        <script src="/project_resources/simplescrollbars.js"></script>
        <link rel="stylesheet" href="/project_resources/simplescrollbars.css">
        <link rel="stylesheet" href="/project_resources/lint.css">
        <link href="/project_resources/matchesonscrollbar.css" rel="stylesheet">
        <link href="/project_resources/dialog.css" rel="stylesheet">
        <!--Theme-->
        <link href="/project_resources/all-hallow-eve.css" rel="stylesheet">
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
            //Initializes codemirror instance and applies all styling and functions
            window.onload = function(editableCodeMirror){
                window['editableCodeMirror'] = CodeMirror.fromTextArea(document.getElementById('codesnippet_editable'), {
                    mode: "javascript",
                    theme: "all-hallow-eve",
                    lineNumbers: true,
                    styleActiveLine: true,
                    autoCloseBrackets: true,
                    gutters: ['Codemirror-lint-markers'],
                    lint: true,
                    lineWrapping: true,
                    scrollbarStyle: "overlay"
                });
                //Initial message in console
                window['console_log'] = 'Console:~$ Welcome to the codeplanet code editor';
                $('#result').val(console_log);
            }
            
            /*
            Start of pre-defined functions for execution
            */
            
            //Prints out whatever is passed in as the input
            function print(input){
                return(input);
            }
            //Removes leading and trailing whitespace of a string
            function strip(str) {
                return str.replace(/^\s+|\s+$/g, '');
            }
            //Displays a message in the console that displays all pre-defined functions
            function help(){
                console_log += "\nConsole:~$ \n /-----------------\\ \n |List of Functions|\n \\-----------------/\n | print(val); -> prints out the value in the console\n | strip(val); -> returns the value without leading and trailing whitespace\n ----------------------------------";
                $('#result').val(console_log);
            }
            
            //Function to execute code from the editor
            function run_stuff(){
                try {
                    if(editableCodeMirror.getValue().length >= 0){
                        var input = editableCodeMirror.getValue('\n');
                        //Tests if the input contains the word 'Infinity'; this is implemented to prevent infinite loops
                        if(input.includes('Infinity') == false){
                            //Executes the code and stores the output as the output variable
                            var output = eval(input);
                            //Enforces a 1000 character limit on output size
                            if(output.toString().length <= 1000){
                                
                                //Decides if window is redirecting and displays a message if it is
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
                                            console_log += "\nConsole:~$ There was an attempt to redirect to \'"  +  output + "\' If you do not trust this URL, please do not run this program again.";
                                            $('#result').val(console_log);
                                        }, 0);
                                    }
                                    window['redirecting'] = false;
                                }, 0);
                            }else if(output.toString().length > 1000){
                                //Error message that is displayed if output is greater than 1000 characters
                                window['output'];
                                throw 'JustUsError: The output is greater than 1000 characters. Please reduce its size.';
                            }
                        }else{
                            //Error message that is displayed if infinity is detected
                            window['output'];
                            throw 'JustUsError: Please refrain from using the word \'Infinity.\' Infinite loops are bad.';
                        }    
                    }
                } catch(err){
                    //Prevents error that occurs if there is an attempt to execute nothing
                    if(err.message != "Cannot read property 'toString' of undefined"){
                        console_log += '\nConsole:~$ ' + err.name + ': ' + err.message;
                        $('#result').val(console_log);
                    }else{
                        console_log += '\nConsole:~$ '
                        $('#result').val(console_log);
                    }
                }
                //Auto-scrolls the console to the bottom
                var textarea = document.getElementById('result');
                textarea.scrollTop = textarea.scrollHeight;
                window.removeEventListener("beforeunload", function(){
                    return null;
                });
            }
            
            //Clears the editor
            function clear_editor(){
                editableCodeMirror.setValue('//The console has been cleared');
            }
            
            //Clears the console
            function clear_console(){
                console_log = "Console:~$ Cleared";
                $('#result').val(console_log);
            }
        </script>
    </head>
    <body style="padding-top: 10%; overflow-x:hidden; font-size: 1rem;">
        <div class="row animated fadeIn" style="padding-left: 6%; padding-right: 6%;">
            <div class="col" style="width: 100%; height: 100%; margin: auto;">
                <div style="width: 100%; height: 100%; margin: auto;">
                    <form>
                        <!--Code editor-->
                        <textarea rows="4" cols="50" name="codesnippet_editable" id="codesnippet_editable" style="min-width: 100%; max-width: 100%; overflow:auto; height: 5%;">//Call the help function for a list of functions</textarea>
                    </form>
                </div>
                <!--CodeMirror editable code window-->
                
            </div>
            <div class="col" style="vertical-align: middle; margin-top: 2%;">
                <div style="height: 100%">
                <div class="row">
                    <div class="btn-group" role="group" style="margin: auto;">
                        <button role="button" class="btn deep-purple btn-md" id="run_btn" onClick="run_stuff();"><span><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Run</span></button>
                        <button role="button" class="btn deep-purple btn-md" id="clear1_btn" data-toggle="modal" data-target="#clear_modal"><span><i class="fa fa-times" aria-hidden="true"></i> Clear Editor</span></button>
                        <button role="button" class="btn deep-purple btn-md" id="clear2_btn" onClick="clear_console();"><span><i class="fa fa-times" aria-hidden="true"></i> Clear Console</span></button>
                        <button role="button" class="btn deep-purple btn-md disabled" id="save_btn" onClick="save_stuff();"><span><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</span></button>
                    </div>
                </div>
                <div class="row" style="height: inherit;">
                    <textarea rows="4" cols="25" style="margin-top: 5%; margin-bottom: 5%; width: 100%; height: 77%; overflow: auto;outline: none;-webkit-box-shadow: none;-moz-box-shadow: none;box-shadow: none;font-family: Lucida Console,Lucida Sans Typewriter,monaco,Bitstream Vera Sans Mono,Lucida Console,monospace;font-size:12px;background-color: #000000;color: #00ff00;" id="result" onkeydown="return false;" onClick="return false;"></textarea>
                </div>
            </div>
        </div>
        <div class="modal fade" id="clear_modal" tabindex="-1" role="dialog" aria-labelledby="clear_modal_label" aria-hidden="true" data-backdrop="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to clear the editor?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">Clearing the editor means that the code you wrote will vanish. Make sure you don't lose anything if you decide to clear it.</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success"  onClick="clear_editor();" data-dismiss="modal">Clear Editor</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" style="radius: 15px !important;">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>