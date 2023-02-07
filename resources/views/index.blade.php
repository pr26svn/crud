@extends("layouts.app")
@section("content")

    <div class="container px-4">
        <div class="row gx-5">
            <table class="table table-striped table-hover">
                <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th></th>
                </tr>
                @foreach($news as $objNews)
                    <tr>
                        <td>{{$objNews->id}}</td>
                        <td>{{$objNews->name}}</td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
