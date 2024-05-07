<?php
namespace App\Domain\Parametres\Models;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;
/**
 * @property int $user_id id of user
 *
 * @property string $top_5_tracks top 5 tracks of user
 * @property string $user_name user nickname
 * @property string $token token of top 5 tracks
 *
 * @property CarbonInterface|null $created_at
 * @property CarbonInterface|null $updated_at
 */
class Parametres extends Model
{
    protected $table = 'parametres';
}
