<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 21:12
 */

/**
 * Path du dossier racine public
 *
 * @param string|null $file
 * @return mixed
 */
function public_path(string $file = null)
{
    if ($file) {
        return dirname(dirname(dirname(__FILE__))).'/www'.'/'.$file;
    }

    return dirname(dirname(dirname(__FILE__))).'/www';
}

/**
 * Path du dossier racine qui contient toute l'application
 *
 * @param string|null $file
 * @return mixed
 */
function base_path(string $file = null)
{
    if ($file) {
        return dirname(dirname(dirname(__FILE__))).'/'.$file;
    }

    return dirname(dirname(dirname(__FILE__)));
}
