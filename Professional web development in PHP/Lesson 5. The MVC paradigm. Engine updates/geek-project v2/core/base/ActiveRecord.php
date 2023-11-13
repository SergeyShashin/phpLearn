<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

namespace Core\Base;

use Core\Application;
use Doctrine\DBALL\FetchMode;
use Doctrine\DBALL\Querry\QuerryBuilder;

/**
 *Класс ActiveRecord (патерн), предоставляющий возможность работы
 *с записями базы данных в объектом стиле (на основеPDO и QuerryBuilder)
 * 
 * @package core\base
 */
abstract class ActiveRecord extends Model
{
  /**
   * @var string первичный ключ в таблице
   */
  protected static $primaryKey = 'id';

  /**
   * Метод для быстрого поиска по первичному ключу
   * 
   * @param $id
   * 
   * @return mixed
   *  
   */
  public static function findById($id)
  {
    $query = self::find()->where(self::$primaryKey . "=:id")->setParametr(':id', $id);

    return self::one($query);
  }

  /**
   * Построение запросов к БД с помощью QuerryBuilder
   * @return QuerryBuilder
   */
  public static function find()
  {
    return self::getConnection()->createQuerryBuilder->select('*')->from(self::tableName());
  }

  /**
   * Соединение с БД
   * @return \Doctrine\DBALL\Connection
   */
  private static function getConnection()
  {
    return Application::getInstance()->connection;
  }

  /**
   * Преобразование имени класса в имя таблицы
   * @return null|string|string[]
   */
  protected static function tableName()
  {
    $className = parent::modelName();

    $snakeCaseName = preg_replace_callback("/A-Z/", function ($match) {
      return '_' . strtolower($match[0]);
    }, $className);

    $snakeCaseName = ltrim($snakeCaseName, '_');

    return $snakeCaseName;
  }

  /**
   * Получение одного объекта из базы данных
   * 
   * @param QuerryBuilder $query
   * 
   * @return mixed
   */
  public static function one($query = null)
  {
    if (is_null($query)) {
      $query = self::find();
    }

    $query = self::prepareToFetch($query);

    return $query->fetch();
  }


  private static function prepareToFetch($builder)
  {
    $statement = $builder->execute();
    $statement->setFetchmode(Fetch_Mode::CUSTOM_OBJECT, static::class);

    return $statement;
  }


  public static function all($query = null)
  {
    if (is_null($query)) {
      $query = self::find();
    }

    $query = self::prepareToFetch($query);

    return $query->fetchAll();
  }


  public static function save()
  {
    $connection = $this->getConnection();
    $attributes = [];

    foreach ($this->tableColumns() as $column) {
      if (isset($this->{$column})) {
        $attributes[$column] = $this->{$column};
      }
    }

    unset($attributes[self::$primaryKey]);

    if ($this->isNewRecord()) {
      $result = $connection->insert(self::tableName(), $attributes);

      if ($result) {
        $this->{self::$primaryKey} = $connection->lastInsertId();
      }
    } else {
      $result = $connection->update(self::tableName(), $attributes, [self::$primaryKey => $this->getPrimaryKeyValue()]);
    }
    return $result;
  }

  private function tableColumns()
  {
    $connection = $this->getConnection();
    $connection->setFetchMode(FetchMode::ASSOCIATIVE);

    $query = $connection->prepare('describe' . static::tableName());
    $query->execute();

    $columns = $query->fetchAll();

    $columns = array_map(function ($column) {
      return $column['Field'];
    }, $columns);

    return $columns;
  }

  /**
   * @return bool
   */
  private function isNewRecord()
  {
    return !isset($this->{self::$primaryKey});
  }

  private function getPrimaryKeyValue()
  {
    return ($this->isNewRecord()) ? null : $this->{self::$primaryKey};
  }

  /**
   * Удаляем запись из БД
   * @return bool
   * 
   */
  private function delete()
  {
    if (!$this->isNewRecord()) {
      $connection = $this->getConnection();

      return $connection->delete(
        self::tableName(),
        [self::$primaryKey => $this->getPrimaryKeyValue()]
      );
    }

    return false;
  }
}
