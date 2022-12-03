$(function() {

    const url = window.location.origin + '/';

    $('.tombolTambahMhs').on('click',function(){

        // console.log('Tambah');
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body input[name=_method]').attr('value', 'POST');
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
        $('.modal-body input[name=_method]').attr('value', 'PUT');
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

    //fungsi untuk menampilka nama file ynag di upload
    $('.custom-file-input').on('change', function () {

        var size =(this.files[0].size);
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);

        if(size > 2000000) {
            //menampilkan sweet alert jika file terlalu besar
            Swal.fire({
                icon: 'info',
                title: 'Warning',
                text: 'File yang Anda upload lebih dari 2Mb !!',
            })
        } 
    });

    //fungsi konfirmasi hapus unutk methods anchor link
    $('.tombol-hapus-link').on('click', function (e) {

        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda Yakin ?',
            text: "Data yang Anda hapus tidak dapat di Recovery !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Saya yakin !'
        }).then((result) => {
            if(result.value){
                document.location.href = href;
            }       
        })

    });

    //fungsi konfirmasi hapus without Jquery
const tombolHapus = document.querySelectorAll('.tombol-hapus-form');

tombolHapus.forEach(tbl => {
    tbl.addEventListener('click', function(e) {
        var form =  this.closest("form");

        e.preventDefault();
        Swal.fire({
            title: 'Apakah Anda Yakin ?',
            text: "Data yang Anda hapus tidak dapat di Recovery !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Saya yakin !'
        }).then((willDelete) => {
            if (willDelete.value) {
                form.submit();
                Swal.fire(
                    'Deleted!',
                    'Your data has been deleted.',
                    'success'
                )
            }
        });
    });
});




});