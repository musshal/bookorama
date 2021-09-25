<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <br>
  <div class="card">
    <div class="card-header">Add Customers Data</div>
    <div class="card-body">
      <br>
      <form action="home/save" method="POST" autocomplete="on">
        <div class="form-group">  
          <label for="name">Nama:</label>
          <input type="text" class="form-control" id="name" name="name" maxlength="50" value="<?= old('name'); ?>">
          <div class="error"><?= ($validation->getError('name')) ? $validation->getError('name') : ''; ?></div>
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <textarea class="form-control" id="address" name="address" rows="5" cols="30" placeholder="Address (max 100 characters)"><?= old('address'); ?></textarea>
          <div class="error"><?= ($validation->getError('address')) ? $validation->getError('address') : ''; ?></div>
        </div>
        <div class="form-group">
          <label for="city">City:</label>
          <select name="city" id="city" class="form-control">
            <option value="">--Select a city--</option>
            <option value="Airport West" <?= (old('city') && old('city') == 'Airport West') ? 'selected' : ''; ?>>Airport West</option>
            <option value="Box Hill" <?= (old('city') && old('city') == 'Box Hill') ? 'selected' : ''; ?>>Box Hill</option>
            <option value="Yarraville" <?= (old('city') && old('city') == 'Yarraville') ? 'selected' : ''; ?>>Yarraville</option>
          </select>
          <div class="error"><?= ($validation->getError('city')) ? $validation->getError('city') : ''; ?></div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
        <a href="/" class="btn btn-secondary">Cancel</a>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>