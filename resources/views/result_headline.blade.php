<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Headline Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row px-4 py-5">
            @if ($niche == "" && $target_market == "" && $masalah == "" && $solution == "")
                <div class="col-md-12 mt-4">
                    <p>Sorry! Not available right now.</p>
                </div>
            @else
                <div class="col-md-12">
                    <h1>Pilihan Headline</h1>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        @foreach ($list_headline as $value)
                            <div class="col-md-4 mt-3">
                                <div class="card shadow" style="border-radius: 20px;">
                                    <div class="card-body py-4 px-4">
                                        <p>{!! str_replace(["[niche]", "[target_market]", "[masalah]", "[solution]"], ['<b class="text-danger">' . $niche . '</b>','<b class="text-danger">' . $target_market . '</b>','<b class="text-danger">' . $masalah . '</b>','<b class="text-danger">' . $solution . '</b>'], $value->headline) !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
{{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(document).ready(function () {
    $('#title').keyup(function(e){
        var keyed = $(this).val().replace(/[]/g, '');
        if(keyed == '<')
        {
            $('#title').keyup(function(e){
                var keyed = $(this).val().replace(/[]/g,'');
                $('#a').html('<' + keyed);
                $('#b').html('<' + keyed);
                $('#c').html('<' + keyed);
            });
        }
        else
        $("#a").html(keyed);
        $("#b").html(keyed);
        $("#c").html(keyed);
    });
});
</script> --}}
</html>