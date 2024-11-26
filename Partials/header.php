<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Hospital Information System Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tailwind CSS CDN -->
    <script>
      function toggleModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.toggle("hidden");
        modal.setAttribute("aria-hidden", modal.classList.contains("hidden"));
      }
    </script>
  </head>
  <body
    class="font-sans antialiased"
    style="
      background-image: url(https://content.presspage.com/uploads/2110/1920_mdrh-east.jpg?10000);
    "
  >
    <!-- Main Dashboard Container -->
    <div class="flex h-screen">
      <!-- Sidebar -->
      <nav class="w-64 bg-blue-800 text-white p-5">
        <div class="text-center text-xl font-semibold mb-8">
          <h2>Hospital Information System</h2>
        </div>
        <ul>
          <li class="mb-4">
            <a href="admindashboard.php" class="hover:text-blue-300"
              >Dashboard</a
            >
          </li>
          <li class="mb-4">
            <a href="registration.php" class="hover:text-blue-300"
              >Register Patient</a
            >
          </li>
          <li class="mb-4">
            <a href="doctorconsultation.php" class="hover:text-blue-300"
              >Doctor Consultation</a
            >
          </li>
          <li class="mb-4">
            <a href="treatment.php" class="hover:text-blue-300">Treatment</a>
          </li>
          <li class="mb-4">
            <a href="billing.php" class="hover:text-blue-300">Billing</a>
          </li>
          <li class="mb-4">
            <a href="/employeedashboard.php" class="hover:text-blue-300"
              >Employee Dashboard</a
            >
          </li>
          <li class="mt-8">
            <a href="./login.php" class="hover:text-blue-300">Logout</a>
          </li>
        </ul>
      </nav>

      <!-- Main Content Area -->
      <div class="flex-1 p-6">
        <!-- Header Section -->
        <header class="flex justify-between items-center mb-8">
          <a
            href="employeedashboard.html"
            class="flex justify-between items-center w-full"
          >
            <h1 class="text-3xl font-semibold">Dashboard</h1>
            <div class="flex items-center space-x-4">
              <span class="text-lg">Welcome, Pat</span>
              <img
                src="https://scontent.fmnl14-1.fna.fbcdn.net/v/t39.30808-1/427990154_3692324207668347_7927056567437163865_n.jpg?stp=dst-jpg_s200x200&_nc_cat=100&ccb=1-7&_nc_sid=0ecb9b&_nc_eui2=AeEcJQ4irZeZadRZD89lokol72tVYkrVVe_va1ViStVV76vyFRt4LCEEsb1lDLq-uf5IBF74sV_2FNckjFHmgDvO&_nc_ohc=e_FQr6jsSNcQ7kNvgH4hfMK&_nc_zt=24&_nc_ht=scontent.fmnl14-1.fna&_nc_gid=ALynKVOHfvrUKeN4hDHncQQ&oh=00_AYDkUli2WhQ3ZzB4xpngPEhlM2YSau6FJ8QFQP7P3TEJqg&oe=67312718"
                alt="User Avatar"
                class="w-10 h-10 rounded-full"
              />
            </div>
          </a>
        </header>