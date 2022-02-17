<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
namespace Plesk\SDK\Middleware\Server;
/**
 * Validates that Plesk is initialized
 * @since 18.0.41
 */
class PleskInitialized implements \Psr\Http\Server\MiddlewareInterface
{

    
    public function __construct(\Psr\Http\Message\ResponseFactoryInterface $factory) { }

    
    public function process(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Server\RequestHandlerInterface $handler): \Psr\Http\Message\ResponseInterface { }

}
