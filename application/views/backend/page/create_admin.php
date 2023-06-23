<div class="container">
<div class="d-flex justify-content-center">
  <div class="col-md-8" style="padding-top: 20px;" >
  <h2>Create Admin</h2>
    <div class="card">
      <div class="card-body">
      <form action="<?php echo base_url('index.php/create_admin'); ?>" method="POST">
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
    <div class="form-group">
      <label for="fullname">Full Name:</label>
      <input type="text" class="form-control custom-input" name="fullname" id="fullname" required>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control custom-input" name="email" id="email" required>
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <div class="input-group">
        <input type="password" class="form-control custom-input" name="password" id="password" required>
    </div>

    <div class="form-group">
      <label for="status">Status:</label>
      <select class="form-control custom-select" name="status" id="status" required>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
      </select>
    </div>

    <input type="submit" class="btn btn-primary custom-button" value="Create Admin">
  </form>
      </div>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>


