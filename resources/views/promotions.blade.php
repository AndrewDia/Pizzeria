@extends('base')

@section('title', 'Акції')

@section('main')
    <?php
    use App\Models\Promo;
    $promos = Promo::where('active', '1')->get();
    ?>
    <section class="promotions">
        <div class="container">
            <h1>Діючі акції</h1>
            <div class="promotion-block">
                @each('promo', $promos, 'promo')
            </div>
        </div>
    </section>
    @include('goods', ['title' => 'Не пропустіть вигідні пропозиції', 'view' => 'old_price'])
@endsection
