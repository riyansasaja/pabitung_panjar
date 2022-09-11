<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="hasil.php" method="POST" class="mt-3">
        <input type="text" value="talak_ecourt" name="jenis" hidden>
        <div class="form-group">
            <label for="kelurahan">Pilih Kelurahan Tempat Tinggal Istri</label>
            <select class="form-control selectpicker" data-live-search="true" id="kelurahan" name="kelurahan">
                <option value="pilih" data-tokens="0">--Pilih Kelurahan--</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Hitung</button>
        </div>
    </form>

    <script>
        $.get("https://dev.pa-bitung.go.id/bepanjar/",
            function(data) {
                let isi = data.data;
                console.log(isi);
                $.each(isi, function(i, v) {
                    $('#kelurahan').append(`
                     <option value="${v.biaya}" data-tokens="${v.name}">${v.name}</option>
                     `);
                    $('.selectpicker').selectpicker('refresh');
                });
            },
            "json"
        );
    </script>



</body>

</html>