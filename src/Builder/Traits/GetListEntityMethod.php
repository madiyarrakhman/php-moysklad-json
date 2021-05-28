<?php


namespace App\Builder\Traits;


use GuzzleHttp\Exception\GuzzleException;

trait GetListEntityMethod
{
    /**
     * @param array|null $query
     * @return mixed
     * @throws GuzzleException
     */
    public function getList(array $query = null)
    {
        $response = $this->request('GET', $this->endpoint, ['query' => $query]);
        return $this->deserialize($response->getBody()->getContents(), $this->entityListClass);
    }
}