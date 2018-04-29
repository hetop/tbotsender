<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content=""><meta name="theme-color" content="#333" />
        <link rel="shortcut icon" href="./icon/icon52.png" type="image/png">
        <title>Справка — αTBOTsender</title>
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/dashboard.css" rel="stylesheet">
        <style id="holderjs-style" type="text/css"></style>
    </head>
    <body style="">
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
                            echo ' ';
                        } else {
                            echo '<span class="label label-success">Токен есть</span>';
                        }
                        ?>
                        <?php
                        $a =$_REQUEST['chat_id'];
                        if ($a == null) {
                            echo ' ';
                        } else {
                            echo ' <span class="label label-success">Канал есть</span>';
                        }
                        ?> 
                    </div>
                </div>
                <div class="navbar-collapse collapse">
                    <ul id="hetop" class="nav navbar-nav navbar-right">
                        <li><a href="./index.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Стартовая страница</a></li>  
                        <li><a href="./sendmessage.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить сообщение</a></li>  
                        <li><a href="./senddocument.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить документ</a></li>
                        <li><a href="./sendphoto.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить фото</a> </li>
                        <li><a href="./sendaudio.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить аудио</a> </li>
                        <li><a href="./sendvideo.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить видео</a> </li>
                        <li><a href="./sendsticker.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить стикер</a> </li>
                        <li><a href="./sendvoice.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить голосовое сообщение</a> </li>
                        <li><a href="./sendvideonote.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить видеозаметку</a></li>
                        <ol style="list-style: none">
                            <li class="active navbar-right" style="text-align: right; font-size: 11px; color: grey; margin-right: 15px;">Telegram Bot Sender v.0.5.3α<br>created by hetop</li>
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
                        <li><a href="./sendmessage.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить сообщение</a></li>  
                        <li><a href="./senddocument.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить документ</a></li>
                        <li><a href="./sendphoto.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить фото</a> </li>
                        <li><a href="./sendaudio.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить аудио</a> </li>
                        <li><a href="./sendvideo.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить видео</a> </li>
                        <li><a href="./sendsticker.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить стикер</a> </li>
                        <li><a href="./sendvoice.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить голосовое сообщение</a> </li>
                        <li><a href="./sendvideonote.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить видеозаметку</a></li>
                    </ul>
                    <ol class="breadcrumb">
                        <li class="active navbar-right" style="text-align: right; font-size: 11px;">Telegram Bot Sender v.0.5.3α<br>created by hetop</li>
                    </ol>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <img class="maxis" src="./icon/tbotjumbotron.jpg" width="100%" style="position: relative; top: 2px; border-radius: 4px 4px 0 0;">
                    <img class="minis" src="./icon/tbotjumbotron-mobile.jpg" width="100%" style="position: relative; top: 2px; border-radius: 4px 4px 0 0;">
                    <div class="jumbotron" style="padding-top: 30px; padding-bottom: 30px;">
                        <a name="message"></a>
                        <h3>Сообщение</h3>
                        <span>Отправка простых текстовых сообщений, в том числе и многострочных, с использованием стилей разметки <b>Markdown</b>.</span>
                        <pre class="alert-info">
*жирный*
_курсив_
[ссылка](http://www.example.com/)
[ссылка на пользователя](tg://user?id=123456789)
`однострочный код`
```многострочный
блок кода
```</pre>
                        <a name="document"></a>
                        <h3>Документы</h3>
                        <span>Отправка любых документов, фотографий без сжатия или архивов. Органичение на размер файла <b>50Мб</b></span>
                        <a name="photo"></a>
                        <h3>Фото</h3>
                        <span>Отправка фотографий, формат файла .jpg, ограничение на размер файла <b>10Мб</b></span>
                        <a name="audio"></a>
                        <h3>Аудио</h3>
                        <span>Отправка аудиофайлов, формат файла .mp3, ограничение на размер файла <b>50Мб</b></span>
                        <a name="video"></a>
                        <h3>Видео</h3>
                        <span>Отправка видеозаписей, формат файла .mp4, кодек h.264, ограничение на размер файла <b>50Мб</b></span>
                        <div class="alert alert-info"><b>Важно!</b> Если кодек не соответствует h.264, то видео отправится без превью, и будет выглядеть как черный квадрат.</div>
                        <a name="sticker"></a>
                        <h3>Стикер</h3>
                        <span>Отправка изображений в виде стикеров, формат файла .png, ограничение на размер файла <b>10Мб</b></span>
                        <a name="voice"></a>
                        <h3>Голосовое сообщение</h3>
                        <span>Отправка аудиофайлов в виде голосовых сообщений, формат файла .ogg, кодек opus, ограничение на размер файла <b>10Мб</b></span>
                        <div class="alert alert-info"><b>Важно!</b> Если кодек не соответствует opus, то сообщение будет без пиков (эквалайзера) и возможны проблемы при воспроизведении на iOS и Android.<br>Скачайте <a target="_blank" href="https://dl.dropboxusercontent.com/s/4lixvidln8zilmm/OpusEncoder.zip">конвертер mp3⇒opus-ogg</a> и посмотрите <a target="_blank" href="https://youtu.be/3zXNpuARS9o">видеоинструкцию</a> чтобы не возникало ошибок при отправке.</div>
                        <a name="videonote"></a>
                        <h3>Видеозаметка</h3>
                        <span>Отправка видеофайлов в виде видеозаметок, формат файла .mp4,кодек h.264,разрешение файла не более 720х720px, соотношение 1 к 1 (квадрат) обязательно. Ограничение на размер файла <b>10Мб</b>.<br>
                            Вы можете посмотреть <a target="_blank" href="https://youtu.be/bca240DvIyM">видеоинструкцию</a>, чтобы понять как отправлять видеозаметки.</span>
                        </div>
                    </div>
                </div>
            </div>
            <script src="./css/jquery.min.js"></script>
            <script src="./css/bootstrap.min.js"></script>
            <script src="./css/docs.min.js"></script>
            <style>
            .main a{
                font-weight: bold;
                color: #31708f;
                text-decoration: underline;
            }
            img{
                user-select: none;
            }
            pre::before {
                content: 'Синтаксис разметки: ';
                font-weight: bold;
                display: block;
                padding-bottom: 10px;
            }
        </style>
    </body>
</html>