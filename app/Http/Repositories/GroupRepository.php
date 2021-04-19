<?php


namespace App\Http\Repositories;


use App\Models\Group;

class GroupRepository extends BaseRepository implements RepositoryInterface
{
    protected $groupModel;

    public function __construct(Group $group)
    {
        $this->groupModel = $group;
    }

    function getAll()
    {
        return $this->groupModel->all();
    }

    function findById($id)
    {
        return  $this->groupModel->findOrFail($id);
    }


}
