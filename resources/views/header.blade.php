<header id="header">
    <div class="container">
        <div class="header-block">
            <div class="logo_with_info">
                <a href="{{ route('index') }}">
                    <div class="logo">
                        <img src="img/logo.png" alt="logo">
                        <div class="logo-text">
                            <span>Піцерія</span>
                            <p>"У Васі"</p>
                        </div>
                    </div>
                </a>
                <div class="info-header">
                    <a href="tel:0981234567" class="tel">(098) 123-45-67</a>
                    <p>м. Київ</p>
                    <p>7.00 - 23.00</p>
                </div>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="{{ route('index') }}">Головна</a></li>
                    <li><a href="{{ route('menu') }}">Меню</a></li>
                    <li class="transition_li"><a href="{{ route('create') }}">Створити піцу</a></li>
                    <li><a href="{{ route('promotions') }}">Акції</a></li>
                </ul>
                <a href="{{ route('basket') }}">
                    <img src="img/shopping-cart.svg" alt="cart" class="cart">
                </a>
            </nav>
            <div class="display_none_mobile">
                <div class="info-header">
                    <a href="tel:0981234567">(098) 123-45-67</a>
                    <p>м. Київ</p>
                    <p>7.00 - 23.00</p>
                </div>
            </div>
        </div>
    </div>
</header>
