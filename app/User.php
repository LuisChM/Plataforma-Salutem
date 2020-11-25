<?php

namespace App;

use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable 
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    } 
    
    //relacion con roles
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'asignar_roles');
    }
    //validar el rol que tiene
    public function hasRoles(array $roles)
    {
        foreach ($roles as $role) {
            foreach ($this->roles as $userRole) {
                if ($userRole->nombre === $role) {
                    return true;
                }
            }
        }
        return false;
    }

    //relacion con paciente 
    public function paciente (){
        $this->hasOne(Paciente::class);
    }
    public function planNutricional (){
        $this->hasOne(PlanNutricional::class);
    }

    //query scope
    public function scopeName($query, $name)
    {
        if($name)
            return $query->where('name', 'LIKE', "%$name%");
    }
    public function scopeEmail($query, $email)
    {
        if($email)
            return $query->where('email', 'LIKE', "%$email%");
    }
}
