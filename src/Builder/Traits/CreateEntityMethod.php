<?php


namespace App\Builder\Traits;


trait CreateEntityMethod
{
    public function create($data)
    {
        $response = $this->request('POST', $this->endpoint, ['body' => $this->serialize($data)]);
        return $this->deserialize($response->getBody()->getContents(), $this->entityClass);
    }
}