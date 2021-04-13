<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * App\Models\Manager
 *
 * @property int $id
 * @property string $manager_authority
 * @property string $manager_status
 * @property string $manager_name
 * @property string $manager_surname
 * @property string $manager_user_name
 * @property string $manager_email
 * @property string $manager_password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Manager newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Manager newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Manager query()
 * @method static \Illuminate\Database\Eloquent\Builder|Manager whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manager whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manager whereManagerAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manager whereManagerEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manager whereManagerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manager whereManagerPassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manager whereManagerStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manager whereManagerSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manager whereManagerUserName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manager whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Manager extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = [];
}
