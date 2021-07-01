@extends('elements.header')

@section('body')

<div class="container">
    <div class="card-deck">
        @foreach($ropas as $item)
        <div class="col-4">
            <div class="card shadow-lg">
                <img src="{{ Storage::url($item->foto)}}" height=400 class="card-img-top" alt="imagen"> 
                <div class="card-body">
                    <h5 class="card-title">{{$item->nombre}}</h5>
                    <p class="card-text">
                        Tipo: {{$item->tipo_ropa}} <br>
                        Precio: ${{$item->precio}}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>









@endsection