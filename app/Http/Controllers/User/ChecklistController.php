<?php

namespace App\Http\Controllers\User;

use App\Models\Checklist;
use Illuminate\Http\Request;
use App\Services\ChecklistService;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\ChecklistController;

class ChecklistController extends Controller
{
    public function show(Checklist $checklist): View
    {
        //Sync checklist from admin
        (new ChecklistService())->sync_checklist($checklist, auth()->id());

        return view('users.checklists.show', compact('checklist'));
    }
}
