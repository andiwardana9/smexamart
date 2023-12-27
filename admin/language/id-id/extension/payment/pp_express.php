<?php
/**
 * File ini diterjemahkan secara manual oleh Aditya benhardi raintung dengan Penuh kesabaran & kasih sayang di Adelaide-South australia dan kadang-kadang di Melbourne-Victoria
 * Diterjemahkan khusus untuk untuk prooyo creative agency - https://prooyo.com
 * Prooyo adalah creative agency yang bergerak di bidang jasa marketing, digital Marketing atau internet marketing dan advertising
   Layanan kami seperti jasa pembuatan website perusahaan, jasa pembuatan toko online, jasa desain logo, jasa graphic design, pengelolaan website, jasa seo berkualitas dan jasa branding lengkap
 * Mohon jangan meng-upload ulang, copy, editing dan menyebarluaskan file tanpa izin dari prooyo creative agency
 * Jika anda membutuhkan izin untuk penyempurnaan file dan keperluan lainnya, mohon agar mengajukan permohonan anda terlebih dahulu melalui email hello@prooyo.com
 */
// Heading
$_['heading_title']					 = 'PayPal Express Checkout';

// Text
$_['text_extension']				 = 'Metode pembayaran';
$_['text_success']				 	 = 'Berhasil: Perubahan pengaturan metode pembayaran PayPal Express Checkout yang anda lakukan sudah tersimpan dan diperbarui';
$_['text_edit']                      = 'Ubah pengaturan';
$_['text_pp_express']				 = '<a target="_BLANK" href="https://www.paypal.com/uk/mrb/pal=V4T754QB63XXL"><img src="view/image/payment/paypal.png" alt="PayPal Website Payment Pro" title="PayPal Website Payment Pro iFrame" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']			 = 'Authorization';
$_['text_sale']						 = 'Sale';
$_['text_signup']                    = 'Mendaftarkan akun PayPal - Simpan terlebih dahulu pengaturan pada halaman ini, ketika proses pendaftaran selesai halaman ini akan refresh secara otomatis';
$_['text_sandbox']                   = 'Mendaftarkan PayPal sandbox  - Simpan terlebih dahulu pengaturan pada halaman ini, ketika proses pendaftaran selesai halaman ini akan refresh secara otomatis';

// Entry
$_['entry_username']				 = 'Username API';
$_['entry_password']				 = 'Password API';
$_['entry_signature']				 = 'Signature API';
$_['entry_sandbox_username']		 = 'Username API Sandbox';
$_['entry_sandbox_password']		 = 'Password API Sandbox';
$_['entry_sandbox_signature']		 = 'Signature API Sandbox ';
$_['entry_ipn']						 = 'URL IPN';
$_['entry_test']					 = 'Mode percobaan (sandbox)';
$_['entry_debug']					 = 'Debug logging';
$_['entry_currency']				 = 'Mata uang utama';
$_['entry_recurring_cancel']	     = 'Mengizinkan pelanggan untuk cancel pembayaran rutin/recurring';
$_['entry_transaction']		         = 'Metode transaksi';
$_['entry_total']					 = 'Total belanja min';
$_['entry_geo_zone']				 = 'Kelompok wilayah';
$_['entry_status']					 = 'Status';
$_['entry_sort_order']				 = 'No urut';
$_['entry_canceled_reversal_status'] = 'Status Pembatalan pengembalian dana/canceled reversal';
$_['entry_completed_status']		 = 'Status selesai/completed';
$_['entry_denied_status']	         = 'Status ditolak/denied';
$_['entry_expired_status']		     = 'Status kaladuarsa/expired';
$_['entry_failed_status']		     = 'Status gagal/failed';
$_['entry_pending_status']		     = 'Status tertunda/Pending';
$_['entry_processed_status']		 = 'Status diproses/processed';
$_['entry_refunded_status']		     = 'Status dikembalikan/refunded';
$_['entry_reversed_status']		     = 'Status reversed';
$_['entry_voided_status']		     = 'Status dibatalkan/voided';
$_['entry_allow_notes']				 = 'Izinkan Notes';
$_['entry_colour']	      			 = 'Warna latar halaman';
$_['entry_logo']					 = 'Logo';

// Tab
$_['tab_api']				         = 'Pengaturan API';
$_['tab_order_status']				 = 'Status pesanan';
$_['tab_checkout']					 = 'Checkout';

// Help
$_['help_ipn']						 = 'Bagian ini sangat diperlukan untuk pembayaran rutin/recurring payment/ subscription';
$_['help_test']						 = 'Pilih YA jika anda menginginkan untuk melakukan simulasi pembayaran dengan menggunakan metode ini dengan tujuan menguji/test koneksi antara sistem toko online anda dengan API metode pembayaran terkait (Pembayaran yang dilakukan pada mode percobaan ini tidak akan masuk pada akun anda). Dan pilih TIDAK jika anda ingin langsung mengaktifkan untuk melakukan pembayaran yang sesungguhnya menggunakan metode pembayaran ini.';
$_['help_transaction']				 = 'Pilih SALE jika kamu ingin langsung menerima secara otomatis pembayaran dari pelanggan pada akun paypal kamu atau pilih AUTHORIZATION jika kamu menginginkan  paypal untuk menahan uang pembayaran dari pelanggan terlebih dahulu dan membutuhkan kamu untuk menerima/menolak pembayaran tersebut pada akun paypal kamu secara manual.';
$_['help_total']					 = 'Total belanja minimum yang harus dicapai oleh pelanggan agar metode pembayaran ini tersedia dan bisa dipilih oleh pelanggan.';
$_['help_logo']						 = 'Ukuran logo Max 750px(Lebar) x 90px(Tinggi)<br />Hanya lakukan pengaturan logo jika domain/toko online anda memiliki dan terinstall SSL (Secure Sockets Layer), jika toko online tidak memiliki atatu terinstall SSL logo anda tidak akan ditampilkan pada halaman pembayaran.';
$_['help_colour']					 = 'Masukan 6 karakter kode warna HTML, contoh : FA8072';
$_['help_currency']					 = 'Digunakan untuk pencarian transaksi';

// Error
$_['error_permission']				 = 'Mohon maaf: Anda tidak memiliki izin untuk menyimpan perubahan pengaturan metode pembayaran PayPal Express Checkout';
$_['error_username']				 = 'Mohon maaf: Anda belum memasukan Username API anda, atau Username API yang anda masukan salah, mohon diperiksa kembali.';
$_['error_password']				 = 'Mohon maaf: Anda belum memasukan Password API anda, atau Password API yang anda masukan salah, mohon diperiksa kembali.';
$_['error_signature']				 = 'Mohon maaf: Anda belum memasukan Signature API anda, atau Signature API yang anda masukan salah, mohon diperiksa kembali.';
$_['error_sandbox_username']	 	 = 'Mohon maaf: Anda belum memasukan Username API sandbox anda, atau Username API sandbox yang anda masukan salah, mohon diperiksa kembali.';
$_['error_sandbox_password']		 = 'Mohon maaf: Anda belum memasukan Password API sandbox anda, atau Password API sandbox yang anda masukan salah, mohon diperiksa kembali.';
$_['error_sandbox_signature']		 = 'Mohon maaf: Anda belum memasukan Signature API sandbox anda, atau Signature API sandbox yang anda masukan salah, mohon diperiksa kembali.';
$_['error_api']						 = 'Mohon maaf: Telah terjadi kesalahan untuk otorisasi API paypal anda, hal ini mungkin dikarenakan koneksi internet yang anda gunakan, Kesalahan pengisian pada pangaturan API, atau anda belum mendaftar dan membuat API pada akun paypal anda';
$_['error_api_sandbox']				 = 'Mohon maaf: Telah terjadi kesalahan untuk otorisasi API sandbox paypal anda, hal ini mungkin dikarenakan koneksi internet yang anda gunakan, Kesalahan pengisian pada pangaturan API, atau anda belum mendaftar dan membuat API sandbox pada akun paypal anda';