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
$_['heading_title']					 = 'PayPal Payments Standard';

// Text
$_['text_extension']				 = 'Metode pembayaran';
$_['text_success']					 = 'Berhasil: Perubahan pengaturan metode pembayaran PayPal standart yang anda lakukan sudah tersimpan dan diperbarui';
$_['text_edit']                      = 'Ubah pengaturan';
$_['text_pp_standard']				 = '<a target="_BLANK" href="https://www.paypal.com/uk/mrb/pal=V4T754QB63XXL"><img src="view/image/payment/paypal.png" alt="PayPal Website Payment Pro" title="PayPal Website Payment Pro iFrame" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']			 = 'Authorization';
$_['text_sale']						 = 'Sale'; 

// Entry
$_['entry_email']					 = 'E-mail';
$_['entry_test']					 = 'Mode percobaan (sandbox)';
$_['entry_transaction']				 = 'Metode transaksi';
$_['entry_debug']					 = 'Debug Mode';
$_['entry_total']					 = 'Total belanja min';
$_['entry_canceled_reversal_status'] = 'Canceled Reversal Status:';
$_['entry_completed_status']		 = 'Status selesai/completed';
$_['entry_denied_status']	         = 'Status ditolak/denied';
$_['entry_expired_status']		     = 'Status kaladuarsa/expired';
$_['entry_failed_status']		     = 'Status gagal/failed';
$_['entry_pending_status']		     = 'Status tertunda/Pending';
$_['entry_processed_status']		 = 'Status diproses/processed';
$_['entry_refunded_status']		     = 'Status dikembalikan/refunded';
$_['entry_reversed_status']		     = 'Status reversed';
$_['entry_voided_status']		     = 'Status dibatalkan/voided';
$_['entry_geo_zone']				 = 'Kelompok wilayah';
$_['entry_status']					 = 'Status';
$_['entry_sort_order']				 = 'No urut';

// Tab
$_['tab_general']					 = 'Umum';
$_['tab_order_status']       		 = 'Status pesanan';

// Help
$_['help_test']	                     = 'Pilih YA jika anda menginginkan untuk melakukan simulasi pembayaran dengan menggunakan metode ini dengan tujuan menguji/test koneksi antara sistem toko online anda dengan API metode pembayaran terkait (Pembayaran yang dilakukan pada mode percobaan ini tidak akan masuk pada akun anda). Dan pilih TIDAK jika anda ingin langsung mengaktifkan untuk melakukan pembayaran yang sesungguhnya menggunakan metode pembayaran ini.';
$_['help_total']		             = 'Total belanja minimum yang harus dicapai oleh pelanggan agar metode pembayaran ini tersedia dan bisa dipilih oleh pelanggan.';
$_['help_transaction']	             = 'Pilih SALE jika kamu ingin langsung menerima secara otomatis pembayaran dari pelanggan pada akun paypal kamu atau pilih AUTHORIZATION jika kamu menginginkan  paypal untuk menahan uang pembayaran dari pelanggan terlebih dahulu dan membutuhkan kamu untuk menerima/menolak pembayaran tersebut pada akun paypal kamu secara manual.';
$_['help_debug']			    	 = 'Hal ini akan menambahkan data yang sensitif pada file log toko online anda jika anda mengaktifkan debug mode, seharusnya anda me non-aktifkan bagian ini kecuali ada instruksi yang mengharuskan untuk diaktifkan.';
$_['help_email']			    	 = 'Alamat e-mail yang anda gunakan untuk mengakses akun paypal dan menerima pembayaran dari pelanggan.';

// Error
$_['error_permission']				 = 'Mohon maaf: Anda tidak memiliki izin untuk menyimpan perubahan pengaturan metode pembayaran PayPal.';
$_['error_email']					 = 'Mohon maaf: Anda belum memasukan alamat e-mail yang anda gunakan untuk akun paypal anda, atau alamat e-mail yang anda masukan salah, mohon diperiksa kembali.';