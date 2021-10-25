<?php

// TypeFilter.php

namespace App\Filters;

class EmploymentTypeFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('employment_type', $value);
    }
}