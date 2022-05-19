<?php

namespace App\Http\Controllers\User;

use App\Models\Checklist;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\ChecklistController;

class ChecklistController extends Controller
{
    public function show(Checklist $checklist): View
    {
        return view('users.checklists.show', compact('checklist'));
    }
}
