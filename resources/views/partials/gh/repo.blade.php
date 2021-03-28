<div class="p-4">
	<h3>Search Results ({{ $responses['total_count'] ?? 0 }})</h3>

	<div class="flex flex-col">
		<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
			<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
				<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
					<table class="min-w-full divide-y divide-gray-200">
		          		<thead class="bg-gray-50">
		            		<tr>
		              			<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
		                			Name
		              			</th>
		              			<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
		                			Link
		              			</th>
		            		</tr>
		          		</thead>
		          		<tbody class="bg-white divide-y divide-gray-200">
			          		@forelse($responses['items'] as $item)
					    		<tr>
					    			<td class="px-6 py-4 whitespace-nowrap">
					    				<div class="flex items-center">
						                  <div class="flex-shrink-0 h-10 w-10">
						                    <img class="h-10 w-10 rounded-full" src="{{ $item['owner']['avatar_url'] }}" alt="{{ $item['owner']['login'] }}">
						                  </div>
						                  <div class="ml-4">
						                    <div class="text-sm font-medium text-gray-900">
						                      {{ $item['owner']['login'] }}
						                    </div>
						                    <div class="text-sm text-gray-500">
						                      {{ $item['owner']['html_url'] }}
						                    </div>
						                  </div>
						                </div>
						              </td>
					    				
					    			</td>
					    			<td class="px-6 py-4 whitespace-nowrap">
					    				<a href="{{ $item['html_url'] }}" target="_blank">
					    					{{ $item['name'] }}
					    				</a>
					    			</td>
					    		</tr>
						    @empty
						    	<tr>
						    		<td colspan="2" class="text-center px-6 py-4 whitespace-nowrap">
						    			No results found.
						    		</td>
						    	</tr>
						    @endforelse
				    	</tbody>
		        	</table>
				</div>
			</div>
		</div>
    </div>
</div>