<?php

namespace App\Hateoas;

use App\Models\Address;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class AddressHateoas
{
    use CreatesLinks;

    /**
     * Get the HATEOAS link to view the address.
     *
     * @param Address $address
     *
     * @return null|Link
     */
    public function self(Address $address)
    {
        return $this->link('addresses.show', ['address' => $address]);
    }
}
