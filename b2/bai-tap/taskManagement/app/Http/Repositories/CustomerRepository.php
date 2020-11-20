<?php


namespace App\Http\Repositories;


class CustomerRepository
{
    public function getAll()
    {
        $customer = [
            [
                "name" => "Mark",
                "phone" => "0908980909",
                "email" => "Mark@gmail.com"
            ],
            [
                "name" => "Hung",
                "phone" => "0909000000",
                "email" => "Hung@gmail.com"
            ]
        ];
        return $customer;
    }
}
