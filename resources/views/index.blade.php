<!DOCTYPE html>
<html>
<head>
	<title>Buku</title>
<link rel="stylesheet" type="text/css" href="{{url('css/datatables.bootstrap.css')}}">
</head>

<body>


	<table class="table" id="table-buku">
		<thead>
			<tr>
				<td>ID</td>
				<td>Judul</td>
				<td>Penulis</td>
				<td>Deskripsi</td>
				<td>Kategoriiiii</td>
			</tr>
		</thead>
	</table>
	
    <script src="{{url('js/jquery.min.js')}}" ></script>
    <!-- ini untuk bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" ></script>
	<script src="{{url('js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript">
    $(function() {
        var oTable = $('#table-buku').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url("/data-buku") }}'
            },
            columns: [
            {data: 'id_buku', name: 'id_buku'},
            {data: 'judul', name: 'judul'},
            {data: 'penulis', name: 'penulis'},
            {data: 'deskripsi', name: 'deskripsi', orderable: false},
            {data: 'kategori', name: 'kategori', orderable: false, searchable: false},
        ],
        });
    });
</script>
</body>
</html>