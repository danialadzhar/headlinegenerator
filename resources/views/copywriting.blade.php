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
        <form action="{{ url('generate') }}" method="POST">
            @csrf
            <div class="row px-4" style="margin-top: 100px;">
                <div class="col-md-12 mb-5">
                    <h1>Headline Generator Melayu</h1>
                    <p>Anda boleh bina headline sendiri semudah dengan mengisi ruang di bawah</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" id="title" placeholder="Niche" name="niche">
                    </div>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#niche"><small>Click here for example</small></a>
                    <!-- Niche -->
                    <div class="modal fade" id="niche" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contoh untuk Niche?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><b>Contoh Headline : </b></p>
                                    <p>3 Tips <b class="text-danger">KECANTIKKAN</b> Untuk Usahawan Yang Nak Nampak Lebih Bergaya</p>
                                    <br>
                                    <p><b>Huraian : </b></p>
                                    <p><b class="text-danger">KECANTIKKAN</b> yang diatas adalah merujuk kepada niche atau jenis bisnes yang kita niagakan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="Sasaran pelanggan" name="target_market">
                    </div>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#siapa"><small>Click here for example</small></a>
                    <!-- Siapa? -->
                    <div class="modal fade" id="siapa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contoh untuk Siapa?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><b>Contoh Headline : </b></p>
                                    <p>3 Tips Kecantikkan Untuk <b class="text-danger">USAHAWAN</b> Yang Nak Nampak Lebih Bergaya</p>
                                    <br>
                                    <p><b>Huraian : </b></p>
                                    <p><b class="text-danger">USAHAWAN</b> yang diatas adalah merujuk kepada siapa sasaran kita untuk ayat headline.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="Masalah" name="masalah">
                    </div>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#masalah"><small>Click here for example</small></a>
                    <!-- Masalah -->
                    <div class="modal fade" id="masalah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contoh untuk Masalah?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><b>Contoh Headline : </b></p>
                                    <p><b class="text-danger">MUKA BERJERAWAT</b> Tapi Nak Nampak Lebih Yakin Bila Jumpa Pelanggan?</p>
                                    <br>
                                    <p><b>Huraian : </b></p>
                                    <p><b class="text-danger">MUKA BERJERAWAT</b> yang diatas adalah merujuk kepada masalah pelanggan, digalakkan meletakkan 1 jenis masalah yang paling banyak pelanggan anda terima.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="Solution/Impian" name="solution">
                    </div>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#solution"><small>Click here for example</small></a>
                    <!-- Solution -->
                    <div class="modal fade" id="solution" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contoh untuk Masalah?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><b>Contoh Headline : </b></p>
                                    <p>Muka Berjerawat Tapi Nak <b class="text-danger">NAMPAK LEBIH YAKIN</b> Bila Jumpa Pelanggan?</p>
                                    <br>
                                    <p><b>Huraian : </b></p>
                                    <p><b class="text-danger">NAMPAK LEBIH YAKIN</b> yang diatas adalah merujuk kepada impian atau solution yang pelanggan mahukan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-danger btn-lg" style="border-radius: 20px;">Generate Headline</button>
                    </div>
                </div>
                <div class="col-md-12 text-center mt-4">
                    <small class="text-muted">Powered By Momentum Internet</small>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>