<?php


namespace App\Http\Services;


use App\Http\Repositories\UserRepository;
use App\Models\StatusConstant;

class UserService implements ServiceInterface
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    function getAll()
    {
        return $this->userRepository->getAll();
    }

    function findById($id)
    {
        return $this->userRepository->findById($id);
    }

    function add($request, $obj = null)
    {
        // TODO: Implement add() method.
    }

    function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    function update($request, $obj = null)
    {
        $obj->fillable($request->all());
        if ($request->status == 'true') {
            $obj->status = StatusConstant::ACTIVATE;
        } else {
            $obj->status = StatusConstant::DEACTIVATE;
        }
        $this->userRepository->save($obj);
    }
}
