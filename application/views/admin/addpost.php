<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Add Post</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="<?php echo (base_url() . "assets/js/core/jquery.min.js") ?>"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>

<body>
  <style>
    body,
    html {
      margin: 0;
      padding: 0;
    }
  </style>




  <form id="add-post-form">
    <div class="container">
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

        <div class="col-sm-6">
          <div class="form-group">
            <label class="bmd-label-floating">Meta Tags</label>
            <input type="text" class="form-control" name="meta_keywords">
            <div class="error-message"></div>
          </div>
        </div>

        <!-- <div class="col-sm-6" style="display:none">
          <div class="form-group">
            <label class="bmd-label-floating">SEO URL</label>
            <input type="text" class="form-control" name="seo_url">
            <div class="error-message"></div>
          </div>
        </div> -->

        <div class="col-md-12">
          <div class="form-group">
            <label class="bmd-label-floating">Content</label>
            <textarea id="summernote" name="content"></textarea>
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

        <div class="col-md-12">
          <div class="form-group">
            <button type="submit">Submit</button>
            <span class="text-danger"></span>
          </div>
        </div>

      </div>
    </div>



  </form>

  <script>
    $('#summernote').summernote({
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>
  <script src="<?php echo (base_url() . "js/app.js") ?>"></script>
</body>

</html>