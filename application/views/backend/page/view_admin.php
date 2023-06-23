
<div class="container">
  <div class="col-md-12 mx-auto">
    <div class="card">
      <div class="card-header bg-primary text-white">
        <h3 class="card-title text-center">Admin Users</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="thead-light">
              <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody> 
              <?php foreach ($admin_users as $key => $user): ?>
                <tr class="<?php echo $key % 2 === 0 ? 'bg-light' : 'bg-white'; ?>">
                  <td><?php echo $user->fullname; ?></td>
                  <td><?php echo $user->email; ?></td>
                  <td><?php echo $user->status; ?></td>
                  <td>
                    <div class="d-flex justify-content-center">
                      <button class="btn btn-primary btn-sm mr-2">Edit</button>
                      <button class="btn btn-danger btn-sm">Delete</button>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


