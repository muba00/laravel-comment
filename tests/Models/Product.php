<?php
declare(strict_types=1);

namespace Muba00\LaravelComment\Tests\Models;

use Muba00\LaravelComment\Contracts\Commentable;
use Muba00\LaravelComment\HasComments;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property boolean $can_be_rated
 * @property boolean $must_be_approved
 */
class Product extends Model implements Commentable
{
    use HasComments;

    protected $guarded = [];

    public $timestamps = false;

    public function canBeRated(): bool
    {
        return $this->can_be_rated;
    }

    public function mustBeApproved(): bool
    {
        return $this->must_be_approved;
    }
}
