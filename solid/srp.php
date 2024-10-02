<?php 

class Order
{
    private $items = [];
    private $total;

    public function getTotal()
    {
        return $this->total;
    }

    public function addItem($description, $price)
    {
        $this->items[] = [
            'description' => $description,
            'precio' => $price
        ];
        $this->total += $price;
    }

    public function createOrder()
    {
        echo "Se procesa el pedido <br>";
    }
}

class EmailNotifier {
    public function send(Order $order) {
        echo "Mensaje del pedido, total: " . $order->getTotal() . "<br>";
    }
}

$order = new Order();
$order->addItem('Producto 1', 100);
$order->addItem('Producto 2', 200);
$order->createOrder();

$emailNotifier = new EmailNotifier();
$emailNotifier->send($order);
