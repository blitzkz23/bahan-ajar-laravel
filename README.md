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

6. Pada database/migration sesuaikan yang perlu diedit

7. Pada controller buat logic2 yang diperlukan
8. Buat routing pada routes/web.php agar controller terdeteksi
9. Buat view yang berkaitan pada folder resources/view/auth
10 Jadi deh
11. Kalo mau edit styling di public.css lalu embed stylesheet di resources/views

11. Semisal mau menambah fitur baru tinggal ikuti alur
buat model(apabila perlu) -> buat route -> buat controller dan logicnya -> buat viewnya

# Integrasi livewire
1. Install
composer require livewire/livewire

2. Buat Component
php artisan make:livewire Counter(sesuaikan)
Ini akan membuat:

app/Http/Livewire/Counter.php (logic)
resources/views/livewire/counter.blade.php (UI)

3. Sesuaikan logic Counter.php

4. Embedd component ke template

@livewire('counter')


# Tambah tailwind pada project
1. Install
npm install tailwindcss @tailwindcss/vite
2. 2️⃣ Konfigurasi vite.config.js
3. Import tailwind css
@import 'tailwindcss';
4. npm run watch

