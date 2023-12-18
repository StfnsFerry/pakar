<?= $this->extend('layouts/index');?>
<?= $this->section('content');?>
    <section id="home">
      <div class="container">
        <div class="produk-content">
            <div class="back">
                <div class="icon">
                    <a href="/checkout/<?=$produk['id']?>"><i class="fas fa-regular fa-arrow-left"></i></a>
                </div>
                <div class="title">
                    <p>Back to Checkout</p>
                    <h3>Payment</h3>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-6 deliver">
              <div class="form-pengiriman">
                <form action="/transaksi/<?=$produk['id']?>" method="post">
                  <h1 class="mb-4">Contact Information</h1>

                  <div class="input-box">
                    <input
                      type="text"
                      name="nama_penerima"
                      value="<?= $nama_penerima?>"
                      placeholder="Name"
                      readonly
                    />
                  </div>
                  
                  <div class="input-box">
                    <input
                      type="text"
                      name="alamat"
                      value="<?=$alamat?>"
                      placeholder="Address"
                      readonly
                    />
                  </div>
                  <div class="row">
                    <div class="col-6">
                        <div class="input-box">
                          <input
                            type="text"
                            name="telepon"
                            value="<?=$telepon?>"
                            placeholder="Phone Number"
                            readonly
                          />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-box">
                          <input
                            type="number"
                            name="banyak_barang"
                            value="<?=$banyak_barang?>"
                            placeholder="Quantity"
                            readonly
                          />
                        </div>
                    </div>
                  </div>

                  <h1 class="mb-4">Delivery Information</h1>

                  <div class="input-box">
                    <select name="kurir">
                        <option selected>Choose a delivery service</option>
                        <option value="JNE">JNE</option>
                        <option value="Sicepat">Sicepat</option>
                        <option value="J&T Express">J&T Express</option>
                        <option value="Ninja Express">Ninja Express</option>
                        <option value="Lion Parcel">Lion Parcel</option>
                    </select>
                  </div>

                  <h1 class="mb-4">Payment Option</h1>

                  <div class="input-box">
                    <select name="pembayaran">
                        <option selected>Choose a payment method</option>
                        <option value="Dana">Dana</option>
                        <option value="Shopeepay">Shopeepay</option>
                        <option value="Gopay">Gopay</option>
                        <option value="BCA">BCA</option>
                        <option value="Mandiri">Mandiri</option>
                    </select>
                  </div>
                
                  <input type="hidden" name="id_produk" value="<?= $produk['id']?>">
                  <input type="hidden" name="id_toko" value="<?= $produk['id_toko']?>">
                  <input type="hidden" name="id_pembeli" value="<?= user()->id?>">
                  <input type="hidden" name="total_harga" value="<?=$produk['harga']*$banyak_barang+20000?>">
                  <div class="add-to">
                        <button type="submit" class="btn btn-outline-dark fav">Continue</button>
                  </div>     
                </form>
              </div>
            </div>
            <div class="col-6 deliver">
              <div class="order-sum">
                <h1 class="mb-4">Order Summary</h1>
                <div class="subtotal d-flex justify-content-between">
                  <p class="text">Subtotal</p>
                  <p class="text">Rp <?= number_format($produk['harga']*$banyak_barang,0,',','.')?></p>
                </div>
                <div class="delivery d-flex justify-content-between">
                  <p class="text mb-0">Delivery/Shipping</p>
                  <p class="text mb-0">Rp 20.000</p>
                </div>
                <hr />
                <div class="total d-flex justify-content-between">
                  <p class="mb-0 fw-bold">Total</p>
                  <p class="mb-0 fw-bold">Rp <?= number_format($produk['harga']*$banyak_barang+20000,0,',','.')?></p>
                </div>
                <hr />
                <div class="notes w-100 mt-4 mb-4">
                  <p class="mb-0">
                    (The total reflects the price of your order, including all
                    duties and taxes)
                  </p>
                </div>

                <!-- <h1 class="mb-3">Arrives Mon, 27 Mar - Wed, 12 Apr</h1> -->
                <div class="prod-det d-flex">
                  <div class="img">
                    <img src="<?= $produk['foto']?>"/>
                  </div>
                  <div class="desc p-4">
                    <p class="text mb-1 fw-bold"><?= $produk['nama_produk']?></p>
                    <p class="text mb-1">Qty <?=$banyak_barang?></p>
                    <p class="text mb-1">Rp <?= number_format($produk['harga'],0,',','.')?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 <?= $this->endSection();?>