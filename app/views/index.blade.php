<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="http:////maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="http:////maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/todoback.js"></script>
<title>Todo</title>
</head>
<body>
<div class="container-fluid">

  <div class="row">
   <div class="col-md-8">
    <h1> <strong>To Do App - Bild Studio</strong></h1>
    <div class="alert alert-danger" id="danger" role="alert"><strong>Please type something in the field!</strong></div>
     <form action="" method="post" class="form-inline">
      <div class="form-group">
       <div class="input-group">
        <div class="input-group-addon"><span class="glyphicon glyphicon-floppy-save"></span></div>
         <input type="text" class="form-control" name="todo" id="todo" placeholder="Type Something">
       </div>
      </div>
      <button type="submit" id="add"  class="btn btn-primary">Add ToDo Task</button>

     </form>
   </div>
  </div>
  <br><br><br>
  <!-- row for ul list elements -->
  <div class="row">
   <div class="col-md-6">
    <table class="table table-striped table-hover ">
      <thead><th> Check</th> <th> Task</th> <th> Action</th></thead>
      <tbody id="list">

      </tbody>
    </table>
    <br>
       <p><button type="button" class="btn btn-danger">Clear Finished</button></p>
   </div>
  </div>
</div>

<div class="row">
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <h5><strong>Are you sure you wish to delete this?</strong></h5>
      <button type="button" id="yes" value="1" class="btn btn-danger">Yes</button>
      &nbsp;  &nbsp;  &nbsp;
      <button type="button" id="no" value="0" class="btn btn-success">No</button>

    </div>
  </div>
</div>
</div>



</body>
</html>