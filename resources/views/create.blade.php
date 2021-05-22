@extends('base')

@section('title', 'Створити піцу')

@section('main')
    <?php
    use App\Models\Ingredient;
    use App\Models\Pizza;
    $pizzas = Pizza::all();
    $ingredients = Pizza::find(request()->post('pizza'))->ingredients ?? [];
    foreach ($ingredients as $ingr) {
        $add[$ingr->id] = $ingr->pivot->number;
    }
    $ingredients = Ingredient::all();
    ?>
    <section class="create">
        <div class="container">
            <h1>Створіть свою найкращу піцу</h1>
            <div class="grey_button">Обрати піцу за основу</div>
            <div class="ingredients">
                @foreach($ingredients as $ingr)
                    @include('ingr')
                @endforeach
            </div>
            <form id="create_form" class="phone_and_request" method="post" action="/ordered">
                @csrf
                <label>Телефон<input value="{{session('tel')}}" type="text" name="tel"
                                     pattern="(\+\d{2})?\d[\s\-]?\d{2}[\s\-]?\d{3}[\s\-]?\d{2}[\s\-]?\d{2}"
                                     required></label>
                <button type="submit">Відправити заявку на приготування</button>
            </form>
        </div>
    </section>
    <section class="choose__pizza">
        <div class="container">
            <div class="pizzas-menu">
                <form method="post">
                    @csrf
                    @each('choose_pizza', $pizzas, 'pizza')
                </form>
            </div>
        </div>
        <div class="hide__panel">
            <div class="grey_button">Закрити</div>
        </div>
    </section>
    <script src="/js/ingr_amount.js"></script>
@endsection
