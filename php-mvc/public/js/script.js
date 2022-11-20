$(function() {


    $('.tombolTambahMhs').on('click',function(){

        // console.log('Tambah');
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body input[type=hidden]').attr('value', 'POST');

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
        $('.modal-body input[type=hidden]').attr('value', 'PUT');
        $('.modal-body form').attr('action','http://php-mvc-pzn.test:8080/mahasiswa');

        const nim = $(this).data('nim');
        // console.log(nim);
        let x = $('.modal-body input[type=hidden]').val();
        // console.log(x);
        
        $.ajax({

            url: 'http://php-mvc-pzn.test:8080/mahasiswa/getEdit',
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

    //Live search mahasiswa
    $('#keyword').on('keyup', function() {
        const keyword = $(this).val();
        // console.log(keyword);

        $.ajax({

            url: 'http://php-mvc-pzn.test:8080/mahasiswa/cari',
            data: {keyword: keyword},
            method: 'post',
            success: function(data) {
                $('.data-mahasiswa').html(data);
            }

        });
    });



});