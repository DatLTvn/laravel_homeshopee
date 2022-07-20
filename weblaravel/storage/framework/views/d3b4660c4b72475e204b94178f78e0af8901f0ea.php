<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
             <div class="col-md-6">
                  <form action=""method="POST"role="form" enctype="multipart/form-data">
                       <?php echo csrf_field(); ?>
                       <legend>Upload File</legend>
                       <div class="form-group">
                             <label for="">chọn ảnh</label>
                            <input type="file"class="form-control"id=""placeholder="Input field" name ="file">
                       </div>
                       <button type="submit"class="btn btn-primary">Submit</button>
                  </form>
             </div>
        </div>
   </div>
   <!-- jQuery -->
   <script src="// code.jquery.com/jquery.js"></script>
   <!-- Bootstrap JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"integrity="
   sha384-0mSbJDEHialfmuBBQP6A4Qrprq50VfW37PRR3j5ELqxss1yVqotnepnHVP9aJ7xS"crossorigin="anonymous"></script>
   <!-- IE10 viewport hack for Surface/desktop Windows8bug -->
   <script src="Hello World"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel4\resources\views/admin/upload.blade.php ENDPATH**/ ?>