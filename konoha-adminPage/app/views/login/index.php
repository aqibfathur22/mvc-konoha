<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login Admin</title>
        <link rel="stylesheet" href="<?=BASEURL?>/src/output.css" />
    </head>
    <body class="bg-gradient-to-l from-sky-700 via-slate-400 to-white flex items-center justify-center min-h-screen">
        <div class="bg-white/50 p-8 rounded-lg shadow-lg w-full max-w-md backdrop-blur-xl">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Login Admin</h2>

            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Pengguna</label>
                    <input
                        type="text"
                        name="nama"
                        required
                        class="w-full px-4 py-2 border border-sky-500 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full px-4 py-2 border border-sky-500 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>

                <div class="flex justify-between items-center text-sm">
                    <label class="flex items-center"> <input type="checkbox" class="mr-2" /> Ingat saya </label>
                    <a href="#" class="text-blue-600 hover:underline">Lupa kata sandi?</a>
                </div>

                <div class="grid grid-cols-1 h-5 mb-5">
                    <a
                        class="w-full bg-blue-600 text-white py-2 rounded-full hover:bg-blue-700 transition duration-300 text-center"
                        href="admin_beranda.html"
                        >Masuk</a
                    >
                </div>
                <div class="grid grid-cols-1 h-5 mt-10 mb-5">
                    <a
                        class="w-full bg-blue-600 text-white py-2 rounded-full hover:bg-blue-700 transition duration-300 text-center"
                        href="admin_daftar.html"
                        >Daftar</a
                    >
                </div>

                <!-- <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300" href="admin_beranda.html">
        Masuk
      </button> -->
            </form>
        </div>
    </body>
</html>
