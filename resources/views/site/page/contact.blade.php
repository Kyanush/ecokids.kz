@extends('layouts.site')

@section('title',       $seo['title'])
@section('description', $seo['description'])
@section('keywords',    $seo['keywords'])

@section('content')


@section('body_class') page-template-contact @stop

    <?php $breadcrumbs = [
        [
            'title' => 'Главная',
            'link'  => '/'
        ],
        [
            'title' => $seo['title'],
            'link'  => ''
        ]
    ];?>

    @php
        $address = config('shop.address');
        $number_phones = config('shop.number_phones');
    @endphp


    <header class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @include('site.includes.breadcrumb', ['breadcrumbs' => $breadcrumbs])
                    <h1>{{ $seo['title'] }}</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container post-container">
        <div class="row">
            <div class="col-md-12">
                <?php $breadcrumbs = [
                    [
                        'title' => 'Главная',
                        'link'  => '/'
                    ],
                    [
                        'title' => $seo['title'],
                        'link'  => ''
                    ]
                ];?>

                        <ul class="entry-content contact-blocks">
                            <li class="contact-block" id="contact-block-phones">
                                <svg class="contact-ico contact-ico__phones">
                                    <use xlink:href="#svg-phone">
                                        <svg viewBox="0 0 42 42" id="svg-phone" fill="inherit" stroke="inherit">
                                            <path d="M33.1932 26.0174C32.3333 25.1221 31.2962 24.6435 30.197 24.6435C29.1067 24.6435 28.0607 25.1133 27.1654 26.0086L24.3643 28.8009C24.1338 28.6768 23.9033 28.5615 23.6817 28.4463C23.3626 28.2867 23.0612 28.136 22.8041 27.9765C20.1803 26.31 17.7958 24.1382 15.5087 21.3282C14.4007 19.9276 13.6561 18.7487 13.1154 17.552C13.8422 16.8871 14.5159 16.1957 15.1719 15.5309C15.4201 15.2827 15.6683 15.0256 15.9165 14.7774C17.778 12.9159 17.778 10.5048 15.9165 8.64325L13.4965 6.22328C13.2217 5.94848 12.9381 5.66482 12.6721 5.38116C12.1403 4.83157 11.5818 4.26425 11.0056 3.73239C10.1458 2.8814 9.11753 2.42932 8.03607 2.42932C6.95462 2.42932 5.90862 2.8814 5.02218 3.73239C5.01332 3.74125 5.01332 3.74125 5.00446 3.75011L1.99056 6.7906C0.855923 7.92524 0.208823 9.30808 0.0669932 10.9125C-0.145752 13.5009 0.616585 15.912 1.20163 17.4899C2.63766 21.3636 4.78285 24.9537 7.98289 28.8009C11.8655 33.4369 16.537 37.0979 21.8734 39.6775C23.9122 40.6437 26.6336 41.7872 29.674 41.9822C29.8602 41.9911 30.0552 41.9999 30.2325 41.9999C32.2802 41.9999 33.9999 41.2642 35.3472 39.8016C35.3561 39.7838 35.3738 39.775 35.3827 39.7572C35.8436 39.1988 36.3755 38.6935 36.934 38.1528C37.3151 37.7893 37.7052 37.4082 38.0863 37.0093C38.9639 36.0963 39.4249 35.0325 39.4249 33.9422C39.4249 32.843 38.955 31.7882 38.0597 30.9017L33.1932 26.0174ZM36.3666 35.3516C36.3578 35.3516 36.3578 35.3605 36.3666 35.3516C36.0209 35.7239 35.6664 36.0608 35.2852 36.4331C34.709 36.9827 34.124 37.5589 33.5744 38.206C32.6791 39.1633 31.6242 39.6154 30.2414 39.6154C30.1084 39.6154 29.9666 39.6154 29.8336 39.6065C27.2009 39.4381 24.7543 38.4099 22.9194 37.5323C17.9021 35.1034 13.4965 31.6552 9.83554 27.2851C6.81279 23.6418 4.79171 20.2733 3.45319 16.6567C2.6288 14.4494 2.32741 12.7297 2.46038 11.1076C2.54902 10.0704 2.94792 9.21058 3.68366 8.47483L6.70642 5.45208C7.14077 5.04431 7.60172 4.8227 8.0538 4.8227C8.61226 4.8227 9.06434 5.15955 9.348 5.44321C9.35687 5.45208 9.36573 5.46094 9.3746 5.46981C9.91532 5.97508 10.4295 6.49807 10.9702 7.05653C11.245 7.34019 11.5286 7.62385 11.8123 7.91638L14.2323 10.3364C15.1719 11.276 15.1719 12.1447 14.2323 13.0843C13.9752 13.3414 13.727 13.5984 13.4699 13.8466C12.7253 14.609 12.0162 15.3181 11.245 16.0096C11.2273 16.0273 11.2095 16.0362 11.2007 16.0539C10.4383 16.8162 10.5802 17.5608 10.7397 18.0661C10.7486 18.0927 10.7574 18.1193 10.7663 18.1459C11.3957 19.6705 12.2821 21.1066 13.6295 22.8174L13.6384 22.8263C16.0849 25.8402 18.6645 28.1892 21.5099 29.9887C21.8734 30.2192 22.2457 30.4053 22.6003 30.5826C22.9194 30.7422 23.2208 30.8929 23.4778 31.0524C23.5133 31.0701 23.5487 31.0967 23.5842 31.1145C23.8856 31.2652 24.1693 31.3361 24.4618 31.3361C25.1975 31.3361 25.6585 30.8751 25.8092 30.7244L28.8408 27.6928C29.1422 27.3914 29.6208 27.028 30.1793 27.028C30.7289 27.028 31.181 27.3737 31.4558 27.6751C31.4646 27.684 31.4646 27.684 31.4735 27.6928L36.3578 32.5771C37.2708 33.4813 37.2708 34.412 36.3666 35.3516Z" stroke="none" fill="inherit"></path>
                                            <path d="M22.6978 9.99065C25.0203 10.3807 27.13 11.4799 28.8142 13.1641C30.4985 14.8483 31.5888 16.9581 31.9877 19.2805C32.0852 19.8656 32.5905 20.2733 33.1666 20.2733C33.2376 20.2733 33.2996 20.2645 33.3705 20.2556C34.0265 20.1492 34.4608 19.5287 34.3545 18.8728C33.8758 16.0628 32.5461 13.5009 30.5162 11.471C28.4862 9.44106 25.9244 8.1114 23.1144 7.63272C22.4585 7.52635 21.8468 7.9607 21.7316 8.6078C21.6163 9.2549 22.0418 9.88428 22.6978 9.99065Z" stroke="none" fill="inherit"></path>
                                            <path d="M41.9512 18.5271C41.1623 13.8999 38.9816 9.68929 35.6309 6.33855C32.2802 2.98781 28.0696 0.807175 23.4424 0.0182442C22.7953 -0.0969928 22.1836 0.346227 22.0684 0.993327C21.962 1.64929 22.3964 2.26093 23.0523 2.37617C27.1831 3.07646 30.9505 5.03549 33.9467 8.02279C36.9428 11.0189 38.893 14.7863 39.5933 18.9171C39.6908 19.5022 40.196 19.9099 40.7722 19.9099C40.8431 19.9099 40.9052 19.9011 40.9761 19.8922C41.6232 19.7947 42.0664 19.1742 41.9512 18.5271Z" stroke="none" fill="inherit"></path>
                                        </svg>
                                    </use>
                                </svg>
                                <div class="contact-header">Телефон</div>
                                <a href="tel:{{ $number_phones[0]['number'] }}">{{ $number_phones[0]['format'] }}</a>
                                <div class="contact-header">Мы в соцсетях</div>
                                <a href="{{ config('shop.social_network.instagram') }}" title="Вы в Instagram" target="_blank">
                                    <i class="fa fa-instagram fa-2x"></i>
                                </a>
                            </li>
                            <li class="contact-block" id="contact-block-email">
                                <svg class="contact-ico contact-ico__email">
                                    <use xlink:href="#svg-envelope">
                                        <svg viewBox="0 0 43 33" id="svg-envelope" fill="inherit" stroke="inherit"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.3661 16.8003L4.00637 28.5723C4.00131 28.5335 3.63571 25.5765 3.4699 23.9812C3.14552 20.8626 2.90717 17.799 2.79076 14.9352C2.59242 10.0614 3.25132 4.22958 3.25132 4.22958C8.45089 2.98682 15.7438 2.74114 24.9608 3.05207C31.7575 3.2815 38.2782 3.78983 40.1853 4.22958C40.0626 4.39568 39.9211 4.69298 39.3302 5.38725C38.1426 6.78272 36.1803 8.66932 33.801 10.722C29.046 14.8238 22.4084 19.2951 22.2867 19.2466C22.078 19.1637 21.8341 19.0621 21.5582 18.9416C20.7633 18.5946 19.875 18.1675 18.9166 17.6571C16.1735 16.1961 13.429 14.3645 10.871 12.1402C9.24065 10.7227 7.73825 9.18721 6.3901 7.531C6.0139 7.06879 5.33115 6.99662 4.86505 7.36968C4.39896 7.74275 4.32618 8.41981 4.70238 8.88202C6.13102 10.6374 7.71994 12.2611 9.44092 13.7574C10.7136 14.8642 12.0288 15.8773 13.3661 16.8003ZM5.58444 29.6752L14.9769 17.8623C15.9431 18.4706 16.9165 19.0334 17.8901 19.552C18.8999 20.09 19.8391 20.5414 20.6845 20.9102C21.1979 21.1344 21.5702 21.2826 21.7784 21.3583L22.1462 21.4924L22.5154 21.3621C23.7722 20.919 25.9993 19.5238 28.5775 17.6427L28.5785 17.6439L37.9086 29.3789C26.8421 31.059 16.6345 31.0439 7.92238 29.9928C7.07526 29.8905 6.2949 29.7837 5.58444 29.6752ZM39.349 28.1024L30.1182 16.4925C31.7811 15.2241 33.532 13.8048 35.2245 12.3448C37.6806 10.2259 39.7151 8.26972 40.9876 6.77459C41.7212 5.91303 42.2118 5.19749 42.4471 4.59667C42.8512 3.56518 42.5374 2.54278 41.3908 2.27845C39.3095 1.79832 31.9633 1.13608 25.0346 0.902342C15.6361 0.58544 7.50521 0.980493 2.06777 2.28037L1.41996 2.43523L1.26668 3.07836C0.596943 5.88507 0.417879 9.96704 0.623452 15.0219C0.742024 17.935 0.983747 21.0419 1.31223 24.2018C1.48021 25.816 1.65999 27.3405 1.83978 28.7293C1.90292 29.2156 2.18947 31.2341 2.18947 31.2341C2.18947 31.2341 6.33973 31.9686 7.66065 32.128C17.1151 33.2687 28.2693 33.2147 40.3639 31.1629L41.1449 31.0305L41.2551 30.2524C41.4741 28.703 41.672 26.9887 41.8503 25.137C42.1369 22.1592 42.3593 18.9722 42.5261 15.7858C42.5844 14.6709 42.6314 13.6356 42.6685 12.7061C42.6813 12.3806 42.6922 12.0912 42.7008 11.8417C42.7037 11.7542 42.7064 11.6777 42.7085 11.613C42.729 10.9393 42.2584 10.4436 41.6597 10.4257C41.0611 10.408 40.561 10.8747 40.5429 11.4684C40.5386 11.607 40.5362 11.6818 40.533 11.7676C40.5246 12.0138 40.514 12.2994 40.5012 12.6215C40.4646 13.5423 40.4178 14.5688 40.36 15.6744C40.1949 18.8322 39.9742 21.9892 39.691 24.9327C39.5842 26.043 39.4702 27.1017 39.349 28.1024Z" fill="inherit" stroke="none"></path></svg>
                                    </use>
                                </svg>
                                <div class="contact-header">E-mail</div>
                                <a href="mailto:{{ config('shop.site_email') }}">
                                    {{ config('shop.site_email') }}
                                </a>
                            </li>
                            <li class="contact-block" id="contact-block-address">
                                <div class="contact-header">Адрес</div>
                                <svg class="contact-ico contact-ico__address">
                                    <use xlink:href="#svg-marker">
                                        <svg viewBox="0 0 43 43" id="svg-marker" fill="inherit" stroke="inherit">
                                            <path d="M21.5 6.52087C16.332 6.52087 12.1274 10.7253 12.1274 15.8933C12.1274 21.0612 16.332 25.2657 21.5 25.2657C26.6679 25.2657 30.8725 21.0612 30.8725 15.8933C30.8725 10.7253 26.6679 6.52087 21.5 6.52087ZM21.5 22.7445C17.7221 22.7445 14.6484 19.671 14.6484 15.8931C14.6484 12.1152 17.7221 9.04182 21.5 9.04182C25.2779 9.04182 28.3516 12.1154 28.3516 15.8933C28.3516 19.6712 25.278 22.7445 21.5 22.7445Z" stroke="none" fill="inherit"></path>
                                            <path d="M21.5 0C12.7365 0 5.60693 7.12958 5.60693 15.8931C5.60693 20.9471 9.84549 28.4768 12.372 32.5152C14.0343 35.1721 15.8206 37.7008 17.4018 39.6352C19.9397 42.74 20.8481 42.9998 21.5002 42.9998C22.162 42.9998 23.0196 42.7398 25.5497 39.6334C27.1343 37.6873 28.9215 35.1602 30.5821 32.5172C33.1259 28.4689 37.3932 20.9257 37.3932 15.8929C37.3932 7.12958 30.2637 0 21.5 0ZM28.8345 30.5544C25.5747 35.8455 22.582 39.4209 21.485 40.3337C20.3824 39.449 17.4383 35.9586 14.133 30.571C10.3167 24.3502 8.12805 19.0002 8.12805 15.8931C8.12788 8.51963 14.1266 2.52095 21.5 2.52095C28.8734 2.52095 34.8721 8.51963 34.8721 15.8931C34.8723 18.9824 32.6715 24.3261 28.8345 30.5544Z" stroke="none" fill="inherit"></path>
                                        </svg>
                                    </use>
                                </svg>
                                {{ $address[0]['addressLocality'] }}<br/> {{ $address[0]['streetAddress'] }}
                                <div class="contact-header">Время работы</div>
                                {{ $address[0]['working_hours'] }}
                            </li>
                        </ul>
                        <p>
                            Обсудить с нами возникшие вопросы или проконсультироваться звоните к нам по номеру:
                            <a style="font-size: 14px;text-decoration: none;" href="tel:{{ $number_phones[0]['number'] }}">
                                {{ $number_phones[0]['format'] }}
                            </a>
                            (ежедневно с 11-00 до 19-00).
                            Кроме того, Вы можете отправить любые запросы или вопросы нам на электронную почту
                            <a style="font-size: 14px;text-decoration: none;" href="mailto:{{ config('shop.site_email') }}">
                                {{ config('shop.site_email') }}
                            </a> ,
                            не забудьте указать Ваше имя и контактные номера телефонов. Если Вас не устраивают какие-либо наши товары или услуги,
                            мы с удовольствием выслушаем Вас. Мы всегда готовы решить проблему.
                        </p>
                    <!--
                        <p>
                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0907f0b379ab1ff176a45fb714a2ee57862dd92278b63d35c0061ca3d613456b&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                        </p>
                        -->
                    </div>

        </div>
    </div>







@endsection
