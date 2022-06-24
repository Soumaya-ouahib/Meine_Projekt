<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('STUDENTS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table class="table">
                    <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                     <th scope="col">Phone</th>
                     <th scope="col">Email</th>
                     <th scope="col">Course</th>
                </tr>
                    </thead>
                    <tbody>
                    @foreach ($students as $student)
                    <tr>
                    <td>{{$student->name}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->course}}</td>
                   </tr>
                    @endforeach
                
                <tbody>
                </table>
           

                </div>
            </div>
        </div>
    </div>
</x-app-layout>