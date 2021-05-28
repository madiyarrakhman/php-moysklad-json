<?php


namespace MadiyarRakhman\MoySklad\Builder\Traits;


use MadiyarRakhman\MoySklad\Entity\AttributeEntity;
use MadiyarRakhman\MoySklad\Entity\MetaDataEntity;
use MadiyarRakhman\MoySklad\Entity\StateEntity;

trait GetMetaDataEntity
{
    public function getMetaData(array $query = [])
    {
        $query['expand'] = 'attributes';
        $response = $this->request('GET', "{$this->endpoint}/metadata", ['query' => $query]);
        return $this->deserialize($response->getBody()->getContents(), MetaDataEntity::class);
    }

    public function getStateById(string $id)
    {
        $response = $this->request('GET', "{$this->endpoint}/metadata/states/$id", []);
        return $this->deserialize($response->getBody()->getContents(), StateEntity::class);
    }

    public function getAttributeById(string $id)
    {
        $response = $this->request('GET', "{$this->endpoint}/metadata/attributes/$id", []);
        return $this->deserialize($response->getBody()->getContents(), AttributeEntity::class);
    }
}