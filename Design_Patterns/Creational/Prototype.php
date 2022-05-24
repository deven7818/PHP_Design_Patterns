<?php
abstract class Shape {
	public $id;
	public $type;
	
	function __construct() {}
	
	public function getType(): string {
		return $this->type;
	}
	
	public function getId(): int {
		return $this->id;
	}
	
	public function setId(int $id): void {
		$this->id = $id;
	}
	
	abstract public function draw(): void;
}

class Triangle extends Shape {
	function __construct() {
		parent::__construct();
		$this->type = "Triangle";
	}
	
	public function draw(): void {
		echo "Inside Triangle::draw() method.";
	}
}

class Square extends Shape {
	function __construct() {
		parent::__construct();
		$this->type = "Square";
	}
	
	public function draw(): void {
		echo "Inside Square::draw() method.";
	}
 }

class Circle extends Shape {
	function __construct() {
		parent::__construct();
		$this->type = "Circle";
	}
	
	public function draw(): void {
		echo "Inside Circle::draw() method.";
	}
}

class ShapeCache {
	function __construct() {
		$this->shapeMap = [];
	}
	
	public function getShape(int $shapeId): object {
		$shapeCache = $this->shapeMap[$shapeId];
		return $shapeCache;
	}
	
	public function loadCache(): void {
		$circle = new Circle();
		$circle->setId(1);
		$this->shapeMap[$circle->getId()] = $circle;

        $triangle = new Triangle();
		$triangle->setId(2);
		$this->shapeMap[$triangle->getId()] = $triangle;
		
		$square = new Square();
		$square->setId(3);
		$this->shapeMap[$square->getId()] = $square;
		
		
	}
}

$shapeCache = new ShapeCache();
$shapeCache->loadCache();

$clonedShape = $shapeCache->getShape(1);
echo "Shape : " . $clonedShape->type . " \n";
$clonedShape2 = $shapeCache->getShape(2);
echo "Shape : " . $clonedShape2->type . " \n";
$clonedShape3 = $shapeCache->getShape(3);
echo "Shape : " . $clonedShape3->type . " \n";
?>