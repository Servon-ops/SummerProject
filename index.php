<form class="form-send" action="index.php" method="post">
    <input class="send-input" name='name' type="text" value=""/>
</form>
<?php
if ($_POST == null) {
}
else {
    $message = $_POST['name'];
    $messages = array();
// токен бота
    define('TELEGRAM_TOKEN', '6965372309:AAHWsZdl8fdJjv5dbDwWI1EAbH4IoN5yQ58');
// ваш внутренний ID
    define('TELEGRAM_CHATID', '1035151148');
    $ch = curl_init('https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage?chat_id=' . TELEGRAM_CHATID . '&text=' . $message); // URL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Не возвращать ответ
    curl_exec($ch); // Делаем запрос
    curl_close($ch); // Завершаем сеанс cURL
    curl_setopt($ch, CURLOPT_PROXY, "127.0.03.1:8080");
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
}
?>



