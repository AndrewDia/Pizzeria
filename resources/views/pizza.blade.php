<div class="pizza-block">
    <div>
        <img src="img/pizza/{{$pizza->img_name}}" class="pizza-img">
        <div class="pizza-title">
            <h2>{{$pizza->name}}</h2>
            <div>
                @if($pizza->spicy)
                    <img src="img/chili.svg" alt="spicy" class="pizza-filter">
                @endif
                @if($pizza->veg)
                    <img src="img/vegan.svg" alt="vegetarian" class="pizza-filter">
                @endif
            </div>
        </div>
        <p>{{$pizza->description}}</p>
    </div>
    <div>
        @if($pizza->old_price != 0)
        <div class="pizza-price">
            <h4>{{$pizza->old_price}} грн</h4>
        @endif
            <h3>{{$pizza->price}} грн</h3>
        @if($pizza->old_price != 0)
        </div>
        @endif
        <div class="buy-panel">
            <ul>
                <li>&ndash;</li>
                <li id="count_{{$pizza->id}}">1</li>
                <li>+</li>
            </ul>
            <form action="#">
                <div class="cart-button">
                    <img src="img/shopping-cart.svg" alt="cart">
                </div>
            </form>
        </div>
    </div>
    @if($pizza->new)
        <img src="img/new_tag.svg" alt="new" class="tag">
    @endif
</div>
