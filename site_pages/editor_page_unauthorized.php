<?php 
    //if not logged in
    include('navbar_unauthorized.html');
    //if logged in
    //include('navbar.html');
?>
<!DOCTYPE html>
<html lang="en">
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
        <link href="/project_resources/MDB-Free/font/fa/fa-animations.css" rel="stylesheet">
        <!--Theme-->
        <link href="/project_resources/bespin.css" rel="stylesheet">
        <link href="/project_resources/animate.css" rel="stylesheet">
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="/project_resources/MDB-Free/js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="/project_resources/MDB-Free/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="/project_resources/MDB-Free/js/mdb.min.js"></script>
        <!-- Code execution file-->
        <script type="text/javascript" src="/project_resources/sethLib.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                setTimeout(function(){
                    $("#modalNotLoggedIn").modal('show');
                }, 5000);
            });
            // Get the modal
            var modal = document.getElementById('#modalNotLoggedIn');
            // When the user clicks anywhere outside of the modal, close it
            $(document).click(function(event) { 
                if(!$(event.target).closest('#modalNotLoggedIn').length) {
                    if($('#modalNotLoggedIn').is(":visible")) {
                        $('#modalNotLoggedIn').hide();
                    }
                }        
            });
        </script>
    </head>
    <body id="edit_body">
        <div class="row animated fadeIn" id="edit_content">
            <div class="col">
                <!--Code editor-->
                <textarea name="codesnippet_editable" id="codesnippet_editable">//Call the help function for a list of pre-defined functions</textarea>
            </div>
<!--Container for result textarea and buttons-->
            <div class="col" id="editor_col">
                <div class="divider-new pt-5" id="editor_row">
                    <h2 class="h2-responsive wow" id="editor_tag">JavaScript Code Editor</h2>
                </div>
                <textarea rows="4" cols="25" id="result" onkeydown="return false;" onClick="return false;"></textarea>
                <div class="row" id="buttons">
                    <div class="btn-group" role="group">
                        <button role="button" class="btn green btn-md" id="run_btn" onClick="run();"><span class="btnRunner"><i class='fa fa-arrow-circle-o-left' aria-hidden='true'></i> Run</span><span class="btnLoader"><i class='fa fa-cog fa-spin fa-fw' aria-hidden='true'></i></span></button>
                        <button role="button" class="btn deep-purple btn-md" id="clear1_btn" data-toggle="modal" data-target="#clear_modal"><span class="clearingEditor"><i class="fa fa-times" aria-hidden="true"></i> Clear Editor</span><span class="eraserAnimation2"><i class="fa fa-eraser faa-wrench animated" aria-hidden="true"></i></span></button>
                        <button role="button" class="btn deep-orange btn-md" id="clear2_btn" onClick="clear_console();"><span class="clearingConsole"><i class="fa fa-times" aria-hidden="true"></i> Clear Console</span><span class="eraserAnimation1"><i class="fa fa-eraser faa-wrench animated" aria-hidden="true"></i></span></button>
                        <div class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="This feature is only available to users who are logged in"><button role="button" class="btn deep-purple btn-md disabled" id="save_btn" onClick="save_stuff();"><span><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</span></button></div>
                    </div>
                </div>
            </div>
        </div>
<!--Modal to ask if user wants to clear editor-->
        <div class="modal fade" id="clear_modal" tabindex="-1" role="dialog" aria-labelledby="clear_modal_label" aria-hidden="true" data-backdrop="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to clear the editor?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body"> the editor means that the code you wrote will vanish. Make sure you don't lose anything if you decide to clear it.</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success"  onClick="clear_editor();" data-dismiss="modal">Clear Editor</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade left modal-scrolling" id="modalNotLoggedIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" aria-hidden="true">
            <div class="modal-dialog modal-side modal-bottom-left modal-notify modal-info" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="heading">Not Logged In?</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="white-text">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="center text-center">
                                        <p><strong>Log in or sign up to share your project with other users!</strong></p>
                                        <a href="/site_pages/signup_form.html" id="login_btn"><button type="button" class="btn btn-block btn-primary btn-md waves-effect waves-light">Log in / Sign up</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>