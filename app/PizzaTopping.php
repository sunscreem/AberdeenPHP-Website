<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class PizzaTopping extends Model
{
    use Searchable;
}
