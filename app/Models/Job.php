<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [ 'seniority_level'];
    
    public function scopeFilter($query, $params){       
        if ( isset($params['seniority_level']) && trim($params['seniority_level'] !== '') ) {
            $query->where('seniority_level', 'LIKE', trim($params['seniority_level']) . '%');
        }
    }
}
