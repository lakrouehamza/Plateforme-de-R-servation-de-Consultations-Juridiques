<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div
    class="relative mx-auto w-full max-w-md bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:rounded-xl sm:px-10">
    <div class="w-full">
        <div class="text-center">
            <h1 class="text-3xl font-semibold text-gray-900">SignUp</h1>
            <p class="mt-2 text-gray-500">Sign in below to access your account</p>
        </div>
        <div class="mt-5">
        <form>
    <div class="mb-4">
      <label for="name" class="block mb-2 text-sm font-medium">Your name</label>
      <input
        type="text"
        id="name"
        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full py-2.5 px-4"
        placeholder="Andrew Jackson"
        required
        value=""
      >
    </div>
    <div class="mb-4">
      <label for="email" class="block mb-2 text-sm font-medium">Your email</label>
      <input
        type="email"
        id="email"
        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full py-2.5 px-4"
        placeholder="andrew@mail.com"
        required
        value=""
      >
    </div>
    <div class="mb-4">
      <label for="password" class="block mb-2 text-sm font-medium">Your password</label>
      <input
        type="password"
        id="password"
        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full py-2.5 px-4"
        placeholder="*********"
        required
        value=""
      >
    </div>
    <div>
      <p class="text-red-500 pb-5"></p>
    </div>
    <div class="flex items-center justify-between mb-4">
      <button
        type="submit"
        class="text-white bg-purple-600 hover:bg-purple-700 focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm py-2.5 px-5 w-full sm:w-auto"
      >
        Register
      </button>
      <div class="flex items-center text-sm">
        <p>Already have an account?</p>
        <p class="underline cursor-pointer ml-1">Sign in</p>
      </div>
    </div>
  </form>
        </div>
    </div>
</div>
</body>
</html>