<!doctype html>
<html lang="en">
  <head>
    <title>Laravel eCommerce</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container justify-content-center m-5 p-5">
            <div class="clearfix d-flex justify-content-center mb-5"><img src="{{ asset('logo.png') }}" alt="" /></div>
            <div class="clearfix">
                <form action="{{ route('install.post', ['steep' => 'admin']) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="site-name">Username</label>
                        <input id="site-name" class="form-control" type="text" name="user_name" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="site-url">Email</label>
                        <input id="site-url" class="form-control" type="email" autocomplete="off" name="user_email" required>
                    </div>

                    <div class="form-group">
                        <label for="site-lang">Password</label>
                        <input id="site-url" class="form-control" type="password" name="user_pwd" autocomplete="off" required placeholder="**********">
                    </div>

                    <input type="submit" name="site-config" class="btn btn-block btn-success" value="Next Steep">
                </form>
            </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>