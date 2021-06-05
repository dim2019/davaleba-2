@extends('layout')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Weight</th>
        </tr>
        </thead>
        <tbody>

        @foreach($posts as $post)
            <tr>
                <th> {{$post->id}}</th>
                <td> {{$post->name}}</td>
                <td> {{$post->last_name}}</td>
                <td>{{$post->weight}}</td>
                <td>
                    <form method="post" action="{{route('posts.delete',$post->id)}}">
                        @csrf
                        @method('delete')
                        <button>Delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{route('posts.edit',$post->id)}}">Edit</a>
                </td>

            </tr>

        @endforeach

        </tbody>
    </table>

    {{$posts->links()}}
@endsection
