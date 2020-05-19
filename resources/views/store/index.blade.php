@extends('layouts.app')

@section('content')
<div class="container content">
    <div class="card-deck">
        @for ($i = 0; $i <= 12; $i++)
        <div class="card"  style="text-align: center;" id="ex">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSphXbLjub2E8uA50ngjcDw2_E7WEQWlzW-jZSGINv2rc8x4E6A&usqp=CAU" id="ex" style="padding:10px" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Product Title</h4>
                <p class="card-text" id="textproducts">226 Lei</p>
                <button class="btn btn-outline-danger shadow-none">Adauga in cos</button>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection
