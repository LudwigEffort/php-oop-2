<?php 

//include_once __DIR__ . '/traits/ProductSeason.php';

class Product {
    private string $id;
    private string $name;
    private string $category;
    private string $description;
    private int $availability;
    private int $price;
    
    use Season;
    
}



