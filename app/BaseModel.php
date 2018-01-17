<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected function getDateFormat()
    {
        return 'U';
    }
}
