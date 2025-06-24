<!-- application/views/dashboard_view.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="p-6">
        <h1 class="text-3xl font-bold mb-4">Welcome, <?= $this->session->userdata('username'); ?>!</h1>
        
        <a href="<?= site_url('auth/logout'); ?>" class="text-red-500">
            <button type="button" class="w-20 bg-red-500 text-white py-2 rounded">Logout</button>
        </a>
    </div>
</body>

</html>