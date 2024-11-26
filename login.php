<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Log In - Hospital Info System</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body
    class="bg-scroll"
    style="
      background-image: url(https://content.presspage.com/uploads/2110/1920_mdrh-east.jpg?10000);
    "
  >
    <h1></h1>
    <!-- Set background color to bg-blue-600 here -->
    <!-- Log In Container -->
    <div class="flex justify-center items-center min-h-screen">
      <div class="bg-blue-500 p-8 rounded-lg shadow-lg w-96 relative">
        <h2 class="text-2xl font-semibold text-center mb-6">Log In</h2>
        <form action="./admindashboard.html" method="GET">
          <!-- Changed to GET for testing -->
          <!-- Email Address -->
          <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">
              Email Address
            </label>
            <input
              type="email"
              id="email"
              name="email"
              required
              class="w-full p-3 border border-gray-300 rounded-md mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            />
          </div>

          <!-- Password -->
          <div class="mb-4">
            <label
              for="password"
              class="block text-sm font-medium text-gray-700"
            >
              Password
            </label>
            <input
              type="password"
              id="password"
              name="password"
              required
              class="w-full p-3 border border-gray-300 rounded-md mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            />
          </div>

          <!-- Submit Button -->
          <div class="mb-4">
            <button
              type="submit"
              class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-500"
            >
              Log In
            </button>
          </div>
        </form>

        <!-- Sign Up Button positioned at the bottom-right -->
        <div class="absolute bottom-4 right-4">
          Don't have an account?
          <a
            href="signup.html"
            class="text-blue-600 hover:underline bg-blue-100 px-4 py-2 rounded-md"
          >
            Sign Up
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
