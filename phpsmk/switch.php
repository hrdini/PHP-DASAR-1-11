    <?php 
    // $hari = 4;

    // switch ($hari) {
    //     case 1:
    //         echo 'Minggu';
    //         break;
    //     case 2:
    //         echo 'Senin';
    //         break;
    //     case 3:
    //         echo 'Selasa';
    //         break;
    //     default:
    //         echo 'Hari Belum Ditentukan';
    //         break;
    // }

    $pilihan = 'tambah';

    switch ($pilihan) {
        case 'tambah':
            echo 'Anda Memilih Tambah';
            break;
        case 'ubah':
            echo 'Anda Memilih Ubah';
            break;
        case 'hapus':
            echo 'Anda Memilih Hapus';
            break;
        default:
            echo 'Pilihan Belum Ada';
            break;
    }
    ?>