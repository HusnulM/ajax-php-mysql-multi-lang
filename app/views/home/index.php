<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title><?= $data['title']; ?></title>
    <link href="<?= BASEURL; ?>/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
</head>

<body class="">
    <div class="col-sm-4 col-sm-offset-4" style="margin-top:50px;">
        <div class="form-group">
            <label for="nama" id="lblnama">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="alamat" id="lblalamat">Alamat</label>
            <input type="text" name="alamat" class="form-control">
        </div>
        <div class="form-group">
            <label for="umur" id="lblumur">Umur</label>
            <input type="number" name="umur" class="form-control">
        </div>

        <div>
            <button type="button" id="btn-id">Indonesia</button>
            <button type="button" id="btn-en">English</button>
            <button type="button" id="btn-ch">Mandarin</button>
            <button type="button" id="btn-ab">Arabic</button>
        </div>
    </div>

    <script src="<?= BASEURL; ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?= BASEURL; ?>/plugins/bootstrap/js/bootstrap.js"></script>

    <script>
        var base_url = window.location.origin+'/multi-lang';
        $(function(){

            $('#btn-id').on('click', function(){
                changelanguage('home','id');
            });

            $('#btn-en').on('click', function(){
                changelanguage('home','en');
            });

            $('#btn-ch').on('click', function(){
                changelanguage('home','ch');
            });

            $('#btn-ab').on('click', function(){
                changelanguage('home','ab');
            });

            changelanguage('home', 'id')
            function changelanguage(page, lang){
                $.ajax({
                    url: base_url+'/home/changelanguage/'+page+'/'+lang,
                    type: 'GET',
                    dataType: 'json',
                    cache:false,
                    success: function(result){
                        console.log(result)
                        var component = '';
                        for(var i = 0; i < result.length; i++){
                            component = result[i].elementId;
                            $('#'+component).html(result[i].value);
                        }
                    }
                });
            }
        })
    </script>
</body>
</html>