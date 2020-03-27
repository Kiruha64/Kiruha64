@include('basis.basis')
@yield('basis')
@yield('page_header')

@foreach($contactspagetitles as $contactspagetitle)
    <p>{{$contactspagetitle->title}}</p>
@endforeach

@yield('end_page_header')

@yield('list_no_active_link')
{{ route('contactspagetitle-create') }}
@yield('list_no_active')
Create Page Name
@yield('end_list_no_active')

@yield('list_no_active_link')
{{ route('contacts') }}
@yield('list_no_active')
List Contacts
@yield('end_list_no_active')

@yield('list_active_link')
{{ route('contacts-create') }}
@yield('list_active')
Create Contacts
@yield('end_list_active')
@yield('start_code')
<div class="row">
    <div class="col-md-12">


        <div class="panel panel-default">
            <div class="panel-heading">
                Page Name
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="">
                            <th >Id</th>
                            <th >Title</th>

                            <th>Is visible</th>
                            <th>Position</th>
                            <th>Created at</th>
                            <th>Update at</th>



                            <th class="text-center" colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($contactspagetitles as $contactspagetitle)
                            <tr class="odd gradeX">
                                <td><nobr>{{ $contactspagetitle->id }}</nobr></td>
                                <td><nobr>{{ $contactspagetitle->title }}</nobr></td>

                                <td><nobr>{{ $contactspagetitle->is_visible }}</nobr></td>
                                <td><nobr>{{ $contactspagetitle->position }}</nobr></td>
                                <td><nobr>{{ $contactspagetitle->created_at }}</nobr></td>
                                <td><nobr>{{ $contactspagetitle->updated_at }}</nobr></td>






                                <td class="text-center"><a href="{{ route('update-contactspagetitle', $contactspagetitle->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                                <td class="text-center"><a href="{{ route('delete-contactspagetitle', $contactspagetitle->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



                        @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>



        <div class="panel panel-default">
            <div class="panel-heading">
                Advanced Tables
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="">
                            <th>Id</th>
                            <th>Text</th>
                            <th>Is visible</th>
                            <th>Position</th>
                            <th>Created at</th>
                            <th>Update at</th>

                            <th class="text-center" colspan="3" >Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($contacts as $contact)
                            <tr class="odd gradeX">
                                <td><nobr>{{ $contact->id }}</nobr></td>
                                <td><nobr>{{ $contact->text }}</nobr></td>
                                <td><nobr>{{ $contact->is_visible }}</nobr></td>
                                <td><nobr>{{ $contact->position }}</nobr></td>
                                <td><nobr>{{ $contact->created_at }}</nobr></td>
                                <td><nobr>{{ $contact->updated_at }}</nobr></td>






                                <td class="text-center"><a href="{{ route('update-contacts', $contact->id) }}"><button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button></a></td>
                                <td class="text-center"><a href="{{ route('show-one-contacts', $contact->id) }}"><button class="btn btn-warning"> <i class="fa fa-search" aria-hidden="true"></i> </button></a></td>
                                <td class="text-center"><a href="{{ route('delete-contacts', $contact->id) }}"><button class="btn btn-danger "> <i class="fa fa-trash-o" aria-hidden="true"></i> </button></a></td>



                        @endforeach

                        {{--                                @foreach($menus as $imag)--}}

                        {{--                                    <img src="{{ asset('storage/'.$imag->img) }}">--}}

                        {{--                        @endforeach--}}

                        </tbody>
                    </table>
                </div>

            </div>
        </div>



    </div>
</div>

@yield('menu_toggle')
@yield('last_scripts')
