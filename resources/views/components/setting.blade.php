<div class="mt-8 ml-2 px-6 py-5 content-center border rounded">
    <h1 class="text-3xl font-bold pb-2">Personal Information</h1>
    <div class="mt-2 mb-2">
    <form class="mt-8 space-y-6" action="{{ url('setting/store') }}" method="POST">
      @csrf
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
        <div class="flex mt-2 mb-2">
          <label class="mr-2" for="accountname">AccountName</label>
          <input id="accountname" name="accountname" type="accountname" autocomplete="accountname" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="AccountName">
        </div>
        <div class="flex mt-2 mb-2">
          <label class="mr-2" for="fullname">FullName</label>
          <input id="fullname" name="fullname" type="fullname" autocomplete="fullname" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="FullName">
        </div>
        <div class="flex mt-2 mb-2">
          <label class="mr-2" for="accountname">AccountName</label>
          <input id="accountname" name="accountname" type="accountname" autocomplete="accountname" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="AccountName">
        </div>
        <div class="flex mt-2 mb-2">
          <label class="mr-2" for="fullname">FullName</label>
          <input id="fullname" name="fullname" type="fullname" autocomplete="fullname" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="FullName">
        </div>
        <div class="flex mt-2 mb-2">
          <label class="mr-2" for="fullname">FullName</label>
          <input id="fullname" name="fullname" type="fullname" autocomplete="fullname" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="FullName">
        </div>
        <div>
          <label for="email-address">Email</label>
          <input id="email-address" name="email" type="email" autocomplete="email" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
        </div>
        <div>
          <label for="password">Payment Details</label>
          <input id="password" name="password" type="password" autocomplete="current-password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500  sm:text-sm" placeholder="Password">
        </div>
      </div>

      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-midnight-green focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          </span>
          Create Account
        </button>
      </div>
    </form>
    </div>
</div>