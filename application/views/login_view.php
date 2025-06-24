<!-- application/views/login_view.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6">Login</h2>
        <?php if ($this->session->flashdata('error')): ?>
            <div class="text-red-500 mb-4"> <?= $this->session->flashdata('error'); ?> </div>
        <?php endif; ?>
        <?= form_open('auth/login'); ?>
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="w-full border rounded px-3 py-2">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Password</label>
            <input type="password" name="password" class="w-full border rounded px-3 py-2">
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded">Login</button>
        <?= form_close(); ?>
        <p class="mt-4 text-center text-sm">Don't have an account? <a href="<?= site_url('auth/register') ?>" class="text-blue-500">Register</a></p>
    </div>
</body>

</html>