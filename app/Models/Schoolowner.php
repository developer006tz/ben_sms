<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schoolowner extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['schoolname', 'systemowner_id'];

    protected $searchableFields = ['*'];

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function systemowner()
    {
        return $this->belongsTo(Systemowner::class);
    }
}
