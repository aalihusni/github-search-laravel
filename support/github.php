<?php 

if(! function_exists('gh')) {
	/**
	 * GitHub API Helpers
	 */
	function gh()
	{
		return \App\Services\GitHub::make();
	}
}