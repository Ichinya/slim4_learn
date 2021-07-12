<?php


use Illuminate\Support\Collection;

class FactoryMakeOrCreate
{
    public string $model;
    public int $count;
    /** @var mixed $defaultAttributes */
    public $defaultAttributes;

    public function __construct($model, $count, $defaultAttributes)
    {
        $this->model = $model;
        $this->count = $count;
        $this->defaultAttributes = $defaultAttributes;
    }

    public static function options(...$arguments): FactoryMakeOrCreate
    {
        return new static (...$arguments);
    }

    public function create($attributes = []): Collection
    {
        $model = $this->model;
        $default = $this->defaultAttributes;

        $created = collect([]);

        for ($creating = 1; $creating <= $this->count; $creating++) {
            $created->push(
                $model::forceCreate(
                    array_merge($default(Faker\Factory::create()), $attributes)
                )
            );
        }

        return $created;
    }

    public function make($attributes = []): Collection
    {
        $model = $this->model;
        $default = $this->defaultAttributes;

        $made = collect([]);

        for ($making = 1; $making <= $this->count; $making++) {
            $made->push(
                $model::make(
                    array_merge($default(Faker\Factory::create()), $attributes)
                )
            );
        }

        return $made;
    }
}
