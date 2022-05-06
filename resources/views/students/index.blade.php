<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Session Status -->
        <x-success-status class="mb-4" :status="session('message')" />

            <div class="px-4 py-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Student Email</th>
                            <th>Student Phone</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ url('/student/'.$student->id.'/edit') }}">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ url('student/'.$student->id.'/delete') }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <x-button onclick="return confirm('Are you sure?')" >Delete </x-button>
                                        </form>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="4" >No Student Record Found...!</td>
                            </tr>

                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="px-2 py-2"> {{ $students->links() }} </div>
        </div>

    </div>
</x-app-layout>
