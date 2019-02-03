<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
<table style="width:100%">
   <tr>
    <th>Nama:</th>
    <th>Email:</th> 
    <th>Pekerjaan:</th>
	<th>Edit</th>
	<th>Delete</th>
  </tr>
	@foreach ($all_customer as $customer)
	  <tr>
		<td>{{ $customer->name }}</td>
		<td>{{ $customer->email }}</td> 
		<td>{{ $customer->occupation }}</td> 
		<td><a href ="{{route(('edit'),  $customer->id )}}" >Edit</a></td>
		<td><a href ="{{route(('delete'),  $customer->id)}}" >Delete</a></td>
	  </tr>
	@endforeach

</table>