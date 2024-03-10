// // ambil elemen elemen yang dibutuhkan
// var keyword = document.getElementById('keyword');
// var tomtolCari = document.getElementById('cari');
// var container = document.getElementById('container');

// // tambahkan event ketika keyword ditulis
// keyword.addEventListener('keyup', function() {
    
//     // buat object ajax
//     var xhr = new XMLHttpRequest();

//     // cek kesiapan ajax
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState == 4 && xhr.status == 200) {
//             container.innerHTML = xhr.responseText;
//         }
//     }

//     // eksekusi ajax
//     xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
//     xhr.send();
// });

// pencarian keyword menggunakan jquery
$(document).ready(function() {

    // hilangkan tombol cari
    $('#cari').hide();

    // event ketika keyword ditulis
    $('#keyword').on('keyup', function() {
        
        // muncul icon loading
        $('.loader').show();

        // ajax menggunakan load
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val())

        // Ajax menggunakan $.get
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data) {
            $('.loader').hide();
            $('#container').html(data);
        });

    });

});