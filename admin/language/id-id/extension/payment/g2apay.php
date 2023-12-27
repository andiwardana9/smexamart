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
$_['heading_title']				 	  = 'G2APay';

// Text
$_['text_extension']			      = 'Metode pembayaran';
$_['text_success']			          = 'Berhasil: Perubahan pengaturan metode pembayaran G2APay yang anda lakukan sudah tersimpan dan diperbarui';
$_['text_edit']                       = 'Ubah pengaturan';
$_['text_g2apay']				 	  = '<a href="https://pay.g2a.com/" target="_blank"><img src="view/image/payment/g2apay.png" alt="G2APay" title="G2APay" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_payment_info']			 	  = 'Payment information';
$_['text_refund_status']		 	  = 'Payment refund';
$_['text_order_ref']			 	  = 'Order ref';
$_['text_order_total']			 	  = 'Total authorised';
$_['text_total_released']		 	  = 'Total released';
$_['text_transactions']			 	  = 'Transactions';
$_['text_column_amount']		 	  = 'Amount';
$_['text_column_type']			 	  = 'Type';
$_['text_column_date_added']	 	  = 'Added';
$_['text_refund_ok']			 	  = 'Refund was successfully requested';
$_['text_refund_ok_order']		 	  = 'Refund was successfully requested, amount fully refunded';

// Entry
$_['entry_username']			 	  = 'Alamat email';
$_['entry_secret']				 	  = 'Secret';
$_['entry_api_hash']		     	  = 'API Hash';
$_['entry_environment']			 	  = 'Mode percobaan';
$_['entry_secret_token']		 	  = 'Secret Token';
$_['entry_ipn_url']				 	  = 'URL IPN';
$_['entry_total']				 	  = 'Total belanja min';
$_['entry_geo_zone']			 	  = 'Kelompok wilayah';
$_['entry_status']				 	  = 'Status';
$_['entry_sort_order']			 	  = 'No urut';
$_['entry_debug']				 	  = 'Debug logging';
$_['entry_order_status']			  = 'Status pesanan';
$_['entry_complete_status']			  = 'Status pesanan komplit/selesai:';
$_['entry_rejected_status']			  = 'Status pesanan ditolak:';
$_['entry_cancelled_status']		  = 'Status pesanan dibatalkan:';
$_['entry_pending_status']            = 'Status pesanan ditunda:';
$_['entry_refunded_status']			  = 'Status pesanan refund:';
$_['entry_partially_refunded_status'] = 'Status pesanan refund sebagian:';

// Help
$_['help_username']					  = 'Alamat email yang anda gunakan untuk akun anda.';
$_['help_ipn_url']					  = 'Copy URL ini dan masukan pada pengaturan merchant akun G2APay anda.';
$_['help_secret_token']				  = 'Secret token yang bisa anda peroleh pada pengaturan APP akun G2APay .';
$_['help_environment']				  = 'Pilih TEST jika anda menginginkan untuk melakukan simulasi pembayaran dengan menggunakan metode ini dengan tujuan menguji/test koneksi antara sistem toko online anda dengan API metode pembayaran terkait (Pembayaran yang dilakukan pada mode percobaan ini tidak akan masuk pada akun anda). Dan pilih LIVE (AKTIF) jika anda ingin langsung mengaktifkan untuk melakukan pembayaran yang sesungguhnya menggunakan metode pembayaran ini.';
$_['help_total']				 	  = 'Total belanja minimum yang harus dicapai oleh pelanggan agar metode pembayaran ini tersedia dan bisa dipilih oleh pelanggan.';
$_['help_debug']				 	  = 'Hal ini akan menambahkan data yang sensitif pada file log toko online anda jika anda mengaktifkan debug mode, seharusnya anda me non-aktifkan bagian ini kecuali ada instruksi yang mengharuskan untuk diaktifkan.';

// Tab
$_['tab_settings']				 	  = 'Pengaturan';
$_['tab_order_status']				  = 'Status pesanan';

// Error
$_['error_permission']		          = 'Mohon maaf: Anda tidak memiliki izin untuk menyimpan perubahan pengaturan metode pembayaran G2APay';
$_['error_email']				 	  = 'Mohon maaf: Anda belum memasukan Alamat email anda, atau alamat email yang anda masukan salah, mohon diperiksa kembaliE-Mail Required!';
$_['error_secret']				 	  = 'Mohon maaf: Anda belum memasukan Secret anda, atau Secret yang anda masukan salah, mohon diperiksa kembali.';
$_['error_api_hash']			 	  = 'Mohon maaf: Anda belum memasukan API Hash anda, atau API Hash yang anda masukan salah, mohon diperiksa kembali.';
$_['entry_status']				 	  = 'Status';

//Button
$_['btn_refund']				 	  = 'refund';

$_['g2apay_environment_live']	 	  = 'Live (Aktif)';
$_['g2apay_environment_test']	 	  = 'Test';