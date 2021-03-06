<?php
/*
 * Copyright (C) 2013 Tony Gaitatzis
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * Author: Tony Gaitatzis - http://www.linkedin.com/in/tonygaitatzis
 * This code complements the online tutorial:
 * http://20missionglass.tumblr.com/post/60787835108/programming-an-oauth2-client-app-in-php
 */
 header('Access-Control-Allow-Origin: *');  
require('config.php');

$url = $api_url;
 
// build the HTTP GET query
$state = md5(microtime());
$params = array(
    "response_type" => "code",
    "client_id" => $oauth2_client_id,
    "redirect_uri" => $oauth2_redirect,
    "scope" => "",
    "state",$state
    );
 

// forward the user to the login access page on the OAuth 2 server
//header("Location: " . $url."/OAuth/Authorize?client_id=".$oauth2_client_id."&redirect_uri=".$oauth2_redirect."&scope=&response_type=code&state=".$state);
$urlme = $url."/OAuth/Authorize?client_id=".$oauth2_client_id."&redirect_uri=".$oauth2_redirect."&scope=&response_type=code&state=".$state;
echo file_get_contents($urlme);
?>
