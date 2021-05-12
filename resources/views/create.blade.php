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
        <form class="phone_and_request">
            <label>Телефон<input type="text"></label>
            <button>Відправити заявку на приготування</button>
        </form>
    </div>
</section>
@endsection
