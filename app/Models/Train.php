<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function printTime()
    {
        if ($this->in_time === $this->cancelled) {
            return $this->in_time = 'SI';
        } else {
            return $this->in_time = 'NO';
        }
    }

    public function printCancelled()
    {
        if ($this->cancelled === $this->in_time) {
            return $this->cancelled = 'SI';
        } else {
            return $this->cancelled = 'NO';
        }
    }
}
