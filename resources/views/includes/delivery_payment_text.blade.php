@php
    $address = config('shop.address');
    $number_phones = config('shop.number_phones');
@endphp

<h4 class="m-t-0 text-center">Уважаемый Покупатель!</h4>
<p>Стандартная курьерская доставка по г.Алматы – доставка по адресу, указанному при оформлении заказа. Доставка осуществляется в
    удобные для клиента время и день (с учетом рабочего времени основного склада), в том числе и в день оформления заказа,
    при наличии свободных курьеров и товара на складе.</p>
<p>*Стоимость доставки по Вашему адресу и более точные сроки уточняйте у менеджеров магазина.</p>

<h3>Самовывоз</h3>
<p>
    Вы можете самостоятельно забрать заказанный и в интернет-магазине товар из нашего магазина&nbsp;по адресу
    {{ $address[0]['addressLocality'] }}, {{ $address[0]['streetAddress'] }}
    &nbsp;
    Тел. {{ $number_phones[0]['format'] }}
    <br>
    <br>Режим работы: {{ $address[0]['working_hours'] }}
</p>
<p>в пятницу с 13:00 до 15:00 перерыв</p>
<p>&nbsp;</p>

<h3>Платная&nbsp; доставка во все города Казахстана</h3>
<p>
    <br>По городам Казахстана,работаем с курьерской компанией "Алем-Тат", срок доставки 3-4 рабочих дня.<br>
    <br>Доставку оплачивает покупатель. Цену за доставку в ваш город вы можете подробно узнать на сайте alemtat.kz<br>
    <br>После оформления заказа,нами выдается номер отслеживания,по которому вы можете отслеживать свой груз, на сайте: www.alemtat.kz
</p>
<p>
    <img src="/site/images/dostavka.jpg" style="max-width: 100%;"/>
</p>
<p>&nbsp;</p>
<h3>Произвести оплату вы можете любым удобным для вас способом:</h3>
<p>&nbsp;</p>
<ul class="i_typical_ul">
    <li>Наличным расчетом</li>
    <li>Безналичными переводами по выставленному счету(только для юридических лиц)</li>
    <li>Пластиковой картой Visa или MasterCard при заказе или при его получении в нашем магазине</li>
</ul>
<p>&nbsp;</p>
<h3>Наличными расчет курьеру или в магазине</h3>
<p><br>Оплатить товар и услуги доставки вы можете сотруднику службы доставки при получении товара.<br><br>Оплата принимается только в тенге.<br><br>Необходимые документы сотрудник вручит вам вместе с заказом. Кассовый чек выбивается при оплате на каждый товар.</p>
<p>&nbsp;</p>
<h3>Безналичным расчетом по счету на оплату (только для юридических лиц)</h3>
<p><br>Счет на оплату на сайте формируется автоматически, найти счет вы можете в «персональном разделе».<br><br>Оплачивайте по счету только после подтверждения наличия товара оператором интернет-магазина.<br><br>Доставка осуществляется после поступления денег на счет магазина.</p>
