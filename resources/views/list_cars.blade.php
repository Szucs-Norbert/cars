@extends("layouts.master")

@section("content")

<div class="container">
    <div class="row my-3">
        <div class="col-6">
            <form action="">
                <select name="color" id="">
                    <option selected>Szín</option>
                    <option>kék</option>
                    <option>sárga</option>
                    <option>piros</option>
                </select>
                <button class="btn btn-outline-info mt-2" type="submit">Keresés</button>
            </form>
        </div>
        <div class="col-6">
            <a class="btn btn-outline-info mb-1" href="/register">Regisztráció</a>
            <a class="btn btn-outline-info mb-1" href="/login">Bejelentkezés</a>
            <a class="btn btn-outline-info mb-1" href="/logout">Kijelentkezés</a>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <table class="table table-stripped">
                    <thead>
                        <th scope="col">Id</th>
                        <th scope="col">Rendszám</th>
                        <th scope="col">Márka</th>
                        <th scope="col">Szín</th>
                        <th scope="col">Ár</th>
                    </thead>
                    <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <td>{{$car->id}}</td>
                                <td>{{$car->plate}}</td>
                                <td>{{$car->brand}}</td>
                                <td>{{$car->color}}</td>
                                <td>{{$car->price}}</td>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm" href="/edit-car/{{$car->id}}">Szerkesztés</a>
                                    <a class="btn btn-outline-primary btn-sm" href="/delete-car/{{$car->id}}">Törlés</a>
                                </td>
                            </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-8">
                <a class="btn btn-outline-primary" href="/new-car">Új autó</a>
            </div>
        </div>
</div>

@endsection