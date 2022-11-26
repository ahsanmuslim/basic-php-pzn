$(function() {

    const url = 'http://php-jwt-session.test/';


    $('.tombolTambahMhs').on('click',function(){

        // console.log('Tambah');
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body input[type=hidden]').attr('value', 'POST');
        $('.modal-body input[name=nim]').attr('readonly', false);

        //baris ini berfungsi untuk menghilangkan data yang ada di modal karena fungsi ajax getUbah masih tersimpan
        $('#nim').val('');
        $('#nama').val('');
        $('#alamat').val('');
        $('#jurusan').val('');
        $('#email').val('');
        

    });


    $('.tampilModalEdit').on('click',function(){

        $('#judulModal').html('Edit Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body input[type=hidden]').attr('value', 'PUT');
        $('.modal-body input[name=nim]').attr('readonly', true);
        $('.modal-body form').attr('action,' + url + 'mahasiswa');

        const nim = $(this).data('nim');
        // console.log(nim);
        let x = $('.modal-body input[type=hidden]').val();
        // console.log(x);
        
        $.ajax({

            url: url + 'mahasiswa/getEdit',
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

            url: url + 'mahasiswa/cari',
            data: {keyword: keyword},
            method: 'post',
            success: function(data) {
                $('.data-mahasiswa').html(data);
            }

        });
    });



});