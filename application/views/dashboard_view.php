 <!-- application/views/dashboard_view.php -->
 <!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">
            Welcome, <?= htmlspecialchars($this->session->userdata('username')); ?>!
        </h1>

        <p class="text-gray-600 mb-6">You are now logged in to your dashboard.</p>

        <a href="<?= site_url('auth/logout'); ?>" class="inline-block">
            <button type="button" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded transition">
                Logout
            </button>
        </a>
    </div>
</body>

</html> -->
 <!-- application/views/dashboard_view.php -->
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <title>Admin Dashboard</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 </head>

 <body class="bg-gray-100 min-h-screen flex">

     <!-- Sidebar -->
     <aside class="w-64 bg-white shadow-md">
         <div class="p-6">
             <h2 class="text-xl font-bold text-gray-700">HR Dashboard</h2>
         </div>
         <nav class="px-4 space-y-1">
             <a href="#overview" class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded">Overview</a>
             <a href="#charts" class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded">Charts</a>
             <a href="#staff" class="block py-2 px-4 text-gray-700 hover:bg-gray-200 rounded">Staff Table</a>
             <a href="<?= site_url('auth/logout'); ?>" class="block py-2 px-4 text-red-600 hover:bg-red-100 rounded">Logout</a>
         </nav>
     </aside>

     <!-- Main Content -->
     <main class="flex-1 p-6 space-y-8 overflow-y-auto">

         <!-- Header -->
         <header class="mb-4">
             <h1 class="text-3xl font-bold text-gray-800">
                 Welcome, <?= htmlspecialchars($this->session->userdata('username')); ?>
             </h1>
             <p class="text-gray-600">Here’s your dashboard overview.</p>
         </header>

         <!-- Stats Cards -->
         <section id="overview" class="grid grid-cols-1 md:grid-cols-3 gap-6">
             <div class="bg-white shadow rounded-lg p-6">
                 <p class="text-gray-600">Total Staff</p>
                 <p class="text-2xl font-bold text-blue-600"><?php echo count($users); ?></p>
             </div>
             <div class="bg-white shadow rounded-lg p-6">
                 <p class="text-gray-600">Active Today</p>
                 <p class="text-2xl font-bold text-green-600">
                     <?php
                        $activeCount = 0; // 
                        foreach ($users as $user) {
                            if ($user['status'] == 0) {
                                $activeCount++;
                            }
                        }
                        echo $activeCount;
                        ?>
                 </p>

             </div>
             <div class="bg-white shadow rounded-lg p-6">
                 <p class="text-gray-600">Pending Requests</p>
                 <p class="text-2xl font-bold text-yellow-600">3</p>
             </div>
         </section>

         <!-- Charts -->
         <section id="charts" class="grid grid-cols-1 md:grid-cols-2 gap-6">
             <div class="bg-white shadow rounded-lg p-6">
                 <p class="text-gray-700 font-semibold mb-2">Weekly Logins</p>
                 <canvas id="loginChart" height="120"></canvas>
             </div>
             <div class="bg-white shadow rounded-lg p-6">
                 <p class="text-gray-700 font-semibold mb-2">Department Distribution</p>
                 <canvas id="deptChart" height="120"></canvas>
             </div>
         </section>

         <!-- Staff Table -->
         <section id="staff" class="bg-white shadow rounded-lg p-6">
             <p class="text-gray-700 font-semibold mb-4">Staff Overview</p>
             <div class="overflow-x-auto">
                 <table class="min-w-full border divide-y divide-gray-200 text-sm">
                     <thead class="bg-gray-50 text-gray-700">
                         <tr>
                             <th class="px-4 py-2 text-left">#</th>
                             <th class="px-4 py-2 text-left">Name</th>
                             <th class="px-4 py-2 text-left">Email</th>
                             <!-- <th class="px-4 py-2 text-left"></th> -->
                             <th class="px-4 py-2 text-left">Status</th>
                             <th class="px-4 py-2 text-left"> Change Status</th>
                         </tr>
                     </thead>
                     <tbody class="divide-y divide-gray-100 text-gray-800 p-2 m-2">
                         <!-- Example row (you can loop dynamic data here) -->
                         <?php if (!empty($users)) : ?>
                             <?php foreach ($users as $index => $user) : ?>
                                 <tr>
                                     <td class="px-4 py-2 text-left"><?= $index + 1 ?></td>
                                     <td class="px-4 py-2 text-left"><?= html_escape($user['username']) ?></td>
                                     <td class="px-4 py-2 text-left"><?= html_escape($user['email']) ?></td>
                                     <!-- IF STAUS 0 SHOW ACTIVE ELSE SHOW INACTIVE -->
                                     <td class="px-4 py-2 text-left">
                                         <?php if ($user['status'] == 0) : ?>
                                             <span class="text-green-600 font-semibold">Active</span>
                                         <?php else : ?>
                                             <span class="text-red-600 font-semibold">Inactive</span>
                                         <?php endif; ?>
                                     </td>
                                     <td class="px-4 py-2 text-left">
                                         <input type="hidden" id="userid-<?= $user['id'] ?>" value="<?= $user['id'] ?>">

                                         <input type="button" onclick="updateStatus(<?= $user['id'] ?>, <?= $user['status'] ?>)" value="⇄"
                                             class="text-xl text-blue-600 hover:text-blue-800 transition"
                                             title="Click to toggle status">

                                     </td>


                                     <!-- etc -->
                                 </tr>
                             <?php endforeach; ?>
                         <?php else : ?>
                             <tr>
                                 <td colspan="5" class="text-center">No users found.</td>
                             </tr>
                         <?php endif; ?>


                         <!-- <tr>
                             <td class="px-4 py-2"></td>
                             <td class="px-4 py-2"></td>
                             <td class="px-4 py-2">john@example.com</td>
                             <td class="px-4 py-2">HR</td>
                             <td class="px-4 py-2 text-green-600 font-semibold">Active</td>
                         </tr> -->
                         <!-- Add more rows via loop from controller -->
                     </tbody>
                 </table>
             </div>
         </section>


     </main>
     <script>
         function updateStatus(userId, currentStatus) {
             const newStatus = currentStatus === 1 ? 0 : 1;

             fetch("<?= site_url('auth/status_update') ?>", {
                     method: 'POST',
                     headers: {
                         'Content-Type': 'application/x-www-form-urlencoded'
                     },
                     body: `id=${userId}&status=${newStatus}`
                 })
                 .then(res => res.json())
                 .then(response => {
                     if (response.success) {
                         location.reload();
                     } else {
                         alert('Failed to update status.');
                     }
                 })
                 .catch(err => {
                     console.error('Error:', err);
                     alert('An error occurred while updating status.');
                 });
         }
     </script>



     <!-- Charts JS -->
     <script>
         const loginCtx = document.getElementById('loginChart').getContext('2d');
         new Chart(loginCtx, {
             type: 'bar',
             data: {
                 labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
                 datasets: [{
                     label: 'Logins',
                     data: [10, 15, 8, 20, 17],
                     backgroundColor: 'rgba(59, 130, 246, 0.6)',
                 }]
             },
             options: {
                 responsive: true,
                 scales: {
                     y: {
                         beginAtZero: true
                     }
                 }
             }
         });

         const deptCtx = document.getElementById('deptChart').getContext('2d');
         new Chart(deptCtx, {
             type: 'pie',
             data: {
                 labels: ['HR', 'IT', 'Finance', 'Operations'],
                 datasets: [{
                     label: 'Departments',
                     data: [10, 20, 5, 10],
                     backgroundColor: [
                         '#4ade80', // green
                         '#60a5fa', // blue
                         '#fbbf24', // yellow
                         '#f87171' // red
                     ],
                     borderWidth: 1
                 }]
             },
             options: {
                 responsive: true,
                 plugins: {
                     legend: {
                         position: 'bottom'
                     }
                 }
             }
         });
     </script>

 </body>

 </html>