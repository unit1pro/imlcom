<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add Song</h3>
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
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <!--                      <li class="dropdown">
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
                        <br />
                        <form id="song_add_form" method="post" action="<?php echo site_url('Songs/add') ?>" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Song Title <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="Song_Title" name="Song_Title" required="required" class="form-control col-md-7 col-xs-12">
                                    <input type="hidden" id="ID" name="ID" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="composer">Composer
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="composer" name="composer"  class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="director">director
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="director" name="director"  class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Writers">Writers 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="Writers" name="Writers" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="synopsis">synopsis
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="synopsis" name="synopsis" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Date">Date
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="Date" name="Date" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <?php // var_dump($userType); ?>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="UserType">User Type
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="CAT_ID" id="CAT_ID" class="form-control col-md-7 col-xs-12">
                                        <option value="0" disabled>Please Select One</option>
                                        <?php
                                        if (isset($songCats) && !empty($songCats)) {
                                            foreach ($songCats as $songCat) {
                                                ?>
                                                <option value="<?php echo $songCat['CAT_ID'] ?>"><?php echo $songCat['CAT_TYPE'] ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="UserType">User Type
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="UID[]" id="UID" class="form-control col-md-7 col-xs-12" multiple>
                                        <option value="0" disabled>Please Select At least One</option>
                                        <?php
                                        if (isset($artists) && !empty($artists)) {
                                            foreach ($artists as $artist) {
                                                ?>
                                                <option value="<?php echo $artist['UID'] ?>"><?php echo $artist['FirstName'] . ' ' . $artist['LastName'] ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Image">Thumbnail
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="Image" name="Image" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Song_File_Name">Song
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="Song_File_Name" name="Song_File_Name" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">Cancel</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

