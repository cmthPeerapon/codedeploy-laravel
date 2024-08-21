<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    protected $customers = [
        [
            'firstname'      => 'Tinnakorn',
            'lastname'       => 'Maneewong',
        ],[
            'firstname'      => 'Peerapon',
            'lastname'       => 'Boonkaweenapanon',
        ]
    ];

    public function run()
    {
        foreach ($this->customers as $customer) {
            Customer::create($customer);
        }
    }
}
