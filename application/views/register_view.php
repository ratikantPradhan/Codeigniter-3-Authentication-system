<!-- application/views/register_view.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6">Register</h2>
        <?= validation_errors('<div class="text-red-500 mb-2">', '</div>'); ?>
        <?= form_open('auth/register'); ?>
        <div class="mb-4">
            <label class="block text-gray-700">Username</label>
            <input type="text" name="username" class="w-full border rounded px-3 py-2">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="w-full border rounded px-3 py-2">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Password</label>
            <input type="password" name="password" class="w-full border rounded px-3 py-2">
        </div>
        <button type="submit" class="w-full bg-green-500 text-white py-2 rounded">Register</button>
        <?= form_close(); ?>
        <p class="mt-4 text-center text-sm">Already have an account? <a href="<?= site_url('auth/login') ?>" class="text-blue-500">Login</a></p>
    </div>
</body>

</html>