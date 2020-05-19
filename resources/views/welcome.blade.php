<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .jumbotron{
                margin-top: 25px;
                background: white;
                margin-left:10%;
                margin-right: 10%;
                box-shadow: 0 0 11px rgba(33,33,33,.2); 
            }
           .startcontent{
                border-top:1px solid gainsboro;
           }
           .content{
            margin-left:12%;
            margin-right:12%;
            margin-top:15px;
            position: relative;
           }
           .card{
               border: none;
               display: block;
           }
           .card:hover{
            box-shadow: 0 0 11px rgba(33,33,33,.2); 
           transition: box-shadow 0.4s ease-in-out;
         
           }
           .footer{
             padding-top: 20px;
             padding-bottom: 20px;
            margin-left: 12%;
            margin-right: 12%;
           }
           .bottom{
             text-align: center;
           }
           .card-deck{
             margin-left: 10%;
             margin-right: 10%
           }
          #textproducts,.card-title{
             font-weight: bold
           }
          #textproducts{
             color:lightslategrey
           }
           #footertitle{
             color: green;
           }
           .newsletter{
             margin-right: 10%;
             margin-left:10%;
             background: azure
           }
        </style>
    </head>
    <body>

        <div class="navbar navbar-expand-lg">
                <div class="container" style="padding-bottom: 10px">
                        <div class="header" >
                        <a href="{{ route('index') }}"> <img src="http://127.0.0.1:8000/logo.png" alt="" style="text-align: center;margin-left:100%"></a>
                    </div>
                </div>
            </div>

            <!--Navbar-->
                <div>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 200px">
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-home" style="font-size: 20px;color:#A9A9A9"></i>Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('about-us') }}">About us</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Info
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('install.post', ['steep' => 'site']) }}">Install app</a>
                                <a class="dropdown-item" href="#">What is Ecommerce</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                            </li>
                              <li class="nav-item" style="float: rigth">
                                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                              </li>
                          </ul>
                          <a href="{{ route('login') }}" style="margin-right: 10px; text-decoration: none;color:grey"><i class="fa fa-address-card" style="font-size:18px;margin-right:5px"></i></i>Login</a>
                         <a href="{{ route('register') }}" style=" text-decoration: none;color:grey;margin-right:250px"><i class="fa fa-user" style="font-size:18px"></i> Register</a>
                        </div>
                      </nav>
                </div>

                <!--Content-->
            <div class="startcontent">
                <div class="jumbotron">
                    <h1 >Hello, welcome to eCommerce!</h1>
                    <hr class="my-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati praesentium aspernatur eos aliquam suscipit odit molestias architecto ea cupiditate recusandae inventore quod laborum omnis doloribus, est provident at qui vel?</p>
                    <a class="btn btn-outline-danger btn-lg shadow-none" href="{{ route('install.post', ['steep' => 'site']) }}" role="button">Install app</a>
                </div>
            </div>
              <br>
              <br>
           <div class="content">
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit omnis a quis corrupti dicta, atque enim nihil voluptate deleniti distinctio. Iure amet consequuntur dolor sapiente accusantium ea debitis, maxime pariatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor quos est accusamus eius neque harum! Magnam nisi fuga voluptate sed. Nisi, doloremque voluptas numquam iure recusandae labore dolore quisquam laboriosam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ipsa cumque maxime vel. Excepturi animi nesciunt architecto, ea voluptatum tenetur temporibus est assumenda ad maxime labore fugit dignissimos ducimus cupiditate! Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quidem, minima ad ab doloremque cupiditate fuga inventore consequuntur distinctio at maiores ullam quia rerum quis odio. Corrupti, dignissimos? Repudiandae, officia.</p>
              <br>
              
               <div class="card mb-3" style="width: 100%;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="https://www.paldesk.com/wp-content/uploads/2019/08/ecommerce-guide-how-to-start-an-ecommerce-business-1024x439.png" class="card-img" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil animi quam facere porro autem maxime ratione velit voluptas cum dicta! Architecto laboriosam nobis neque animi corrupti fugiat modi, perferendis nemo. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3" style="width: 100%;">
                <div class="row no-gutters">
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil animi quam facere porro autem maxime ratione velit voluptas cum dicta! Architecto laboriosam nobis neque animi corrupti fugiat modi, perferendis nemo. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <img src="https://www.paldesk.com/wp-content/uploads/2019/08/ecommerce-guide-how-to-start-an-ecommerce-business-1024x439.png" class="card-img" alt="">
                  </div>
                </div>
              </div>
              <div class="card mb-3" style="width: 100%;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="https://www.paldesk.com/wp-content/uploads/2019/08/ecommerce-guide-how-to-start-an-ecommerce-business-1024x439.png" class="card-img" alt="">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil animi quam facere porro autem maxime ratione velit voluptas cum dicta! Architecto laboriosam nobis neque animi corrupti fugiat modi, perferendis nemo. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <br>
              <br>
              <br>
              <!-- Shop products -->
              <div class="card-deck">
                <div class="card"  style="text-align: center;" id="ex">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSphXbLjub2E8uA50ngjcDw2_E7WEQWlzW-jZSGINv2rc8x4E6A&usqp=CAU" id="ex" style="padding:10px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Product title</h4>
                    <p class="card-text" id="textproducts">226 Lei</p>
                  <button class="btn btn-outline-danger shadow-none">Adauga in cos</button>
                  </div>
                </div>
                <div class="card"  style="text-align: center;" id="ex">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSphXbLjub2E8uA50ngjcDw2_E7WEQWlzW-jZSGINv2rc8x4E6A&usqp=CAU" style="padding:10px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Product title</h4>
                    <p class="card-text" id="textproducts">226 Lei</p>
                  <button class="btn btn-outline-danger shadow-none">Adauga in cos</button>
                  </div>
                </div>
                <div class="card"  style="text-align: center;"id="ex">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSphXbLjub2E8uA50ngjcDw2_E7WEQWlzW-jZSGINv2rc8x4E6A&usqp=CAU" style="padding:10px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Product title</h4>
                    <p class="card-text" id="textproducts">226 Lei</p>
                  <button class="btn btn-outline-danger shadow-none">Adauga in cos</button>
                  </div>
                </div>
                <div class="card"  style="text-align: center;"id="ex">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSphXbLjub2E8uA50ngjcDw2_E7WEQWlzW-jZSGINv2rc8x4E6A&usqp=CAU" style="padding:10px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Product title</h4>
                    <p class="card-text" id="textproducts">226 Lei</p>
                  <button class="btn btn-outline-danger shadow-none">Adauga in cos</button>
                  </div>
                </div>
                <div class="card"  style="text-align: center;"id="ex">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSphXbLjub2E8uA50ngjcDw2_E7WEQWlzW-jZSGINv2rc8x4E6A&usqp=CAU" style="padding:10px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Product title</h4>
                    <p class="card-text" id="textproducts">226 Lei</p>
                  <button class="btn btn-outline-danger shadow-none">Adauga in cos</button>
                  </div>
                </div>
              </div>
                <br>


              <div class="card-deck" style="border-top: 1px solid gainsboro;padding-top:20px">
                <div class="card"  style="text-align: center;"id="ex">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSphXbLjub2E8uA50ngjcDw2_E7WEQWlzW-jZSGINv2rc8x4E6A&usqp=CAU" style="padding:10px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Product title</h4>
                    <p class="card-text" id="textproducts">226 Lei</p>
                  <button class="btn btn-outline-danger shadow-none">Adauga in cos</button>
                  </div>
                </div>
                <div class="card"  style="text-align: center;"id="ex">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSphXbLjub2E8uA50ngjcDw2_E7WEQWlzW-jZSGINv2rc8x4E6A&usqp=CAU" style="padding:10px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Product title</h4>
                    <p class="card-text" id="textproducts">226 Lei</p>
                  <button class="btn btn-outline-danger shadow-none">Adauga in cos</button>
                  </div>
                </div>
                <div class="card"  style="text-align: center;"id="ex">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSphXbLjub2E8uA50ngjcDw2_E7WEQWlzW-jZSGINv2rc8x4E6A&usqp=CAU" style="padding:10px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Product title</h4>
                    <p class="card-text" id="textproducts">226 Lei</p>
                  <button class="btn btn-outline-danger shadow-none">Adauga in cos</button>
                  </div>
                </div>
                <div class="card"  style="text-align: center;"id="ex">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSphXbLjub2E8uA50ngjcDw2_E7WEQWlzW-jZSGINv2rc8x4E6A&usqp=CAU" style="padding:10px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Product title</h4>
                    <p class="card-text" id="textproducts">226 Lei</p>
                  <button class="btn btn-outline-danger shadow-none">Adauga in cos</button>
                  </div>
                </div>
                <div class="card"  style="text-align: center;"id="ex">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSphXbLjub2E8uA50ngjcDw2_E7WEQWlzW-jZSGINv2rc8x4E6A&usqp=CAU" style="padding:10px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Product title</h4>
                    <p class="card-text" id="textproducts">226 Lei</p>
                  <button class="btn btn-outline-danger shadow-none">Adauga in cos</button>
                  </div>
                </div>
              </div>

                <br>
                <br>
                <br>

              <div class="newsletter">
                <div class="media">
                  <img src="data:image/png;base64,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" class="align-self-center mr-3" alt="...">
                  <div class="media-body" style="padding-top: 15px">
                    <h4 class="mt-0">Aboneaza-te la newsletter ca sa primesti cele mai noi oferte si promotii !</h4>
                    <small>Prin abonarea la newsletter-ul eMAG confirm că am peste 16 ani.</small>
                   <br>
                   <br>
                    <input type="text" style="border-radius:10px;outline:none;padding:5px;width:350px;border:0.5px solid #FFF0F5" placeholder="Name">  
                    <input type="text" style="border-radius:10px;outline:none;padding:5px;margin-left:20px;width:350px;border:0.5px solid #FFF0F5" placeholder="Email">  
                    <button class="btn btn-danger shadow-none" style="margin-left: 50px;">Aboneaza-te</button>
                  </div>
                </div>  

              </div>
              <br>
              <br>
              <br>
              <br>
              <br>
              <!--Footer-->
              <div class="bottom">
              <div class="footer" id="bottom"> 
                  <p>@All rights reserved@ Email: shoppieseTv@gmail.com </p>
            </div>
            </div>
        </body>
</html>
