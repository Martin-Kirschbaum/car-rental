<?php

namespace App\Model;

class Car
{
    public const CARS = [
        'skoda-octavia-combi' => [
            'name' => 'Škoda Octavia Combi',
            'image' => 'car0.jpg',
            'power' => 96,
            'autoTransmission' => true,
            'drivenKm' => 2358,
            'fuel' => 'benzín',
            'price' => '30',
            'carBrand' => 'ŠKODA',
            'carModel' => 'OCTAVIA',
            'carBodywork' => 'combi',
            'fabricationDate' => '2019',
        ],
        'skoda-octavia' => [
            'name' => 'Škoda Octavia',
            'image' => 'car1.jpg',
            'power' => 82,
            'autoTransmission' => false,
            'drivenKm' => 18275,
            'fuel' => 'diesel',
            'price' => '30',
            'carBrand' => 'ŠKODA',
            'carModel' => 'OCTAVIA',
            'carBodywork' => 'combi',
            'fabricationDate' => '2019',
        ],
        'mazda-3-sedan' => [
            'name' => 'Mazda 3 sedan',
            'image' => 'car2.jpg',
            'power' => 90,
            'autoTransmission' => true,
            'drivenKm' => 7566,
            'fuel' => 'benzín',
            'price' => '30',
            'carBrand' => 'ŠKODA',
            'carModel' => 'OCTAVIA',
            'carBodywork' => 'combi',
            'fabricationDate' => '2019',
        ],
        'audi-A3-sportback' => [
            'name' => 'Audi A3 sportback',
            'image' => 'car3.jpg',
            'power' => 110,
            'autoTransmission' => false,
            'drivenKm' => 5449,
            'fuel' => 'benzín',
            'price' => '30',
            'carBrand' => 'ŠKODA',
            'carModel' => 'OCTAVIA',
            'carBodywork' => 'combi',
            'fabricationDate' => '2019',
        ],
        'range-rover' => [
            'name' => 'Range Rover',
            'image' => 'car4.jpg',
            'power' => 410,
            'autoTransmission' => true,
            'drivenKm' => 9750,
            'fuel' => 'benzín',
            'price' => '30',
            'carBrand' => 'ŠKODA',
            'carModel' => 'OCTAVIA',
            'carBodywork' => 'combi',
            'fabricationDate' => '2019',
        ],
        'nissan-qashqai' => [
            'name' => 'Nissan Qashqai',
            'image' => 'car5.jpg',
            'power' => 104,
            'autoTransmission' => true,
            'drivenKm' => 12985,
            'fuel' => 'benzin',
            'price' => '30',
            'carBrand' => 'ŠKODA',
            'carModel' => 'OCTAVIA',
            'carBodywork' => 'combi',
            'fabricationDate' => '2019',
        ],
        'seat-ateca' => [
            'name' => 'Seat Ateca',
            'image' => 'car6.jpg',
            'power' => 140,
            'autoTransmission' => true,
            'drivenKm' => 24851,
            'fuel' => 'benzin',
            'price' => '30',
            'carBrand' => 'ŠKODA',
            'carModel' => 'OCTAVIA',
            'carBodywork' => 'combi',
            'fabricationDate' => '2019',
        ],
        'bmw-225xe' => [
            'name' => 'BMW 225xe',
            'image' => 'car7.jpg',
            'power' => 100,
            'autoTransmission' => true,
            'drivenKm' => 13439,
            'fuel' => 'benzin',
            'price' => '30',
            'carBrand' => 'ŠKODA',
            'carModel' => 'OCTAVIA',
            'carBodywork' => 'combi',
            'fabricationDate' => '2019',
        ],
    ];

    /**
     * @var string
     */
    private $id;

    public static function getAll(): array
    {
        return array_map([self::class, 'fromId'], array_keys(self::CARS));
    }

    public static function fromId(string $id): self
    {
        return new self($id);
    }

    private function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return self::CARS[$this->id]['name'];
    }

    public function getSmallImageUrl(): string
    {
        return '/img/' .  self::CARS[$this->id]['image'];
    }

    public function getFullImageUrl(): string
    {
        return '/img/' .  self::CARS[$this->id]['image'];
    }

    public function getPower(): int
    {
        return self::CARS[$this->id]['power'];
    }

    public function hasAutomaticTransmission(): bool
    {
        return self::CARS[$this->id]['autoTransmission'];
    }

    public function getDrivenKm(): int
    {
        return self::CARS[$this->id]['drivenKm'];
    }

    public function getFuelType(): string
    {
        return self::CARS[$this->id]['fuel'];
    }

    public function getPrice(): int
    {
        return self::CARS[$this->id]['price'];
    }

    public function getCarBrand(): string
    {
        return self::CARS[$this->id]['carBrand'];
    }

    public function getCarModel(): string
    {
        return self::CARS[$this->id]['carModel'];
    }

    public function getCarBodywork(): string
    {
        return self::CARS[$this->id]['carBodywork'];
    }

    public function getFabricationDate(): int
    {
        return self::CARS[$this->id]['fabricationDate'];
    }
}