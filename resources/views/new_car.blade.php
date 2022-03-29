@extends("layouts.master")

@section("content")

<div class="row">
    <div class=" col-xl-4 col-lg-4 col-sm-4 col-sm-4 offset-lg-4 offset-md-4 ">
        <form class="form-control mt-5 p-5" action="/store-car " method="post">
        @csrf      
            <label for="plate">Rendszám</label>
            <input class="form-control" type="text" name="plate">

            <label for="brand">Márka</label>
            <input class="form-control" type="text" name="brand">

            <label for="color">Szín</label>
            <input class="form-control" type="text" name="color">

            <label for="price">Ár</label>
            <input class="form-control" type="text" name="price">

            <button class="btn btn-outline-primary mt-3" type="submit">Küldés</button>
        </form>
    </div>
</div>

@endsection