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
$_['heading_title']         = 'Pilibaba untuk checkout domisili china';

// Tab
$_['tab_register']          = 'Mendaftar';
$_['tab_settings']          = 'Pengaturan';

// Text
$_['text_extension']        = 'Metode pembayaran';
$_['text_success']          = 'Berhasil: Perubahan pengaturan metode pembayaran Pilbaba yang anda lakukan sudah tersimpan dan diperbarui';
$_['text_edit']             = 'Ubah pengaturan';
$_['text_pilibaba']         = '<a href="http://www.pilibaba.com" target="_blank"><img src="view/image/payment/pilibaba.png" alt="Pilibaba" title="Pilibaba"></a>';
$_['text_live']             = 'Live (Aktif)';
$_['text_test']             = 'Test';
$_['text_payment_info']     = 'Info pembayaran';
$_['text_order_id']         = 'ID pesanan';
$_['text_amount']           = 'Jumlah';
$_['text_fee']              = 'Ongkos';
$_['text_date_added']       = 'Tanggal ditambahkan';
$_['text_tracking']         = 'Pelacakan';
$_['text_barcode']          = 'Kode Barcode';
$_['text_barcode_info']     = '(Cetak/print Kode barcode unik ini dan tempelkan pada paket)';
$_['text_confirm']          = 'Apakah anda yakin ingin memperbarui nomor resi pengiriman untuk pelacakan paket?';
$_['text_register_success'] = 'Selamat: Pendaftaran akun anda telah selesai dilakukan, mohon cek folder email anda untuk melakukan konfirmasi pembuatan akun.';
$_['text_tracking_success'] = 'Berhasil: Anda telah memperbarui/update nomor resi pengiriman untuk pelacakan paket.';
$_['text_other']            = 'Lainnya';
$_['text_email']            = 'Alamat Email yang telah terdaftar pada akun Pilbaba anda adalah %s';

// Entry
$_['entry_email_address']   = 'Alamat Email';
$_['entry_password']        = 'Password';
$_['entry_currency']        = 'Mata uang';
$_['entry_warehouse']       = 'Warehouse/gudang';
$_['entry_country']         = 'Negara';
$_['entry_merchant_number'] = 'Nomor merchant';
$_['entry_secret_key']      = 'Secret Key';
$_['entry_environment']     = 'Mode percobaan';
$_['entry_shipping_fee']    = 'Biaya pengiriman';
$_['entry_order_status']    = 'Status pesanan';
$_['entry_status']          = 'Status';
$_['entry_logging']         = 'Debug Logging';
$_['entry_sort_order']      = 'No urut';

// Help
$_['help_email_address']    = 'Mohon masukan alamat email untuk pemilik atau admin toko online anda.';
$_['help_password']         = 'Password yang akan anda masukan setidaknya harus terdiri dari 8 sampai 30 Karakter.';
$_['help_currency']         = 'Mohon masukan mata uang yang sesuai dengan yang digunakan pada toko online dan mata uang untuk penarikan dana pada akun bank anda.';
$_['help_warehouse']        = 'Silahkan pilih warehouse/gudang yang anda gunakan untuk pengiriman paket. Ketika anda menerima pemesanan dari pelanggan yang berdomisili di china (via metode pembayaran Pilbaba) anda bisa mengirimkan paketbpesanan pada warehosue/gudang ini.';
$_['help_country']          = 'Mohon beritahukan dari negara mana anda berasal dan menetap, dan kami akan memberikan informasi untuk warehouse yang terbuka/bisa digunakan pada negara anda.';
$_['help_merchant_number']  = 'Nomor merchant untuk akun pribadi Pilbaba anda.';
$_['help_environment']	    = 'Pilih TEST jika anda menginginkan untuk melakukan simulasi pembayaran dengan menggunakan metode ini dengan tujuan menguji/test koneksi antara sistem toko online anda dengan API metode pembayaran terkait (Pembayaran yang dilakukan pada mode percobaan ini tidak akan masuk pada akun anda). Dan pilih LIVE (AKTIF) jika anda ingin langsung mengaktifkan untuk melakukan pembayaran yang sesungguhnya menggunakan metode pembayaran ini.';
$_['help_secret_key']       = 'Secret key untuk mengakses API pilbaba';
$_['help_shipping_fee']     = 'Biaya pengiriman dari warehouse anda menuju warehouse Pilbaba. Jika anda menggunakan angka desimal, mohon masukan maksimal 2 angka desimal saja.';
$_['help_order_status']     = 'Status pesanan pelanggan yang akan secara otomatis diberikan/diupdate ketika pelanggan melakukan pesanan dengan menggunakan metode pembayaran ini.';
$_['help_total']            = 'Total belanja minimum yang harus dicapai oleh pelanggan agar metode pembayaran ini tersedia dan bisa dipilih oleh pelanggan.';
$_['help_logging']          = 'Hal ini akan menambahkan data yang sensitif pada file log toko online anda jika anda mengaktifkan debug mode, seharusnya anda me non-aktifkan bagian ini kecuali ada instruksi yang mengharuskan untuk diaktifkan.';

// Error
$_['error_warning']         = 'Mohon maaf: Terjadi kesalahan dalam pengisian form, mohon diperiksa kembali.';
$_['error_permission']      = 'Mohon maaf: Anda tidak memiliki izin untuk menyimpan perubahan pengaturan metode pembayaran Pilibaba.';
$_['error_merchant_number'] = 'Mohon maaf: Anda belum memasukan Nomor merchant anda, atau Nomor merchant yang anda masukan salah, mohon diperiksa kembali.';
$_['error_secret_key']      = 'Mohon maaf: Anda belum memasukan Secret key api anda, atau Secret key api yang anda masukan salah, mohon diperiksa kembali.';
$_['error_shipping_fee']    = 'Mohon maaf: Nominal biaya pengiriman harus lah menggunakan angka saja tanpa simbol mata uang dan harus terdiri dari angka desimal.';
$_['error_not_enabled']     = 'Mohon maaf: Modul ini belum diaktifkan.';
$_['error_data_missing']    = 'Mohon maaf: Terjadi kehilangan data/data missing.';
$_['error_tracking_length'] = 'Mohon maaf: Nomor resi pengiriman untuk pelacakan paket pengiriman setidaknya harus terdiri dari 1 sampai 50 karakter';
$_['error_email_address']   = 'Mohon maaf: Anda belum memasukan Alamat email anda, atau Alamat email yang anda masukan salah, mohon diperiksa kembali.';
$_['error_email_invalid']   = 'Mohon maaf: Sepertinya anda salah memasukan alamat email, atau alamat email yang anda masukan tidak valid/aktif.';
$_['error_password']        = 'Mohon maaf: Password yang anda masukan haruslah terdiri dari 8 karakter.';
$_['error_currency']        = 'Mohon maaf: Anda belum memilih mata uang.';
$_['error_warehouse']       = 'Mohon maaf: Anda belum memasukan warehouse/gudang yang akan anda gunakan';
$_['error_country']         = 'Mohon maaf: Anda belum memilih negara';
$_['error_weight']          = 'Mohon maaf: Tolong ganti <a href="%s">Kelas satuan berat</a> menjadi gram. Pengaturan ini bisa anda temukan di Sistem -> Pengaturan toko online pada tab Lokal.';
$_['error_bad_response']    = 'Mohon Maaf: Terjadi kegagalan koneksi, mohon dicoba kembali beberapa saat lagi.';

// Button
$_['button_register']       = 'Daftar';
$_['button_tracking']       = 'Update no resi pengiriman';
$_['button_barcode']        = 'Buat Barcode';