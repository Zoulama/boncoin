<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 21:46
 */

namespace Core\Contracts\Routing;

interface RouterInterface
{
    /**
     * Singleton
     *
     * @return mixed
     */
    public static function getInstance();

    /**
     * Ajouter une route
     *
     * @param string $path
     * @param string $action
     */
    public function add(string $path, string $action);

    /**
     * Executer le Routing
     *
     * @return mixed
     */
    public function run();
}
