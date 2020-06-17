<?php

namespace App\Models\Waiters\Repositories;

use App\Models\Waiters\Waiter;
use App\Repositories\BaseRepository;

class WaiterRepository extends BaseRepository
{

    //    protected $with = [''];

    public function __construct(Waiter $waiter)
    {
        $this->model = $waiter;
    }

    public function apiLogin($request)
    {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (auth()->attempt($credentials)) {

            if (auth()->user()->role == "waiter") {
                $user = auth()->user();
                if ($user->active != 1) {
                    return jsonResponse(['error' => __('api.in-active')], 402);
                }

//                $user->token()->firstOrCreate(['token' => request('token')], [
//                    'token' => request('token'),
//                    'device' => request('device'),
//                ]);

                return jsonResponse([
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'store' => $user->store->name,
                    'phone' => $user->phone,
                    'address' => $user->address,
                    'token' => $user->createToken('TutsForWeb')->accessToken,
                ]);
            }
        }

        return jsonResponse(['error' => __('api.invalid-login')], 401);
    }

    public function createData()
    {
        return [
//            'example' => app(ExampleRepository::class)->all(),
        ];
    }

    public function editData($id)
    {
        $data = parent::editData($id);

//        $data['example'] = app(ExampleRepository::class)->all();

        return $data;
    }

}

