<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/" class="logo logo-dark" style="margin-top: 25px;">
            <span class="logo-sm">
                <img src="/assets/images/gr.svg" alt="" style="max-width: 100%; height: auto;">
            </span>
            <span class="logo-lg">
                <img src="/assets/images/grandroad.svg" alt="" style="height: 50px">
            </span>
        </a>

        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="/assets/images/gr.svg" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="/assets/images/grandroad.svg" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>
    <br><br>
    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="/production/1/edit">
                        <i class="mdi mdi-account-hard-hat"></i>
                        <span>Производство</span>
                    </a>
                </li>

                <li>
                    <a href="/abouts/1/edit">
                        <i class="uil-star"></i>
                        <span>О компании</span>
                    </a>
                </li>

                <li>
                    <a href="/projects/create">
                        <i class="uil-presentation-edit"></i>
                        <span>Наши проекты</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxl-product-hunt"></i>
                        <span>Продукция</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="/materials/1/edit">Инертные материалы</a></li>
                        <li><a href="/materials/2/edit ">Асфальтовое покрытие</a></li>
                    </ul>
                </li>

                <li>
                    <a href="/reports/create">
                        <i class="bx bx-news"></i>
                        <span>Новости</span>
                    </a>
                </li>

                <li>
                    <a href="/workwith/1/edit">
                        <i class="dripicons-user"></i>
                        <span>С кем мы работаем</span>
                    </a>
                </li>

                <li>
                    <a href="/partners/create">
                        <i class="dripicons-user-group"></i>
                        <span>Наши партнеры</span>
                    </a>
                </li>
                <li>
                    <a href="/equipment/create">
                        <i class="uil-wrench"></i>
                        <span>Оборудование</span>
                    </a>
                </li>
                <li>
                    <a href="/calculator/create">
                        <i class="uil-calculator-alt"></i>
                        <span>Калькулятор</span>
                    </a>
                </li>
                <li>
                    <a href="/contacts/1/edit">
                        <i class="mdi mdi-account-cog"></i>
                        <span>Контакты</span>
                    </a>
                </li>
                <li>
                    <a href="/catalogs/1/edit">
                        <i class="uil-book-alt"></i>
                        <span>Каталог</span>
                    </a>
                </li>
                <li>
                    <a href="/feedback/1">
                        <i class="uil-feedback"></i>
                        <span>Обратная связь</span>
                        <span class="badge rounded-pill bg-primary float-end">{{ count(\App\Models\Message::where('view', 0)->get()) }}</span>
                    </a>
                </li>
                <li>
                    <a href="/feedback/2">
                        <i class="uil-phone-alt"></i>
                        <span>Обратный звонок</span>
                        <span class="badge rounded-pill bg-primary float-end">{{ count(\App\Models\Feedback::where('view', 0)->get()) }}</span>
                    </a>
                </li>
                <li>
                    <a href="/feedback/3">
                        <i class="uil-external-link-alt"></i>
                        <span>Заявки с<br>   калькулятора</span>
                        <span class="badge rounded-pill bg-primary float-end">0</span>
                    </a>
                </li>
                <li>
                    <a href="/feedback/4">
                        <i class="uil-calculator"></i>
                        <span>Расчитать <br> стоимость</span>
                        <span class="badge rounded-pill bg-primary float-end">0</span>
                    </a>
                </li>

                <li>
                    <a href="/words/create">
                        <i class="mdi mdi-file-word"></i>
                        <span>Словарь</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
