<?php ?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Artist</h3>
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
                    <h2>Artist List</h2>
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
                                <th>Age</th>
                                <th>Phone No.</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Cost</th>
                                <!--<th>Dubbing</th>-->
                            </tr>
                        </thead>


                        <tbody>
                            <?php foreach ($artist_data as $artist) { ?>


                                <tr artist_id="<?php echo $artist['artist_id']; ?>">
                                    <td><a href="javascript:void(0)" class="view_artist"><i class="fa fa-eye"></i></a></td>
                                    <td><?php echo isset($artist['artist_name']) && $artist['artist_name'] != '' ? $artist['artist_name'] : 'N/A' ?></td>
                                    <td><?php echo isset($artist['artist_age']) && $artist['artist_age'] != '' ? $artist['artist_age'] : 'N/A' ?></td>
                                    <td><?php echo isset($artist['artist_phone']) && $artist['artist_phone'] != '' ? $artist['artist_phone'] : 'N/A' ?></td>
                                    <td><?php echo isset($artist['artist_email']) && $artist['artist_email'] != '' ? $artist['artist_email'] : 'N/A' ?></td>
                                    <td><?php echo isset($artist['artist_city']) && $artist['artist_city'] != '' ? $artist['artist_city'] : 'N/A' ?></td>
                                    <td><?php echo isset($artist['artist_price']) && $artist['artist_price'] != '' ? $artist['artist_price'] : 'N/A' ?></td>

                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade view_modal" id="view_artist_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Artist Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="modal_form" method="post" action="<?php echo site_url('Artist/add') ?>" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Artist Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="artist_name" name="artist_name" required="required" class="form-control col-md-7 col-xs-12">
                            <input type="hidden" id="artist_id" name="artist_id" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="artist_age">Age
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="artist_age" name="artist_age"  class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="artist_genre">Genre
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="artist_genre" name="artist_genre"  class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="artist_phone">Phone No. 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="artist_phone" name="artist_phone" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="artist_email">Email
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="artist_email" name="artist_email" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="artist_address">Address 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea type="text" id="artist_address" name="artist_address" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="artist_city">City
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="artist_city" name="artist_city" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="artist_state">State
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="artist_state" name="artist_state" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="artist_country">Country
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="artist_country" name="artist_country" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="artist_price">Artist Cost
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="artist_price" name="artist_price" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save_modal_form">Save changes</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('.view_artist').click(function (e) {
            e.preventDefault();
//       console.log($(this).parent().parent());
            var artist_id = $(this).parent().parent().attr('artist_id');
            console.log(artist_id);
            var data = {'artist_id': artist_id};
            $.ajax({
                url: '<?php echo site_url('Artist/get'); ?>',
                type: 'post',
                data: data,
                success: function (result) {
                    var jsonstr = result.replace('\\', '');
                    var obj = $.parseJSON(jsonstr);
                    if (obj.success) {
                        $('#artist_id').val(obj.artist_details.artist_id);
                        $('#artist_name').val(obj.artist_details.artist_name);
                        $('#artist_age').val(obj.artist_details.artist_age);
                        $('#artist_genre').val(obj.artist_details.artist_genre);
                        $('#artist_phone').val(obj.artist_details.artist_phone);
                        $('#artist_email').val(obj.artist_details.artist_email);
                        $('#artist_address').text(obj.artist_details.artist_address);
                        $('#artist_city').val(obj.artist_details.artist_city);
                        $('#artist_state').val(obj.artist_details.artist_state);
                        $('#artist_country').val(obj.artist_details.artist_country);
                        $('#artist_price').val(obj.artist_details.artist_price);
                       
                        $('#view_artist_modal').modal('show');

                    } else {
                    }
                    console.log(obj);

                }
            });
        });
        $("#save_modal_form").click(function(){
            $('#modal_form').submit();
        });
        
    });

</script>



