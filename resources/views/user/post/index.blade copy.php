<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Posts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <div class="col-md-12">
                            <h4>Manage Posts</h4>
                            <a href="{{ route('posts.create') }}" class="btn btn-success btn-sm mb-2" style="float: right"><i class="fas fa-plus"></i></a>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <th width="80px">Id</th>
                                    <th>Title</th>
                                    <th width="150px">Action</th>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>
                                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                   
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
