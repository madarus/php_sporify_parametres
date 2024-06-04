<?php
namespace App\Domain\Parametres\Models;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Model;
/**
 * @property int $user_id id of user
 *
 * @property array $top_5_tracks top 5 tracks of user
 *
 * @property CarbonInterface|null $created_at
 * @property CarbonInterface|null $updated_at
 */
class Parametres extends Model
{
    protected $table = 'parametres';
}
