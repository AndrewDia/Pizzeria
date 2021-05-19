@extends('base')

@section('title', 'Створити піцу')

@section('main')
<section class="create">
    <div class="container">
        <h1>Створіть свою найкращу піцу</h1>
        <form class="choose">
            <button>Обрати піцу за основу</button>
        </form>
        <div class="ingredients">
            @each('ingr', \App\Models\Ingredient::all(), 'ingr')
        </div>
        <form class="phone_and_request" method="post" action="/ordered">
            <label>Телефон<input value="{{session('tel')}}" type="text" name="tel"
                                 pattern="(\+\d{2})?\d[\s\-]?\d{2}[\s\-]?\d{3}[\s\-]?\d{2}[\s\-]?\d{2}"
                                 required></label>
            <button type="submit">Відправити заявку на приготування</button>
        </form>
    </div>
</section>
@endsection
