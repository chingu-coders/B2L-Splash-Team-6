<html>
<head>
  <?php #require 'config.php'; ?>
  <meta charset="utf-8">
  <title>Work Request</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="workRequest.css">
</head>
<body>
<?php include './php/nav.php' ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div id="content">
        <h1>We have a thing for grass.</h1>
        <h3>You're judging, we can tell...</h3>
      </div>
    </div>
  </div>
</div>
<div id="form-messages"></div>
<?php #include './php/modals.php'; ?>
<div class="modal fade" id="indoorModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Submit Indoor Issue</h4>
      </div>
      <div class="modal-body">
        <form id="ajaxIndoor" action="mailer.php" method="POST">
          <div class="form-group">
            <label for="name">Required</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">name </span>
            <input type="text" class="form-control" id="name" name="name" placeholder="Your full name" aria-describedby="basic-addon3">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2">email</span>
            <input type="text" class="form-control" id="email" name="email" placeholder="Your email address" aria-describedby="basic-addon2">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">num. </span>
            <input type="text" class="form-control"id="number" name="number"placeholder="Your phone number" aria-describedby="basic-addon2">
          </div>
          <!-- address-line1 input-->
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">addr </span>
            <input type="text" class="form-control" id="address" name="address" placeholder="Your street address" aria-describedby="basic-addon2">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">unit </span>
            <input type="text" class="form-control" id="unitNumber" name="unit" placeholder="Your unit num" aria-describedby="basic-addon2">
          </div>
          </div>
          <div class="form-group">
          <label class="radio-inline"><input type="radio" name="optradio" checked="checked">A/C</label>
          <label class="radio-inline"><input type="radio" name="optradio">Bathroom</label>
          <label class="radio-inline"><input type="radio" name="optradio">Bedroom</label>
          <label class="radio-inline"><input type="radio" name="optradio">Electrical</label>
          <label class="radio-inline"><input type="radio" name="optradio">Kitchen</label>
          <label class="radio-inline"><input type="radio" name="optradio">Living Room</label>
        </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" id="message-text" name="message" placeholder="Send Management a nice message. We'll follow up for you... Promise."></textarea>
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2">Recipient</span>
            <input type="text" class="form-control" id="email1" name="recipient" placeholder="Management Email" aria-describedby="basic-addon2">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="button" name="send">Send</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="outdoorModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Submit Outdoor Issue</h4>
      </div>
      <div class="modal-body">
        <h3>Required</h3>
        <form id="ajaxOutdoor" method="POST" action="mailer.php">
          <div class="form-group">
            <label for="name">Required</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">name </span>
            <input type="text" class="form-control" id="name" name="name" placeholder="Your full name" aria-describedby="basic-addon3">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2">email</span>
            <input type="text" class="form-control" id="email" name="email" placeholder="Your email address" aria-describedby="basic-addon2">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">num. </span>
            <input type="text" class="form-control"id="number" name="number"placeholder="Your phone number" aria-describedby="basic-addon2">
          </div>
          <!-- address-line1 input-->
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">addr </span>
            <input type="text" class="form-control" id="address" name="address" placeholder="Your street address" aria-describedby="basic-addon2">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">unit </span>
            <input type="text" class="form-control" id="unitNumber" name="unit" placeholder="Your unit num" aria-describedby="basic-addon2">
          </div>
          </div>
          <div class="form-group">
            <label class="radio-inline"><input type="radio" name="optradio" checked="checked">Exterior</label>
            <label class="radio-inline"><input type="radio" name="optradio">Patio</label>
            <label class="radio-inline"><input type="radio" name="optradio">Parking</label>
            <label class="radio-inline"><input type="radio" name="optradio">Roof</label>
            <label class="radio-inline"><input type="radio" name="optradio">Yard/Brush</label>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" id="message-text" name="message" placeholder="Send Management a nice message. We'll follow up for you... Promise."></textarea>
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2">Recipient</span>
            <input type="text" class="form-control" id="email1" name="recipient" placeholder="Management Email" aria-describedby="basic-addon2">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="button1">Send</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="pestsModal" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Submit Pests Issue</h4>
      </div>
      <div class="modal-body">
        <h3>Required</h3>
        <form id="ajaxPests" method="POST" action="mailer.php">
          <div class="form-group">
            <label for="name">Required</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">name </span>
            <input type="text" class="form-control" id="name" name="name" placeholder="Your full name" aria-describedby="basic-addon3">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2">email</span>
            <input type="text" class="form-control" id="email" name="email" placeholder="Your email address" aria-describedby="basic-addon2">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">num. </span>
            <input type="text" class="form-control"id="number" name="number"placeholder="Your phone number" aria-describedby="basic-addon2">
          </div>
          <!-- address-line1 input-->
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">addr </span>
            <input type="text" class="form-control" id="address" name="address" placeholder="Your street address" aria-describedby="basic-addon2">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">unit </span>
            <input type="text" class="form-control" id="unitNumber" name="unit" placeholder="Your unit num" aria-describedby="basic-addon2">
          </div>
          </div>
          <div>
            <label class="radio-inline"><input type="radio" name="optradio" checked="checked">Insects</label>
            <label class="radio-inline"><input type="radio" name="optradio">Mites</label>
            <label class="radio-inline"><input type="radio" name="optradio">Rodents</label>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" id="message-text" name="message" placeholder="Send Management a nice message. We'll follow up for you... Promise."></textarea>
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2">Recipient</span>
            <input type="text" class="form-control" id="email1" name="recipient" placeholder="Management Email" aria-describedby="basic-addon2">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="button2">Send</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="otherModal" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Submit Other Issue</h4>
      </div>
      <div class="modal-body">
        <h3>Required</h3>
        <form id="ajaxOther" method="POST" action="mailer.php">
          <div class="form-group">
            <label for="name">Required</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">name </span>
            <input type="text" class="form-control" id="name" name="name" placeholder="Your full name" aria-describedby="basic-addon3">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2">email</span>
            <input type="text" class="form-control" id="email" name="email" placeholder="Your email address" aria-describedby="basic-addon2">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">num. </span>
            <input type="text" class="form-control"id="number" name="number"placeholder="Your phone number" aria-describedby="basic-addon2">
          </div>
          <!-- address-line1 input-->
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">addr </span>
            <input type="text" class="form-control" id="address" name="address" placeholder="Your street address" aria-describedby="basic-addon2">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">unit </span>
            <input type="text" class="form-control" id="unitNumber" name="unit" placeholder="Your unit num" aria-describedby="basic-addon2">
          </div>
          </div>
          <div class="form-group">
          <label class="radio-inline"><input type="radio" name="optradio" checked="checked">Complaint</label>
          <label class="radio-inline"><input type="radio" name="optradio">Other</label>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" id="message-text" name="message" placeholder="Send Management a nice message. We'll follow up for you... Promise."></textarea>
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2">Recipient</span>
            <input type="text" class="form-control" id="email" name="recipient" placeholder="Management Email" aria-describedby="basic-addon2">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="button2">Save changes</button>
      </div>

      </form>
    </div>
  </div>
</div>



   <!--Bootstrap Javascript-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>

<script type="text/javascript" src="app.js"></script>
<script type="text/javascript" src="ap1.js"></script>
<script type="text/javascript" src="ap2.js"></script>
<script type="text/javascript" src="ap3.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
