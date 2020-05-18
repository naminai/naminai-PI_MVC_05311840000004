# Pemrograman_Integratif_MVC_05311840000004
Nama (NRP): Donny Kurnia Ramadhani (05311840000004)

## Struktur
* app
  * controllers
    * DonasiController.php : Berisi beberapa fungsi:
      * index() : Memanggil method findAll() dan me-render view
      * show() : Menggunakan findRekapitulasiByID() untuk mendapatkan ID transaksinya dan menampilkan deskripsi transaksi
      * add() : Menambahkan ke database dengan method insert()
      * delete() : Menghapus data pada database dengan method delete()
      * search() : Mencari transaksi berdasarkan nama donatur
      * searchByJenis() : Menu untuk kategori. Mencari transaksi berdasarkan jenis donasi
    * HomeController.php : Berisi index untuk me-render view-nya
    * RekapController.php : Berisi index untuk me-render view-nya
  * core
    * Constants.php : Terdapat beberapa konstanta yang akan dipakai untuk seterusnya, seperti BASE_URL untuk mendapatkan root directory
    * Flash Message.php : Berisi fungsi untuk mengaktifkan flash message (tidak bekerja)
    * Model.php : Template untuk models
    * Router.php : Untuk routing URL
    * View.php : Template untuk views
  * models
    * Donasi.php : Terdapat beberapa fungsi:
      * findAll(): Mendapatkan seluruh data tabel rekapitulasi
      * findRekapitulasiByID(): Mendapatkan data berdasarkan ID transaksi
      * insert(): Menambahkan data ke dalam tabel
      * delete(): Menghapus data dalam tabel
      * search() : Mencari data berdasarkan nama
      * searchByJenis() : Mencari data berdasarkan jenis donasi
                    
  * views
    * donasi : Berisi index.html, yang digunakan untuk page form donasi dan cari donasi; dan show.html, yang berisi deskripsi dari transaksi
    * home : Tampilan awal 
    * rekap : Berisi tabel yang berisi seluruh data transaksi donasi
  * Bootstrap.php : spl_autoload_register
  
* public
  * css : Header css
  * js : Header js
  * index.php : Inisialisasi objek router dan autoload
  
* vendor

## Dokumentasi
* Tampilan awal aplikasi
![home](https://user-images.githubusercontent.com/61267430/82163727-2424bf00-98d7-11ea-8957-4f1bce54ca14.jpg)
* Page Rekapitulasi Bantuan
![rekapitulasi bantuan](https://user-images.githubusercontent.com/61267430/82163743-43bbe780-98d7-11ea-8be3-1404725b2d77.jpg)
* Page Donasi
![donasi](https://user-images.githubusercontent.com/61267430/82163779-5f26f280-98d7-11ea-8b0d-a98bdef4862f.jpg)
* Page untuk Formulir Donasi
![form2](https://user-images.githubusercontent.com/61267430/82163802-7b2a9400-98d7-11ea-9bf6-2613575d9eed.jpg)
* Mencari berdasarkan kategori 
![search2](https://user-images.githubusercontent.com/61267430/82163831-97c6cc00-98d7-11ea-9ad9-d969fbb56a69.jpg)
* Menampilkan deskripsi transaksi
![show](https://user-images.githubusercontent.com/61267430/82163847-b2994080-98d7-11ea-8b8c-ea6015e6b6ea.jpg)
