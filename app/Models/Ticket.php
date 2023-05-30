<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель билета.
 *
 * @property int $id Идентификатор билета.
 * @property string $from Место отправления.
 * @property string $to Место прибытия.
 * @property string $date Дата.
 * @property string $departure Время отправления.
 * @property string $arrival Время прибытия.
 * @property string $time_in_road Продолжительность поездки.
 * @property float $price Цена билета.
 * @property \Illuminate\Support\Carbon $created_at Дата создания.
 * @property \Illuminate\Support\Carbon $updated_at Дата обновления.
 */

class Ticket extends Model
{
    /**
     * Свойства модели, которые могут быть заполнены массовым назначением.
     *
     * @var array
     */
    protected $filllabel = ['From', 'To', 'Date', 'Departure', 'Arrival', 'Time_in_road', 'Price'];
    use HasFactory;
}
