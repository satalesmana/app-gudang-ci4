<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Master Data - Barang</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
        <button type="button" data-bs-toggle="modal" data-bs-target="#formBarangModal"  class="btn btn-sm btn-outline-secondary">Add Item</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
        </button>
    </div>
</div>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Qty</th>
      <th scope="col">Harga Beli</th>
      <th scope="col">Harga Jual</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Spidol</td>
      <td>10</td>
      <td>Rp. 5000</td>
      <td>Rp. 6000</td>
      <td>
          <button class="btn btn-primary btn-sm">Edit</button>
          <button class="btn btn-danger btn-sm">Delete</button>
      </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Spidol</td>
      <td>10</td>
      <td>Rp. 5000</td>
      <td>Rp. 6000</td>
      <td>
          <button class="btn btn-primary btn-sm">Edit</button>
          <button class="btn btn-danger btn-sm">Delete</button>
      </td>
    </tr>
  </tbody>
</table>

<?= $this->include('barang/form_barang'); ?>