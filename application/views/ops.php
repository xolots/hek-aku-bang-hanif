
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Text Ops</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
    <div class="w-full max-w-2xl bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-semibold mb-4">Operasi Teks</h1>

        <form method="post" action="aksi" class="space-y-4">
            <label for="text" class="block text-sm font-medium text-gray-700">Masukkan teks</label>
            <textarea id="text" name="text" rows="6"
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400"
                placeholder="Ketik teks di sini..."></textarea>

            <div>
                <label for="operation" class="block text-sm font-medium text-gray-700 mb-1">Pilih operasi</label>
                <select id="operation" name="operation"
                    class="w-56 px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    <option value="strtoupper">Uppercase</option>
                    <option value="strtoupper">Lowercase</option>
                    <option value="strlen">Hitung panjang karakter</option>
                </select>
            </div>

            <div class="flex items-center space-x-3">
                <button type="submit"
                    class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Proses</button>
                <button type="reset"
                    class="px-4 py-2 border rounded-md hover:bg-gray-50">Reset</button>
            </div>
        </form>

        <!-- Hasil akan diisi oleh backend. Jika backend mengisi $result, tampilkan di sini -->
        <?php if (!empty($result) ): ?>
            <div class="mt-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Hasil</label>
                <div
                    class="whitespace-pre-wrap p-4 bg-gray-50 border rounded-md text-gray-900">
                    <?= isset($result) ? $result : 'Backend belum menghasilkan output. Silakan implementasikan logic di server.' ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>