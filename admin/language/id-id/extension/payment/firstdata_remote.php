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
$_['heading_title']					= 'First Data EMEA Web Service API';

// Text
$_['text_firstdata_remote']			= '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_extension']			    = 'Metode pembayaran';
$_['text_success']			        = 'Berhasil: Perubahan pengaturan metode pembayaran First Data EMEA Web Service API yang anda lakukan sudah tersimpan dan diperbarui';
$_['text_edit']                     = 'Ubah pengaturan';
$_['text_card_type']				= 'Tipe kartu';
$_['text_enabled']					= 'Diaktifkan';
$_['text_merchant_id']				= 'Store ID';
$_['text_subaccount']				= 'Subaccount';
$_['text_user_id']					= 'User ID';
$_['text_capture_ok']				= 'Capture was successful';
$_['text_capture_ok_order']			= 'Capture was successful, order status updated to success - settled';
$_['text_refund_ok']				= 'Refund was successful';
$_['text_refund_ok_order']			= 'Refund was successful, order status updated to refunded';
$_['text_void_ok']					= 'Void was successful, order status updated to voided';
$_['text_settle_auto']				= 'Sale';
$_['text_settle_delayed']			= 'Pre auth';
$_['text_mastercard']				= 'Mastercard';
$_['text_visa']						= 'Visa';
$_['text_diners']					= 'Diners';
$_['text_amex']						= 'American Express';
$_['text_maestro']					= 'Maestro';
$_['text_payment_info']				= 'Payment information';
$_['text_capture_status']			= 'Payment captured';
$_['text_void_status']				= 'Payment voided';
$_['text_refund_status']			= 'Payment refunded';
$_['text_order_ref']				= 'Order ref';
$_['text_order_total']				= 'Total authorised';
$_['text_total_captured']			= 'Total captured';
$_['text_transactions']				= 'Transaksi';
$_['text_column_amount']			= 'Jumlah';
$_['text_column_type']				= 'Jenis';
$_['text_column_date_added']		= 'Tanggal ditambahkan';
$_['text_confirm_void']				= 'Are you sure you want to void the payment?';
$_['text_confirm_capture']			= 'Are you sure you want to capture the payment?';
$_['text_confirm_refund']			= 'Are you sure you want to refund the payment?';

// Entry
$_['entry_certificate_path']		= 'Certificate path';
$_['entry_certificate_key_path']	= 'Private key path';
$_['entry_certificate_key_pw']		= 'Private key password';
$_['entry_certificate_ca_path']		= 'CA path';
$_['entry_merchant_id']				= 'Store ID';
$_['entry_user_id']					= 'User ID';
$_['entry_password']				= 'Password';
$_['entry_total']					= 'Total belanja min';
$_['entry_sort_order']				= 'No urut';
$_['entry_geo_zone']				= 'Kelompok wilayah';
$_['entry_status']					= 'Status';
$_['entry_debug']					= 'Debug logging';
$_['entry_auto_settle']				= 'Metode penyelesaian transaksi';
$_['entry_status_success_settled']	 = 'Pembayaran berhasil dilakukan - Transaksi selesai(Lunas)';
$_['entry_status_success_unsettled'] = 'Pembayaran berhasil dilakukan - Transaksi belum selesai';
$_['entry_status_decline']			= 'Ditolak';
$_['entry_status_void']				= 'Dibatalkan';
$_['entry_status_refund']			= 'Dana dikembalikan';
$_['entry_enable_card_store']		= 'Token penyimpanan data kartu';
$_['entry_cards_accepted']			= 'Kartu yang anda terima untuk pembayaran';

// Help
$_['help_total']					= 'Total belanja minimum yang harus dicapai oleh pelanggan agar metode pembayaran ini tersedia dan bisa dipilih oleh pelanggan.';
$_['help_certificate']				= 'Certificates dan private keys seharusnya disimpan pada folder yang bukan merupakan folder public web.';
$_['help_card_select']				= 'Tanya pada pengguna/pelanggan untuk tipe kartu apa yang akan mereka gunakan sebelum di redirect untuk pembayaran.';
$_['help_notification']				= 'Anda harus memberikan URL ini pada pengaturan akun First data anda untuk mendapatkan notifikasi pembayaran.';
$_['help_debug']					= 'Hal ini akan menambahkan data yang sensitif pada file log toko online anda jika anda mengaktifkan debug mode, seharusnya anda me non-aktifkan bagian ini kecuali ada permintaan khusus.';
$_['help_settle']					= 'Jika anda menggunakan pre-auth anda harus menyelesaikan tindakan/respon post-auth dalam waktu 3-5 hari atau transaksi akan dibatalkan.';

// Tab
$_['tab_account']					= 'Pengaturan API';
$_['tab_order_status']				= 'Status pesanan';
$_['tab_payment']					= 'Pengaturan pembayaran';

// Button
$_['button_capture']				= 'Capture';
$_['button_refund']					= 'Refund';
$_['button_void']					= 'Void';

// Error
$_['error_merchant_id']				= 'Mohon maaf: Anda belum memasukan Store ID anda, atau Store ID yang anda masukan salah, mohon diperiksa kembali.';
$_['error_user_id']					= 'Mohon maaf: Anda belum memasukan User ID anda, atau User ID yang anda masukan salah, mohon diperiksa kembali.';
$_['error_password']				= 'Mohon maaf: Anda belum memasukan password anda, atau password yang anda masukan salah, mohon diperiksa kembali.';
$_['error_certificate']				= 'Mohon maaf: Anda belum memasukan Certificate path anda, atau Certificate path yang anda masukan salah, mohon diperiksa kembali.';
$_['error_key']						= 'Mohon maaf: Anda belum memasukan Certificate key anda, atau Certificate key yang anda masukan salah, mohon diperiksa kembali.';
$_['error_key_pw']					= 'Mohon maaf: Anda belum memasukan Certificate key password anda, atau Certificate key password yang anda masukan salah, mohon diperiksa kembali.';
$_['error_ca']						= 'Mohon maaf: Anda belum memasukan Certificate Authority (CA) anda, atau Certificate Authority (CA) yang anda masukan salah, mohon diperiksa kembali.';