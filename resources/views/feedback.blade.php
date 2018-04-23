@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Feedback</div>

                <div class="card-body">

                    <div class="table-responsive users-table">
                        <table class="table table-striped table-condensed data-table">
                            <thead>
                                <tr>
                                    <th class="hidden-xs">No.</th>
                                    <th class="hidden-xs">Name</th>
                                    <th class="hidden-xs">Email</th>

                                    <th class="hidden-xs">Feedback</th>

                                    <th class="hidden-xs">Actions</th>

                                    <!-- <th>Actions</th> -->

                                </tr>
                            </thead>
                            <tbody>
                              <!-- @if($fbv==NULL)
                                There are no feedbacks at this time.
                              @else -->
                                @foreach($fbv as $user)

                                    <tr>
                                        <td class="hidden-xs">{{$user->id}}</td>
                                        <td class="hidden-xs">{{$user->name}}</td>
                                        <td class="hidden-xs"><a href="mailto:{{ $user->email }}" title="email {{ $user->email }}">{{ $user->email }}</a></td>

                                        <td class="hidden-xs">{{ $user->matter }}</td>

                                        <td>
                                        {!! Form::open(array('url' => 'delfeeb' . $user->id, 'class' => '', 'data-toggle' => 'tooltip', 'title' => 'Delete')) !!}

                                          {!! Form::button('<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i><span class="hidden-xs hidden-sm hidden-md"> Delete</span>', array('class' => 'btn btn-danger btn-sm','type' => 'button', 'style' =>'width: 100%;' ,'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete Feedback', 'data-message' => 'Are you sure you want to delete this feedback ?')) !!}
                                        {!! Form::close() !!}
                                        </td>



                                    </tr>

                                @endforeach
                                <!-- @endif -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
