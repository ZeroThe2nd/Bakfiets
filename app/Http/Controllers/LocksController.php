<?php

namespace App\Http\Controllers;

use App\Repositories\Lock\LockRepository;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class LocksController extends BaseController
{
    /**
     * @var LockRepository
     */
    private $lockRepository;

    public function __construct(
        LockRepository $lockRepository
    ) {
        $this->lockRepository = $lockRepository;
    }

    public function get($id = 0, Request $request)
    {
        $error = false;
        $data  = [
            'id'      => 1,
            'locked'  => true,
            'ownerId' => 0,
        ];

        if ($error) {
            return response()
                ->json(['error' => 'Unauthorized'], 401);
        }

        return response()
            ->json($data);
    }

    public function post(Request $request)
    {
        $data = $request->post();
    }

    public function put($id = 0, Request $request)
    {
        $id   = (int)$id;
        $data = $request->input();
    }

    public function delete($id = 0)
    {
    }

    public function list()
    {
        return view('auth.login', $data = [
            'title' => 'Page title',
        ]);
    }

}
