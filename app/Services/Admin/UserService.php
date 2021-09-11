<?php
namespace App\Services\Admin;

use App\Models\User;

class UserService extends BaseService
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user->paginate(6);
    }

    public function create($inputs)
    {
        $inputs['password'] = bcrypt($inputs['password']);

        return $this->user->create($inputs);
    }

    public function getUserUpdate($id)
    {
        return $this->user->findOrFail($id);
    }

    public function update($inputs, $id)
    {
        $user = $this->user->findOrFail($id);
        if (empty($inputs['password'])) {
            $inputs['password'] = $user->password;
        } else {
            $inputs['password'] = bcrypt($inputs['password']);
        }
        
        return $user->update($inputs);
    }

    public function delete($id)
    {
        $tour = $this->user->findOrFail($id);

        return $tour->delete();
    }

    public function find($data)
    {
        return User::where('name', 'LIKE', '%' . $data . '%')
            ->orWhere ('email', 'LIKE', '%' . $data . '%')
            ->paginate(6);
    }

}