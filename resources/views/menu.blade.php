@extends('base')

@section('title', 'Меню')

@section('main')
    <?php
    use App\Models\Pizza;
    $pizzas = Pizza::all();
    ?>
    <section>
        <div class="container">
            <div class="filters">
                <div class="first_half">
                    <div class="filter">
                        <img src="img/vegan-filter.svg" alt="vegetarian">
                        <span>вегетаріанська</span>
                    </div>
                    <div class="filter">
                        <img src="img/spicy-filter.svg" alt="spicy">
                        <span>гостра</span>
                    </div>
                    <div class="filter">
                        <img src="img/sale-filter.svg" alt="sale">
                        <span>знижка</span>
                    </div>
                </div>
                <div class="second_half">
                    <div class="second_half_filters">
                        <div class="filter">
                            <img src="img/new-filter.svg" alt="vegetarian">
                            <span>новинка</span>
                        </div>
                        <div class="filter">
                            <img src="img/hit-filter.svg" alt="spicy">
                            <span>популярні</span>
                        </div>
                    </div>
                    <p>очистити</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="pizzas-menu">
                @each('pizza', $pizzas, 'pizza')
            </div>
        </div>
    </section>
@endsection
