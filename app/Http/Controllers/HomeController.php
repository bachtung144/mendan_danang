<?php

namespace App\Http\Controllers;

use App\Repositories\Reward\RewardRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    protected $rewardRepo;

    public function __construct(RewardRepositoryInterface $rewardRepo)
    {
        $this->rewardRepo = $rewardRepo;
    }

    public function __invoke(Request $request)
    {
        $rewards = $this->rewardRepo->getAll();

        return view("home", compact('rewards'));
    }
}
