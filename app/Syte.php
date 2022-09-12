<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syte extends Model
{   
    public function getByLimit(int $limit_count = 10)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    public function getPaginateByLimit(int $limit_count = 7)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('review', 'DESC')->paginate($limit_count);
    }
    
}
