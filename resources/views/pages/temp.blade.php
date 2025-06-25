<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- In your <head> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <!-- Before </body> -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
</head>

<body>
    <table id="manpowerTable" class="table table-bordered table-hover table-responsive-md align-middle">
        <thead class="table-dark">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Ref Code</th>
                <th>Type</th>
                <th>Rest Day</th>
                <th>From Agency</th>
                <th>Available</th>
                <th>Nationality</th>
                <th>Education</th>
                <th>English</th>
                <th>Experience</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($manpowers as $manpower)
                <tr>
                    <td>
                        @if ($manpower->image)
                            <img src="{{ asset('storage/' . $manpower->image) }}" alt="" width="60"
                                class="rounded">
                        @else
                            <img src="https://via.placeholder.com/60x60?text=No+Image" alt="No Image" class="rounded">
                        @endif
                    </td>
                    <td>{{ $manpower->name }}</td>
                    <td>{{ $manpower->ref_code }}</td>
                    <td>{{ $manpower->type }}</td>
                    <td>{{ $manpower->rest_day_preference }}</td>
                    <td>{{ $manpower->from_agency }}</td>
                    <td>
                        @if ($manpower->available)
                            <span class="badge bg-success">Yes</span>
                        @else
                            <span class="badge bg-secondary">No</span>
                        @endif
                    </td>
                    <td>{{ $manpower->nationality }}</td>
                    <td>{{ $manpower->education }}</td>
                    <td>{{ $manpower->english }}</td>
                    <td>{{ $manpower->experience }}</td>
                    <td>{{ $manpower->created_at }}</td>
                    <td>
                        <a href="{{ route('manpower.show', $manpower->id) }}" class="btn btn-sm btn-primary">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <script>
        $(document).ready(function() {
            $('#manpowerTable').DataTable({
                responsive: true,
                searchable: true,
            });
        });
    </script>

</body>

</html>
