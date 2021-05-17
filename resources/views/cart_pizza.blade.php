<div class="pizza_with_price">
    <div class="order_pizza_info">
        <img src="/img/pizza/{{$pizza->img_name}}" alt="pizza">
        <div>
            <h2>Піца {{$pizza->name}}</h2>
            <p>{{$pizza->description}}</p>
        </div>
    </div>
    <div class="order_price">
        <div class="order_price_with_count">
            <h4>{{$pizza->price * session('cart.'.$pizza->id)}} грн</h4>
            <div class="count">
                <img src="/img/minus.svg" alt="-">
                <span>{{session('cart.'.$pizza->id)}}</span>
                <img src="/img/plus.svg" alt="+">
            </div>
        </div>
        <p>{{$pizza->price * session('cart.'.$pizza->id)}} грн</p>
        <img src="/img/remove.svg" alt="remove" class="remove">
    </div>
</div>
