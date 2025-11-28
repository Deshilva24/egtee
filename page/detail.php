<!-- DETAIL PRODUK -->
  <main class="wrap">
    <section class="gallery">
      <figure class="main-photo">
        <input type="radio" name="gallery" id="g1" checked>
        <img src="best seller 1. t-shirt oxana black.webp" alt="Kaos depan">

        <input type="radio" name="gallery" id="g2">
        <img src="best seller 1.2.webp" alt="Kaos belakang">

        <input type="radio" name="gallery" id="g3">
        <img src="best seller 1.2.3.webp" alt="Detail sablon">
      </figure>

      <div class="thumbs">
        <label for="g1"><img src="best seller 1. t-shirt oxana black.webp" alt=""></label>
        <label for="g2"><img src="best seller 1.2.webp" alt=""></label>
        <label for="g3"><img src="best seller 1.2.3.webp" alt=""></label>
      </div>
    </section>

    <section class="panel">
      <h1 class="title">Erigo T-Shirt Oxana Black - Kaos Unisex</h1>
      <div class="price">Rp. 98.000</div>

      <div>
        <div class="label">size</div>
        <div class="sizes">
          <input type="radio" id="s" name="size" checked>
          <label for="s">S</label>

          <input type="radio" id="m" name="size">
          <label for="m">M</label>

          <input type="radio" id="l" name="size">
          <label for="l">L</label>

          <input type="radio" id="xl" name="size">
          <label for="xl">XL</label>

          <input type="radio" id="xxl" name="size">
          <label for="xxl">XXL</label>
        </div>
      </div>

      <div>
        <div class="label">kuantitas</div>
        <div class="qty">
          <button type="button" id="minus">-</button>
          <input type="number" id="qty" value="1" min="1" />
          <button type="button" id="plus">+</button>
        </div>
      </div>

      <button class="cta" id="addToCart">tambah ke keranjang</button>
    </section>
  </main>

  <div class="product-description">
    <div class="section">
      <h2 class="section-title">Deskripsi Produk</h2>
      <div class="subsection">
        <h3 class="subsection-title">MODEL BAHAN</h3>
        <ul class="feature-list">
          <li><span class="highlight">T-shirt unisex</span> model regular fit yang tidak terlalu pas dan tidak terlalu longgar, cocok untuk hampir semua bentuk tubuh.</li>
          <li>Terbuat dari <span class="highlight">cotton combed 30s</span> yang lembut dan nyaman dipakai, ideal untuk kegiatan sehari-hari di luar ruangan.</li>
        </ul>
      </div>
    </div>

    <div class="section">
      <h2 class="section-title">Desain Dan Tampilan</h2>
      <ul class="feature-list">
        <li>Warna utama <span class="highlight">hitam polos</span>, cocok dipadukan dengan berbagai jenis bawahan.</li>
        <li>Bagian sablon menggunakan <span class="highlight">plastisol</span>, memberikan hasil sablon yang tajam dan tahan lama</li>
      </ul>
    </div>

    <div class="section">
      <h2 class="section-title">Ukuran Dan Potongan</h2>
      <ul class="feature-list">
        <li>Tersedia dalam ukuran <span class="highlight">S, M, L, XL, dan XXL</span> dengan toleransi ukuran ±1-2 cm</li>
        <li><span class="highlight">Contoh tubuh model:</span> tinggi 185-186 cm, berat 75 kg, memakai ukuran XL</li>
      </ul>
    </div>
  </div>

    <script>
    const minusBtn = document.getElementById("minus");
    const plusBtn = document.getElementById("plus");
    const qtyInput = document.getElementById("qty");
    const addToCartBtn = document.getElementById("addToCart");
    const cartCount = document.getElementById("cartCount");

    let cartTotal = 0;

    minusBtn.addEventListener("click", () => {
      let val = parseInt(qtyInput.value);
      if (val > 1) qtyInput.value = val - 1;
    });

    plusBtn.addEventListener("click", () => {
      let val = parseInt(qtyInput.value);
      qtyInput.value = val + 1;
    });

    addToCartBtn.addEventListener("click", () => {
      let qty = parseInt(qtyInput.value);
      cartTotal += qty;
      cartCount.textContent = cartTotal;
    });
  </script>