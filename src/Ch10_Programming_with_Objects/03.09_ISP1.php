<?php

class OrderFulfillment
{
    public function wholesaleOrder()
    {
        // wholesale stuff
    }
    public function customerOrder()
    {
        // customer stuff
    }
}

class OnlineShopOrder extends OrderFulfillment
{
    public function wholesaleOrder()
    {
        throw new Exception('wholesaleOrders not supported');
    }

    public function customerOrder()
    {
        // online customer stuff
    }
}
