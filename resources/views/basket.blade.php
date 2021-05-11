@extends('base')

@section('title', 'Кошик')

@section('main')
<section class="order">
    <div class="container">
        <h1>Кошик</h1>
        <div class="order-block">
            <div class="pizza_with_price">
                <div class="order_pizza_info">
                    <img src="img/pizza/havaiska.png" alt="pizza">
                    <div>
                        <h2>Піца Гавайська</h2>
                        <p>Курка, ананаси, моцарела, томатний соус</p>
                    </div>
                </div>
                <div class="order_price">
                    <div class="order_price_with_count">
                        <h4>140 грн</h4>
                        <div class="count">
                            <img src="img/minus.svg" alt="-">
                            <span>2</span>
                            <img src="img/plus.svg" alt="+">
                        </div>
                    </div>
                    <p>140 грн</p>
                    <img src="img/remove.svg" alt="remove" class="remove">
                </div>
            </div>
            <hr>
            <div class="order_sale">
                <div class="order_promotions">
                    <img src="img/sale-tag.svg" alt="sale">
                    <div>
                        <h2>Акція:</h2>
                        <h3>Дві піци</h3>
                    </div>
                </div>
                <p>&ndash; 10%</p>
            </div>
            <hr>
            <div class="sum">
                <h1>Сума до сплати</h1>
                <p>126 грн</p>
            </div>
        </div>
    </div>
</section>
<section class="delivery">
    <div class="container">
        <h1>Доставка</h1>
        <form>
            <div class="delivery_form">
                <div class="delivery_labels">
                    <p>Телефон</p>
                    <p>Адреса</p>
                </div>
                <div class="delivery_input">
                    <label>Телефон</label><input type="text">
                    <label>Адреса</label><input type="text" class="address">
                </div>
            </div>
            <button>Замовити</button>
        </form>
    </div>
</section>
@endsection
