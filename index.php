<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="format-detection" content="telephone=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="MobileOptimized" content="176" />
        <meta name="HandheldFriendly" content="True" />
        <meta name="robots" content="index, follow" />
        <meta property="og:site_name" content="Hetop">
        <meta property="og:type" content="article">
        <meta property="og:title" content="αTBOTsender">
        <meta property="og:description" content="Telegram Bot Sender - поможет отправить любые файлы в Ваш канал, сделав наполнение контента удобным и красивым.">
        <meta property="og:image" content="https://hetop.xyz/tbotsender/icon/tbotjumbotron-mobile.jpg">
        <meta name="keywords" content="tbotsender telegram bot отправить аудио как голосовое сообщение видеозаметка">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
        <meta name="theme-color" content="#333" />
        <link rel="shortcut icon" href="./icon/icon52.png" type="image/png">
        <title>αTBOTsender</title>
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/dashboard.css" rel="stylesheet">
        <link rel="manifest" href="manifest.json">
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
                    <a class="navbar-brand" href="./index.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">
                        <span class="label label-primary" >
                            <small style="font-size: 12px;">α</small>TBOT<small style="font-size: 11px">sender</small>
                        </span>
                    </a>
                    <div class="nav navbar-right" style="padding-top:15px;">
                        <?php
                            $a = $_REQUEST['token'];
                            if ($a == null) {
                            echo ' ';
                            } else {
                            echo '<span class="label label-success">Токен есть</span>
                                            ';
                            }
                            ?>
                                            <?php
                            $a =$_REQUEST['chat_id'];
                            if ($a == null) {
                            echo ' ';
                            } else {
                            echo ' <span class="label label-success">Канал есть</span>
                                        ';
                            }
                         ?>
            </div>
        </div>
        <div class="navbar-collapse collapse">
            <ul id="hetop" class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="./index.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Стартовая страница</a>
                </li>
                <li>
                    <a href="./sendmessage.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить сообщение</a>
                </li>
                <li>
                    <a href="./senddocument.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить документ</a>
                </li>
                <li>
                    <a href="./sendphoto.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить фото</a>
                </li>
                <li>
                    <a href="./sendaudio.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить аудио</a>
                </li>
                <li>
                    <a href="./sendvideo.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить видео</a>
                </li>
                <li>
                    <a href="./sendsticker.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить стикер</a>
                </li>
                <li>
                    <a href="./sendvoice.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить голосовое сообщение</a>
                </li>
                <li>
                    <a href="./sendvideonote.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить видеозаметку</a>
                </li>
                <ol style="list-style: none">
                    <li class="active navbar-right" style="text-align: right; font-size: 11px; color: grey; margin-right: 15px;">
                        Telegram Bot Sender v.0.5.3α
                        <br>created by hetop</li>
                </ol>
            </ul>
        </div>
    </div>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active">
                    <a href="./index.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Стартовая страница</a>
                </li>
                <li>
                    <a href="./sendmessage.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить сообщение</a>
                </li>
                <li>
                    <a href="./senddocument.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить документ</a>
                </li>
                <li>
                    <a href="./sendphoto.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить фото</a>
                </li>
                <li>
                    <a href="./sendaudio.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить аудио</a>
                </li>
                <li>
                    <a href="./sendvideo.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить видео</a>
                </li>
                <li>
                    <a href="./sendsticker.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить стикер</a>
                </li>
                <li>
                    <a href="./sendvoice.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить голосовое сообщение</a>
                </li>
                <li>
                    <a href="./sendvideonote.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Отправить видеозаметку</a>
                </li>
            </ul>
            <ol class="breadcrumb">
                <li class="active navbar-right" style="text-align: right; font-size: 11px;">
                    Telegram Bot Sender v.0.5.3α
                    <br>created by hetop</li>
            </ol>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <img class="maxis" src="./icon/tbotjumbotron.jpg" width="100%" style="position: relative; top: 2px; border-radius: 4px 4px 0 0;">
            <img class="minis" src="./icon/tbotjumbotron-mobile.jpg" width="100%" style="position: relative; top: 2px; border-radius: 4px 4px 0 0;">
            <div class="jumbotron" style="padding-top: 30px; padding-bottom: 30px;">
                <h3>Привет!</h3>
                Telegram Bot Sender - поможет отправить любые файлы в Ваш канал, сделав наполнение контента удобным и красивым. Основная цель создания такого помощника - это отправка песен в виде голосовых сообщений и клипов в виде видеозаметок. Чтобы начать пользоваться приложением перейдите в
                <a class="href" href="#settings">настройки</a>, установите токен бота и адрес канала. Если у Вас еще нет бота или вы не можете разобраться, жмите кнопку
                <a class="href" href="./moreinfo.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">узнать больше</a>, или переходите на наш
                <a class="href" href="https://www.youtube.com/watch?v=pJfqiq5WLqg&list=PLClAGeR9odSKBd24e8UtEXygU6DurshCE" target="_blank">Youtube канал</a>, где мы рассказываем как сделать канал в Telegram красивее!
                <br>
                <br>
                <p>
                    <a class="btn btn-primary btn-lg" role="button" href="./moreinfo.php?token=<?php echo $_REQUEST['token']; ?>&chat_id=<?php echo $_REQUEST['chat_id']; ?>">Узнать больше</a>
                </div>
            </p>
            <div class="jumbotron">
                <a name="settings"></a>
                <h3>Настройки</h3>
                <br>
                <form>
                    <div class="input-group">
                        <span class="input-group-addon">Токен</span>
                        <input type="text" class="form-control" value="<?php echo $_REQUEST['token']; ?>" name="token"></div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon">Канал</span>
                        <input type="text" class="form-control" value="<?php echo $_REQUEST['chat_id']; ?>" name="chat_id"></div>
                    <br>
                    <input class="btn btn-primary btn-lg" role="button" type="submit" value="Применить"></form>
              </div>
            </div>
        </div>
    </div>
        <script src="./css/jquery.min.js"></script>
        <script src="./css/bootstrap.min.js"></script>
        <script src="./css/docs.min.js"></script>
    </body>
</html>