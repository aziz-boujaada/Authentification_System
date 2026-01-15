<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body class="bg-green-50 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md border border-green-200">
    <h2 class="text-2xl font-bold text-center mb-6 text-green-700">Login</h2>

    <form class="space-y-4">
    
    
      <div>
        <label class="block text-sm font-medium text-green-700">Email</label>
        <input 
          type="email"
          placeholder="Enter your email"
          class="mt-1 w-full px-4 py-2 border border-green-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none"
          required
        />
      </div>


      <div>
        <label class="block text-sm font-medium text-green-700">Password</label>
        <input 
          type="password"
          placeholder="Enter your password"
          class="mt-1 w-full px-4 py-2 border border-green-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none"
          required
        />
      </div>

      <button 
        type="submit"
        class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition duration-200"
      >
        Login
      </button>
      <p class="text-center"> you don't have an account ? <a href="./register.php" class="text-green-700">Register</a></p>
    </form>
  </div>

</body>
</html>
