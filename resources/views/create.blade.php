@extends('base')

@section('title', 'Кошик')

@section('main')
<section class="create">
    <div class="container">
        <h1>Створіть свою найкращу піцу</h1>
        <form class="choose">
            <button>Обрати піцу за основу</button>
        </form>
        <div class="ingredients">
            <div class="ingredient-block">
                <img src="img/mozzarella.png" alt="ingredient">
                <h1>Моцарела</h1>
                <h2>40 грн / 100 г</h2>
                <div class="ingredient_counter">
                    <p>+</p>
                    <div class="black_square">1</div>
                    <p>&ndash;</p>
                </div>
            </div>
            <div class="ingredient-block">
                <img src="img/chicken.png" alt="ingredient">
                <h1>Філе курки</h1>
                <h2>40 грн / 100 г</h2>
                <div class="ingredient_counter">
                    <p>+</p>
                    <div class="black_square">1</div>
                    <p>&ndash;</p>
                </div>
            </div>
            <div class="ingredient-block">
                <img src="img/salami.png" alt="ingredient">
                <h1>Салямі</h1>
                <h2>40 грн / 100 г</h2>
                <div class="ingredient_counter">
                    <p>+</p>
                    <div class="black_square">1</div>
                    <p>&ndash;</p>
                </div>
            </div>
            <div class="ingredient-block">
                <img src="img/tomatoes.png" alt="ingredient">
                <h1>Моцарела</h1>
                <h2>40 грн / 100 г</h2>
                <div class="ingredient_counter">
                    <p>+</p>
                    <div class="black_square">1</div>
                    <p>&ndash;</p>
                </div>
            </div>
            <div class="ingredient-block">
                <img src="img/olives.png" alt="ingredient">
                <h1>Моцарела</h1>
                <h2>40 грн / 100 г</h2>
                <div class="ingredient_counter">
                    <p>+</p>
                    <div class="black_square">1</div>
                    <p>&ndash;</p>
                </div>
            </div>
            <div class="ingredient-block">
                <img src="img/mozzarella.png" alt="ingredient">
                <h1>Моцарела</h1>
                <h2>40 грн / 100 г</h2>
                <div class="ingredient_counter">
                    <p>+</p>
                    <div class="black_square">1</div>
                    <p>&ndash;</p>
                </div>
            </div>
            <div class="ingredient-block">
                <img src="img/chicken.png" alt="ingredient">
                <h1>Філе курки</h1>
                <h2>40 грн / 100 г</h2>
                <div class="ingredient_counter">
                    <p>+</p>
                    <div class="black_square">1</div>
                    <p>&ndash;</p>
                </div>
            </div>
            <div class="ingredient-block">
                <img src="img/salami.png" alt="ingredient">
                <h1>Салямі</h1>
                <h2>40 грн / 100 г</h2>
                <div class="ingredient_counter">
                    <p>+</p>
                    <div class="black_square">1</div>
                    <p>&ndash;</p>
                </div>
            </div>
        </div>
        <form class="phone_and_request">
            <label>Телефон<input type="text"></label>
            <button>Відправити заявку на приготування</button>
        </form>
    </div>
</section>
@endsection
