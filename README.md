**Обертка для MoySklad JSON API на php**

1. Создайте экземпляр класса ApiClient
2. Укажите username and password.

**Пример кода**

`
$api = new \MadiyarRakhman\MoySklad\ApiClient($uername, $password);
$builder = new \MadiyarRakhman\MoySklad\Builder\EndpointBuilder($api);
$list = $builder->customerOrder()->getList($query);
$object = $builder->customerOrder()->get($id, $query);
`