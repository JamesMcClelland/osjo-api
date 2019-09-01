<?php

namespace App\Hateoas;

use App\Models\Person;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class PersonHateoas
{
    use CreatesLinks;

    /**
     * Get the HATEOAS link to view the person.
     *
     * @param \App\Models\Person $person
     *
     * @return null|\GDebrauwer\Hateoas\Link
     */
    public function self(Person $person)
    {
        return $this->link('person.show', ['person' => $person]);
    }
}
