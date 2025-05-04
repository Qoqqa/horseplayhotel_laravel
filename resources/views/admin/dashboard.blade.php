@extends('layouts.admin')

@section('content')
<div class="admin-header">
    <h1>Reservation Management</h1>
    <button type="button" class="btn btn-create" onclick="showCreateForm()">Create New Reservation</button>
</div>

<div class="admin-table-container">
    <table class="admin-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Guest Name</th>
                <th>Contact</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Room Type</th>
                <th>Capacity</th>
                <th>Payment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->name }}</td>
                    <td>{{ $reservation->contact_number }}</td>
                    <td>{{ $reservation->reservation_from }}</td>
                    <td>{{ $reservation->reservation_to }}</td>
                    <td>{{ $reservation->room_type }}</td>
                    <td>{{ $reservation->room_capacity }}</td>
                    <td>{{ $reservation->payment_type }}</td>
                    <td class="action-buttons">
                        <form method="POST" action="{{ route('admin.reservations.delete', $reservation->id) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this reservation?')">Delete</button>
                        </form>
                        <button type="button" class="btn btn-edit" onclick="showEditForm({{ $reservation }})">Edit</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection