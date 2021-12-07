<?php

namespace App\Http\Controllers;

use App\Models\TahunAngkatan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $cta;

    public function __construct() 
    {
        $this->cta = TahunAngkatan::where('aktif', 1)->first()->id;
        // $this->cta = TahunAngkatan::where('aktif', 1)->first();
        // if ($this->cta) {
        //     $this->cta = $this->cta->id;
        // }
    }
}
