<x-layout>
	<style>
		table, tr, td, th { 
			border: 1px dashed black;
		}
	</style>
	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Surname</th>
			<th>Balance</th>
		</tr>
		@foreach ($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->surname }}</td>
				<td>{{ $user->balance }}</td>
				<td>{{ $user->title }}</td>
			</tr>
		@endforeach
	</table>
</x-layout>