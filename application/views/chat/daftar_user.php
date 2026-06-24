<!DOCTYPE html>
<html>
<head>

<title>Chat User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#0f172a;
    color:white;
}

.chat-wrapper{
    max-width:900px;
    margin:30px auto;
}

.page-title{
    color:white;
    font-weight:bold;
    margin-bottom:25px;
}

.chat-item{
    background:#1e293b;
    border-radius:12px;
    padding:15px 20px;
    margin-bottom:12px;

    display:flex;
    justify-content:space-between;
    align-items:center;

    text-decoration:none;
    color:white;

    transition:.3s;
}

.chat-item:hover{
    background:#334155;
    color:white;
}

.user-info{
    flex:1;
}

.username{
    font-size:18px;
    font-weight:bold;
}

.last-message{
    color:#cbd5e1;
    font-size:14px;
    margin-top:4px;
}

.right-side{
    text-align:right;
    min-width:80px;
}

.time{
    font-size:12px;
    color:#94a3b8;
}

.badge-chat{
    background:red;
    color:white;

    width:24px;
    height:24px;

    border-radius:50%;

    display:flex;
    align-items:center;
    justify-content:center;

    margin-left:auto;
    margin-top:5px;
}
body{
    min-height:100vh;

    background:linear-gradient(
        90deg,
        #08132f 0%,
        #1a2745 50%,
        #2e2c7a 100%
    );

    color:white;
}


</style>

</head>

<body>

<?php $this->load->view('admin/navbar'); ?>

<div class="container">

<div class="chat-wrapper">

<h2 class="page-title">
💬 Chat User
</h2>

<?php if(empty($users)): ?>

<div class="alert alert-secondary">
Belum ada user yang menghubungi admin.
</div>

<?php endif; ?>

<?php foreach($users as $user): ?>

<a
href="<?= site_url('chat/'.$user->id) ?>"
class="chat-item">

<div class="user-info">

<div class="username">
<?= $user->username ?>
</div>

<div class="last-message">

<?= !empty($user->last_message)
    ? $user->last_message
    : 'Belum ada pesan'
?>

</div>

</div>

<div class="right-side">

<div class="time">

<div class="time">

<?= !empty($user->last_time)
    ? date('d/m H:i', strtotime($user->last_time))
    : ''
?>

</div>

</div>

<?php if(!empty($user->unread) && $user->unread > 0): ?>

<div class="badge-chat">
<?= $user->unread ?>
</div>

<?php endif; ?>

</div>

</a>

<?php endforeach; ?>

</div>

</div>

</body>
</html>