<?php
$error = $_GET['error'] ?? '';
$pesan = 'Masukan us & pw';
if ($error === 'login') {
    $pesan = 'Username dan Password Anda Salah';
} elseif ($error === 'invalid') {
    $pesan = 'Username dan Password Harus Diisi';
} elseif ($error === 'belum_login') {
    $pesan = 'Silakan login dahulu';
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2> LOGINN
    </h2>
    <?php if ($pesan !== ''): ?>
        <p>
            <?= htmlspecialchars($pesan) ?>
        </p>
    <?php endif; ?>
    <form action="dashboard.php" method="POST">
        <fieldset>
            <p>
                <label for="username">
                    Username:
                </label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="masukkan username "
                >
            </p>
            <p>
                <label for="password">
                    Password:
                </label>
                <input
                    type="text"
                    name="password"
                    placeholder="masukkan password"
                >
            </p>
            <p>
              <button type="submit">
                    LOGIN
                </button>
            </p>
        </fieldset>
    </form>
    <p>
 </a>
    </p>
</body>
</html>