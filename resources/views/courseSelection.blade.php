@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm lg:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Course Selection
            </header>

            {{-- <div class="w-full p-6">
                <p class="text-gray-700">
                    You are logged in!
                </p>
            </div> --}}




            <form id="regForm" action="" method="POST">
                @csrf

                <h1>Choose A Course:</h1>
                
                <!-- One "tab" for each step in the form: -->
                <div class="tab">Name:
                  <p><input placeholder="First name..." oninput="this.className = ''"></p>
                  <p><input placeholder="Last name..." oninput="this.className = ''"></p>
                </div>
                
                <div class="tab">Contact Info:
                  <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
                  <p><input placeholder="Phone..." oninput="this.className = ''"></p>
                </div>
                
                <div class="tab">Birthday:
                  <p><input placeholder="dd" oninput="this.className = ''"></p>
                  <p><input placeholder="mm" oninput="this.className = ''"></p>
                  <p><input placeholder="yyyy" oninput="this.className = ''"></p>
                </div>
                
                <div class="tab">Login Info:
                  <p><input placeholder="Username..." oninput="this.className = ''"></p>
                  <p><input placeholder="Password..." oninput="this.className = ''"></p>
                </div>
                
                <div style="overflow:auto;">
                  <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                  </div>
                </div>
                
                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                </div>
                
                </form>
                
        </section>
    </div>
</main>
@endsection