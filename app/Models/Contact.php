<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string $settings_appellation
 * @property string $settings_form_mail
 * @property string $settings_about_the_company
 * @property string $settings_facebook
 * @property string $settings_working_hours
 * @property string $settings_twitter
 * @property string $settings_address
 * @property string $settings_instagram
 * @property string $settings_phone_1
 * @property string $settings_google
 * @property string $settings_phone_2
 * @property string $settings_linkedin
 * @property string $settings_mail_1
 * @property string $settings_maps
 * @property string $settings_mail_2
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSettingsAboutTheCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSettingsAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSettingsAppellation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSettingsFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSettingsFormMail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSettingsGoogle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSettingsInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSettingsLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSettingsMail1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSettingsMail2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSettingsMaps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSettingsPhone1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSettingsPhone2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSettingsTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSettingsWorkingHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];
}
