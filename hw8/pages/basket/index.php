<?php
$basket = [];
if (!empty($_SESSION['basket'])) {
    $productIds = array_filter(
        array_keys($_SESSION['basket']),
        function ($element) {
            return is_int($element);
        }
    );

    $products = getProducts($productIds);
    foreach ($products as $product) {
        $basket[] = [
            'product' => $product,
            'qty' => $_SESSION['basket'][$product['id']]
        ];
    }
}
//
if (isset($_SESSION['user_id'])){
    $jsonBasket = json_encode($basket);
    //orders
    addOrderToDB($_SESSION['user_id'],$jsonBasket);

    //из личного кабинета пользователь..
    $ordersArray = getAllOrders($_SESSION['user_id']);
    foreach ($ordersArray as $order) {
        echo  '<p>'.$order['user_id']. ' - ' . json_decode($order['order']) .
            '<button class="btn-remove-order" data-order-id='.$order['order'].'>Удалить</button> -
            <button class="btn-confirm-order" data-order-id='.$order['order'].'>Заказать</button></p>';
    }
}

echo render('basket', ['basket' => $basket]);



?>
<script>
let btnDeleteArr = document.querySelectorAll('.btn-remove-order');
let btnConfirmArr = document.querySelectorAll('.btn-confirm-order');

for (const btnDeleteArrEl of btnDeleteArr) {
    btnDeleteArrEl.addEventListener("click", function (event){
        //получили id заказа для удаления
        event.target.dataset.order.id
        //используем ajax для обращения к методу deleteOrder(), передаем id заказа

    }, false);
}
for (const btnConfirmArrEl of btnConfirmArr) {
    btnConfirmArrEl.addEventListener("click", function (event){
        //получили id заказа для оформления
        event.target.dataset.order.id
    }, false);
}
</script>
