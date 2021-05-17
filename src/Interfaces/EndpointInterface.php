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

    /**
     * @param \App\Interfaces\ModelInterface $model
     * @return mixed
     */
    public function create(ModelInterface $model);

    /**
     * @param string $id
     * @param \App\Interfaces\ModelInterface $model
     * @return mixed
     */
    public function update(string $id, ModelInterface $model);

    /**
     * @param string $id
     * @return mixed
     */
    public function delete(string $id);
}