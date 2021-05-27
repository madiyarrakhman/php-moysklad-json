<?php


namespace App\Interfaces;

/**
 * Interface EndpointInterface
 * @package App\Interfaces
 */
interface EndpointInterface
{
    /**
     * @param string $id
     * @param array|null $query
     * @return mixed
     */
    public function get(string $id, array $query = null);

    /**
     * @param array|null $query
     * @return mixed
     */
    public function getList(array $query = null);
}