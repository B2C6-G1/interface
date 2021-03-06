<?php

namespace App\Repositories;

use App\Interfaces\ExternalApiInterface;

class BaseExternalApiRepository implements ExternalApiInterface
{
    /**
     * The resource this repository interacts with.
     * 
     * @var string
     */
    protected string $resource;

    /**
     * The endpoints associated with the resource.
     * 
     * @var array
     */
    protected array $endpoints;

    /**
     * The BaseExternalApiRepository constructor.
     * 
     * @param string $resource
     */
    public function __construct(string $resource)
    {
        if(!$this->isSupportedResource($resource)) {
            throw new \InvalidArgumentException('External api resource unsupported.');
        }

        $this->resource = $resource;
        $this->registerResourceEndpoints();
    }

    /**
     * Check if a resource is supported.
     * 
     * @param string $resource
     * @return bool
     */
    protected function isSupportedResource(string $resource) : bool
    {
        return in_array($resource, config('endpoints.supported'));
    }

    /**
     * Register the resource endpoints.
     * 
     * @return void
     */
    protected function registerResourceEndpoints() : void
    {
        $this->endpoints = config('endpoints.' . $this->resource);
    }

    /**
     * Construct an endpoint url.
     * 
     * @param array $components
     */
    protected function makeUrl(array $components)
    {
        return implode("", $components);
    }
}