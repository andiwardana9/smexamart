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
$_['heading_title']					= 'Authorize.Net (SIM)';

// Text
$_['text_extension']			    = 'Metode pembayaran';
$_['text_success']					= 'Berhasil: Perubahan pengaturan metode pembayaran Authorize.Net (SIM) yang anda lakukan sudah tersimpan dan diperbarui';
$_['text_edit']                     = 'Ubah pengaturan';
$_['text_authorizenet_sim']			= '<a onclick="window.open(\'http://reseller.authorize.net/application/?id=5561103\');"><img src="view/image/payment/authorizenet.png" alt="Authorize.Net" title="Authorize.Net" style="border: 1px solid #EEEEEE;" /></a>';

// Entry
$_['entry_merchant']				= 'ID merchant';
$_['entry_key']						= 'Transaction Key';
$_['entry_callback']				= 'Relay Response URL';
$_['entry_md5']						= 'MD5 Hash Value';
$_['entry_test']					= 'Mode percobaan';
$_['entry_total']					= 'Total belanja min';
$_['entry_order_status']			= 'Status pesanan';
$_['entry_geo_zone']				= 'Kelompok wilayah';
$_['entry_status']					= 'Status';
$_['entry_sort_order']				= 'No urut';

// Help
$_['help_callback']					= 'Mohon login menggunakan akun anda dan lakukan pengaturan pada <a href="https://secure.authorize.net" target="_blank" class="txtLink">https://secure.authorize.net</a>.';
$_['help_md5']						= 'Pengaturan ini optional saja/tidak wajib, Md5 hash value memiliki fitur yang memungkinkan anda untuk 
Mengotentikasi respon transaksi dari Authorize.Net. Mohon login dan lakukan pengaturan pada <a href="https://secure.authorize.net" target="_blank" class="txtLink">https://secure.authorize.net</a>.';
$_['help_test']						= 'Pilih YA jika anda menginginkan untuk melakukan simulasi pembayaran dengan menggunakan metode ini dengan tujuan menguji/test koneksi antara sistem toko online anda dengan API metode pembayaran terkait (Pembayaran yang dilakukan pada mode percobaan ini tidak akan masuk pada akun anda). Dan pilih TIDAK jika anda ingin langsung mengaktifkan untuk melakukan pembayaran yang sesungguhnya menggunakan metode pembayaran ini.';
$_['help_total']					= 'Total belanja minimum yang harus dicapai oleh pelanggan agar metode pembayaran ini tersedia dan bisa dipilih oleh pelanggan.';

// Error
$_['error_permission']				= 'Mohon maaf: Anda tidak memiliki izin untuk menyimpan perubahan pengaturan metode pembayaran Authorize.Net (SIM)';
$_['error_merchant']				= 'Mohon maaf: Anda belum memasukan Merchant ID atau merchant ID yang anda masukan salah, mohon diperiksa kembali.';
$_['error_key']						= 'Mohon maaf: Anda belum memasukan Transaction key anda, atau transaction key anda yang anda masukan salah, mohon diperiksa kembali.';