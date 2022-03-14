<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function __invoke(Request $request, $type, $id)
    {
        $detail = Content::with('images')->find($id);

        return view('detail', compact('detail'));
    }
}
