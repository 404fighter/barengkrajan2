$(document).ready(function() {
    const flashData = $('.flash-data').data('flashdata');
    
    if (flashData) {
        console.log('Flash data exists:', flashData); // Debug statement
        Swal.fire({
            title: 'Data Karyawan',
            text: 'Berhasil ' + flashData,
            icon: 'success'
        });
    }

    // Tombol-hapus
    $('.tombol-hapus').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah anda yakin?',
            text: 'Data karyawan akan dihapus',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        });
    });
});
