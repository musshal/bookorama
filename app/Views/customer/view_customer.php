<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>
  <div class="container">
    <br>
    <div class="card">
      <div class="card-header">Customers Data</div>
      <div class="card-body">
        <br>
        <a class="btn btn-primary" href="/add-customer">+ Add Customer Data</a><br /><br />
        <table class="table table-striped">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Action</th>
          </tr>
          <?php foreach ($customer as $c) : ?>
            <tr>
              <td><?= $c['customerid']; ?></td>
              <td><?= $c['name']; ?></td>
              <td><?= $c['address']; ?></td>
              <td><?= $c['city']; ?></td>
              <td>
                <a class="btn btn-warning btn-sm" href="/edit-customer/<?= $c['customerid']; ?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="/confirm-delete-customer/<?= $c['customerid']; ?>">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
<?= $this->endSection(); ?>