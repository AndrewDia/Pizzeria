<section class="hits">
    <div class="container">
        <h1>{{$title}}</h1>
        <div class="pizzas">
            @foreach(App\Models\Pizza::orderBy($view, 'desc')->orderBy('price', 'asc')->limit(4)->get() as $pizza)
                @include('pizza')
            @endforeach
        </div>
        <div class="button_on_center">
            <button>Усе меню<a href="/menu"></a></button>
        </div>
    </div>
</section>
