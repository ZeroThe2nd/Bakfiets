<?php namespace App\Repositories\Lock;

/**
 * Interface LockInterface
 *
 * @package App\Repositories\Lock
 */
interface LockInterface
{
    /**
     * @param int $id
     *
     * @return mixed
     */
    public function get($id);

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function post($data = []);

    /**
     * @param int   $id
     * @param array $data
     *
     * @return mixed
     */
    public function put($id, $data = []);

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function delete($id);
}