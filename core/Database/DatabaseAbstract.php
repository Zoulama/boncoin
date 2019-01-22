<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 19:43
 */

namespace Core\Database;

use Core\Providers\Provider;


class DatabaseAbstract implements \IteratorAggregate, \ArrayAccess
{
    use Provider;

    /**
     * Database constructor.
     */
    protected function __construct()
    {
        // Selectionne le driver de la base de donnees dans le fichier de config
        call_user_func_array([$this, \config()], [null]);
    }

    // foreach results
    public function getIterator()
    {
        $o = new \ArrayObject($this->_results);
        return $o->getIterator();
    }

    function config($path = '')
    {
        $config = include(dirname(__FILE__) . '/database.php');
        if(strpos($path, ".") !== false)
            $path = explode(".", $path);

        if(is_array($path) && count($path))
        {
            foreach ($path as $setting)
            {
                if (isset($config[$setting]))
                {
                    $config = $config[$setting];
                }
            }

            return $config;
        }
        else
        {

            if(isset($config[$path]))
                return $config[$path];
            $configValue = isset($config['connections']['default'][$path]) ?
                $config['connections']['default'][$path] : null;
            if($path)
            {
                if(!is_null($configValue))
                {
                    return $configValue;
                }
            }
        }

        return $config['connections'];
    }

    /**
     * @param $offset
     * @return $this
     */
    public function offset($offset)
    {
        $this->_query .=" OFFSET " .$offset;
        return $this;
    }
    /**
     * DB::error()
     * return _error variable
     * @return bool
     */
    public function error()
    {
        return $this->_error;
    }
    /**
     * set _table var value
     * @param  string $table the table name
     * @return object - DBContent
     */
    public function table($table)
    {
        $this->_table = $table;
        return $this;
    }

    public function results()
    {
        return $this->_results;
    }
    /**
     * Join's
     */
    /**
     * make join between tables
     * @param string $table
     * @param array $condition
     * @param string $join
     * @return $this
     */
    /**
     * Whether a offset exists
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     * @since 5.0.0
     */
    public function offsetExists($offset)
    {
        return isset($this->_results[$offset]);
    }
    /**
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
        return $this->_results[$offset];
    }

    /**
     * Offset to set
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetSet($offset, $value)
    {
        if (isset($this->_results[$offset]))
        {
            if(!is_null($this->_newValues))
                $this->_newValues[$offset] = $value;
            else
            {
                $this->_newValues = [];
                $this->_newValues[$offset]= $value;
            }
        }
    }
    /**
     * Offset to unset
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetUnset($offset)
    {
        return null;
    }
}