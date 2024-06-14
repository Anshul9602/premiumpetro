
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

<style>
  input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
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
                    <h4 class="card-title ">Gallery</h4>
                    <p class="card-category">Add Images</p>
                  </div>

                  <!-- <a href="<?php echo base_url()   ?>dashboard/addnewpost" class="float-right text-white">Add new Post +</a> -->
                </div>
                <div class="card-body">
                  <h4>Add Images to gallery-</h4>
                  <form id="gallery-images-form">
                    <div class="field" align="left">
                      <h3>Upload your images</h3>
                      <input type="file" id="files" name="other_images[]" multiple />
                    </div>
                    <button type="submit" class="btn btn-primary" id="add-images-btn">Add Images</button>
                  </form>
                  <div>
                    <div class="row">
                      <?php if($images) {?>
                        <?php foreach($images as $image) {?>
                          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div style="width:100%; padding-top:100%; position:relative; background-image:url('<?php echo base_url() . $image['url'] ?>'); background-size:cover; background-repeat:no-repeat;">
                              <i class="fa fa-trash delete-image" data-id="<?php echo $image['id'] ?>" data-url="<?php echo $image['url'] ?>" style="position:absolute; right:10px; top:10px; color:#000; font-size:20px; cursor:pointer;" aria-hidden="true"></i>
                            </div>
                          </div>
                        <?php } ?>
                      <?php } ?>
                      
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
  </div>

<script>
  $(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
      $("#files").on("change", function(e) {
        var files = e.target.files,
          filesLength = files.length;
        for (var i = 0; i < filesLength; i++) {
          var f = files[i]
          if(!f['type'].includes('image'))
          {
            return;
          }
          var fileReader = new FileReader();
          fileReader.onload = (function(e) {
            var file = e.target;
            $("<span class=\"pip\">" +
              "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
              "<br/><span class=\"remove\">Remove image</span>" +
              "</span>").insertAfter("#files");
            $(".remove").click(function(){
              $(this).parent(".pip").remove();
            });
            
            // Old code here
            /*$("<img></img>", {
              class: "imageThumb",
              src: e.target.result,
              title: file.name + " | Click to remove"
            }).insertAfter("#files").click(function(){$(this).remove();});*/
            
          });
          fileReader.readAsDataURL(f);
        }
        console.log(files);
      });
    } else {
      alert("Your browser doesn't support to File API")
    }
  });
</script>

<script>
    $('#gallery-images-form').submit(function (e) {
    e.preventDefault()
    console.log('btn clicked')
    if ($('#files').val() != '') {
      $.ajax({
          type: "POST",
          url: "addgalleryimages",
          data: new FormData(document.getElementById("gallery-images-form")),
          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          beforeSend: function () {
              $("#add-images-btn").prop('disabled',true);
          },
          success(data) {
              console.log(data);
              if (data.error == 0) {
                  alert('Images Updated');
                  location.reload();
                  $("#gallery-images-form").trigger("reset");
                  $('.pip').remove();
              }
              else {
                  alert(data.msg)
                  $("#add-images-btn").prop('disabled',false);
              }


          },
          error(jQxhr, textStatus, errorThrown) {
              console.log(errorThrown);
              console.log("Error, request unsuccessful");
              $('.form-error-message').text("Unable to connect at the moment.");
              $("#add-images-btn").prop('disabled',false);
          }
      })
    }
    else
    {
      alert('please upload one or more images')
    }
    

  })
</script>

<script>
  $('.delete-image').click(function(){

    $.ajax({
          type: "POST",
          url: "deletegalleryimage",
          data: {id:$(this).data('id'), url:$(this).data('url')},
          dataType: 'json',
          beforeSend: function () {
              console.log('deleting')
          },
          success:(data) => {
              console.log(data);
              if (data.error == 0) {
                  $(this).parent().parent().remove();
              }
              else {
                  alert(data.msg)
              }


          },
          error(jQxhr, textStatus, errorThrown) {
              console.log(errorThrown);
              console.log("Error, request unsuccessful");
              alert("Unable to connect at the moment.");
          }
    })
  
  })
</script>




