@extends('layouts.app')

@section('content')
    <body>
        <div id="container">
            <div class="jumbotron" style="background: white">
                <form>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Adress:</label>
                      <div class="col-sm-10">
                        1 N. Lyme Drive
                        Champlin, MN 55316
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Fax: </label>
                        <div class="col-sm-10">
                            1-408-999 8888
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Phone number: </label>
                        <div class="col-sm-10">
                            +1-555-2248-043
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Social Media: </label>
                        <div class="col-sm-10">
                           <i class="fa fa-facebook-square"></i> <i style="margin-left:10px" class="fa fa-instagram"></i> <i style="margin-left:10px" class="fa fa-twitter"></i> <i style="margin-left:10px" class="fa fa-youtube"></i>
                        </div>
                      </div>
                      
                  </form>
              </div>
        </div>
    </body>
@endsection

<style>
    body{
        background: url("https://www.kindpng.com/picc/m/107-1074254_abstract-world-map-transparent-background-abstract-world-map.png")
    }
    .jumbotron{
        margin-left:15%;
        margin-right: 15%;
    }
   
</style>