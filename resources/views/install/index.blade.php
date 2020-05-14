<!doctype html>
<html lang="en">
  <head>
    <title>Laravel eCommerce</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container justify-content-center m-5 p-5">
            <div class="clearfix d-flex justify-content-center mb-5"><img src="{{ asset('logo.png') }}" alt="" /></div>
            <div class="clearfix">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Server Requirements</h4>
                        <p class="text-success">Current version is PHP <b>{{ \phpversion() }}</b></p>
                        * PHP >= 7.2.5 <i class="fa fa-check-square text-success" aria-hidden="true"></i><br>
                        * BCMath PHP Extension @if(\extension_loaded('bcmatch')) <i class="fa fa-check-square text-success" aria-hidden="true"></i> @else <i class="fa fa-times text-danger" aria-hidden="true"></i> @endif<br>
                        * Ctype PHP Extension @if(\extension_loaded('ctype')) <i class="fa fa-check-square text-success" aria-hidden="true"></i> @else <i class="fa fa-check-square text-danger" aria-hidden="true"></i> @endif<br>
                        * Fileinfo PHP extension @if(\extension_loaded('fileinfo')) <i class="fa fa-check-square text-success" aria-hidden="true"></i> @else <i class="fa fa-check-square text-danger" aria-hidden="true"></i> @endif<br>
                        * JSON PHP Extension @if(\extension_loaded('json')) <i class="fa fa-check-square text-success" aria-hidden="true"></i> @else <i class="fa fa-check-square text-danger" aria-hidden="true"></i> @endif<br>
                        * Mbstring PHP Extension @if(\extension_loaded('mbstring')) <i class="fa fa-check-square text-success" aria-hidden="true"></i> @else <i class="fa fa-check-square text-danger" aria-hidden="true"></i> @endif<br>
                        * OpenSSL PHP Extension @if(\extension_loaded('openssl')) <i class="fa fa-check-square text-success" aria-hidden="true"></i> @else <i class="fa fa-check-square text-danger" aria-hidden="true"></i> @endif<br>
                        * PDO PHP Extension @if(\extension_loaded('pdo_mysql')) <i class="fa fa-check-square text-success" aria-hidden="true"></i> @else <i class="fa fa-check-square text-danger" aria-hidden="true"></i> @endif<br>
                        * Tokenizer PHP Extension @if(\extension_loaded('tokenizer')) <i class="fa fa-check-square text-success" aria-hidden="true"></i> @else <i class="fa fa-check-square text-danger" aria-hidden="true"></i> @endif<br>
                        * XML PHP Extension @if(\extension_loaded('xml')) <i class="fa fa-check-square text-success" aria-hidden="true"></i> @else <i class="fa fa-check-square text-danger" aria-hidden="true"></i> @endif<br>
                    </div>
                    <div class="col-md-6">
                        <form action="{{ route('install.post', ['steep' => 'site']) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="site-name">Site Name</label>
                                <input id="site-name" class="form-control" type="text" name="site_name" required>
                            </div>
        
                            <div class="form-group">
                                <label for="site-url">URL Site</label>
                                <input id="site-url" class="form-control" type="text" name="site_url" required>
                            </div>
        
                            <div class="form-group">
                                <label for="site-lang">Language</label>
                                <select id="site-lang" class="custom-select" name="site_lang">
                                    <option value="en">English</option>
                                    <option value="ro">Romanian</option>
                                </select>
                            </div>
        
                            <input type="submit" name="site-config" class="btn btn-block btn-success" value="Next Steep">
                        </form>
                    </div>
                </div>
            </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>