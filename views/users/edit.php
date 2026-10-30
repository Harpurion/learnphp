<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
  <h1 class="mb-3">Edit user</h1>
  <form action="/admin/users/edit?id=<?= (int) $user->id ?>" method="POST">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input
        value="<?= htmlspecialchars((string) $user->name, ENT_QUOTES, 'UTF-8') ?>"
        name="name"
        type="text"
        class="form-control"
        id="name"
        required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input
        value="<?= htmlspecialchars((string) $user->email, ENT_QUOTES, 'UTF-8') ?>"
        name="email"
        type="email"
        class="form-control"
        id="email"
        required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">New password</label>
      <input
        name="password"
        type="password"
        class="form-control"
        id="password"
        autocomplete="new-password"
        placeholder="Leave blank to keep the current password">
    </div>
    <button type="submit" class="btn btn-primary">Save changes</button>
    <a href="/admin/users" class="btn btn-secondary">Cancel</a>
  </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
