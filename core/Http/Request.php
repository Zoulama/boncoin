<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 21:32
 */

namespace Core\Http;

/**
 * Request
 */
class Request
{
    /**
     * @param string $method - Méthode passé en paramètre
     * @return bool - True si request method est égal à method passé en paramètre
     */
    public static function isMethod(string $method): bool
    {
        return self::getMethod() === strtoupper($method);
    }

    /**
     * @return string - Méthode utilisée pour accéder à la page. 'GET', 'POST', 'PUT', 'PATCH', 'DELETE'...
     */
    public static function getMethod()
    {
        $methodPost = strtoupper(Input::post('_method'));

        if (Input::hasPost('_method') && (in_array($methodPost, ['PUT', 'PATCH', 'DELETE']))) {
            return $methodPost;
        }

        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * @return string - L'URI qui a été fourni pour accéder à cette page
     */
    public static function getRequestUri()
    {
        return $_SERVER['REQUEST_URI'];
    }
}
