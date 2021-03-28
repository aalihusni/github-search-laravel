<?php

namespace App\Services;

use GrahamCampbell\GitHub\Facades\GitHub as Facade;

/**
 * GitHub API Services
 */
class GitHub
{
	public function __construct()
	{

	}

	public static function make()
	{
		return new self();
	}

	public function search($type, $term)
	{
		switch ($type) {
            case 'repositories':
            case 'repo':
                $responses = Facade::search()->repositories($term);
                break;
            case 'issues':
                $responses = Facade::search()->issues($term);
                break;
            case 'code':
                $responses = Facade::search()->code($term);
                break;
            case 'users':
                $responses = Facade::search()->users($term);
                break;
            case 'commits':
                $responses = Facade::search()->commits($term);
                break;
            case 'topics':
                $responses = Facade::search()->topics($term);
                break;
            
            default:
                $responses = [
                    'message' => 'Search Type Not Found'
                ];
                break;
        }

        return $responses;
	}
}