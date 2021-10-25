<?php


namespace App\Filters;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class JobFilter extends AbstractFilter
{
    protected $filters = [
        'employment_type' => EmploymentTypeFilter::class
    ];
}