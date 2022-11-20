$(function() {


    $('.tombolTambahMhs').on('click',function(){

        // console.log('Tambah');
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

        //baris ini berfungsi untuk menghilangkan data yang ada di modal karena fungsi ajax getUbah masih tersimpan
        $('#nim').val('');
        $('#nama').val('');
        $('#alamat').val('');
        $('#jurusan').val('');
        $('#email').val('');
        

    });


    $('.tampilModalEdit').on('click',function(){

        // console.log('Edit');
        $('#judulModal').html('Edit Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action','http://localhost/tutorial/latihan-php/mvc-php/public/mahasiswa/update');

        const nim = $(this).data('nim');
        // console.log(nim);
        
        $.ajax({

            url: 'http://localhost/tutorial/latihan-php/mvc-php/public/mahasiswa/getEdit',
            data: {nim : nim},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                
                //berfungsi untuk menampilkan data json ke dalam modal tampil ubah
                $('#nim').val(data.nim);
                $('#nama').val(data.nama);
                $('#jurusan').val(data.jurusan);
                $('#email').val(data.email);
                $('#alamat').val(data.alamat);

            }
    
        });

    });



});