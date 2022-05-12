<?php

namespace App\Http\Filters;

use Illuminate\Http\Request;

abstract class QueryFilter
{
    protected $builder;
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function filters()
    {
        return $this->request->query(); //all()
    }

    public function apply($builder)
    {
        $this->builder = $builder;
        foreach ($this->filters() as $filter => $value) {
            if (method_exists($this, $filter)) {
                call_user_func_array([$this, $filter], array_filter([$value]));
            }
        }
        return $this->builder;
    }
}
