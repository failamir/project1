<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tuga extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use HasFactory;

    public $table = 'tugas';

    protected $orderable = [
        'id',
        'pukul',
        'vol',
        'paraf.name',
    ];

    protected $filterable = [
        'id',
        'pukul',
        'vol',
        'paraf.name',
    ];

    protected $dates = [
        'pukul',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'pukul',
        'uraian_kegiatan',
        'hasil_output',
        'vol',
        'paraf_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getPukulAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.time_format')) : null;
    }

    public function setPukulAttribute($value)
    {
        $this->attributes['pukul'] = $value ? Carbon::createFromFormat(config('project.time_format'), $value)->format('H:i:s') : null;
    }

    public function paraf()
    {
        return $this->belongsTo(User::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
