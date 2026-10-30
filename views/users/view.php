<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
  <h1 class="mb-3">User details</h1>
  <table class="table table-hover table-striped">
    <tbody>
      <tr>
        <th>ID</th>
        <td><?= (int) $user->id ?></td>
      </tr>
      <tr>
        <th>Name</th>
        <td><?= htmlspecialchars((string) $user->name, ENT_QUOTES, 'UTF-8') ?></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><?= htmlspecialchars((string) $user->email, ENT_QUOTES, 'UTF-8') ?></td>
      </tr>
      <tr>
        <th>Password hash</th>
        <td><?= htmlspecialchars((string) $user->password, ENT_QUOTES, 'UTF-8') ?></td>
      </tr>
    </tbody>
  </table>
  <a href="/admin/users" class="btn btn-secondary">Back to users</a>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
