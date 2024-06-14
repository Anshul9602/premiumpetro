<style>
  .notfound {
    display: none;
  }

  #txt_name {
    border: none;
    padding: 2px 4px;
  }

  #add-attendee-form,
  #edit-attendee-form {
    border: thin solid #ccc;
    padding: 10px 20px;
  }
</style>
<div class="collapse navbar-collapse justify-content-end">
  <form class="navbar-form">
    <div class="input-group no-border">
      <input type="text" value="" class="form-control" placeholder="Search...">
      <button type="submit" class="btn btn-white btn-round btn-just-icon">
        <i class="material-icons">search</i>
        <div class="ripple-container"></div>
      </button>
    </div>
  </form>

</div>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div style="margin:0px" class="card-header card-header-info">
            <div class="float-left">
              <h4 class="card-title ">posts</h4>
              <p class="card-category">List of posts</p>
            </div>

            <input type="text" name="txt_name" class="txt_att" data-pos="2" placeholder="Search Heading">
            <input type="text" name="txt_name" class="txt_att" data-pos="3" placeholder="Search Content">


            <a href="<?php echo base_url()   ?>dashboard/addnewpost" class="float-right text-white">Add new Post +</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead class=" text-info">
                  <tr style="border:thin solid #ccc">
                    <th>
                      S.No
                    </th>
                    <th>
                      Heading
                    </th>
                    <th>
                      Content
                    </th>
                    <th>
                      Date
                    </th>
                    <th>
                      Action
                    </th>
                  </tr>

                </thead>
                <tbody>
                  <?php for ($i = 0; $i < sizeof($posts); $i++) {
                    $h = strip_tags($posts[$i]['heading']);
                    $c = strip_tags($posts[$i]['content']);
                    echo "<tr data-id='" . $posts[$i]['id'] . "'>
                          <td>" . ($i + 1) . "</td>
                          <td>" . substr($h, 0, 150) . "...</td>
                          <td>" . substr($c, 0, 150) . "...</td>
                          <td>" . $posts[$i]['date'] . "</td>
                          <td>

          
                        <a class='' href='" . base_url() . "dashboard/updatepost?id=" . $posts[$i]['id'] . "' data-toggle='tooltip' data-placement='top' title='Edit Post'>
                          <button class='btn btn-info'>
                            <li class='fa fa-pencil'></li>
                          </button>
                        </a>
          
                        <a class='open-delete-modal' data-id='" . $posts[$i]['id'] . "' data-tname='blogposts' data-name='Post' data-link='removerow'   data-toggle='tooltip' data-placement='top' title='Delete Post'>
                          <button class='btn btn-danger'>
                            <li class='fa fa-trash'></li>
                          </button>
                        </a>
          
                        

                        
                          
                          
                          
                          </td>
                          
                          </tr>";
                  }
                  ?>

                  <tr class='notfound'>
                    <td colspan='6'>No record found</td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<div id="modal-form" style="position:fixed; top:0; bottom:0; right:0; left:0; display:none; background:rgba(0,0,0,0.3); z-index:998;">
  <div style="height:100%; width:100%; overflow-y:auto;">
    <div class="" style="padding:0 10px; height:100%; width:100%;">
      <div class="card" style="width:100%;">
        <div class="card-header card-header-info" style="margin:0">
          <h4 class="card-title">Add Post</h4>
          <p class="card-category">Enter Details</p>
        </div>
        <div class="card-body">
          <form id="add-post-form">
            <div style="padding:10px 10px 0 10px;height:80vh; overflow-y:auto; overflow-x:hidden;">

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Heading</label>
                    <input type="text" class="form-control" name="heading">
                    <div class="error-message"></div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Author</label>
                    <input type="text" class="form-control" name="author">
                    <div class="error-message"></div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Date</label>
                    <input type="date" class="form-control" name="date" value="<?php echo Date('Y-m-d'); ?>">
                    <div class="error-message"></div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Meta Title</label>
                    <input type="text" class="form-control" name="meta_title">
                    <div class="error-message"></div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Meta Description</label>
                    <input type="text" class="form-control" name="meta_description">
                    <div class="error-message"></div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Content</label>
                    <textarea class="editor" name="content"></textarea>
                    <div class="error-message"></div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="image" class="bmd-label-floating">Click here to upload Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                    <span class="text-danger"></span>
                  </div>
                </div>

              </div>


            </div>
            <div>
              <button type="submit" class="btn btn-info pull-left" id="save-post">ADD POST</button>
              <img src="<?php echo base_url();  ?>/images/loading.gif" id="loading-image" alt="" style="display:none;">
              <button type="button" href="" class="btn close-modal btn-info pull-right">Cancel</button>
              <div class="clearfix"></div>
              <div class="form-error-message"></div>
            </div>

          </form>
        </div>
      </div>
    </div>


  </div>
</div>

<div id="modal-edit-form" style="position:fixed; top:0; bottom:0; right:0; left:0; display:none; background:rgba(0,0,0,0.3); z-index:998;">
  <div style="height:100%; width:100%; overflow-y:auto;">
    <div class="" style="padding:0 10px; height:100%; width:100%;">
      <div class="card" style="width:100%;">
        <div class="card-header card-header-info">
          <h4 class="card-title">Edit Post</h4>
          <p class="card-category">Enter Details</p>
        </div>
        <div class="card-body">
          <form id="edit-post-form">
            <div style="padding:10px 10px 0 10px;height:80vh; overflow-y:auto; overflow-x:hidden;">
              <input type="hidden" name="id" id="post-id">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="top: -1rem;left: 0;font-size: 0.6875rem;">Heading</label>
                    <input type="text" class="form-control" name="heading" id="post-heading" required>
                    <div class="error-message"></div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="top: -1rem;left: 0;font-size: 0.6875rem;">Author</label>
                    <input type="text" class="form-control" name="author" id="post-author" required>
                    <div class="error-message"></div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="top: -1rem;left: 0;font-size: 0.6875rem;">Date</label>
                    <input type="text" class="form-control" name="date" id="post-date" required>
                    <div class="error-message"></div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="top: -1rem;left: 0;font-size: 0.6875rem;">Meta Title</label>
                    <input type="text" class="form-control" name="meta_title" id="post-meta_title" required>
                    <div class="error-message"></div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="top: -1rem;left: 0;font-size: 0.6875rem;">Meta Description</label>
                    <input type="text" class="form-control" name="meta_description" id="post-meta_description" required>
                    <div class="error-message"></div>
                  </div>
                </div>



                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="top: -1rem;left: 0;font-size: 0.6875rem;">Content</label>
                    <textarea class="editor" name="content" id="post-content"></textarea>
                    <div class="error-message"></div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="new-image" class="bmd-label-floating">Click here to upload new Image.</label>
                    <input type="file" class="form-control" name="image" id="new-image">
                    <span class="text-danger"></span>
                  </div>
                </div>

                <div class="col-12">
                  <img src="" alt="" id="post-image" class="img-fluid">
                </div>





              </div>
            </div>

            <div>
              <button type="submit" class="btn btn-info pull-left" id="edit-post">EDIT POST</button>
              <img src="<?php echo base_url();  ?>/images/loading.gif" id="loading-image" alt="" style="display:none;">
              <button type="button" href="" class="btn close-modal btn-info pull-right close-edit-modal">Cancel</button>
              <div class="clearfix"></div>
              <div class="form-error-message"></div>
            </div>

          </form>
        </div>
      </div>
    </div>


  </div>
</div>










<div class="modal" id="delete-modal" aria-hidden="false" style="background:rgba(0,0,0,0.3">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <h4 class="m-t-none m-b text-center">Are you sure you want to delete this Post?</h4>
            <div class="form-group text-center">
              <a href="" class="btn btn-danger" data-link="" data-id="" id="delete-item">Delete</a>
              <img src="<?php echo base_url();  ?>/images/loading.gif" style="display:none;" id="loading-image" alt="">
              <button type="button" class="btn btn-info close-delete-modal">Cancel</button>
              <div class="form-error-message"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="file-delete-modal" aria-hidden="false" style="background:rgba(0,0,0,0.3">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <h4 class="m-t-none m-b text-center">Are you sure you want to delete this File?</h4>
            <div class="form-group text-center">
              <a href="" class="btn btn-danger" data-link="" data-id="" id="delete-file">Delete</a>
              <img src="<?php echo base_url();  ?>/images/loading.gif" style="display:none;" id="loading-image" alt="">
              <button type="button" class="btn btn-info close-delete-modal">Cancel</button>
              <div class="form-error-message"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="description-modal" aria-hidden="false" style="background:rgba(0,0,0,0.3">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <h4 class="m-t-none m-b text-center">Class Description</h4>
            <div class="program-description" style="max-height:75vh; overflow-y:auto;">

            </div>

            <button type="button" class="btn btn-info close-description-modal">Close</button>
            <div class="form-error-message"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {

    // Search all columns
    $('#txt_searchall').keyup(function() {
      // Search Text
      var search = $(this).val();

      // Hide all table tbody rows
      $('table tbody tr').hide();

      // Count total search result
      var len = $('table tbody tr:not(.notfound) td:contains("' + search + '")').length;

      if (len > 0) {
        // Searching text in columns and show match row
        $('table tbody tr:not(.notfound) td:contains("' + search + '")').each(function() {
          $(this).closest('tr').show();
        });
      } else {
        $('.notfound').show();
      }

    });

    // Search on name column only
    $('#txt_name').keyup(function() {
      // Search Text
      var search = $(this).val();

      // Hide all table tbody rows
      $('table tbody tr').hide();

      // Count total search result
      var len = $('table tbody tr:not(.notfound) td:nth-child(4) .class-title:contains("' + search + '")').length;

      if (len > 0) {
        // Searching text in columns and show match row
        $('table tbody tr:not(.notfound) td:contains("' + search + '")').each(function() {
          $(this).closest('tr').show();
        });
      } else {
        $('.notfound').show();
      }

    });

    $('#txt_ins').keyup(function() {
      // Search Text
      var search = $(this).val();

      // Hide all table tbody rows
      $('table tbody tr').hide();

      // Count total search result
      var len = $('table tbody tr:not(.notfound) td:nth-child(3):contains("' + search + '")').length;

      if (len > 0) {
        // Searching text in columns and show match row
        $('table tbody tr:not(.notfound) td:contains("' + search + '")').each(function() {
          $(this).closest('tr').show();
        });
      } else {
        $('.notfound').show();
      }

    });

    $('.txt_att').keyup(function() {
      // Search Text
      var search = $(this).val();

      // Hide all table tbody rows
      $(this).parent().parent().find('table tbody tr').hide();

      // Count total search result
      var len = $(this).parent().parent().find('table tbody tr:not(.notfound) td:nth-child(' + $(this).data('pos') + '):contains("' + search + '")').length;

      if (len > 0) {
        // Searching text in columns and show match row
        $(this).parent().parent().find('table tbody tr:not(.notfound) td:contains("' + search + '")').each(function() {
          $(this).closest('tr').show();
        });
      } else {
        $(this).parent().parent().find('.notfound').show();
      }

    });

    $('#txt_file').keyup(function() {
      // Search Text
      var search = $(this).val();

      // Hide all table tbody rows
      $('#view-uploads-modal table tbody tr').hide();

      // Count total search result
      var len = $('#view-uploads-modal table tbody tr:not(.notfound) td:nth-child(2):contains("' + search + '")').length;

      if (len > 0) {
        // Searching text in columns and show match row
        $('#view-uploads-modal table tbody tr:not(.notfound) td:contains("' + search + '")').each(function() {
          $(this).closest('tr').show();
        });
      } else {
        $('.notfound').show();
      }

    });

  });

  // Case-insensitive searching (Note - remove the below script for Case sensitive search )
  $.expr[":"].contains = $.expr.createPseudo(function(arg) {
    return function(elem) {
      return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
    };
  });
</script>

<div class="modal" id="delete-modal" aria-hidden="false" style="background:rgba(0,0,0,0.3">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <h4 class="m-t-none m-b text-center">Are you sure you want to delete this user?</h4>
            <div class="form-group text-center">
              <a href="" class="btn btn-danger" data-tname="" data-name="" data-link="" data-id="" id="delete-item">Delete</a>
              <img src="<?php echo base_url();  ?>/images/loading.gif" style="display:none;" id="loading-image" alt="">
              <button type="button" class="btn btn-info close-delete-modal">Cancel</button>
              <div class="form-error-message"></div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>