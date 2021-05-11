@extends('base')

@section('title', 'Піцерія "У Васі"')

@section('main')
    <section class="about">
        <div class="container">
            <h1>Чому в нас найкраща піца?</h1>
            <div class="why_us">
                <div class="why_us_block">
                    <h2>Гарантія якості</h2>
                    <div>
                        <img src="img/vegetables.svg" alt="vegetables">
                        <p>Готуємо тільки зі свіжих і перевірених продуктів. Для тіста використовуємо цільнозернове
                            борошно.</p>
                    </div>
                </div>
                <div class="why_us_block">
                    <h2>Дров’яна піч</h2>
                    <div>
                        <img src="img/oven.svg" alt="vegetables">
                        <p>Піч, де готується справжня піца, повинна топитися дровами і мати температуру вище 400°.</p>
                    </div>
                </div>
                <div class="why_us_block">
                    <h2>Широкий вибір</h2>
                    <div>
                        <img src="img/pizza.svg" alt="vegetables">
                        <p>Не знайшли піци на свій смак серед розмаїття меню? Не проблема - створіть власну!</p>
                    </div>
                </div>
                <div class="why_us_block">
                    <h2>Швидка доставка</h2>
                    <div>
                        <img src="img/delivery-man.svg" alt="vegetables">
                        <p>Обіцяємо доставити піцу вчасно! Якщо привеземо піцу пізніше заявленого терміну - знижка 70%!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('goods', ['title' => 'Хіти продажу', 'view' => 'popularity'])
    <section class="steps">
        <div class="container">
            <div class="order_info">
                <h1>Скуштувати кращу піцу на районі дуже просто!</h1>
                <div class="steps-block">
                    <div class="step-inner-block">
                        <img src="img/ellipse-phone.png" alt="device">
                        <p>Замовляйте онлайн з будь-яких пристроїв</p>
                    </div>
                    <img src="img/right-arrow.png" alt="arrow" class="right-arrow">
                    <img src="img/down-arrow.svg" alt="arrow" class="down-arrow">
                    <div class="step-inner-block">
                        <img src="img/ellipse-time.png" alt="time">
                        <p>Почекайте зазначений час на доставку</p>
                    </div>
                    <img src="img/right-arrow.png" alt="arrow" class="right-arrow">
                    <img src="img/down-arrow.svg" alt="arrow" class="down-arrow">
                    <div class="step-inner-block">
                        <img src="img/ellipse-taste.png" alt="taste">
                        <p>Насолоджуйтесь!</p>
                        <p class="m0">&nbsp;</p>
                        <p class="m0">&nbsp;</p>
                    </div>
                </div>
                <h2>Доставляємо в будь-який куточок Києва</h2>
            </div>
        </div>
    </section>
    @include('goods', ['title' => 'Не пропустіть вигідні пропозиції', 'view' => 'old_price'])
@endsection
