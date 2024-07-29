@extends('layouts.app')  {{-- Asumsikan Anda memiliki layout utama --}}

@section('content')
<div class="container">
    <h2 class="mb-4">Attendance</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered data-table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>SN</th>
                    <th>Employee ID</th>
                    <th>Timestamp</th>
                    <th>Status 1</th>
                    <th>Status 2</th>
                    <th>Status 3</th>
                    <th>Status 4</th>
                    <th>Status 5</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($attendances as $attendance)
                    <tr>
                        <td>{{ $attendance->id }}</td>
                        <td>{{ $attendance->sn }}</td>
                        <td>{{ $attendance->employee_id }}</td>
                        <td>{{ $attendance->timestamp }}</td>
                        <td>{{ $attendance->status1 ? 'Ya' : 'Tidak' }}</td>
                        <td>{{ $attendance->status2 ? 'Ya' : 'Tidak' }}</td>
                        <td>{{ $attendance->status3 ? 'Ya' : 'Tidak' }}</td>
                        <td>{{ $attendance->status4 ? 'Ya' : 'Tidak' }}</td>
                        <td>{{ $attendance->status5 ? 'Ya' : 'Tidak' }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $attendances->links() }}  {{-- Tampilkan pagination jika ada --}}

</div>
@endsection