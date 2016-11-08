<?php 
use dair\Orders\Models\Order;class Cms5821da4389cb2573969974_3721707351Class extends \Cms\Classes\LayoutCode
{

public function onTest(){
    $name = post('name');
    $service = post("service");
    $time = post("time");
    
    $order = new dair\Orders\Models\Order;
    $order->name = $name;
    $order->service = $service;
    $order->time = $time;
    $order->save();
    
    
    }
}
