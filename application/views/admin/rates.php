
<style>
.notfound{
  display: none;
}
#txt_name{
    border: none;
    padding: 2px 4px;
}
#add-attendee-form, #edit-attendee-form{
    border:thin solid #ccc;
    padding:10px 20px;
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
                    <h4 class="card-title ">Rates</h4>
                    <p class="card-category">Edit Rates</p>
                  </div>

                  <!-- <a href="<?php echo base_url()   ?>dashboard/addnewpost" class="float-right text-white">Add new Post +</a> -->
                </div>
                <div class="card-body">
                  <div>
                    
                      <form id="edit-rates-form">


                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <!-- <h6><?php echo date('M j<\s\up>S</\s\up> Y',strtotime($pricedate['start_date'])); ?></h6> -->
                              <label class="bmd-label-floating">Start Date</label>
                              <input type="date" class="form-control" value="<?php  echo $pricedate['start_date'] ?>" name="start_date" required>
                              <div class="error-message"></div>
                            </div>
                          </div>

                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">End Date</label>
                              <input type="date" class="form-control" value="<?php  echo $pricedate['end_date'] ?>" name="end_date" required>
                              <div class="error-message"></div>
                            </div>
                          </div>
                        </div>




                      <?php for ($i=0; $i<sizeof($rates);$i++) { ?>
                        <h5><?php echo $rates[$i]['name']?><h5>
                        <h6><?php echo $rates[$i]['refinery']?></h6>

                        <input type="text" name="products[<?php echo $i ?>][id]" value="<?php echo $rates[$i]['id'] ?>" hidden>
                        <div class="row">
                          <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                              <label class="bmd-label-floating">Old Rate</label>
                              <input type="text" class="form-control" value="<?php  echo $rates[$i]['old_rate'] ?>" name="products[<?php echo $i  ?>][old_rate]" required>
                              <div class="error-message"></div>
                            </div>
                          </div>

                          <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                              <label class="bmd-label-floating">New Rate</label>
                              <input type="text" class="form-control" value="<?php  echo $rates[$i]['new_rate'] ?>" name="products[<?php echo $i  ?>][new_rate]" required>
                              <div class="error-message"></div>
                            </div>
                          </div>

                          <div class="col-sm-6 col-md-4">
                            <div class="form-group">
                              <label class="bmd-label-floating">Difference</label>
                              <input type="text" class="form-control" value="<?php  echo $rates[$i]['difference'] ?>" name="products[<?php echo $i  ?>][difference]" required>
                              <div class="error-message"></div>
                            </div>
                          </div>
                        </div>
                      <?php } ?>


                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="price_file" class="bmd-label-floating" style="cursor:pointer;">Click here to upload new Price file</label>
                              <input type="file" class="form-control" name="price_file" id="price_file">
                              <span class="text-danger"> <br> Old file- <a target="_blank" href="<?php echo base_url() . $pricefile['link']  ?>"><?php echo $pricefile['link']  ?></a></span>
                            </div>
                          </div>
                        </div>



                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary">Submit</button>
                              <img src="<?php echo base_url();  ?>/images/loading.gif"  id="loading-image" alt="" style="display:none;">
                              <span class="form-error-message"></span>
                            </div>
                          </div>
                        </div>


                        



                      </form>
                    
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

  <script>
    $('#edit-rates-form').submit(function (e) {
    e.preventDefault();
    $(".error-message").text('')
    e.preventDefault()
    console.log('btn clicked')
    var call_api = 0;
    $.each($("#edit-rates-form input"), function () {
        if ($(this).val() == "" || $.trim($(this).val()).length == 0) {
            if ($(this).prop('required') == false) {
                return;
            }
            call_api = 1;
            $(this).focus();
            $(this).next().text(`Invalid or empty field`)
            return false;
        }
        else {
            $(this).blur();
        }
    })

    if (call_api == 0) {
        console.log(new FormData(document.getElementById("edit-rates-form")))
        $.ajax({
            type: "POST",
            url: "updaterates",
            data: new FormData(document.getElementById("edit-rates-form")),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $("#edit-rates").hide();
                $("#loading-image").show()
            },
            success(data) {
                console.log(data);
                if (data.error != 1) {
                    alert('Rates Updated');
                    $("#edit-rates").show();
                    $("#loading-image").hide()
                }
                else {
                    alert(data.msg)
                    $("#edit-rates").show();
                    $("#loading-image").hide()
                }


            },
            error(jQxhr, textStatus, errorThrown) {
                console.log(errorThrown);
                console.log("Error, request unsuccessful");
                $('.form-error-message').text("Unable to connect at the moment.");
                $("#edit-rates").show();
                $("#loading-image").hide()
            }
        })
    }

})
  </script>

<script>
  $("#price_file",).change(function() {
    var file = this.files[0];
    var fileType = file.type;
    var match = ['application/pdf'];
    if(!((fileType == match[0]))){
        $(this).next().text('Sorry, only PDF files are allowed to upload.');
        $(this).val('');
        return false;
    }
    else
    {   
        $(this).next().removeClass();
        $(this).next().addClass('text-secondary');
        $(this).next().text(file.name);
    }
});
</script>


