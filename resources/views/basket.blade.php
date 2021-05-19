@extends('base')

@section('title', 'Кошик')

@section('main')
    <?php
    use App\Models\Pizza;
    $cart = session('cart');
    $count = 0;
    if (isset($cart)) {
        $pizzas = [];
        $total = 0;
        $time = getdate();
        $time['hours'] += 3;
        $time = $time['hours'] * 60 + $time['minutes'];
        foreach ($cart as $k => $v) {
            $pizzas[] = Pizza::find($k);
        }
        foreach ($pizzas as $p) {
            $total += $p->price * session('cart.' . $p->id);
            $count += session('cart.' . $p->id);
        }
    }
    ?>
    @if ($count > 0)
        <section class="order">
            <div class="container">
                <h1>Кошик</h1>
                <div class="order-block">
                    @each('cart_pizza', $pizzas, 'pizza')
                    <hr>
                    @if($count >= 2)
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
                    @if(isset($sale))
                        <hr>@endif
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
                <form action="/ordered" method="post">
                    @csrf
                    <div class="delivery_form">
                        <div class="delivery_labels">
                            <p>Телефон</p>
                            <p>Адреса</p>
                        </div>
                        <div class="delivery_input">
                            <label>Телефон</label><input value="{{session('tel')}}" type="text" name="tel"
                                                         pattern="(\+\d{2})?\d[\s\-]?\d{2}[\s\-]?\d{3}[\s\-]?\d{2}[\s\-]?\d{2}"
                                                         required>
                            <label>Адреса</label><input value="{{session('address')}}" type="text" class="address"
                                                        name="address">
                        </div>
                    </div>
                    <button type="submit">Замовити</button>
                </form>
            </div>
        </section>
    @else
        @include('default_basket', ['txt' => 'Кошик порожній'])
    @endif
@endsection
