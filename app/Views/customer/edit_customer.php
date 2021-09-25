<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>
  <div class="container">
    <br>
    <div class="card">
      <div class="card-header">Edit Customers Data</div>
      <div class="card-body">
        <form method="POST" autocomplete="on" action="/home/update/<?= $customer['customerid']; ?>">
          <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= (old('name')) ? old('name') : $customer['name']; ?>">
            <div class="error"><?= ($validation->getError('name')) ? $validation->getError('name') : ''; ?></div>
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" id="address" name="address" rows="5"><?= (old('address')) ? old('address') : $customer['address']; ?></textarea>
            <div class="error"><?= ($validation->getError('address')) ? $validation->getError('address') : ''; ?></div>
          </div>
          <div class="form-group">
            <label for="city">City:</label>
            <select name="city" id="city" class="form-control" required>
              <option value="none">--Select a city--</option>
              <option value="Airport West" <?= (old('city')) && old('city') == 'Airport West' ? 'selected' : (($customer['city'] == 'Airport West') ? 'selected' : ''); ?>>Airport West</option>
              <option value="Box Hill" <?= (old('city')) && old('city') == 'Box Hill' ? 'selected' : (($customer['city'] == 'Box Hill') ? 'selected' : ''); ?>>Box Hill</option>
              <option value="Yarraville" <?= (old('city')) && old('city') == 'Yarraville' ? 'selected' : (($customer['city'] == 'Yarraville') ? 'selected' : ''); ?>>Yarraville</option>
            </select>
            <div class="error"><?= ($validation->getError('city')) ? $validation->getError('city') : ''; ?></div>
          </div>
          <br>
          <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
          <a href="/" class="btn btn-secondary">Cancel</a>
        </table>
        </form>
      </div>
    </div>
  </div>
<?= $this->endSection(); ?>