@extends("layouts.admin")

@section("page_title")
Laravel Wip-Admin Page
@endsection

@section('content')

<div class="justify-center p-8 border-green-400 border-2 h-full w-full">
    <h1 class="text-blue-600 text-2xl mb-6">Courses</h1>

    <div class="flex justify-center">




        <div class="w-4/12 bg-gray-200 rounded-lg shadow-2xl">

            <h1 class="text-4xl font-bold text-center">Update Course</h1>
            <h3 class="text-md text-center mb-2">Use the form below to edit a course</h3>


            @if (session()->has('update_status'))
            <div class=" bg-green-500 p-4 rounded-lg text-white text-center mb-6">
                {{session('update_status')}}
            </div>
            @endif

            <form method="post" action="{{url('/admin/course/update')}}">
                @csrf
                <div class="mb-4 ">

                    <label class="sr-only" for="course_id"> Course ID </label>
                    <input type="hidden" value="{{ $courses->id }}" class="bg-gray-300 p-4 w-full rounded-md border-2 border-gray-400" name="course_id">
                    @error("course_id")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="sr-only" for="course_name"> Course Name </label>
                    <input type="text" value="{{ $courses->course_name }}" class="bg-white p-4 w-full rounded-md border-2 border-gray-400" name="course_name">
                    @error("course_name")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="sr-only" for="course_type"> Course Category </label>
                    <select name="course_type" class="bg-white p-4 w-full rounded-md border-2 border-gray-400">
                        <option value="{{ $courses->type_id }}">{{ $courses->course_type }}</option>
                        @foreach($types as $type)
                        <option value="{{ $type->id}}">{{ $type->course_type }}</option>
                        @endforeach
                    </select>
                    @error("course_type")
                    <div class="text-red-700 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white p-4 w-full rounded-md shadow-2xl">Update</button>
                </div>

            </form>

        </div>

    </div>
</div>

@endsection
