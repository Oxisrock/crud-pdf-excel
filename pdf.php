<html>
<head>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <style>
.pdfobject-container { height: 500px;}
.pdfobject { border: 1px solid #666; }
</style>
</head>
<?php
function setExpires($expires) {
header('Expires: '.gmdate('D, d M Y H:i:s', time()+$expires).'GMT');}?>
<?php header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); header('Cache-Control: no-store, no-cache, must-revalidate'); header('Cache-Control: post-check=0, pre-check=0', FALSE); header('Pragma: no-cache'); ?>
<body>
<!-- The Modal -->
<div class="modal" id="myModal" style="display: block;">
  <div class="modal-dialog">
    <div class="modal-content">

        <button type="button" class="close text-right" style="padding: 1rem;" data-dismiss="modal">&times;</button>

      <!-- Modal body -->
      <div id="my-container" class="modal-body">

      </div>
    <!-- <canvas id="canvas" width="400" height="400"></canvas> -->

      <!-- Modal footer -->
      <div class="modal-footer">
        <a href="http://18.217.182.184/" type="button" class="btn btn-danger">Close</a>
        <a href="http://18.217.182.184/?product=form-clinic" type="button" class="btn btn-success">Buy</a>
      </div>

    </div>
  </div>
</div>
</body>
<script src="assets/js/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
<script src="assets/js/pdfobject.js" charset="utf-8"></script>
<script>
var options = {
   pdfOpenParams: { view: 'FitV', page: '2', scrollbar: '1', toolbar: '0', statusbar: '0', messages: '0', navpanes: '0', }
};
PDFObject.embed("nuevo.pdf", "#my-container", options);
</script>
</html>
