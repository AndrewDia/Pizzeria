@section('popup')
    <div class="confirm_bg">
        <div class="container">
            <div class="confirm-form">
                <h1>Піцу успішно додано до корзини!</h1>
                <div>
                    <button onclick="location.href='{{ route('basket') }}'">До кошика</button>
                    <button class="continue_shopping">Продовжити покупки</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const continueShopping = document.querySelector('.continue_shopping');
        if (continueShopping) {
            document.body.classList.add('_lock');
            const choosePizza = document.querySelector('.confirm_bg');
            continueShopping.addEventListener("click", function (e) {
                document.body.classList.remove('_lock');
                choosePizza.classList.add('_enable');
            });
        }
    </script>
@endsection
