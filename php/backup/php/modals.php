<html>
<div class="modal fade modals" id="indoorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="exampleModalLabel">Submit Indoor Request</h3>
      </div>
      <div class="modal-body">
        <?php
    include 'userInfo.php';
    include 'indoor.php';
    include 'modalFooter.php'; ?>
  </div>
</div>
</div>
</div>
<div class="modal fade modals" id="outdoorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Submit Outdoor Request</h4>
      </div>
      <div class="modal-body">
        <?php include 'userInfo.php'; ?>
        <?php include 'outdoor.php'; ?>
    <?php include 'modalFooter.php'; ?>
  </div>
</div>
</div>
</div>
<div class="modal fade modals" id="pestsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Submit Pests Request</h4>
      </div>
      <div class="modal-body">
        <form role="form">
        <?php
        include 'userInfo.php';
        include 'pests.php';
        include 'modalFooter.php'; ?>
      </form>
  </div>
</div>
</div>
</div>
<div class="modal fade modals" id="otherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Submit Other Request</h4>
      </div>
      <div class="modal-body">
        <?php
        include 'userInfo.php';
        include 'other.php';
        include 'modalFooter.php'; ?>
  </div>
</div>
</div>
</div>
</html>
