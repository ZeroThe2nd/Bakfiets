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

}
