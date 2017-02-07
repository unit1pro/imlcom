<?php ?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Songs</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Songs List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <!--                        <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Settings 1</a>
                                                        </li>
                                                        <li><a href="#">Settings 2</a>
                                                        </li>
                                                    </ul>
                                                </li>-->
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
<!--                    <p class="text-muted font-13 m-b-30">
                        DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p>-->
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Composer</th>
                                <th>Writer</th>
                                <th>Melody</th>
                                <th>Lyrics</th>
                                <th>Argm</th>
                                <th>Dubbing</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php foreach ($songs_data as $song) { ?>


                                <tr song_id="<?php echo $song['song_id']; ?>">
                                    <td><a href="javascript:void(0)" class="view_song"><i class="fa fa-eye"></i></a></td>
                                    <td><?php echo isset($song['song_name']) && $song['song_name'] != '' ? $song['song_name'] : 'N/A' ?></td>
                                    <td><?php echo isset($song['song_composer']) && $song['song_composer'] != '' ? $song['song_composer'] : 'N/A' ?></td>
                                    <td><?php echo isset($song['song_lyrics_writer']) && $song['song_lyrics_writer'] != '' ? $song['song_lyrics_writer'] : 'N/A' ?></td>
                                    <td><input type="checkbox" value="1" name="melody" class="js-switch" <?php echo isset($song['song_melody_status']) && $song['song_melody_status'] != 0 ? 'checked' : '' ?> /></td>
                                    <td><input type="checkbox" value="1" name="lyrics" class="js-switch" <?php echo isset($song['song_lyrics_status']) && $song['song_lyrics_status'] != 0 ? 'checked' : '' ?> /></td>
                                    <td><input type="checkbox" value="1" name="arrangement" class="js-switch" <?php echo isset($song['song_arrangment_status']) && $song['song_arrangment_status'] != 0 ? 'checked' : '' ?> /></td>
                                    <td><input type="checkbox" value="1" name="dubbing" class="js-switch" <?php echo isset($song['song_dub_status']) && $song['song_dub_status'] != 0 ? 'checked' : '' ?> /></td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade view_modal" id="song_view_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Song Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="song_add_form" method="post" action="<?php echo site_url('Songs/add') ?>" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Song Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="song_name" name="song_name" required="required" class="form-control col-md-7 col-xs-12">
                            <input type="hidden" id="song_id" name="song_id" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="song_composere">Composer
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="song_composer" name="song_composer"  class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="song_lyrics_writer">Lyrics Writer
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="song_lyrics_writer" name="song_lyrics_writer"  class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="song_genre">Genre 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="song_genre" name="song_genre" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Song Owner</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="song_owner" value="1"> &nbsp; IML &nbsp;
                                </label>
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="song_owner" value="2"> Other
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="song_album">Song Album
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="song_album" name="song_album" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="song_film">Song Film 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="song_film" name="song_film" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="song_price">Song Cost
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="song_price" name="song_price" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">

                            <div class="">
                                <label>
                                    <input type="checkbox" value="1" name="song_melody_status" id="song_melody_status" class="js-switch" /> Melody
                                </label>
                            </div>
                            <div class="">
                                <label>
                                    <input type="checkbox" value="1" name="song_lyrics_status" id="song_lyrics_status"  class="js-switch" /> Lyrics
                                </label>
                            </div>
                            <div class="">
                                <label>
                                    <input type="checkbox" value="1" name="song_arrangment_status" id="song_arrangment_status" class="js-switch" /> Arrangement
                                </label>
                            </div>
                            <div class="">
                                <label>
                                    <input type="checkbox" value="1" name="song_dub_status" id="song_dub_status" class="js-switch" /> Dubbing
                                </label>
                            </div>

                        </div>
                    </div>
                    <!--                    <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Song Lyrics</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <div class="x_content">
                                                <div id="alerts"></div>
                                                <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
                                                    <div class="btn-group">
                                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                        </ul>
                                                    </div>
                    
                                                    <div class="btn-group">
                                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a data-edit="fontSize 5">
                                                                    <p style="font-size:17px">Huge</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-edit="fontSize 3">
                                                                    <p style="font-size:14px">Normal</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-edit="fontSize 1">
                                                                    <p style="font-size:11px">Small</p>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                    
                                                    <div class="btn-group">
                                                        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                                        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                                        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                                        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                                    </div>
                    
                                                    <div class="btn-group">
                                                        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                                        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                                        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                                        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                                    </div>
                    
                                                    <div class="btn-group">
                                                        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                                        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                                        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                                        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                                                    </div>
                    
                                                    <div class="btn-group">
                                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                                                        <div class="dropdown-menu input-append">
                                                            <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                                            <button class="btn" type="button">Add</button>
                                                        </div>
                                                        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                                                    </div>
                    
                                                    <div class="btn-group">
                                                        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                                    </div>
                    
                                                    <div class="btn-group">
                                                        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                                        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                                    </div>
                                                </div>
                    
                                                <div id="editor" class="editor-wrapper"></div>
                    
                                                <textarea name="song_lyrics" id="song_lyrics" style="display:none;"></textarea>
                    
                                                <br />
                    
                                                <div class="ln_solid"></div>
                    
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Resizable Text area</label>
                                                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                                                        <textarea class="resizable_textarea form-control" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..."></textarea>
                                                                                    </div>
                                                                                </div>
                                                </div>
                                            </div>
                                        </div>-->
                    <div class="ln_solid"></div>
                    <!--                    <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>-->

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('.view_song').click(function (e) {
            e.preventDefault();
//       console.log($(this).parent().parent());
            var song_id = $(this).parent().parent().attr('song_id');
            var data = {'song_id': song_id};
            $.ajax({
                url: '<?php echo site_url('Songs/get'); ?>',
                type: 'post',
                data: data,
                success: function (result) {
                    var jsonstr = result.replace('\\', '');
                    var obj = $.parseJSON(jsonstr);
                    if (obj.success) {
                        $('#song_id').val(obj.song_details.song_id);
                        $('#song_composer').val(obj.song_details.song_composer);
                        $('#song_name').val(obj.song_details.song_name);
                        $('#song_lyrics_writer').val(obj.song_details.song_lyrics_writer);
                        $('#song_genre').val(obj.song_details.song_genre);
                        $('#song_album').val(obj.song_details.song_album);
                        $('#song_film').val(obj.song_details.song_film);
                        $('#song_price').val(obj.song_details.song_price);
                        $("input[name='song_owner'][value='" + obj.song_details.song_owner + "']").prop('checked', true);
                        if (obj.song_details.song_melody_status == '1')
                            $("input[name='song_melody_status']").attr('checked', true);
                        if (obj.song_details.song_lyrics_status == '1') {
                            console.log('check');
                            $("#song_lyrics_status").attr('checked', true);
                        } else {
                            console.log('uncheck');
                        }
                        if (obj.song_details.song_arrangment_status == '1')
                            $("#song_arrangment_status").attr('checked', true);
                        if (obj.song_details.song_dub_status == '1')
                            $("#song_dub_status").attr('checked', true);
                        $('.view_modal').modal('show');

                    } else {
                    }
                    console.log(obj);

                }
            });
        });
    });

</script>



