<?php

namespace Tests\Utils\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Nuwave\Lighthouse\Support\Traits\IsRelayConnection;

class CompanyUid extends Model
{
    use IsRelayConnection;

    protected $primaryKey = 'uid';
    protected $table = 'companiesUid';
    protected $guarded = [];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
