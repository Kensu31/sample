@include('partials.__header',['title'=> "Create User"])
<!-- component -->
<form action="/store" method="POST">
    @csrf
<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
            <h1 class="mb-8 text-3xl text-center">Sign up</h1>
            <input 
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="name"
                placeholder="Full Name" value="{{old('name')}}"/>
                @error('name')
                    <p class="text-red-500 text-xs mb-2">
                        {{$message}}
                    </p>
                @enderror

            <input 
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="email"
                placeholder="Email" value="{{old('email')}}"/>
                @error('email')
                    <p class="text-red-500 text-xs mb-2">
                        {{$message}}
                    </p>
                @enderror

            <input 
                type="password"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="password"
                placeholder="Password" />
                @error('password')
                <p class="text-red-500 text-xs mb-2">
                    {{$message}}
                </p>
            @enderror
                
            <input 
                type="password"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="password_confirmation"
                placeholder="Confirm Password" />
                @error('password')
                <p class="text-red-500 text-xs mb-2">
                    {{$message}}
                </p>
            @enderror

            <button
                type="submit"
                class="w-full text-center py-3 rounded bg-green-600 text-white hover:bg-green-700 focus:outline-none my-1"
            >Create Account</button>

            <div class="text-center text-sm text-grey-dark mt-4">
                By signing up, you agree to the 
                <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                    Terms of Service
                </a> and 
                <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                    Privacy Policy
                </a>
            </div>
        </div>

        <div class="text-grey-dark mt-6">
            Already have an account? 
            <a class="no-underline border-b border-blue text-blue" href="../login/">
                Log in
            </a>.
        </div>
    </div>
</div>
</form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 Acme Corp. All rights reserved.
  </p>
</div>
@include('partials.__footer')