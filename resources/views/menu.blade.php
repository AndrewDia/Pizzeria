@extends('base')

@section('title', 'Меню')

@section('main')
    <?php
    use App\Models\Filter;
    use App\Models\Pizza;
    $pizzas = Pizza::all();
    $filters = Filter::all();
    $f_count = count($filters);
    foreach ($filters as $filter) {
        if (isset($_GET[$filter->filter_name]) && $_GET[$filter->filter_name] == 1) {
            $pizzas = $pizzas->where($filter->filter_name, '>=', 1)->sortBy($filter->filter_name);
        }
    }
    ?>
    <section>
        <div class="container">
            <div class="filters">
                <div class="first_half">
                    @for ($i = 0; $i < ceil($f_count/2); $i++)
                        @include('filter', ['f' => $filters[$i]])
                    @endfor
                </div>
                <div class="second_half">
                    <div class="second_half_filters">
                        @for ($i = ceil($f_count/2); $i < $f_count; $i++)
                            @include('filter', ['f' => $filters[$i]])
                        @endfor
                    </div>
                    <p>
                        очистити
                        <a href="{{route('menu')}}"></a>
                    </p>
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
