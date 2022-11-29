<x-layout>
	<style>
		table, tr, td, th { 
			border: 1px dashed black;
            text-align: center;
		}
        .left {
            text-align: left;
        }
	</style>
	<table>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Description</th>
			<th>Director</th>
			<th>Created_at</th>
			<th>Poster</th>
		</tr>
        @foreach ($films as $film)
			<tr>
				<td>{{ $film->id }}</td>
				<td class="left">{{ $film->title }}</td>
				<td class="left">{{ $film->desc }}</td>
				<td>{{ $film->director }}</td>
				<td>{{ $film->created_at }}</td>
				<td>{{ $film->poster }}</td>
			</tr>
        @endforeach
	</table>
</x-layout>