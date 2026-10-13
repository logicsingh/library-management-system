<?php
require 'config.php'; require 'includes/functions.php'; $pdo=db();
$books=(int)$pdo->query('SELECT COUNT(*) FROM books')->fetchColumn();
$members=(int)$pdo->query('SELECT COUNT(*) FROM members')->fetchColumn();
$loans=(int)$pdo->query("SELECT COUNT(*) FROM loans WHERE status='issued'")->fetchColumn();
$overdue=(int)$pdo->query("SELECT COUNT(*) FROM loans WHERE status='issued' AND due_date<CURDATE()")->fetchColumn();
$recent=$pdo->query("SELECT l.*,b.title,m.full_name FROM loans l JOIN books b ON b.id=l.book_id JOIN members m ON m.id=l.member_id ORDER BY l.id DESC LIMIT 5")->fetchAll();
$pageTitle='Dashboard'; require 'includes/header.php'; ?>
<section class="hero p-4 p-md-5 mb-4"><small>LIBRARY OPERATIONS</small><h1 class="display-6 fw-bold mt-2">A clearer view of your library.</h1><p class="lead">Manage books, members, and borrowing in one place.</p><a class="btn btn-light me-2" href="books.php?action=add">Add a book</a><a class="btn btn-outline-light" href="loans.php?action=issue">Issue a book</a></section>
<div class="row g-3 mb-4"><?php foreach([['Book titles',$books],['Members',$members],['Books on loan',$loans],['Overdue loans',$overdue]] as [$label,$count]): ?><div class="col-6 col-lg-3"><div class="stat"><span><?= e($label) ?></span><strong><?= $count ?></strong></div></div><?php endforeach; ?></div>
<section class="panel"><div class="d-flex justify-content-between"><h2 class="h5">Recent borrowing</h2><a href="loans.php">View all</a></div>
<div class="table-responsive"><table class="table align-middle"><thead><tr><th>Book</th><th>Member</th><th>Issued</th><th>Due</th><th>Status</th></tr></thead><tbody>
<?php foreach($recent as $r): ?><tr><td><?= e($r['title']) ?></td><td><?= e($r['full_name']) ?></td><td><?= e($r['issue_date']) ?></td><td><?= e($r['due_date']) ?></td><td><?= e(ucfirst($r['status'])) ?></td></tr><?php endforeach; ?>
<?php if(!$recent): ?><tr><td colspan="5" class="text-center text-secondary py-4">No loans yet. Add a book and a member to begin.</td></tr><?php endif; ?></tbody></table></div></section>
<?php require 'includes/footer.php'; ?>
