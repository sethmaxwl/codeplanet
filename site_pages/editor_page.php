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
        <!-- Code execution and custom JS library-->
        <script type="text/javascript" src="/project_resources/sethLib.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#modalNotLoggedIn").modal('show');
            });
            // Get the modal
            var modal = document.getElementById('#modalNotLoggedIn');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    $(modal).modal('hide');
                }
            }
        </script>
        <style>
            #run_btn{
                transition-property: background !important;
                transition-duration: 0.25s !important;
                transition-timing-function: ease-in-out !important;
            }
            #run_btn:hover{
                background: #3A0E85 !important;
            }
            #clear1_btn{
                transition-property: background !important;
                transition-duration: 0.25s !important;
                transition-timing-function: ease-in-out !important;
            }
            #clear1_btn:hover{
                background: #3A0E85 !important;
            }
            #clear2_btn{
                transition-property: background !important;
                transition-duration: 0.25s !important;
                transition-timing-function: ease-in-out !important;
            }
            #clear2_btn:hover{
                background: #3A0E85 !important;
            }
            .CodeMirror{
                height: 100% !important;
                margin-top: 0;
            }
            body { 
                padding-top: 55px; 
            }
            #result::-webkit-scrollbar {
                width: 10px;
                height: 10px;
            }
            #result::-webkit-scrollbar-button {
                width: 0px;
                height: 0px;
            }
            #result::-webkit-scrollbar-thumb {
                background: #777777;
                border: 0px solid #ffffff;
                border-radius: 50px;
            }
            #result::-webkit-scrollbar-thumb:hover {
                background: #535353;
            }
            #result::-webkit-scrollbar-thumb:active {
                background: #535353;
            }
            #result::-webkit-scrollbar-track {
                background: #cecece;
                border: 0px none #ffffff;
                border-radius: 50px;
            }
            #result::-webkit-scrollbar-track:hover {
                background: #cecece;
            }    
            #result::-webkit-scrollbar-track:active {
                background: #cecece;
            }
            #result::-webkit-scrollbar-corner {
                background: transparent;
            }
            .btnRunner{
                display: block;
            }
            .btnLoader{
                display: none;
            }
        </style>
    </head>
    <body style="overflow-x:hidden; overflow-y: hidden; font-size: 1rem;">
        <div class="row animated fadeIn" style="max-height: 100%; min-height: 100%;">
            <div class="col">
                <!--Code editor-->
                <textarea name="codesnippet_editable" id="codesnippet_editable" style="min-width: 100%; max-width: 100%; overflow:hidden;">//Call the help function for a list of functions</textarea>
            </div>
            <!--Container for result textarea and buttons-->
            <div class="col" style="transform: translateY(15%);">
                <textarea rows="4" cols="25" style="height: 60%; width: 100%; overflow: auto;outline: none;-webkit-box-shadow: none;-moz-box-shadow: none;box-shadow: none;font-family: Lucida Console,Lucida Sans Typewriter,monaco,Bitstream Vera Sans Mono,Lucida Console,monospace;font-size:12px;background-color: #000000;color: #00ff00;resize: none;" id="result" onkeydown="return false;" onClick="return false;"></textarea>
                <div class="row" style="margin: auto; margin-top: 25px; height: auto;">
                    <div class="btn-group" role="group" style="margin: auto;">
                        <button role="button" class="btn deep-purple btn-md" id="run_btn" onClick="run();"><span class="btnRunner"><i class='fa fa-arrow-circle-o-left' aria-hidden='true'></i> Run</span><span class="btnLoader"><i class='fa fa-cog fa-spin fa-fw' aria-hidden='true'></i></span></button>
                        <button role="button" class="btn deep-purple btn-md" id="clear1_btn" data-toggle="modal" data-target="#clear_modal"><span><i class="fa fa-times" aria-hidden="true"></i> Clear Editor</span></button>
                        <button role="button" class="btn deep-purple btn-md" id="clear2_btn" onClick="clear_console();"><span><i class="fa fa-times" aria-hidden="true"></i> Clear Console</span></button>
                        <button role="button" class="btn deep-purple btn-md disabled" id="save_btn" onClick="save_stuff();"><span><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</span></button>
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
                    <div class="modal-body">Clearing the editor means that the code you wrote will vanish. Make sure you don't lose anything if you decide to clear it.</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success"  onClick="clear_editor();" data-dismiss="modal">Clear Editor</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" style="radius: 15px !important;">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade left modal-scrolling" id="modalNotLoggedIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-side modal-bottom-left modal-notify modal-info" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <p class="heading">Not Logged In?</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="white-text">×</span></button>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div style="margin: auto;">
                                        <p><strong>Log in or sign up to get these features!</strong></p>
                                        <li>Save projects to your profile page</li>
                                        <li>Share your projects with others</li>
                                        <a href="/site_pages/login.php" style="margin-top: 10px;"><button type="button" class="btn btn-block btn-primary btn-md waves-effect waves-light">Log in / Sign up</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
    </body>
</html>