<div class="pizza_with_price">
    <div class="order_pizza_info">
        <img src="/img/pizza/{{$pizza->img_name}}" alt="pizza">
        <div>
            <h2>Піца {{$pizza->name}}</h2>
            <p>{{$pizza->description}}</p>
        </div>
    </div>
    <div class="order_price">
        <form id="form_{{$pizza->id}}" method="post">@csrf</form>
        <div class="order_price_with_count">
            <h4>{{$pizza->price * session('cart.'.$pizza->id)}} грн</h4>
            <div class="count">
                <button form="form_{{$pizza->id}}" formaction="/add/-1" name="add" value="{{$pizza->id}}" type="submit">
                    <img src="/img/minus.svg" alt="-">
                </button>
                <span>{{session('cart.'.$pizza->id)}}</span>
                <button form="form_{{$pizza->id}}" formaction="/add/1" name="add" value="{{$pizza->id}}" type="submit">
                    <img src="/img/plus.svg" alt="+">
                </button>
            </div>
        </div>
        <p>{{$pizza->price * session('cart.'.$pizza->id)}} грн</p>
        <button form="form_{{$pizza->id}}" formaction="/add/-{{session('cart.'.$pizza->id)}}" name="add" value="{{$pizza->id}}" type="submit">
            <img src="/img/remove.svg" alt="remove" class="remove">
        </button>
    </div>
</div>
