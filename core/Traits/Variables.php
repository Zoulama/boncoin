<?php
/**
 * Created by PhpStorm.
 * User: zoulamambour
 * Date: 2019-01-18
 * Time: 21:12
 */

namespace Core\Traits;

trait Variables
{
	/**
	 * @var $_instance object
	 * store DB Objet de classe permettant une connexion avec la base de données (pas  duplication)
	 * @access private
	 */
	private static $_instance;

	private
		/**
		 *  @var  string $_query  store sql statement
		 */
		$_query = '',
		/**
		 *  @var int $_count  nombre de ligne retourné
		 */
		$_count,
		/**
		 *  @var bool $_error  si pas de resultats = true otherwise = false
		 */
		$_error = false,
		/**
		 *  @var string $_schema  Requête SQL DD
		 */
		$_schema,
		/**
		 *  @var string $_where  where type to using by default = WHERE
		 */
		$_where = "WHERE",
		/**
		 *  @var string $_sql  save query string
		 */
		$_sql,
		/**
		 *  @var integer $_colsCount  nombre de colonnes pour les résultats de la requête
		 * using into dataView() méthode pour générer des colonnes
		 */
		$_colsCount = -1,
		/**
		 * @var null $_newValues  pour enregistrer une nouvelle valeur pour utiliser la méthode save ()
		 */
		$_newValues = null,

		$_ordering = false;

	protected
		/**
		 *  @var $_pdo object PDO object
		 */
		$_pdo,
		/**
		 * @var string $_table nom de la table courante
		 */
		$_table,
		/**
		 * @var array $_results  resultats de la requête
		 */
		$_results,
		/**
		 * @var string|null $_idColumn  id nom de colonne pour la table en cours par défaut est id
		 */
		$_idColumn = "id";
}