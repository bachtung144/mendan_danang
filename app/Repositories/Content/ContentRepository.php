<?php
namespace App\Repositories\Content;

use App\Models\Content;
use App\Repositories\BaseRepository;

class ContentRepository extends BaseRepository implements ContentRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return Content::class;
    }

    public function getByType($type)
    {
        return $this->model->where('type', $type)->get();
    }

    public function getDetail($id)
    {
        return $this->model->with('images')->find($id);
    }
}
