<!DOCTYPE html>
<html>

<head>
    <style>
        #table-1 {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table-1 td,
        #table-1 th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table-1 tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table-1 tr:hover {
            background-color: #ddd;
        }

        #table-1 th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <h2 class="center">Data Functions</h2>
    <table id="table-1" class="table table-hover table-bordered">
        <thead class="text-center">
          <tr>
            <th>Nomor</th>
            <th>Module Name</th>
            <th>Cost Total</th>
            <th>Price Total</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($modules as $module => $result)
          <tr class="text-center">
            <td>{{ $module + 1 }}</td>
            <td>{{ $result->module_Name }}</td>
            <td>
              {{ $result->module_Cost_Total}}
            </td>
            <td>
              {{ $result->module_Price_Total}}
            </td>
            <td>
              @if( $result->module_Status == 1)
              <span class="badge badge-danger">Waiting</span>
              @elseif( $result->module_Status == 2 )
              <span class="badge badge-success">On Progress</span>
              @else
              <span class="badge badge-primary">Finished</span>
              @endif
            </td>
        </tr>
    @endforeach
</tbody>
</table>


            
</body>

</html>