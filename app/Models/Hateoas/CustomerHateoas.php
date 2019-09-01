<?php

namespace App\Hateoas;

use App\Models\Customer;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class CustomerHateoas
{
    use CreatesLinks;

    /**
     * Get the HATEOAS link to view the customer.
     *
     * @param \App\Models\Customer $customer
     *
     * @return null|\GDebrauwer\Hateoas\Link
     */
    public function self(Customer $customer)
    {
        return $this->link('customers.show', ['customer' => $customer]);
    }
}
