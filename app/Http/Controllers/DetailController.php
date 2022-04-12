<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Repositories\Content\ContentRepositoryInterface;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    protected $contentRepo;

    public function __construct(ContentRepositoryInterface $contentRepo)
    {
        $this->contentRepo = $contentRepo;
    }

    public function __invoke(Request $request, $type, $id)
    {
        $detail = $this->contentRepo->getDetail($id);

        return view('detail', compact('detail'));
    }
}
