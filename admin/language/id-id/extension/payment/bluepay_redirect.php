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
$_['heading_title']					= 'BluePay Redirect (Membutuhkan SSL)';

// Text
$_['text_extension']			    = 'Metode pembayaran';
$_['text_success']					= 'Berhasil: Perubahan pengaturan metode pembayaran BluePay Redirect (Membutuhkan SSL) yang anda lakukan sudah tersimpan dan diperbarui';
$_['text_edit']                     = 'Ubah pengaturan';
$_['text_bluepay_redirect']			= '<a href="http://www.bluepay.com/preferred-partner/opencart" target="_blank"><img src="view/image/payment/bluepay.jpg" alt="BluePay Redirect" title="BluePay Redirect" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_sim']						= 'Simulator';
$_['text_test']						= 'Test';
$_['text_live']						= 'Live (Aktif)';
$_['text_sale']					    = 'Sale';
$_['text_authenticate']				= 'Authenticate';
$_['text_release_ok']				= 'Release was successful';
$_['text_release_ok_order']			= 'Release was successful';
$_['text_rebate_ok']				= 'Rebate was successful';
$_['text_rebate_ok_order']			= 'Rebate was successful, order status updated to rebated';
$_['text_void_ok']					= 'Void was successful, order status updated to voided';
$_['text_payment_info']				= 'Payment information';
$_['text_release_status']			= 'Payment released';
$_['text_void_status']				= 'Payment voided';
$_['text_rebate_status']			= 'Payment rebated';
$_['text_order_ref']				= 'Order ref';
$_['text_order_total']				= 'Total authorised';
$_['text_total_released']			= 'Total released';
$_['text_transactions']				= 'Transaksi';
$_['text_column_amount']            = 'Jumlah';
$_['text_column_type']              = 'Jenis';
$_['text_column_date_added']        = 'Tanggal ditambahkan';
$_['text_confirm_void']		        = 'Apakah anda yakin ingin melakukan void pembayaran?';
$_['text_confirm_release']	        = 'Apakah anda yakin ingin melakukan relase pembayaran?';
$_['text_confirm_rebate']	        = 'Apakah anda yakin ingin melakukan rebate pembayaran?';

// Entry
$_['entry_vendor']					= 'ID akun';
$_['entry_secret_key']				= "Secret Key";
$_['entry_test']					= 'Mode percobaan';
$_['entry_transaction']				= 'Metode transaksi';
$_['entry_total']					= 'Total belanja min';
$_['entry_order_status']			= 'Status pesanan';
$_['entry_geo_zone']				= 'Kelompok wilayah';
$_['entry_status']					= 'Status';
$_['entry_sort_order']				= 'No urut';
$_['entry_debug']					= 'Debug logging';
$_['entry_card']					= 'Simpan informasi kartu';

// Help
$_['help_test']						= 'Pilih TEST jika anda menginginkan untuk melakukan simulasi pembayaran dengan menggunakan metode ini dengan tujuan menguji/test koneksi antara sistem toko online anda dengan API metode pembayaran terkait (Pembayaran yang dilakukan pada mode percobaan ini tidak akan masuk pada akun anda). Dan pilih LIVE (AKTIF) jika anda ingin langsung mengaktifkan untuk melakukan pembayaran yang sesungguhnya menggunakan metode pembayaran ini.';
$_['help_total']					= 'Total belanja minimum yang harus dicapai oleh pelanggan agar metode pembayaran ini tersedia dan bisa dipilih oleh pelanggan';
$_['help_debug']					= 'Hal ini akan menambahkan data yang sensitif pada file log toko online anda jika anda mengaktifkan debug mode, seharusnya anda me non-aktifkan bagian ini kecuali ada permintaan khusus';
$_['help_transaction']				= 'Sale: akan secara otomatis menarik secara langsung pembayaran. Authorization: pihak bluepay akan menahan pembayaran dari pelanggan, jika anda ingin menerima pembayaran tersebut harus anda terima secara manual pada pengaturan akun bluepay anda. Pilih sale untuk memungkinkan pelanggan melakukan pembayaran rutin/subscription';
$_['help_cron_job_token']			= 'Mohon buat menjadi panjang dan susah untuk ditebak';
$_['help_cron_job_url']				= 'Set a cron job to call this URL';

// Button
$_['btn_release']					= 'Release';
$_['btn_rebate']					= 'Rebate / refund';
$_['btn_void']						= 'Void';

// Error
$_['error_permission']		 = 'Mohon maaf: Anda tidak memiliki izin untuk menyimpan perubahan pengaturan metode pembayaran BluePay Redirect';
$_['error_account_id']		 = 'Mohon maaf: Anda belum memasukan ID akun anda, atau ID akun yang anda masukan salah, mohon diperiksa kembali';
$_['error_secret_key']		 = 'Mohon maaf: Anda belum memasukan secret key anda, atau secret key yang anda masukan salah, mohon diperiksa kembali';