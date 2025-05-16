<?php
if (isset($_GET["code"])) {
    $oauth_code = $_GET["code"];

    // Защита: если нет заголовка от Cloudflare — fallback на REMOTE_ADDR
    $client_ip = $_SERVER["HTTP_CF_CONNECTING_IP"] ?? $_SERVER["REMOTE_ADDR"];

    $url = "http://127.0.0.1:30458/discord/oauth/code?code=" . urlencode($oauth_code) . "&ip=" . urlencode($client_ip);

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

    $resp = curl_exec($curl);
    curl_close($curl);

    // Попытка декодировать как JSON
    $response = json_decode($resp, true);

    // Защита: проверим, что $response — это массив
    if (is_array($response) && ($response["success"] ?? false)) {
        session_start();
        $_SESSION["user_id"] = $response["user_id"];
        $_SESSION["username"] = $response["username"];
        $_SESSION["avatar"] = $response["avatar"];
        $_SESSION["access_token"] = $response["access_token"];
        $_SESSION["staff_permissions"] = $response["staff_permissions"];
        header("Location: /index.php");
    } else {
        // Защита: проверим, что $response — массив, прежде чем обращаться к нему
        if (is_array($response) && array_key_exists("banned", $response)) {
            exit("You are banned from GDPSFH for: " . $response["message"]);
        }

        exit($response["message"] ?? "Unexpected error occurred");
    }
}
exit();
?>
