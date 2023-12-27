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
$_['heading_title']                 = 'CardConnect';

// Tab
$_['tab_settings']                  = 'Pengaturan';
$_['tab_order_status']              = 'Status pesanan';

// Text
$_['text_extension']			    = 'Metode pembayaran';
$_['text_success']					= 'Berhasil: Perubahan pengaturan metode pembayaran CardConnect yang anda lakukan sudah tersimpan dan diperbarui';
$_['text_edit']                     = 'Ubah pengaturan';
$_['text_cardconnect']              = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment']                  = 'Payment';
$_['text_authorize']                = 'Authorize';
$_['text_live']                     = 'Live (Aktif)';
$_['text_test']                     = 'Test';
$_['text_no_cron_time']             = 'The cron has not yet been executed';
$_['text_payment_info']             = 'Payment Information';
$_['text_payment_method']           = 'Payment Method';
$_['text_card']                     = 'Card';
$_['text_echeck']                   = 'eCheck';
$_['text_reference']                = 'Reference';
$_['text_update']                   = 'Update';
$_['text_order_total']              = 'Order Total';
$_['text_total_captured']           = 'Total Captured';
$_['text_capture_payment']          = 'Capture Payment';
$_['text_refund_payment']           = 'Refund Payment';
$_['text_void']                     = 'Void';
$_['text_transactions']             = 'Transactions';
$_['text_column_type']              = 'Type';
$_['text_column_reference']         = 'Reference';
$_['text_column_amount']            = 'Amount';
$_['text_column_status']            = 'Status';
$_['text_column_date_modified']     = 'Date Modified';
$_['text_column_date_added']        = 'Date Added';
$_['text_column_update']            = 'Update';
$_['text_column_void']              = 'Void';
$_['text_confirm_capture']          = 'Are you sure you want to capture the payment?';
$_['text_confirm_refund']           = 'Are you sure you want to refund the payment?';
$_['text_inquire_success']          = 'Inquire was successful';
$_['text_capture_success']          = 'Capture request was successful';
$_['text_refund_success']           = 'Refund request was successful';
$_['text_void_success']             = 'Void request was successful';

// Entry
$_['entry_merchant_id']             = 'ID merchant';
$_['entry_api_username']            = 'API Username';
$_['entry_api_password']            = 'API Password';
$_['entry_token']                   = 'Secret Token';
$_['entry_transaction']             = 'Mode transaksi';
$_['entry_environment']             = 'Mode percobaan';
$_['entry_site']                    = 'Site';
$_['entry_store_cards']             = 'Simpan informasi kartu';
$_['entry_echeck']                  = 'eCheck';
$_['entry_total']                   = 'Total belanja min';
$_['entry_geo_zone']				= 'Kelompok wilayah';
$_['entry_status']					= 'Status';
$_['entry_logging']                 = 'Debug Logging';
$_['entry_sort_order']              = 'No urut';
$_['entry_cron_url']                = 'URL Cronjob';
$_['entry_cron_time']               = 'Terakhir kali cron job dijalankan';
$_['entry_order_status_pending']    = 'Tertunda';
$_['entry_order_status_processing'] = 'Diproses';

// Help
$_['help_merchant_id']              = 'ID merchant akun pribadi Cardconnect anda.';
$_['help_api_username']             = 'Username yang anda gunakan untuk mengakses Cardconnect API.';
$_['help_api_password']             = 'Paswword yang anda gunakan untuk mengakses Cardconnect API';
$_['help_token']                    = 'Masukan//ketik secret token secara acak untuk alasan keamanan.';
$_['help_transaction']              = 'Payment: akan secara otomatis menarik secara langsung pembayaran. Authorization: pihak Cardconnect akan menahan pembayaran dari pelanggan, jika anda ingin menerima pembayaran tersebut harus anda terima secara manual pada pengaturan akun bluepay anda';
$_['help_site']                     = 'Bagian ini merupakan bagian awal dari API URL anda, rubah hanya jika di instruksi.';
$_['help_store_cards']              = 'Aktifkan jika kamu ingin menyimpan informasi kartu menggunakan tokenzation.';
$_['help_environment']              = 'Pilih TEST jika anda menginginkan untuk melakukan simulasi pembayaran dengan menggunakan metode ini dengan tujuan menguji/test koneksi antara sistem toko online anda dengan API metode pembayaran terkait (Pembayaran yang dilakukan pada mode percobaan ini tidak akan masuk pada akun anda). Dan pilih LIVE (AKTIF) jika anda ingin langsung mengaktifkan untuk melakukan pembayaran yang sesungguhnya menggunakan metode pembayaran ini.';
$_['help_echeck']                   = 'Aktifkan jika anda ingin menawarkan pelanggan untuk bisa menggunakan eCheck untuk pembayaran pesanan.';
$_['help_total']                    = 'Total belanja minimum yang harus dicapai oleh pelanggan agar metode pembayaran ini tersedia dan bisa dipilih oleh pelanggan';
$_['help_logging']                  = 'Hal ini akan menambahkan data yang sensitif pada file log toko online anda jika anda mengaktifkan debug mode, seharusnya anda me non-aktifkan bagian ini kecuali ada permintaan khusus.';
$_['help_cron_url']                 = 'Lakukan pengaturan cronjob pada hosting anda dengan memanggil URL ini, hal ini akan memungkinkan pesanan dengan metode pembayaran ini akan otomatis terupdate. Sistem ini didesain untuk bisa dijalankan beberapa jam setelah capture terakhir.';
$_['help_cron_time']                = 'Terakhir kali cron job dengan URL dieksekusi/dijalankan.';
$_['help_order_status_pending']     = 'Pesanan pelanggan akan otomatis di update dengan status pesanan ini jika anda memilih mode transaksi dengan "Authorize".';
$_['help_order_status_processing']  = 'Pesanan pelanggan akan otomatis di update dengan status pesanan ini jika anda memilih mode transaksi dengan "Payment"';

// Button
$_['button_inquire_all']            = 'Inquire All';
$_['button_capture']                = 'Capture';
$_['button_refund']                 = 'Refund';
$_['button_void_all']               = 'Void All';
$_['button_inquire']                = 'Inquire';
$_['button_void']                   = 'Void';

// Error
$_['error_permission']              = 'Mohon maaf: Anda tidak memiliki izin untuk menyimpan perubahan pengaturan metode pembayaran Cardconnect';
$_['error_merchant_id']             = 'Mohon maaf: Anda belum memasukan ID merchant anda, atau ID merchant yang anda masukan salah, mohon diperiksa kembali';
$_['error_api_username']            = 'Mohon maaf: Anda belum memasukan IP username anda, atau IP username yang anda masukan salah, mohon diperiksa kembali';
$_['error_api_password']            = 'Mohon maaf: Anda belum memasukan IP password anda, atau IP password yang anda masukan salah, mohon diperiksa kembali';
$_['error_token']                   = 'Mohon maaf: Anda belum memasukan secret token anda, atau secret token yang anda masukan salah, mohon diperiksa kembali';
$_['error_site']                    = 'Mohon maaf: Anda belum memasukan site anda, atau site yang anda masukan salah, mohon diperiksa kembali';
$_['error_amount_zero']             = 'Mohon maaf: jumlah harus lah diisi dengan nilai lebih tinggi dari NOL (0)';
$_['error_no_order']                = 'Mohon maaf: Sistem tidak menemukan pesanan dengan no yang relevan';
$_['error_invalid_response']        = 'Mohon maaf: Invalid response received';
$_['error_data_missing']            = 'Mohon maaf: Terjadi kesalahan data, atau data tidak bisa ditemukan';
$_['error_not_enabled']             = 'Mohon maaf: Sistem pembayaran ini tidak aktif';