<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function slackUser()
    {
        return $this->belongsTo(SlackUser::class, 'sender', 'slack_id');
    }
}
