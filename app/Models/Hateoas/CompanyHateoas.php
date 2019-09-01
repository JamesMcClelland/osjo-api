<?php

namespace App\Hateoas;

use App\Models\Company;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class CompanyHateoas
{
    use CreatesLinks;

    /**
     * Get the HATEOAS link to view the company.
     *
     * @param \App\Models\Company $company
     *
     * @return null|\GDebrauwer\Hateoas\Link
     */
    public function self(Company $company)
    {
        return $this->link('companies.show', ['company' => $company]);
    }
}
