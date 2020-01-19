<?php

namespace App\Model;

class Car
{
    public const NAMES = [
        'Škoda Octavia Combi',
        'Škoda Octavia',
        'Mazda 3 sedan',
        'Audi A3 sportback',
        'Range Rover',
        'Nissan Qashqai',
        'Seat Ateca',
        'BMW 225xe',
    ];

    public const SLUGS = [
        'skoda-octavia-combi',
        'skoda-octavia',
        'mazda-3-sedan',
        'skoda-octavia-combi',
        'skoda-octavia-combi',
        'skoda-octavia-combi',
        'skoda-octavia-combi',
        'skoda-octavia-combi',
    ];
    /**
     * @var int
     */
    private $id;

    public static function fromId(int $id): self
    {
        return new self($id);
    }

    public static function fromSlug(string $slug): self
    {
        $id = array_search($slug, self::SLUGS);
        return new self($id);
    }

    private function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return self::NAMES[$this->id];
    }

    public function getSlug(): string
    {
        return self::SLUGS[$this->id];
    }

    public function getSmallImageUrl(): string
    {
        return '/img/car' .  $this->id . '.jpg';
    }

    public function getFullImageUrl(): string
    {
        return '/img/car' .  $this->id . '.jpg';
    }
}