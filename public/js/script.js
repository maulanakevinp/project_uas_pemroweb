$(function() {
    $('.tampilModalTambah').on('click', function() {
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click', function() {

        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('#form').attr('action', 'http://localhost/projects/phpmvc/public/mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/projects/phpmvc/public/mahasiswa/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });

    });
});