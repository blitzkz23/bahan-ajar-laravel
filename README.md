# bahan-ajar-laravel

# Mulai Project

1. Buat project
composer create-project laravel/laravel crud-user

2. Jalankan project
php artisan serve

3. Ganti settingan .env untuk konfigurasi DB
4. Jalankan migrasi database
php artisan migrate
5. Buat model, migration, dan controller untuk User
php artisan make:model User -mcr
6. Pada database/migration sesuaikai yang perlu diedit
7. Pada controller buat logic2 yang diperlukan
8. Buat routing pada routes/web.php agar controller terdeteksi
9. Buat view yang berkaitan pada folder resources/view/auth
10 Jadi deh
11. Kalo mau edit styling di public.css lalu embed stylesheet di resources/views

11. Semisal mau menambah fitur baru tinggal ikuti alur
buat model(apabila perlu) -> buat route -> buat controller dan logicnya -> buat viewnya
