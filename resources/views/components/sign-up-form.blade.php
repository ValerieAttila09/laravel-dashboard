<div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8">
    <form class="space-y-4" action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="">
            <h5 class="text-xl font-medium text-gray-900">Sign up to our platform</h5>
            <p class="outfit-thin text-neutral-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ipsa ratione quisquam, modi vitae illum inventore quos accusamus.</p>
        </div>
        <div>
            <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Your
                username</label>
            <input type="text" name="username" id="username"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="John Doe" required />
        </div>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                email</label>
            <input type="email" name="email" id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="name@company.com" required />
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your
                password</label>
            <input type="password" name="password" id="password" placeholder="••••••••"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg transition-all focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required />
        </div>
        <button type="submit"
            class="w-full text-white bg-blue-700 transition-all hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create your account</button>
        <div class="text-sm outfit-thin text-gray-500">
            Already have an account? <a href="/" class="outfit-regular text-blue-700 transition-all hover:underline">Log In</a>
        </div>
    </form>
</div>
