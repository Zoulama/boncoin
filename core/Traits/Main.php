<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 21:12
 */

namespace Core\Traits;

trait Main
{
	use Query;
	use Insert;
	use Update;
	use Paginate;
}