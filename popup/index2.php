<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Auto Popup Modal for Bootstrap 3</title>
  
  
  <link rel='stylesheet prefetch' href='csss.css'>

  
</head>

<body>
  <div class="modal fade" id="global-modal" role="dialog">
  <div class="modal-dialog modal-lg modal-admin">
    <!--Modal Content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" style="margin-top: -16px; font-size: 28px;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>

      </div>
      <div class="modal-body" style="padding: 0;">
        <img class="img-full img-responsive" src="Capture.jpg" ONCLICK="window.location.href='http://www.thezignhotel.com'">
      </div>
    </div>
  </div>
</div>
<?php  
session_start();
echo '<pre>';
print_r($_SESSION);
?>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

    <script src="js/index.js"></script>
<script type="text/javascript">
$('#btnclick').hide();
$(document).ready(function() {
  $('#btnclick').click();
});
</script>
</body>
</html>
