@extends('template.v_template')

@Section('content')
<div class="card">
    <div class="card-body">
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        @if(session()->has('delete'))
        <div class="alert alert-warning" role="alert">
            {{ session('delete') }}
        </div>
        @endif
        <div class="table-responsive mt-4 text-center">
            <table id="basic-table" class="table table-bordered mb-0" role="grid">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Laboratorium</th>
                        <th>Dosen</th>
                        <th>Laboran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lab as $lab)
                    <tr class="text-center">
                        <td scope="row">{{ $nomor++ }}</td>
                        <td>
                            <h6 class="">
                                <a class="text-dark" href="/admin/laboratorium/{{ $lab->name }}">{{ $lab->name }}</a>
                            </h6>
                        </td>
                        <td class="text-start">
                            @foreach ($users as $user)
                            @if ($user->lab_id === $lab->id)
                            @if ($user->level === "1")
                            <ul>
                                <li>
                                    <a class="text-dark" href="/admin/dosen/{{ $user->nip }}">{{ $user->name }}</a>
                                </li>
                            </ul>
                            @endif
                            @endif
                            @endforeach
                        </td>
                        <td class="text-start">
                            @foreach ($users as $user)
                            @if ($user->lab_id === $lab->id)
                            @if ($user->level === "2")
                            <ul>
                                <li>
                                    <a class="text-dark" href="/admin/laboran/{{ $user->nip }}">{{ $user->name }}</a>
                                </li>
                            </ul>
                            @endif
                            @endif
                            @endforeach
                        </td>

                        <td>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-warning btn-sm d-block m-1 rounded" href="/admin/laboratorium/{{ $lab->name }}">
                                    <svg width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.7161 16.2234H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M15.7161 12.0369H8.49609" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M11.2521 7.86011H8.49707" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.909 2.74976C15.909 2.74976 8.23198 2.75376 8.21998 2.75376C5.45998 2.77076 3.75098 4.58676 3.75098 7.35676V16.5528C3.75098 19.3368 5.47298 21.1598 8.25698 21.1598C8.25698 21.1598 15.933 21.1568 15.946 21.1568C18.706 21.1398 20.416 19.3228 20.416 16.5528V7.35676C20.416 4.57276 18.693 2.74976 15.909 2.74976Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <a class="btn btn-primary btn-sm d-block m-1 rounded" href="/admin/laboratorium/{{ $lab->name }}/edit">
                                    <svg width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection