@extends('base')

@section('title', 'Створити піцу')

@section('main')
    <section class="create">
        <div class="container">
            <h1>Створіть свою найкращу піцу</h1>
            <div class="grey_button">Обрати піцу за основу</div>
            <div class="ingredients">
                @each('ingr', \App\Models\Ingredient::all(), 'ingr')
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
                @foreach($pizzas as $pizza)
                    <button class="pizza-block">
                        <img src="img/pizza/{{ $pizza->img_name }} " alt="pizza-img" class="pizza-img">
                        <h2>{{ $pizza->name }}</h2>
                        <p>{{ $pizza->description }}</p>
                    </button>
                @endforeach
            </div>
        </div>
        <div class="hide__panel">
            <div class="grey_button">Закрити</div>
        </div>
    </section>
    <script>
        let increases = document.querySelectorAll('.increase');
        let decreases = document.querySelectorAll('.decrease');
        if (increases.length > 0) {
            let decreaseDiv = document.querySelectorAll('.decrease');
            let blackSquare = document.querySelectorAll('.black_square');
            for (let i = 0; i < increases.length; i++) {
                let counter = 0;
                const increaseButt = increases[i];
                const decreaseButt = decreases[i];
                increaseButt.addEventListener("click", function (e) {
                    if (counter === 0) {
                        decreaseDiv[i].classList.add('_display');
                        blackSquare[i].classList.add('_display');
                    }
                    if (counter < 5)
                        counter++;
                });
                decreaseButt.addEventListener("click", function (e) {
                    counter--;
                    if (counter === 0) {
                        decreaseDiv[i].classList.remove('_display');
                        blackSquare[i].classList.remove('_display');
                    }
                });
            }
        }

        let greyButtons = document.querySelectorAll('.grey_button');
        if (greyButtons.length > 0) {
            const choosePizza = document.querySelector('.choose__pizza');
            for (let i = 0; i < greyButtons.length; i++) {
                const greyButton = greyButtons[i];
                greyButton.addEventListener("click", function (e) {
                    document.body.classList.toggle('_lock');
                    choosePizza.classList.toggle('_active');
                });
            }
        }
    </script>
@endsection
