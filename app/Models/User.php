<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Модель пользователя.
 *
 * @property int $id Идентификатор пользователя.
 * @property string $name Имя пользователя.
 * @property string $email Email пользователя.
 * @property string $password Пароль пользователя.
 * @property \Illuminate\Support\Carbon|null $email_verified_at Дата подтверждения email.
 * @property string|null $remember_token Токен для запоминания пользователя.
 * @property \Illuminate\Support\Carbon $created_at Дата создания.
 * @property \Illuminate\Support\Carbon $updated_at Дата обновления.
 */

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Атрибуты модели, которые могут быть заполнены массовым назначением.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Атрибуты модели, которые должны быть скрыты при сериализации.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Атрибуты модели, которые должны быть приведены к определенным типам.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
