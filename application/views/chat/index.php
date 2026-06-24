<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Chat</title>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>

body{
    margin:0;
    background:#0f172a;
    color:white;
    font-family:Arial,sans-serif;
}

.chat-box{
    height:500px;
    overflow-y:auto;
    padding:15px;
    background:#0b132b;
}

.message{
    margin-bottom:15px;
    clear:both;
}

.me{
    text-align:right;
}

.them{
    text-align:left;
}

.bubble{
    display:inline-block;
    padding:10px 15px;
    border-radius:12px;
    max-width:350px;
    color:white;
    word-wrap:break-word;
}

.me .bubble{
    background:#2563eb;
}

.them .bubble{
    background:#334155;
}

.chat-image{
    max-width:250px;
    margin-top:5px;
    border-radius:8px;
    display:block;
}

.chat-time{
    font-size:11px;
    opacity:.7;
    margin-top:5px;
}

.me .chat-time{
    text-align:right;
}

.them .chat-time{
    text-align:left;
}

.chat-form{
    padding:10px;
    background:#1e293b;
    display:flex;
    gap:10px;
    align-items:center;
}

.chat-form textarea{
    flex:1;
    height:60px;
    resize:none;
    border:none;
    border-radius:8px;
    padding:10px;
}

.chat-form button{
    background:#22c55e;
    color:white;
    border:none;
    padding:10px 20px;
    border-radius:8px;
    cursor:pointer;
}

.chat-form button:hover{
    background:#16a34a;
}

.file-btn{
    color:white;
}

</style>

</head>
<body>

<div id="chat-box" class="chat-box"></div>

<form id="chatForm" class="chat-form">

<input
type="hidden"
name="receiver_id"
value="<?= $receiver_id ?>">

<input
type="file"
id="imageUpload"
name="image"
class="file-btn"
accept="image/*">

<textarea
name="message"
placeholder="Ketik pesan..."></textarea>

<button type="submit">
Kirim
</button>

</form>

<script>

function loadChat()
{
    $.ajax({

        url:"<?= site_url('chat/get_messages/'.$receiver_id) ?>",

        type:"GET",

        dataType:"json",

        success:function(chats)
        {
            let html='';

            let myId = <?= (int)$this->session->userdata('id') ?>;

            chats.forEach(function(chat){

                let cls =
                    chat.sender_id == myId
                    ? 'me'
                    : 'them';

                html += `
<div class="message ${cls}">

    <div class="bubble">

        ${chat.message ? chat.message : ''}

        ${
            chat.image
            ?
            `<br>
            <img
            src="<?= base_url('uploads/chat/') ?>${chat.image}"
            class="chat-image">`
            :
            ''
        }

        <div class="chat-time">
    ${
        new Date(chat.created_at)
        .toLocaleString(
            'id-ID',
            {
                day:'2-digit',
                month:'2-digit',
                year:'numeric',
                hour:'2-digit',
                minute:'2-digit'
            }
        )
    }
</div>

    </div>

</div>`;
            });

            $('#chat-box').html(html);

            $('#chat-box').scrollTop(
                $('#chat-box')[0].scrollHeight
            );
        }
    });
}

loadChat();

setInterval(loadChat,2000);

$('#chatForm').submit(function(e){

    e.preventDefault();

    $.ajax({

        url:"<?= site_url('chat/send') ?>",

        type:"POST",

        data:{
            receiver_id:$('input[name="receiver_id"]').val(),
            message:$('textarea[name="message"]').val()
        },

        success:function()
        {
            $('textarea[name="message"]').val('');
            loadChat();
        }

    });

});

$('#imageUpload').change(function(){

    let formData = new FormData();

    formData.append(
        'image',
        this.files[0]
    );

    formData.append(
        'receiver_id',
        $('input[name="receiver_id"]').val()
    );

    formData.append(
        'message',
        ''
    );

    $.ajax({

        url:"<?= site_url('chat/send') ?>",

        type:"POST",

        data:formData,

        contentType:false,

        processData:false,

        success:function()
        {
            $('#imageUpload').val('');
            loadChat();
        }

    });

});

</script>

</body>
</html>