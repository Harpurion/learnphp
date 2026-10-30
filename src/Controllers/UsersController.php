<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function index()
    {
        $users = User::all();
        $title = 'Users';
        view('users/index', compact('title', 'users'));
    }

    public function view()
    {
        $user = $this->findUser();
        if ($user) {
            $title = $user->name;
            view('users/view', compact('title', 'user'));
        } else {
            echo 404;
        }
    }

    public function edit()
    {
        $user = $this->findUser();
        if ($user) {
            $title = 'Edit user';
            view('users/edit', compact('title', 'user'));
        } else {
            echo 404;
        }
    }

    public function update()
    {
        $user = $this->findUser();
        if (!$user) {
            echo 404;
            return;
        }

        $user->name = $_POST['name'] ?? '';
        $user->email = $_POST['email'] ?? '';

        $password = $_POST['password'] ?? '';
        if ($password !== '') {
            $user->password = password_hash($password, PASSWORD_BCRYPT);
        }

        $user->save();
        redirect('/admin/users');
    }

    public function delete()
    {
        $user = $this->findUser();
        if ($user) {
            $user->delete();
            redirect('/admin/users');
        } else {
            echo 404;
        }
    }

    public function confirmDelete()
    {
        $user = $this->findUser();
        if ($user) {
            $title = 'Delete user';
            view('users/delete', compact('title', 'user'));
        } else {
            echo 404;
        }
    }

    private function findUser()
    {
        return User::find((int) ($_GET['id'] ?? 0));
    }
}
