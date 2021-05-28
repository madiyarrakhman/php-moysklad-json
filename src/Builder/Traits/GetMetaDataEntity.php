<?php


namespace CosmoStar\MoySklad\Builder\Traits;


use CosmoStar\MoySklad\Entity\AttributeEntity;
use CosmoStar\MoySklad\Entity\AttributeListEntity;
use CosmoStar\MoySklad\Entity\MetaDataEntity;
use CosmoStar\MoySklad\Entity\StateEntity;

trait GetMetaDataEntity
{
    public function getMetaData(array $query = [])
    {
        $query['expand'] = 'attributes';
        $response = $this->request('GET', "{$this->endpoint}/metadata", ['query' => $query]);
        return $this->deserialize($response->getBody()->getContents(), MetaDataEntity::class);
    }

    public function getAttributes()
    {
        $response = $this->request('GET', "{$this->endpoint}/metadata/attributes", []);
        return $this->deserialize($response->getBody()->getContents(), AttributeListEntity::class);
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