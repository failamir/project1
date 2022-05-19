<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pangkat extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use HasFactory;

    public $table = 'pangkats';

    protected $orderable = [
        'id',
        'nama_pangkat',
    ];

    protected $filterable = [
        'id',
        'nama_pangkat',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama_pangkat',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
