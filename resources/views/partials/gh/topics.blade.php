<div class="p-4">
	<h3>Search Results ({{ $responses['total_count'] ?? 0 }})</h3>

	<div class="flex flex-col">
		<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
			<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
				<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
					<ul class="divide-y divide-gray-200">
		          		@forelse($responses['items'] as $item)
				    		<li class="relative bg-white py-5 px-4 hover:bg-gray-50 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
							    <div class="flex justify-between space-x-3">
							      <div class="min-w-0 flex-1">
							        <a href="#" class="block focus:outline-none">
							          <span class="absolute inset-0" aria-hidden="true"></span>
							          <p class="text-sm font-medium text-gray-900 truncate">{{ isset($item['created_by']) ? $item['created_by'] : 'Anon' }}</p>
							          <p class="text-sm text-gray-500 truncate">{{ $item['display_name'] ?? 'Anon' }}</p>
							        </a>
							      </div>
							      <time datetime="{{ $item['created_at'] }}" class="flex-shrink-0 whitespace-nowrap text-sm text-gray-500">
							      	{{ \Carbon\Carbon::parse($item['created_at'])->diffForHumans() }}
							      </time>
							    </div>
							    <div class="mt-1">
							      <p class="line-clamp-2 text-sm text-gray-600">
							        {{ $item['description'] }}
							      </p>
							      	<div class="mt-4">
								      <h4 class="font-extrabold">Raw</h4>
								      <p class="code">
								      	{!! json_encode($item) !!}
								      </p>
								    </div>
							    </div>
							  </li>
					    @empty
					    	<li>
					    		<span colspan="2" class="text-center px-6 py-4 whitespace-nowrap">
					    			No results found.
					    		</span>
					    	</li>
					    @endforelse
					</ul>
				</div>
			</div>
		</div>
    </div>
</div>