<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('TEACHERS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table class="table">
                    <thead class="thead-dark">
                <tr>
                    <th scope="col">picture</th>
                     <th scope="col">Name</th>
                     <th scope="col">Kurs</th>
                     <th scope="col">Phone</th>
                     <th scope="col">Actions</th>
                </tr>
                    </thead>
                    <tbody>
                    @foreach ($teachers as $teacher)
                    <tr>
                    <td><img class="imgcss" src="{{asset('./teacherimg/'.$teacher->pic)}}" ></td>
                    <td>{{$teacher->name}}</td>
                    <td>{{$teacher->kurs}}</td>
                    <td>{{$teacher->phone}}</td>
                    <td> 
                        <form method="POST" action="{{route('loschen.teacher',$teacher->id)}}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-dark">
                            Delete
                        </button>    
                        </form>


                    </td>
                   </tr>
                    @endforeach
                
                <tbody>
                </table>
           

                </div>
            </div>
        </div>
    </div>
</x-app-layout>