<!-- application/views/dashboard_view.php -->
<!DOCTYPE html>
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

</html>