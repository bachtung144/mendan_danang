<?php
namespace App\Repositories\Reward;

use App\Models\Reward;
use App\Repositories\BaseRepository;

class RewardRepository extends BaseRepository implements RewardRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return Reward::class;
    }
}
