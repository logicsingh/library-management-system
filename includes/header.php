<?php require_once __DIR__.'/functions.php'; $pageTitle=$pageTitle??'Dashboard'; ?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($pageTitle) ?> | LibraryDesk</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"><link href="assets/style.css" rel="stylesheet"></head><body>
<nav class="navbar navbar-expand-lg navbar-dark app-nav"><div class="container"><a class="navbar-brand fw-bold" href="index.php">📚 LibraryDesk</a>
<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="nav"><div class="navbar-nav ms-auto">
<a class="nav-link" href="index.php">Dashboard</a><a class="nav-link" href="books.php">Books</a><a class="nav-link" href="members.php">Members</a><a class="nav-link" href="loans.php">Issue / Return</a></div></div></div></nav>
<main class="container py-4"><?php show_flash(); ?>
