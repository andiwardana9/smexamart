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
$_['heading_title']			  = 'SagePay Server';

// Text
$_['text_extension']		  = 'Metode pembayaran';
$_['text_success']			  = 'Berhasil: Perubahan pengaturan metode pembayaran SagePay Server yang anda lakukan sudah tersimpan dan diperbarui';
$_['text_edit']               = 'Ubah pengaturan';
$_['text_sagepay_server']	  = '<a href="https://support.sagepay.com/apply/default.aspx?PartnerID=E511AF91-E4A0-42DE-80B0-09C981A3FB61" target="_blank"><img src="view/image/payment/sagepay.png" alt="SagePay" title="SagePay" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_sim']				  = 'Simulator';
$_['text_test']				  = 'Test';
$_['text_live']				  = 'Live (aktif)';
$_['text_defered']			  = 'Defered';
$_['text_authenticate']		  = 'Authenticate';
$_['text_payment']			  = 'Payment';
$_['text_release_ok']		  = 'Release was successful';
$_['text_release_ok_order']	  = 'Release was successful, order status updated to success - settled';
$_['text_rebate_ok']		  = 'Rebate was successful';
$_['text_rebate_ok_order']	  = 'Rebate was successful, order status updated to rebated';
$_['text_void_ok']			  = 'Void was successful, order status updated to voided';
$_['text_payment_info']		  = 'Informasi pembayaran';
$_['text_release_status']	  = 'Payment released';
$_['text_void_status']		  = 'Payment voided';
$_['text_rebate_status']	  = 'Payment rebated';
$_['text_order_ref']		  = 'Order ref';
$_['text_order_total']		  = 'Total authorised';
$_['text_total_released']	  = 'Total released';
$_['text_transactions']		  = 'Transaksi';
$_['text_column_amount']	  = 'Jumlah';
$_['text_column_type']		  = 'Tipe';
$_['text_column_date_added']  = 'Tanggal ditambahkan';
$_['text_confirm_void']		  = 'Are you sure you want to void the payment?';
$_['text_confirm_release']	  = 'Are you sure you want to release the payment?';
$_['text_confirm_rebate']	  = 'Are you sure you want to rebate the payment?';

// Entry
$_['entry_vendor']			  = 'ID Vendor';
$_['entry_test']			  = 'Mode percobaan';
$_['entry_transaction']		  = 'Metode transaksi';
$_['entry_total']			  = 'Total belanja min';
$_['entry_order_status']	  = 'Status pesanan';
$_['entry_geo_zone']		  = 'Kelompok wilayah';
$_['entry_status']			  = 'Status';
$_['entry_sort_order']		  = 'No urut';
$_['entry_debug']			  = 'Debug logging';
$_['entry_card']			  = 'Menyimpan info kartu';
$_['entry_cron_job_token']	  = 'Secret Token';
$_['entry_cron_job_url']	  = 'URL Cron Job';
$_['entry_last_cron_job_run'] = 'Terakhir kali cron job berjalan:';

// Help
$_['help_total']			  = 'Total belanja minimum yang harus dicapai oleh pelanggan agar metode pembayaran ini tersedia dan bisa dipilih oleh pelanggan.';
$_['help_debug']			  = 'Hal ini akan menambahkan data yang sensitif pada file log toko online anda jika anda mengaktifkan debug mode, seharusnya anda me non-aktifkan bagian ini kecuali ada instruksi yang mengahruskan untuk diaktifkan.';
$_['help_transaction']		  = 'Jika anda ingin memungkinkan sistem untuk pembayaran rutin/subscription/recurring/langganan, maka atur pengaturan dengan PAYMENT.';
$_['help_cron_job_token']	  = 'Buat token ini sepanjang mungkin dan sulit untuk ditebak demi alasan keamanan';
$_['help_cron_job_url']		  = 'Lakukan pengaturan cronjob pada hosting anda dengan memanggil URL ini.';

// Button
$_['button_release']		  = 'Release';
$_['button_rebate']			  = 'Rebate / refund';
$_['button_void']			  = 'Void';

// Error
$_['error_permission']		  = 'Mohon maaf: Anda tidak memiliki izin untuk menyimpan perubahan pengaturan metode pembayaran SagePay server';
$_['error_vendor']			  = 'Mohon maaf: Anda belum memasukan ID Vendor anda, atau ID vendor yang anda masukan salah, mohon diperiksa kembali.';