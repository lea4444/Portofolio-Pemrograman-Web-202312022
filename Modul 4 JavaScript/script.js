const produk = [
  {
    nama: "Laptop ASUS Vivobook",
    harga: 7000000,
    gambar: ["https://dlcdnwebimgs.asus.com/gain/7b6485d2-2950-485c-92c9-58692b928766/w800", "https://thecompustar.com/wp-content/uploads/2023/04/3369-3.jpg"]
  },
  {
    nama: "Samsung Galaxy 23",
    harga: 3000000,
    gambar: ["https://static1.pocketnowimages.com/wordpress/wp-content/uploads/2023/02/samsung-galaxy-s23-plus-colors.jpg", "https://static1.anpoimages.com/wordpress/wp-content/uploads/2023/01/samsung-galaxy-s23-preview-bader-2.jpg"]
  },
  {
    nama: "Smart TV LG",
    harga: 8000000,
    gambar: ["https://www.lg.com/content/dam/channel/wcms/br/images/tv/32lr650bpsa_awz_essp_br_c/gallery/large01.jpg", "https://www.lg.com/ar/images/televisores/md05827536/gallery/49_55LJ55_C_Desktop_zoom_01.jpg"]
  }
];

let produkAktif = 0;
let gambarAktif = 0;

function tampilkanProduk(index) {
  produkAktif = index;
  gambarAktif = 0;
  const p = produk[index];
  document.getElementById("gambar-produk").src = p.gambar[gambarAktif];
  document.getElementById("nama-produk").innerText = p.nama;
  document.getElementById("harga-produk").innerText = "Rp " + p.harga.toLocaleString();
}

function gantiGambar(offset) {
  const p = produk[produkAktif];
  gambarAktif = (gambarAktif + offset + p.gambar.length) % p.gambar.length;
  document.getElementById("gambar-produk").src = p.gambar[gambarAktif];
}

// Tampilkan semua produk di daftar
const daftar = document.getElementById("daftar-produk");
produk.forEach((p, i) => {
  const li = document.createElement("li");
  li.innerText = `${p.nama} - Rp ${p.harga.toLocaleString()}`;
  li.onclick = () => tampilkanProduk(i);
  daftar.appendChild(li);
});

// Tampilkan produk pertama
tampilkanProduk(0);

// Tampilkan waktu
setInterval(() => {
  const waktu = new Date();
  document.getElementById("waktu").innerText = waktu.toLocaleString();
}, 1000);

// Logika Pemesanan
function pesan() {
  const nama = document.getElementById("nama").value.trim();
  const jumlah = parseInt(document.getElementById("jumlah").value);
  const kode = document.getElementById("kode").value.trim().toUpperCase();

  if (nama === "" || isNaN(jumlah) || jumlah <= 0) {
    alert("Nama dan jumlah harus diisi dan lebih dari 0");
    return;
  }

  const produkDipilih = produk[produkAktif];
  const subtotal = produkDipilih.harga * jumlah;
  let potongan = 0;

  if (kode === "DISKON10") {
    potongan = subtotal * 0.1;
  }

  const total = subtotal - potongan;
  const orderId = `INV-${Math.floor(Math.random() * 100000)}`;

  document.getElementById("output").innerHTML = `
    <h3>Struk Pemesanan</h3>
    <p>Order ID: ${orderId}</p>
    <p>Nama: ${nama}</p>
    <p>Produk: ${produkDipilih.nama}</p>
    <p>Jumlah: ${jumlah}</p>
    <p>Subtotal: Rp ${subtotal.toLocaleString()}</p>
    <p>Potongan: Rp ${potongan.toLocaleString()}</p>
    <p><strong>Total: Rp ${total.toLocaleString()}</strong></p>
  `;
}