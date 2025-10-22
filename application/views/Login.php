<?php

?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold text-center mb-4">Login Admin</h1>

        <?php if ($this->session->userdata('error')): ?>
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded items-center">
                <?php echo $this->session->userdata('error');
                $this->session->unset_userdata('error');
                ?>
            <?php endif; ?>

            <form method="post" action="<?php echo base_url('index.php/auth'); ?>" class="space-y-4" autocomplete="off">
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <input id="password" name="password" type="password" required minlength="1"
                            class="block w-full pr-10 px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="Masukkan password" autofocus>
                        <button type="button" id="toggle" aria-label="Tampilkan/ Sembunyikan" class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-500">
                            <svg id="eye" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        Masuk
                    </button>
                </div>
            </form>

            <p class="mt-4 text-xs text-gray-500 text-center">Mari Login.</p>
            </div>

            <script>
                (function() {
                    const pw = document.getElementById('password');
                    const toggle = document.getElementById('toggle');
                    toggle.addEventListener('click', () => {
                        if (pw.type === 'password') {
                            pw.type = 'text';
                        } else {
                            pw.type = 'password';
                        }
                    });
                })();
            </script>
</body>

</html>