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
     * The BaseExternalApiRepository constructor.
     * 
     * @param string $resource
     */
    public function __construct(string $resource)
    {
        if(!$this->isSupportedResource($resource)) {
            throw new InvalidArgumentException('External api resource unsupported.');
        }

        $this->resource = $resource;
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
}