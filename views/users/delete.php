<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
  <h1 class="mb-3">Delete user</h1>
  <p>
    Are you sure you want to delete
    <strong><?= htmlspecialchars((string) $user->name, ENT_QUOTES, 'UTF-8') ?></strong>
    (<?= htmlspecialchars((string) $user->email, ENT_QUOTES, 'UTF-8') ?>)?
  </p>
  <form action="/admin/users/delete?id=<?= (int) $user->id ?>" method="POST">
    <button type="submit" class="btn btn-danger">Delete user</button>
    <a href="/admin/users" class="btn btn-secondary">Cancel</a>
  </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
