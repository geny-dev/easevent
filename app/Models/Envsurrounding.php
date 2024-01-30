<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Envsurrounding extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function get_events() {
        $events = DB::table('events')->select('id','name')->get();
        return $events;
    }
}
