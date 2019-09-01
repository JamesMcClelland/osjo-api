<?php

namespace App\Modelss\Hateoas;

use App\Modelss\User;
use GDebrauwer\Hateoas\Link;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class UserHateoas
{
    use CreatesLinks;

    /**
     * Get the HATEOAS link to view the app model user.
     *
     * @param User $user
     * @return null|Link
     */
    public function self(User $user)
    {
        return $this->link('users.show', ['user' => $user]);
    }
}
