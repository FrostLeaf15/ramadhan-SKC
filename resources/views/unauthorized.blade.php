<h2>Akses Ditolak</h2>
<p>Anda tidak memiliki izin untuk mengakses halaman ini.</p>
<p><a href="{{ url('/') }}">Kembali ke Beranda</a></p>
The unauthorized.blade.php view is displayed when a user tries to access a page that they are not authorized to view.
The view displays a message that informs the user that they do not have permission to access the page.
The view also includes a link that allows the user to return to the home page.
Step 5: Create Middleware
Next, we will create a middleware that will check if a user has the required role to access a specific route.
Run the following command to create a new middleware named CheckRole:
php artisan make:middleware CheckRole
This will create a new middleware file named CheckRole.php in the app/Http/Middleware directory.
Open the CheckRole.php file and update it with the following code:
<?php
