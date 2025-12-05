<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadCaptureForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_capture_id',
        'name',
        'email',
        'phone',
        'message',
        'read_at',
    ];

    public function lead_capture()
    {
        return $this->belongsTo(LeadCapture::class);
    }
}
