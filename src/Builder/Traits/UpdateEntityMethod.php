<?php


namespace MadiyarRakhman\MoySklad\Builder\Traits;


trait UpdateEntityMethod
{
    public function update($id, $data)
    {
        $response = $this->request('PUT', "{$this->endpoint}/$id", ['body' => $this->serialize($data)]);
        return $this->deserialize($response->getBody()->getContents(), $this->entityClass);
    }
}