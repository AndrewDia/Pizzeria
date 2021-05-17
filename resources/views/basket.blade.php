@extends('base')

@section('title', 'Кошик')

@section('main')
    <?php
        use App\Models\Pizza;
        $pizzas = [];
        $total = 0;
        $total_count = 0;
        $time = getdate();
        $time = $time['hours']*60 + $time['minutes'];
        foreach (session('cart') as $k => $v) {
            $pizzas[] = Pizza::find($k);
        }
        foreach ($pizzas as $p) {
            $total += $p->price * session('cart.'.$p->id);
            $total_count += session('cart.'.$p->id);
        }
    ?>
    <section class="order">
        <div class="container">
            <h1>Кошик</h1>
            <div class="order-block">
                @each('cart_pizza', $pizzas, 'pizza')
                <hr>
                @if($total_count >= 2)
                    <?php
                        $total *= 0.9;
                        $sale = 1;
                    ?>
                    <div class="order_sale">
                        <div class="order_promotions">
                            <img src="/img/sale-tag.svg" alt="sale">
                            <div>
                                <h2>Акція:</h2>
                                <h3>Дві піци</h3>
                            </div>
                        </div>
                        <p>&ndash; 10%</p>
                    </div>
                @endif
                @if ($time >= 660 && $time <= 750)
                    <?php
                        $total *= 0.9;
                        $sale = 1;
                    ?>
                    <div class="order_sale">
                        <div class="order_promotions">
                            <img src="/img/sale-tag.svg" alt="sale">
                            <div>
                                <h2>Акція:</h2>
                                <h3>Вдалий час</h3>
                            </div>
                        </div>
                        <p>&ndash; 10%</p>
                    </div>
                @endif
                @if(isset($sale))<hr>@endif
                <div class="sum">
                    <h1>Сума до сплати</h1>
                    <p>{{$total}} грн</p>
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
