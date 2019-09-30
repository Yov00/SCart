<?php
namespace App;

class Cart
{
    // Създаваме празен масив за продуктите
    public $items = [];
    public $totalQty = 0;
    public $totalPrice = 0;
    // При инициализация подаваме старта количка
    public function __construct($oldCart)
    { // Ако вечме сме инициализирали класа задаваме всички свойства на обекта към сегашния
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    // Добавяме add() метод който прием 2 стойности $item -> Product обекта и , $id -> Product->id всичко това става в ProductController
    public function add($item, $id)
    {  
         // Създваме асоциативен масив който служи при вкарването на един и същи продукт няколко пъти да направи група за да не добавяме 
         // eдин и същ продукт няколко пъти в количката.
        $storedItem = ['qty' => 0, '', 'price' => $item->price, 'item' => $item];
        // Проверяваме дали в количката има продукти
        if ($this->items) {
            // Ако има продукти, тези продукти съдържат ли продукта който се опитваме да добавим
            if (array_key_exists($id, $this->items)) {
                // Ако го има $storedItem го приписва на себеси и по-долу увеличава количеството
                $storedItem = $this->items[$id];
            }
        }
            $storedItem['qty']++;
            $storedItem['price'] = $item->price * $storedItem['qty'];
            $this->items[$id] = $storedItem;
            $this->totalQty++;
            $this->totalPrice += $item->price;
            
       
    }
}
