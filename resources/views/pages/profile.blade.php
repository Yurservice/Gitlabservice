<x-main-layout>
	<x-slot name="title">Gitlab service: check your projects</x-slot>
	<x-slot name="description">Gitlab service is an online service, wich can show you your gitlabs projects</x-slot>
	<x-slot name="center">
		<div id="kroshki">
			&nbsp;&nbsp; Main	
		</div>
		<main>
			<div id="profile_wrap">
				<p>Hello, {{ auth()->user()->name }}</p>
				@if(!empty($projects))
				<p>There are your projects on Gitlab:</p>
				<div id='projects_box'>
					@foreach ($projects as $project)
					<div>
						<p>Project name: {{ $project['name'] }}</p>
						<p>Project id: {{ $project['id'] }}</p>
						<p>Date of сreation: @php echo substr($project['created_at'], 0, strpos($project['created_at'], 'T'));@endphp</p>
					</div>
					@endforeach
				</div>
				@else
				<p>You don't have any projects on github yet.</p>
				@endif
			</div>
			
		</main>	
	</x-slot>
</x-main-layout>