<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/vendors/nefty_popup/lib/demo.css" />-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/vendors/nefty_popup/dist/jquery.niftymodals.css" /> 
<script src="<?php echo base_url(); ?>/vendors/nefty_popup/dist/jquery.niftymodals.js"></script>
<script>
    $(document).ready(function () {

        $('.views').on('focus', function () {

            var modal = $(this).data('modal');
            $("#" + modal).niftyModal();
        });
    });</script> 

<!-- for the blur effect -->
<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
<script>
    // this is important for IEs
    var polyfilter_scriptpath = '<?php echo base_url(); ?>/vendors/nefty_popup/lib/js/';</script>

<script src="<?php echo base_url(); ?>/vendors/nefty_popup/lib/js/cssParser.js"></script>
<script src="<?php echo base_url(); ?>/vendors/nefty_popup/lib/js/css-filters-polyfill.js"></script>
<script src="<?php echo base_url() ?>front/js/build.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>front/js/public.js" type="text/javascript"></script>
<script>
    var Dropzone = require("enyo-dropzone");
    Dropzone.autoDiscover = false;</script>
<style>
    /*    html, body {
          height: 100%;
        }*/
    #actions {
        margin: 2em 0;
    }


    /* Mimic table appearance */
    div.table {
        display: table;
    }
    div.table .file-row {
        display: table-row;
    }
    div.table .file-row > div {
        display: table-cell;
        vertical-align: top;
        border-top: 1px solid #ddd;
        padding: 8px;
    }
    div.table .file-row:nth-child(odd) {
        background: #f9f9f9;
    }



    /* The total progress gets shown by event listeners */
    #total-progress {
        opacity: 0;
        transition: opacity 0.3s linear;
    }

    /* Hide the progress bar when finished */
    #previews .file-row.dz-success .progress {
        opacity: 0;
        transition: opacity 0.3s linear;
    }

    /* Hide the delete button initially */
    #previews .file-row .delete {
        display: none;
    }

    /* Hide the start and cancel buttons and show the delete button */

    #previews .file-row.dz-success .start,
    #previews .file-row.dz-success .cancel {
        display: none;
    }
    #previews .file-row.dz-success .delete {
        display: block;
    }


</style>

<?php $imageUploadPath = UPLOADS . '/images'; ?>
<section>
    <div class="layout-row layout-xs-column">
        <div class="flex-25 flex-xs-100 layout-column video-section" style="overflow: hidden;">
            <div style="height: 100%;width: 100%;overflow-y: auto;">
                <?php foreach ($songs_data as $song) { ?>
                    <div>
                        <img src="<?php echo base_url('uploads/images') . '/' . $song['Image'] ?>">
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="layout-column flex-45 flex-xs-100 public-section" style="overflow: hidden">
            <div style="height: 100%;width: 100%;overflow-y: auto;">
                <div class="layout-column comment-section">
                    <textarea placeholder="Post Your Views Or Songs" data-modal="modal-12" class="views textarea-views"></textarea>
                </div>
                <div class="layout-column comment-section">
                    <div class="layout-row user-comments">
                        <img src="<?php echo base_url('front') ?>/img/no_picture.png" alt="user-image"/>
                        <div class="comment-wrap"><a href="#"> Anuska </a>
                        </div>
                    </div>
                    <div class="layout-row user-comments">
                        <div class="">
                            <span>my new song</span>
                        </div>
                    </div>
                    <audio controls>
                        <source src="horse.ogg" type="audio/ogg">
                    </audio>
                    <div class="layout-row action-wrapper">
                        <div class="layout-row layout-align-start-center flex-20"><i class="fa fa-thumbs-up"></i> Like</div>
                        <div class="layout-row layout-align-start-center flex-20"><i class="fa fa-comment"></i> Comments</div>
                        <div class="layout-row layout-align-end-center flex-20"><i class="fa fa-share"></i> Share</div>
                    </div>
                    <div class="layout-row comment-count">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <span class="heart"> <i class="fa fa-heart"></i></span>
                        <a href="#">Anuska , neha and 22 more</a>
                    </div>
                    <div class="layout-row comment-wrap">
                        <span class="flex-75">View Previous Comments</span>
                        <span class="flex-50 no-count">4 out 9</span>
                    </div>
                    <div class="layout-row user-comments">
                        <img src="<?php echo base_url('front') ?>/img/no_picture.png" alt="user-image"/>
                        <div class="layout-column user-detail">
                            <div class="layout-row">
                                <span class="user-name">Lokesdh tiwari</span>
                                <span>Congret bhai shaib</span>
                            </div>
                            <div class="layout-row">
                                <span class="user-name">Like</span>
                                <span class="user-name">Reply</span>
                                <span>28 min agao</span>
                            </div>
                        </div>

                    </div>

                    <div class="layout-row user-comments">
                        <img src="img/no_picture.png" alt="user-image"/>
                        <div class="layout-column user-detail">
                            <div class="layout-row">
                                <span class="user-name">Lokesdh tiwari</span>
                                <span>Congret bhai shaib</span>
                            </div>
                            <div class="layout-row">
                                <span class="user-name">Like</span>
                                <span class="user-name">Reply</span>
                                <span>28 min</span>
                            </div>
                        </div>

                    </div>
                    <div class="layout-column comment-wrap">
                        <span>View more Comments</span>
                    </div>
                    <div class="layout-row user-comments">
                        <img src="img/no_picture.png" alt="user-image"/>
                        <div class="input-area"><input placeholder="Write a Comments"/>
                            <i class="fa fa-camera"></i>
                            <i class="fa fa-smile-o"></i>
                        </div>
                    </div>

                </div>
                <div class="layout-column comment-section">
                    <div class="layout-column layout-align-center-center">
                        <video height="170" controls>
                            <source src="https://www.youtube.com/" type="video/mp4">
                        </video>
                    </div>
                    <div class="layout-row action-wrapper">
                        <div class="layout-row layout-align-start-center flex-20"><i class="fa fa-thumbs-up"></i> Like</div>
                        <div class="layout-row layout-align-start-center flex-20"><i class="fa fa-comment"></i> Comments</div>
                        <div class="layout-row layout-align-end-center flex-20"><i class="fa fa-share"></i> Share</div>
                    </div>
                    <div class="layout-row comment-count">
                        <span><i class="fa fa-thumbs-up"></i></span>
                        <span class="heart"> <i class="fa fa-heart"></i></span>
                        <a href="#">Anuska , neha and 22 more</a>
                    </div>
                    <div class="layout-row comment-wrap">
                        <span class="flex-75">View Previous Comments</span>
                        <span class="flex-50 no-count">4 out 9</span>
                    </div>
                    <div class="layout-row user-comments">
                        <img src="img/no_picture.png" alt="user-image"/>
                        <div class="layout-column user-detail">
                            <div class="layout-row">
                                <span class="user-name">Lokesdh tiwari</span>
                                <span>Congret bhai shaib</span>
                            </div>
                            <div class="layout-row">
                                <span class="user-name">Like</span>
                                <span class="user-name">Reply</span>
                                <span>28 min agao</span>
                            </div>
                        </div>

                    </div>
                    <div class="layout-row user-comments">
                        <img src="img/no_picture.png" alt="user-image"/>
                        <div class="layout-column user-detail">
                            <div class="layout-row">
                                <span class="user-name">Lokesdh tiwari</span>
                                <span>Congret bhai shaib</span>
                            </div>
                            <div class="layout-row">
                                <span class="user-name">Like</span>
                                <span class="user-name">Reply</span>
                                <span>28 min agao</span>
                            </div>
                        </div>

                    </div>
                    <div class="layout-column comment-wrap">
                        <span>View more Comments</span>
                    </div>
                    <div class="layout-row user-comments">
                        <img src="img/no_picture.png" alt="user-image"/>
                        <div class="input-area"><input placeholder="Write a Comments"/>
                            <i class="fa fa-camera"></i>
                            <i class="fa fa-smile-o"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="flex-30 flex-xs-100 layout-column profile-section" style="overflow: hidden" >
            <div style="height: 100%;width: 100%;overflow-y: auto;">
                <div class="layout-column profile-picture">
                    <img src="img/user-image.png" alt="user-image"/>
                    <span class="user-name1">Rohit settity</span>
                    <span class="user-status">I am so glad to have to aal here ,to me and may family :) :).So glad to seee you all here.</span>
                </div>
                <div class="layout-column unknown-comment">
                    <span>Mahish Mahtota <a>@coccolo</a></span>
                    <span>I am so glad to have to aal here ,to me and may family,I am so glad to have to aal here ,to me and may family,I am so glad to have to aal here ,to me and may family</span>

                </div>
                <div class="layout-row">
                    <video height="170"  controls>
                        <source src="https://www.youtube.com/" type="video/mp4">
                    </video>
                </div>
                <div class="layout-column  profile-picture">
                    <div class="layout-row">
                        <img src="img/user-image.png" alt="user-image"/>
                        <span class="flex-80 layout-row layout-align-end-end hour-count">14h</span></div>
                    <span class="user-name1">mohit settity</span>
                    <span class="user-status">I am so glad to have to aal here ,to me and may family :) :).So glad to seee you all here.</span>
                </div>
                <div class="layout-column  profile-picture">
                    <div class="layout-row">
                        <img src="img/user-image.png" alt="user-image"/>
                        <span class="flex-80 layout-row layout-align-end-end hour-count">14h</span></div>
                    <span class="user-name1">mohit settity</span>
                    <span class="user-status">I am so glad to have to aal here ,to me and may family :) :).So glad to seee you all here.</span>
                </div>
                <div class="layout-column  profile-picture">
                    <div class="layout-row">
                        <img src="img/user-image.png" alt="user-image"/>
                        <span class="flex-80 layout-row layout-align-end-end hour-count">14h</span></div>
                    <span class="user-name1">mohit settity</span>
                    <span class="user-status">I am so glad to have to aal here ,to me and may family :) :).So glad to seee you all here.</span>
                </div>
                <div class="layout-column  profile-picture">
                    <div class="layout-row">
                        <img src="img/user-image.png" alt="user-image"/>
                        <span class="flex-80 layout-row layout-align-end-end hour-count">14h</span></div>
                    <span class="user-name1">mohit settity</span>
                    <span class="user-status">I am so glad to have to aal here ,to me and may family :) :).So glad to seee you all here.</span>
                </div>
                <div class="layout-row  share-it">
                    <span class="layout-row flex-20 layout-align-start-center"><i class="fa fa-reply"></i></span>
                    <span class="layout-row flex-30 layout-align-start-center"><i class="fa fa-retweet"></i> 66</span>
                    <span class="layout-row flex-30 layout-align-start-center"><i class="fa fa-heart"></i> 40</span>
                    <span class="layout-row flex-20 layout-align-start-center"><i class="fa fa-ellipsis-h"></i></span>

                </div>
            </div>
        </div>
        <!--            <div class="flex-30 layout-align-center-center layout-row">
                        <div class="login-part layout-column layout-align-center-center" id="hexagon">
                            <i class="fa fa-user"></i>
                            <span>USER LOGIN</span>
                            <span>Sample Text</span>
                            <div><input placeholder="username"/><i class="fa fa-user"></i></div>
                            <div><input placeholder="password"/><i class="fa fa-lock"></i></div>
                            <div><input type="checkbox" />Remember Me</div>
                            <a>Forget Password</a>
                            <button class="login-btn" id="small-hoxa">login</button>
                            <button class="btn-sign">sign up</button>
                        </div>
                    </div>-->
    </div>
</section>
<div class="md-container md-effect-12" id="modal-12">
    <div class="md-content">
        <!--<h3>Your</h3>-->
        <div class="drop_area">
            <form class="form" action="" method="post" id="comment_post_form">
                <div class="form-group">
                    <textarea class="form-control" name="COMMENTS"></textarea>
                </div>
            </form>

            <div id="actions" class="row">

                <div class="col-lg-7">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Click To Add files Or Drop Your Files Here</span>
                    </span>
                    <!--                    <button type="submit" class="btn btn-primary start">
                                            <i class="glyphicon glyphicon-upload"></i>
                                            <span>Start upload</span>
                                        </button>
                                        <button type="reset" class="btn btn-warning cancel">
                                            <i class="glyphicon glyphicon-ban-circle"></i>
                                            <span>Cancel upload</span>
                                        </button>-->
                </div>

                <div class="col-lg-5">
                    <!-- The global file processing state -->
                    <span class="fileupload-process">
                        <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                        </div>
                    </span>
                </div>

            </div>
            <div class="table table-striped" class="files" id="previews">

                <div id="template" class="file-row">
                    <!-- This is used as the file preview template -->
                    <div>
                        <span class="preview"><img data-dz-thumbnail /></span>
                    </div>
                    <div>
                        <p class="name" data-dz-name></p>
                        <strong class="error text-danger" data-dz-errormessage></strong>
                    </div>
                    <div>
                        <p class="size" data-dz-size></p>
                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                        </div>
                    </div>
                    <div>
                        <!--                        <button class="btn btn-primary start">
                                                    <i class="glyphicon glyphicon-upload"></i>
                                                    <span>Start</span>
                                                </button>
                                                <button data-dz-remove class="btn btn-warning cancel">
                                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                                    <span>Cancel</span>
                                                </button>
                                                <button data-dz-remove class="btn btn-danger delete">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                    <span>Delete</span>
                                                </button>-->
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <button class="md-close btn btn-danger">Cancel</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-success comment_form_submit" disabled>Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<button class="md-trigger" data-modal="modal-12">Just Me</button>
<script>
    $(document).ready(function () {
//        console.log($('header').height());
        $('.video-section').height($(window).height() - $('header').height());
        $('.public-section').height($(window).height() - $('header').height());
        $('.profile-section').height($(window).height() - $('header').height() - 20);
    });</script>
<script>
    var previewNode = document.querySelector("#template");
    previewNode.id = "";
    var previewTemplate = previewNode.parentNode.innerHTML;
    previewNode.parentNode.removeChild(previewNode);
    var myDropzone = new Dropzone(".drop_area", {// Make the whole body a dropzone
        url: "<?php echo site_url('index/uploadFiles') ?>", // Set the url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: true, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    });
    myDropzone.on("addedfile", function (file) {
        $('.comment_form_submit').prop('disabled', true);
        // Hookup the start button
//        file.previewElement.querySelector(".start").onclick = function () {
//            myDropzone.enqueueFile(file);
//        };
    });
// Update the total progress bar
    myDropzone.on("totaluploadprogress", function (progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
    });
    myDropzone.on("sending", function (file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1";
        // And disable the start button
//        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
    });
// Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function (progress) {
        document.querySelector("#total-progress").style.opacity = "0";
    });
    myDropzone.on("complete", function (file) {
        var obj = $.parseJSON(file.xhr.response);
        if (obj.success) {
            $('.comment_form_submit').prop('disabled', false);
            $('#comment_post_form').append('<input type="hidden" name="attchment_path[]" value="' + obj.filename + '">');
            $('#comment_post_form').append('<input type="hidden" name="attchment_type[]" value="' + obj.type + '">');
        }
//        console.log(obj);
//        document.querySelector("#total-progress").style.opacity = "0";
    });
// Setup the buttons for all transfers
// The "add files" button doesn't need to be setup because the config
// `clickable` has already been specified.
//    document.querySelector("#actions .start").onclick = function () {
//        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
//    };
    document.querySelector(".md-close").onclick = function () {
        $('#comment_post_form').find('textarea').val('');
        $('#comment_post_form').find('input').remove();
        myDropzone.removeAllFiles(true);
    };</script>
<script>
    $('#comment_post_form').find('textarea').on('keyup', function () {
//        console.log($('#comment_post_form').find('input').length);
        if ($('#comment_post_form').find('textarea').val() != '' || $('#comment_post_form').find('input').length != 0) {
            $('.comment_form_submit').prop('disabled', false);
        } else {
            $('.comment_form_submit').prop('disabled', true);
        }
    });
    $('.comment_form_submit').on('click', function () {
        if ($('#comment_post_form').find('textarea').val() != '' || $('#comment_post_form').find('input').length != 0) {
            var data = $('#comment_post_form').serialize();
            postComment(data);
//            $('#comment_post_form').submit();
        } else {
            alert("Please write somthing to submit the form");
        }

    });
</script>
<script>
    function postComment(data) {
        $.ajax({
            'url': '<?php echo site_url('index/post_comment') ?>',
            'data': data,
            'type': 'post',
            success: function (result) {
                var obj = $.parseJSON(result);
                console.log(obj);
                var html = '';
                if (obj.success) {
                    $.each(obj.comment,function(index,comments){
                        
                    });
                }
            }
        });
    }
</script>