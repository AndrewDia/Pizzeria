<section class="hits">
    <div class="container">
        <h1>{{$title}}</h1>
        <div class="pizzas">
            @each('pizza', App\Models\Pizza::orderBy($view, 'desc')->orderBy('price', 'asc')->limit(4)->get(), 'pizza')
        </div>
        <div class="button_on_center">
            <button>Усе меню<a href="/menu"></a></button>
        </div>
    </div>
</section>
