$(document).ready(function () {
    console.log("hallo test");


    $('#jenis_gugatan').on('change', function () {
        $('#sisip').html('');
        let jenisgugatan = $('#jenis_gugatan').val();
        if (jenisgugatan == 1) {
            $('#sisip').load("talak_ecourt.php");
        } else if (jenisgugatan == 2) {
            $('#sisip').load("gugat_ecourt.php");
        } else if (jenisgugatan == 3) {
            $('#sisip').load("talak_murni.php");
        } else if (jenisgugatan == 4) {
            $('#sisip').load("gugat_murni.php");
        } else {
            $('#sisip').html('');
        }
    });






    //test ajax

    // $.ajax({
    //     type: "GET",
    //     url: "https://dev.pa-bitung.go.id/bepanjar",
    //     dataType: "json",
    //     success: function (response) {
    //         console.log('ini hasil panggil di hosting bepanjar');
    //         console.log(response);
    //     }
    // });




});