<?php

namespace Hello\Hello\Base;

use \Exception;
use \PDO;
use Hello\Hello\Tabellavuota as ChildTabellavuota;
use Hello\Hello\TabellavuotaQuery as ChildTabellavuotaQuery;
use Hello\Hello\Map\TabellavuotaTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'tabellavuota' table.
 *
 *
 *
 * @method     ChildTabellavuotaQuery orderByIdKey($order = Criteria::ASC) Order by the id_key column
 * @method     ChildTabellavuotaQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildTabellavuotaQuery orderBySurname($order = Criteria::ASC) Order by the surname column
 * @method     ChildTabellavuotaQuery orderByDescription($order = Criteria::ASC) Order by the description column
 *
 * @method     ChildTabellavuotaQuery groupByIdKey() Group by the id_key column
 * @method     ChildTabellavuotaQuery groupByName() Group by the name column
 * @method     ChildTabellavuotaQuery groupBySurname() Group by the surname column
 * @method     ChildTabellavuotaQuery groupByDescription() Group by the description column
 *
 * @method     ChildTabellavuotaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildTabellavuotaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildTabellavuotaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildTabellavuotaQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildTabellavuotaQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildTabellavuotaQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildTabellavuota findOne(ConnectionInterface $con = null) Return the first ChildTabellavuota matching the query
 * @method     ChildTabellavuota findOneOrCreate(ConnectionInterface $con = null) Return the first ChildTabellavuota matching the query, or a new ChildTabellavuota object populated from the query conditions when no match is found
 *
 * @method     ChildTabellavuota findOneByIdKey(int $id_key) Return the first ChildTabellavuota filtered by the id_key column
 * @method     ChildTabellavuota findOneByName(string $name) Return the first ChildTabellavuota filtered by the name column
 * @method     ChildTabellavuota findOneBySurname(string $surname) Return the first ChildTabellavuota filtered by the surname column
 * @method     ChildTabellavuota findOneByDescription(string $description) Return the first ChildTabellavuota filtered by the description column *

 * @method     ChildTabellavuota requirePk($key, ConnectionInterface $con = null) Return the ChildTabellavuota by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTabellavuota requireOne(ConnectionInterface $con = null) Return the first ChildTabellavuota matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTabellavuota requireOneByIdKey(int $id_key) Return the first ChildTabellavuota filtered by the id_key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTabellavuota requireOneByName(string $name) Return the first ChildTabellavuota filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTabellavuota requireOneBySurname(string $surname) Return the first ChildTabellavuota filtered by the surname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildTabellavuota requireOneByDescription(string $description) Return the first ChildTabellavuota filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildTabellavuota[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildTabellavuota objects based on current ModelCriteria
 * @method     ChildTabellavuota[]|ObjectCollection findByIdKey(int $id_key) Return ChildTabellavuota objects filtered by the id_key column
 * @method     ChildTabellavuota[]|ObjectCollection findByName(string $name) Return ChildTabellavuota objects filtered by the name column
 * @method     ChildTabellavuota[]|ObjectCollection findBySurname(string $surname) Return ChildTabellavuota objects filtered by the surname column
 * @method     ChildTabellavuota[]|ObjectCollection findByDescription(string $description) Return ChildTabellavuota objects filtered by the description column
 * @method     ChildTabellavuota[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class TabellavuotaQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Hello\Hello\Base\TabellavuotaQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Hello\\Hello\\Tabellavuota', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildTabellavuotaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildTabellavuotaQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildTabellavuotaQuery) {
            return $criteria;
        }
        $query = new ChildTabellavuotaQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildTabellavuota|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TabellavuotaTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = TabellavuotaTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildTabellavuota A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_key, name, surname, description FROM tabellavuota WHERE id_key = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildTabellavuota $obj */
            $obj = new ChildTabellavuota();
            $obj->hydrate($row);
            TabellavuotaTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildTabellavuota|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildTabellavuotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TabellavuotaTableMap::COL_ID_KEY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildTabellavuotaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TabellavuotaTableMap::COL_ID_KEY, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_key column
     *
     * Example usage:
     * <code>
     * $query->filterByIdKey(1234); // WHERE id_key = 1234
     * $query->filterByIdKey(array(12, 34)); // WHERE id_key IN (12, 34)
     * $query->filterByIdKey(array('min' => 12)); // WHERE id_key > 12
     * </code>
     *
     * @param     mixed $idKey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTabellavuotaQuery The current query, for fluid interface
     */
    public function filterByIdKey($idKey = null, $comparison = null)
    {
        if (is_array($idKey)) {
            $useMinMax = false;
            if (isset($idKey['min'])) {
                $this->addUsingAlias(TabellavuotaTableMap::COL_ID_KEY, $idKey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idKey['max'])) {
                $this->addUsingAlias(TabellavuotaTableMap::COL_ID_KEY, $idKey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabellavuotaTableMap::COL_ID_KEY, $idKey, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTabellavuotaQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabellavuotaTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the surname column
     *
     * Example usage:
     * <code>
     * $query->filterBySurname('fooValue');   // WHERE surname = 'fooValue'
     * $query->filterBySurname('%fooValue%', Criteria::LIKE); // WHERE surname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $surname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTabellavuotaQuery The current query, for fluid interface
     */
    public function filterBySurname($surname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($surname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabellavuotaTableMap::COL_SURNAME, $surname, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%', Criteria::LIKE); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildTabellavuotaQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TabellavuotaTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildTabellavuota $tabellavuota Object to remove from the list of results
     *
     * @return $this|ChildTabellavuotaQuery The current query, for fluid interface
     */
    public function prune($tabellavuota = null)
    {
        if ($tabellavuota) {
            $this->addUsingAlias(TabellavuotaTableMap::COL_ID_KEY, $tabellavuota->getIdKey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the tabellavuota table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TabellavuotaTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TabellavuotaTableMap::clearInstancePool();
            TabellavuotaTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(TabellavuotaTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(TabellavuotaTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            TabellavuotaTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            TabellavuotaTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // TabellavuotaQuery
