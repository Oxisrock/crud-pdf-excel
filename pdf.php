<html>
<head>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <style>
.pdfobject-container { height: 500px;}
.pdfobject { border: 1px solid #666; }
</style>
</head>
<body>
  <!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Open modal
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

        <button type="button" class="close text-right" style="padding: 1rem;" data-dismiss="modal">&times;</button>

      <!-- Modal body -->
      <div id="my-container" class="modal-body">

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Buy</button>
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
PDFObject.embed("pdf-water.pdf", "#my-container", options);
</script>
<script type="text/javascript">
  document.oncontextmenu = function(){return false}
</script>
</html>
