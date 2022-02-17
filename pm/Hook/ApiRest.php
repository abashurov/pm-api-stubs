<?php
// Copyright 1999-2021. Plesk International GmbH. All rights reserved.
/**
 * Hook for embedding Swagger schema into the UI
 *
 * @package Plesk_Modules
 * @since 18.0.41
 */
abstract class pm_Hook_ApiRest implements pm_Hook_Interface
{

    
    abstract public static function getSwaggerSchemaUrl(): string;

}
