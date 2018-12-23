<?php

namespace App\Models;

use OwenIt\Auditing\Models\Audit as VendorAudit;

class Audit extends VendorAudit implements \OwenIt\Auditing\Contracts\Audit
{
    use \OwenIt\Auditing\Audit;

    public function users()
    {
        $this->belongsTo('App\User');
    }
}