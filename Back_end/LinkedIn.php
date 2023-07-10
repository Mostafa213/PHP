<?php

namespace myPHPNotes;

class LinkedIn
{
    protected $app_id;
    protected $app_secret;
    protected $callback;
    protected $csrf;
    protected $scopes;
    protected $ssl;
    protected $accessToken;
    public function __construct(string $app_id, string $app_secret, string $callback, string $scopes, bool $ssl = true)
    {
        $this->app_id = $app_id;
        $this->app_secret = $app_secret;
        $this->scopes =  $scopes;
        $this->csrf = random_int(111111, 99999999999);
        $this->callback = $callback;
        $this->ssl = $ssl;
    }
    public function getAuthUrl()
    {
        $_SESSION['linkedincsrf']  = $this->csrf;
        return "https://www.linkedin.com/oauth/v2/authorization?response_type=code&state=" . $this->csrf . "&scope=" . $this->scopes . "&client_id=" . $this->app_id . "&redirect_uri=" . 'http%3A%2F%2Flocalhost%2FApplicant%2520Quiz%2520-%2520Edit%2Fpages%2Fcallback.php';
    }
    public function getAccessToken($code)
    {
        $url = "https://www.linkedin.com/oauth/v2/accessToken";
        $params = [
            "grant_type" => "authorization_code",
            "code" => $code,
            "redirect_uri" => $this->callback,
            "client_id" => $this->app_id,
            "client_secret" => $this->app_secret,
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        print_r ($params);
        $response = curl_exec($ch);
        curl_close($ch);
        print_r ($response);
        $access_token = json_decode($response)->access_token;
        $this->accessToken = $access_token;
        return $access_token;
    }
    public function getPerson()
    {
        $url = "https://api.linkedin.com/v2/me?projection=(id,firstName,localizedFirstName,lastName,localizedLastName,maidenName,email,localizedMaidenName,headline,localizedHeadline,websites,vanityName,profilePicture(displayImage~:playableStreams))&oauth2_access_token=" . $this->accessToken;
        $params = [];
        $response = $this->curl($url, http_build_query($params), "application/x-www-form-urlencoded", false);
        $person = json_decode($response,true);
        return $person;
    }
    public function getEmail()
    {
        $url = "https://api.linkedin.com/v2/emailAddress?q=members&projection=(elements*(handle~))&oauth2_access_token=" . $this->accessToken;
        $params = [];
        $response = $this->curl($url, http_build_query($params), "application/x-www-form-urlencoded", false);
        $emailObject = json_decode($response,true);
        return $emailObject;
    }
    protected function curl($url, $parameters, $content_type, $post = true)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->ssl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
        curl_setopt($ch, CURLOPT_POST, $post);
        $headers = [];
        $headers[] = "Content-Type: {$content_type}";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return $result;
    }
}
