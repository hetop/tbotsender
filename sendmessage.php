<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#333">
    <link rel="shortcut icon" href="./icon/icon52.png" type="image/png">
    <title>Отправить сообщение — αTBOTsender</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./index.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>"><span class="label label-primary" ><small style="font-size: 12px;">α</small>TBOT<small style="font-size: 11px">sender</small></span></a>
          <div class="nav navbar-right" style="padding-top:15px;">
            <?php
            $a = $_REQUEST['token'];
            if ($a == null) {
              echo '<span class="label label-danger">Нет токена</span>';
            } else {
              echo '<span class="label label-success">Токен есть</span>';
            }
            ?>
            <?php
            $a =$_REQUEST['chat_id'];
            if ($a == null) {
              echo ' <span class="label label-danger">Нет канала</span>';
            } else {
              echo ' <span class="label label-success">Канал есть</span>';
            }
            ?> 
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <ul id="hetop" class="nav navbar-nav navbar-right">
            <li><a href="./index.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Стартовая страница</a></li>  
            <li class="active"><a href="./sendmessage.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить сообщение</a></li>  
            <li><a href="./senddocument.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить документ</a></li>
            <li><a href="./sendphoto.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить фото</a> </li>
            <li><a href="./sendaudio.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить аудио</a> </li>
            <li><a href="./sendvideo.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить видео</a> </li>
            <li><a href="./sendsticker.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить стикер</a> </li>
            <li><a href="./sendvoice.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить голосовое сообщение</a> </li>
            <li><a href="./sendvideonote.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить видеозаметку</a></li>
            <ol style="list-style: none">
              <li class="active navbar-right" style="text-align: right; font-size: 11px; color: grey; margin-right: 15px;">Telegram Bot Sender v.0.6.1α<br>created by hetop</li>
            </ol>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="./index.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Стартовая страница</a></li>  
            <li class="active"><a href="./sendmessage.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить сообщение</a></li>  
            <li><a href="./senddocument.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить документ</a></li>
            <li><a href="./sendphoto.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить фото</a> </li>
            <li><a href="./sendaudio.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить аудио</a> </li>
            <li><a href="./sendvideo.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить видео</a> </li>
            <li><a href="./sendsticker.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить стикер</a> </li>
            <li><a href="./sendvoice.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить голосовое сообщение</a> </li>
            <li><a href="./sendvideonote.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить видеозаметку</a></li>
          </ul>
          <ol class="breadcrumb">
            <li class="active navbar-right" style="text-align: right; font-size: 11px;">Telegram Bot Sender v.0.6.1α<br>created by hetop</li>
          </ol>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         <div class="alert alert-info">Вы можете использовать <a class="href" href="./moreinfo.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Markdown</a> для форматирования текста.</div>
          <h3>Отправить сообщение <small></small></h3>
          <form action="<?php echo "https://telegg.ru/orig/bot"?><?php echo $_REQUEST['token']; ?><?php echo "/sendMessage" ?>" method="post" enctype="multipart/form-data">
            <input type="text" name="chat_id" value="<?php echo $_REQUEST['chat_id']; ?>" style="display: none;" />
            <input type="text" name="parse_mode" value="markdown" style="display: none;" />
            <div class="input-group">
              <textarea class="form-control" type="text" name="text" rows="1" style="resize: none;"></textarea>
              <span class="input-group-btn">
                <input class="btn btn-primary" type="submit" value="Отправить">
              </span>
            </div>
          </form><h3>Ответ API-сервера</h3>
          <div id="api" class="textbox"><p><b>Статус: </b>Ожидается ответ сервера</p></div><br>
          <pre class="textbox"><code id="json">{}</code></pre>
       </div>
     </div>
   </div>
  </div>
  <script src="./css/jquery.min.js"></script>
  <script src="./css/bootstrap.min.js"></script>
  <script src="./css/docs.min.js"></script>
  <script>
      $(function(){
        $('form').on('submit', function(e){
          e.preventDefault();
          var $that = $(this),
          formData = new FormData($that.get(0));
          $.ajax({
            url: $that.attr('action'),
            type: $that.attr('method'),
            contentType: false,
            processData: false,
            data: formData,
            dataType: 'json',
            xhr: function(){
              var xhr = $.ajaxSettings.xhr();
              return xhr;
            },
            success: function(json, status, success){
              if (json.result.chat.type == 'channel') {
                var recipient = json.result.chat.title;
              }else{
                var recipient = (json.result.chat.first_name + ' ' + json.result.chat.last_name);
              }
                var recipient = recipient.replace('undefined','');
              $('#api').html('<p><b>Статус: </b>Отправлено</p><p><b>ID сообщения: </b>' + json.result.message_id + '</p><p><b>Текст: </b>' + json.result.text + '</p><p><b>Получатель: </b>' + recipient + ' (<a href="https://tggm.ga/' + json.result.chat.username + '">@' + json.result.chat.username + '</a>)' + '</p>');
              $('#json').html(JSON.stringify(json));
              $('textarea').val('');
            },
            error: function(xhr, status, error) {
              var json = $.parseJSON(xhr.responseText);
              $('#api').html('<p><b>Статус: </b>Не отправлено</p><p><b>Код ошибки: </b>' + json.error_code + '</p><p><b>Описание ошибки: </b>' + json.description + '</p>');
              $('#json').html(JSON.stringify(json));
            }
          });
        });
      });
      var chat_id = location.toString().slice(location.toString().search(/&chat_id=/)+0);
      var token = location.toString().slice(location.toString().search(/token=/)+6);
      var getUpdates = $.getJSON('https://telegg.ru/orig/bot' + token.replace(chat_id, '') + '/getUpdates', function(json, status, success){
        $('#api').html('<p><b>Статус: </b>Работает</p><p><b>Сервер: </b>https://telegg.ru/orig/</p><p><b>Токен: </b>' + token.replace(chat_id, '') + '</p>');
        $('#json').html(JSON.stringify(json));
      });
      getUpdates.fail(function(xhr, status, error) {
        var json = $.parseJSON(xhr.responseText);
        $('#api').html('<p><b>Статус: </b>Не работает</p><p><b>Код ошибки: </b>' + json.error_code + '</p><p><b>Описание ошибки: </b>' + json.description + '</p>');
        $('#json').html(JSON.stringify(json));
      })
  </script>
  </body>
</html>