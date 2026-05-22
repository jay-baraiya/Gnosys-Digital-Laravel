<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_active',
        'access_level',
        'permissions',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_active' => 'boolean',
        'permissions' => 'array',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function hasPermission($module, $action = 'view')
    {
        if ($this->access_level === 'full') {
            return true;
        }

        if ($this->access_level === 'viewer') {
            return $action === 'view';
        }

        if ($this->access_level === 'limited' && is_array($this->permissions)) {
            return in_array($module, $this->permissions) || in_array('all', $this->permissions);
        }

        return false;
    }

    public function canManageAdmins()
    {
        return $this->access_level === 'full';
    }
}
