<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Laravel App</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">
  <!-- Navbar -->
  <nav class="bg-gray-900 shadow sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <a href="#" class="text-white font-bold text-lg">My Laravel App</a>
      <ul class="flex space-x-6 text-gray-300">
        <li><a href="#" class="hover:text-blue-400">Home</a></li>
        <li><a href="#" class="hover:text-blue-400">Features</a></li>
        <li><a href="#" class="hover:text-blue-400">Pricing</a></li>
        <li><a href="#" class="hover:text-blue-400">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="bg-gradient-to-r from-blue-500 to-blue-600 text-white text-center py-20">
    <div class="container mx-auto">
      <h1 class="text-4xl md:text-5xl font-bold mb-2">{{ $employee_name }}</h1>
      <p class="text-lg mb-6">{{ $position }}</p>

      <!-- Info Card -->
      <div class="bg-white/20 backdrop-blur-md rounded-xl shadow-lg p-6 max-w-4xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6">
        <div>
          <p class="text-sm uppercase tracking-wide">Umur</p>
          <h4 class="text-xl font-semibold">{{ $age }} tahun</h4>
        </div>
        <div>
          <p class="text-sm uppercase tracking-wide">Bergabung</p>
          <h4 class="text-xl font-semibold">{{ $join_date }}</h4>
        </div>
        <div>
          <p class="text-sm uppercase tracking-wide">Lama Bekerja</p>
          <h4 class="text-xl font-semibold">{{ $working_duration }} hari</h4>
        </div>
        <div>
          <p class="text-sm uppercase tracking-wide">Gaji</p>
          <h4 class="text-xl font-semibold">Rp {{ number_format($salary / 1000000, 0) }} Juta</h4>
        </div>
      </div>

      <!-- Status & Career -->
      <p class="mt-6">
        <span class="bg-white text-blue-600 px-3 py-1 rounded-full text-sm font-semibold shadow">
          Status: {{ $status }}
        </span>
      </p>
      <p class="mt-3 italic">"Tujuan Karir: {{ $career_goal }}"</p>

      <!-- Skills -->
      <h3 class="text-2xl font-semibold mt-10 mb-4">Skills</h3>
      <div class="flex flex-wrap justify-center gap-3">
        @foreach($skills as $skill)
        <span
          class="px-4 py-2 bg-white text-blue-600 font-medium rounded-full shadow hover:bg-blue-600 hover:text-white transition">
          {{ $skill }}
        </span>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Content -->
  <section class="container mx-auto py-16 px-6 grid md:grid-cols-2 gap-8">
    <!-- About -->
    <div class="space-y-6">
      <div class="bg-white p-6 rounded-xl shadow">
        <h5 class="text-lg font-semibold mb-2">About Our Application</h5>
        <p class="text-gray-600">Our application provides a clean and intuitive interface, allowing users to navigate
          easily and perform tasks efficiently.</p>
        <button class="mt-4 px-5 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">Explore More</button>
      </div>

      <div class="bg-white rounded-xl shadow">
        <div class="p-4 border-b font-semibold">About Us</div>
        <div class="p-4 text-gray-600">We are a tech company that specializes in web development solutions.</div>
      </div>
    </div>

    <!-- Alerts -->
    <div class="space-y-6">
      <div class="bg-white p-6 rounded-xl shadow">
        <h5 class="text-lg font-semibold mb-4">Alerts</h5>
        <div class="mb-2 p-3 rounded bg-blue-100 text-blue-700">Informational alert</div>
        <div class="mb-2 p-3 rounded bg-green-100 text-green-700">Success alert</div>
        <div class="mb-2 p-3 rounded bg-yellow-100 text-yellow-700">Warning alert</div>
        <div class="p-3 rounded bg-red-100 text-red-700">Danger alert</div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-400 py-6 text-center">
    <p>&copy; {{date('Y')}} My Laravel App. All Rights Reserved.</p>
  </footer>

</body>

</html>
