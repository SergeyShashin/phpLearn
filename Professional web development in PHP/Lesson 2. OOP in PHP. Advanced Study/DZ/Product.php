<?php

/**
 * 
 */
abstract class Product
{
  public $idProduct;
  public $nameProduct;
  public $nameForPrintProduct;
  public $quantityProduct;
  public $vendorCodeProduct; //артикул
  public $barcodeProduct; //штрихкод
  public $qrCodeProduct; //qr код
  public $descriptionProduct;
  public $linksToImagesProduct;
  public $unitProduct; //еденица измерения
  public $priceProduct;
  public $manufacturerProdcut; //производители
  public $vendorProdcut; //поставщики
  public $idCategoryProduct;
  public $nameCategoryProduct;
  public $typeProduct; //запас, услуга

  function __construct(string $nameProduct, $quantityProduct)
  {
    $this->nameProduct = $nameProduct;
    $this->quantityProduct = $quantityProduct;
  }

  function getSumProduct()
  {
    return $this->nameProduct * $this->quantityProduct;
  }
}
