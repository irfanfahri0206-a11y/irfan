<?php
$error = $_GET['error'] ?? '';
$pesan = '';

if ($error === 'register') {
    $pesan = 'Username atau Password Anda Salah';
} elseif ($error === 'invalid') {
    $pesan = 'Username dan Password Harus Diisi';
} elseif ($error === 'belum_register') {
    $pesan = 'Silakan register dahulu';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
</head>
<body>
    <h2>REGISTER</h2>

    <?php if ($pesan !== ''): ?>
        <p style="color: red; font-weight: bold;">
            <?= htmlspecialchars($pesan) ?>
        </p>
    <?php endif; ?>

    <form action="login.php" method="POST">
        <fieldset>
            <p>
                <label for="username">Username:</label><br>
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    placeholder="Masukkan username" 
                    required
                >
            </p>
            <p>
                <label for="password">Password:</label><br>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="Masukkan password" 
                    required
                >
            </p>
            <p>
                <button type="submit">REGISTER</button>
            </p>
        </fieldset>
    </form>
</body>
</html>