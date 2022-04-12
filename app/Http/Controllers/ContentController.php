<?php

namespace App\Http\Controllers;

use App\Repositories\Content\ContentRepositoryInterface;
use Illuminate\Http\Request;

class ContentController extends Controller
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

    public function __invoke(Request $request, $type)
    {
        $contents = $this->contentRepo->getByType($type);

        return view("Content", compact('contents', 'type'));
    }
}
