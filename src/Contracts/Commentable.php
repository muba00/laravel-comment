<?php
declare(strict_types=1);

namespace Muba00\LaravelComment\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface Commentable
{
    public function comments(): MorphMany;

    public function canBeRated(): bool;

    public function mustBeApproved(): bool;

    public function primaryId(): string;
}
