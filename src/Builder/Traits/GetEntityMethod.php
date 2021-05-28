<?php


namespace CosmoStar\MoySklad\Builder\Traits;


use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\VarDumper\VarDumper;

trait GetEntityMethod
{
    /**
     * @param string $id
     * @param array|null $query
     * @return mixed
     */
    public function get(string $id, array $query = null)
    {
        $response = $this->request('GET', "{$this->endpoint}/$id", ['query' => $query]);
        return $this->deserialize($response->getBody()->getContents(), $this->entityClass);
    }
}