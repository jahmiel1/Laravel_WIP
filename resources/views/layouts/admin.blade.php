<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{mix("css/app.css")}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield("page_title")</title>
</head>
<body>

<div class="container w-screen h-screen flex">

    <div class=" bg-white p-4 h-full w-2/12">
        <h1 class="text-3xl font-extrabold text-center text-blue-600 mb-6">Admin</h1>
        <ul>
            <li @if (!request()->routeIs('Admin'))
                class="py-2 px-2 hover:bg-blue-600 duration-300 mt-3  hover:text-white cursor-pointer"
            @else
                class="py-2 px-2 bg-blue-600 text-white cursor-pointer"
            @endif>
                <a href="{{route('Admin')}}">Students</a> </li>
            <li @if (!request()->routeIs('course'))
                class="py-2 px-2 hover:bg-blue-600 duration-300  hover:text-white cursor-pointer"
            @else
                class="py-2 px-2 bg-blue-600 text-white cursor-pointer"
            @endif>
                <a href="{{route('course')}}">Courses</a></li>
            <li @if (!request()->routeIs('course_type'))
                class="py-2 px-2 hover:bg-blue-600 duration-300  hover:text-white cursor-pointer"
            @else
                class="py-2 px-2 bg-blue-600 text-white cursor-pointer"
            @endif>
                <a href="{{route('courseType')}}">Course Type</a></li>
            <li @if (!request()->routeIs('course_selection'))
                class="py-2 px-2 hover:bg-blue-600 duration-300  hover:text-white cursor-pointer"
            @else
                class="py-2 px-2 bg-blue-600 text-white cursor-pointer"
            @endif>
                <a href="{{route('courseSelection')}}">Course Selection</a></li>
            <form>@csrf
            <li class="py-2 px-2 hover:bg-blue-600 duration-300 hover:text-white cursor-pointer"> 
                <button
                    class="appearance-none"
                    formaction="{{route('Logout')}}"
                    formmethod="post"
                    type="button"
                >Logout</button> 
            </li>
            </form> 
        </ul>
    </div>
    <div class="w-10/12 h-full flex justify-center items-center bg-gray-300">

        <div class="h-full w-full">
            @yield("content")
        </div>

    </div>

</div>



</body>
</html>
