<?php

namespace App\Http\Controllers\Admin\ManajemenProposal;

use App\Http\Controllers\Controller;
use App\Models\usulan;
use Illuminate\Http\Request;

class ManajemenProposalController extends Controller
{
    public function index(){
        $usulan = usulan::all();

        return view('admin.manajemen-proposal.proposal', compact('usulan'));
    }
}
