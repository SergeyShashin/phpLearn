<?php

/**
 * Created by ...........
 * ......................
 * ......................
 */

namespace Core\Base;

/**
 * Класс модели для валидации и упрощения загрузки данных
 * 
 * @package core\base
 */
abstract class Model extends BaseObject
{
  /**
   * @var array ошибки в полях модели
   */
  public $errors = [];

  /**
   * Инициализация модели и атрибутов по умолчанию
   * 
   * @param array|null $attributes
   */
  public function __construct($attributes = null)
  {
    if (!is_null($attributes)) {
      foreach ($attributes as $attr => $value) {
        $this->{$attr} = $value;
      }
    }
  }

  /**
   * Загружает автоматически все атрибуты модели из $request по названию ключа
   * 
   * @param array $request 
   * 
   * @return bool 
   */
  public function load($request)
  {
    if (isset($request[self::modelName()])) {
      $data = $request[self::modelName()];
      foreach ($data as $attr => $value) {
        $this->{$attr} = $value;
      }

      return true;
    }

    return false;
  }

  /**
   * Возвращает имя класса модели для использования в методах
   * 
   * @return mixed
   */
  protected static function modelName()
  {
    $namespaces = explode('\\', static::class);
    $className = array_pop($namespaces);

    return $className;
  }

  /**
   * Добавление ошибки на указанный атрибут
   * 
   * @param string $attribute
   * @param string $message
   */
  public function addError($attribute, $message)
  {
    $this->errors[$attribute] = $message;
  }
}
