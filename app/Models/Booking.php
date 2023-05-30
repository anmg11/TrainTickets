<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель бронирования.
 *
 * @property int $id Идентификатор бронирования.
 * @property string $name Имя пользователя.
 * @property string $from Место отправления.
 * @property string $to Место прибытия.
 * @property string $date Дата.
 * @property string $departure Время отправления.
 * @property \Illuminate\Support\Carbon $created_at Дата создания.
 * @property \Illuminate\Support\Carbon $updated_at Дата обновления.
 */
class Booking extends Model
{
    /**
     * Свойства модели, которые могут быть заполнены массовым назначением.
     *
     * @var array
     */
    protected $filllabel = ['Name','From', 'To', 'Date', 'Departure'];
    use HasFactory;
}
