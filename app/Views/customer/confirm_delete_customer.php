<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>
  <div class="container">
    <br>
    <div class="card">
      <div class="card-header">Confirm Delete Customers Data</div>
      <div class="card-body">
        <br>
        <table class="table">
          <tr>
            <td>Name</td>
            <td>:</td>
            <td><?= $customer['name']; ?></td>
          </tr>
          <tr>
            <td>Address</td>
            <td>:</td>
            <td><?= $customer['address']; ?></td>
          </tr>
          <tr>
            <td>City</td>
            <td>:</td>
            <td><?= $customer['city']; ?></td>
          </tr>
        <table>
          Are you sure want to delete this item?<br>
          <a class="btn btn-danger mt-1 mr-1" href="/home/delete/<?= $customer['customerid']; ?>">Yes</a>
          <a class="btn btn-primary mt-1" href="/">No</a>
      </div>
    </div>
  </div>
<?= $this->endSection(); ?>