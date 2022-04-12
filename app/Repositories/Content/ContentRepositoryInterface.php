<?php
namespace App\Repositories\Content;

use App\Repositories\RepositoryInterface;

interface ContentRepositoryInterface extends RepositoryInterface
{
    public function getByType($type);

    public function getDetail($id);
}
