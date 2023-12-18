<?= $this->extend('layouts/index');?>
<?= $this->section('content');?>
    <section id="home">
      <div class="container">
        <div class="produk-content">
            <div class="back">
                <div class="icon">
                    <a href="/detail-produk/<?=$produk['id']?>"><i class="fas fa-regular fa-arrow-left"></i></a>
                </div>
                <div class="title">
                    <p>Back to Product</p>
                    <h3>Checkout</h3>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-6 deliver">
              <div class="form-pengiriman">
                <form action="/payment/<?=$produk['id']?>" method="POST">
                <input type="hidden" name="id_produk" value="<?= $produk['id']?>">
                  <h1 class="mb-4">Enter your name and address:</h1>

                  <div class="input-box">
                    <input
                      type="text"
                      name="nama_penerima"
                      placeholder="Name"
                      required
                    />
                  </div>
                  
                  <div class="input-box">
                    <input
                      type="text"
                      name="alamat"
                      placeholder="Address"
                      required
                    />
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="input-box">
                        <input
                          type="text"
                          name="telepon"
                          placeholder="Phone Number"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="input-box">
                        <input
                          type="number"
                          name="banyak_barang"
                          placeholder="Quantity"
                          required
                        />
                      </div>
                    </div>
                  </div>
                  <div class="add-to">
                        <button type="submit" class="btn btn-outline-dark fav">Continue</button>
                  </div>     
                </form>
              </div>
            </div>
            <div class="col-6 deliver">
              <div class="order-sum">
                <h1 class="mb-4">Product Checkout</h1>
                <div class="prod-det d-flex">
                  <div class="img">
                    <img src="<?= $produk['foto']?>"/>
                  </div>
                  <div class="desc p-4">
                    <p class="text mb-1 fw-bold"><?= $produk['nama_produk']?></p>
                    <p class="text mb-1">Rp <?= number_format($produk['harga'],0,',','.')?></p>
                    <p class="text mb-1">Stock : <?= $produk['stok']?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 <?= $this->endSection();?>