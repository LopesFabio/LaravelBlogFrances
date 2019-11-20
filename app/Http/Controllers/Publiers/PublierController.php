<?php

namespace App\Http\Controllers\Publiers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Publier;

class PublierController extends Controller
{
    private $publier;

    public function __construct(Publier $publier)
    {
        $this->publier = $publier;
    }

    public function index()
    {
        $publier = $this->publier->paginate(10);

        return view('publiers.index', compact('publier'));
    }

    public function show($id)
    {
        $publier = $this->publier->with(['commentaires.user', 'user'])->find($id);

        return view('publiers.show', compact('publier'));
    }
}
