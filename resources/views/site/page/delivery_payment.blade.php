@extends('layouts.site')

@section('title',       $seo['title'])
@section('description', $seo['description'])
@section('keywords',    $seo['keywords'])

@section('content')

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
                   @include('site.includes.breadcrumb', ['breadcrumbs' => $breadcrumbs])
                   <h1>{{ $seo['title'] }}</h1>
                   <div class="row">
                       <div class="col-md-12">

                           @php
                               $address = config('shop.address');
                               $number_phones = config('shop.number_phones');
                           @endphp

                           <h3>Доставка!</h3>

                           <p>Мы доставим ваш товар прямо к вам домой или в офис!</p>

                           <h3>Доставка:</h3>
                           <ul>
                               <li>по Алматы (в квадрате улиц Аль-Фараби-Яссауи-Рыскулова-Восточная объездная дорога)</li>
                               <li>по Казахстану</li>
                               <li>По Алматы</li>
                           </ul>
                           <h3>Условия доставки:</h3>
                           <ul>
                               <li>- заказ, оформленный до 16:00, доставляется день в день.</li>
                               <li>- заказ, оформленный после 16:00, доставляется на следующий день.</li>
                               <li>- наш курьер свяжется с вами в день доставки товара, чтобы уточнить адрес и удобное для вас время.</li>
                               <li>- если в день доставки вас не оказалось дома, доставка переносится на следующий день.</li>
                           </ul>

                           <h3>Стоимость доставки:</h3>
                           <ul>
                               <li>Стоимость доставки: <b>500 тенге</b>, при сумме заказа меньше <b>10 000 тенге</b> (оплата курьеру при получении товара) - в стандартном квадрате улиц г. Алматы.</li>
                               <li>Заказ свыше <b>10 000 тенге</b> доставляется <b>БЕСПЛАТНО</b> в квадрате улиц Аль-Фараби-Яссауи-Рыскулова-Восточная объездная дорога.</li>
                               <li>Доставка в районы ВНЕ указанного квадрата в Алматы обсуждаются индивидуально в зависимости от суммы заказа и удаленности адресата (<b>от 1000 тенге</b>).</li>
                               <li>Стоимость ЭКСПРЕСС доставки: <b>1 000 тенге</b> в квадрате улиц Аль-Фараби-Яссауи-Рыскулова-Восточная объездная дорога.</li>
                               <li>Экспресс доставка в районы ВНЕ указанного квадрата в Алматы обсуждаются индивидуально!</li>
                           </ul>

                           <h3>
                               Самовывоз: Вы также можете забрать свой заказ самостоятельно (после того, как менеджер Ecokids.kz перезвонит Вам),
                               по адресу: г. Алматы, ул. Жарокова, дом 37 режим работы: с 10:00 до 19:00, без перерывов и выходных.
                           </h3>

                           <h3>По Казахстану, условия доставки::</h3>
                           <ul>
                               <li>- доставка по Казахстану осуществляется службами Алем тат от 3 до 7 рабочих дней (в зависимости от города и вида доставки - стандартная или экспресс доставка)</li>
                               <li>- КазПочтой  подробнее можете узнать на сайте post.kz</li>
                               <li>- Не учитывать (день, когда собирается товар на складе и забирается курьером).</li>
                           </ul>

                       </div>
                   </div>
               </div>
           </div>
       </div>


@endsection
