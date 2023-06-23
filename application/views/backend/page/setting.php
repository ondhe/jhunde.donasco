<div class="container">
<div class="dashboard-content" style="padding-top: 20px; padding-left:100px;"> <!-- Added padding-top -->
  <div class="col-md-12 mx-auto">
    <h2>Website Information</h2>
    <div class="card">
      <div class="card-body">
      <div class="row ">
      <div class="col-md-6">
     <label style="color: red;" ><?= $this->session->flashdata('error');?></label>
        </div>
         </div>
         <div class="row ">
      <div class="col-md-6">
     <label style="color: green;" ><?= $this->session->flashdata('success');?></label>
        </div>
         </div>
         <form action="<?= base_url();?>index.php/setting" method="POST">
    <?php foreach ($info as $row): ?>
        <div class="form-group">
            <label for="websiteName">Website Name:</label>
            <input type="text" id="websiteName" name="websiteName" class="form-control" required value="<?php echo $row->web_name; ?>">
        </div>

        <div class="form-group">
            <label for="aboutUs">About Us:</label>
            <textarea id="aboutUs" name="aboutUs" class="form-control" required><?php echo $row->about_us; ?></textarea>
        </div>

        <div class="form-group">
            <label for="contactNo">Contact No.:</label>
            <input type="text" id="contactNo" name="contactNo" class="form-control" required value="<?php echo $row->contact; ?>">
        </div>

        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" class="form-control" required value="<?php echo $row->location; ?>">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required value="<?php echo $row->email; ?>">
        </div>

    <?php endforeach; ?>

    <button type="submit" name="settings_btn" class="btn btn-primary btn-center">Save</button>
</form>

      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
                <style>
                .btn-center {
                    display: block;
                    margin: 0 auto;
                    width: 200px; /* Adjust the width as desired */
                    border-radius: 10px; /* Adjust the border radius as desired */
                }
                </style>
