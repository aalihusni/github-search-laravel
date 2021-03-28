<?php

namespace App\Http\Livewire\Gh;

use Livewire\Component;

class Search extends Component
{
	public $type = '';

	public $term = '';

	public $responses;

    public function render()
    {
        return view('livewire.gh.search', [
        	'types' => $this->options(),
        ]);
    }

    public function mount()
    {
    	$this->type = 'repo';
    	$this->responses = [
    		'total_count' => 0,
    		'incomplete_results' => false,
    		'items' => [],
    	];
    }

    public function options()
    {
    	return [
    		'repo' => 'Repository',
			// 'issues' => 'Issue',
			// 'code' => 'Code',
			// 'users' => 'User',
			// 'commits' => 'Commit',
			'topics' => 'Topic',
    	];
    }

    public function search()
    {
    	$this->responses = gh()->search($this->type, $this->term);
        
    	if($this->responses) {
    		\App\Models\Search::create([
    			'type' => $this->type,
    			'term' => $this->term,
    			'responses' => $this->responses,
    		]);
    	}
    }
}
