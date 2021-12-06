@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Table Basic</h4>
            <h6 class="card-subtitle lh-base">Using the most basic table Leanne Grahamup, here’s how .table-based tables
                look in Bootstrap. You can use any example of below table for your table and it can be use with any type
                of bootstrap tables.</h6>
        </div>
        <div class="table-responsive">
            <table class="table customize-table mb-0 v-middle">
                <thead class="table-light">
                <tr>
                    <th class="border-bottom border-top">Nickname</th>
                    <th class="border-bottom border-top">Email</th>
                    <th class="border-bottom border-top">Role</th>
                    <th class="border-bottom border-top">Created at</th>
                    <th class="border-bottom border-top">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->pseudo }}</td>
                        <td>
                            {{ $user->pseudo }}
                        </td>
                        <td>
                            @if($user->is_admin)
                                <span class="badge bg-light-danger text-danger fw-normal">Admin</span>
                            @else
                                <span class="badge bg-light-success text-success fw-normal">Member</span>
                            @endif
                            @if($user->is_banned)
                                <span class="badge bg-light-danger text-danger fw-normal">Banned</span>
                            @endif
                        </td>
                        <td>
                            {{ $user->created_at->isoFormat('LLLL') }} | {{ $user->created_at->diffForHumans() }}
                        </td>
                        <td>
                            <div class="dropdown dropstart">
                                <a href="#" class="link" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-more-horizontal feather-sm">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @if($user->is_banned)
                                        <li><a class="dropdown-item" href="{{ route('admin.users.unban', $user) }}">Unban</a></li>
                                    @else
                                        <li><a class="dropdown-item" href="{{ route('admin.users.ban', $user) }}">Ban</a></li>
                                    @endif
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
