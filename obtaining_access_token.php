<?php
    include 'defines.php';

    

    //facebook credentials array
    $creds = array(
        'app_id' => FACEBOOK_APP_ID,
        'app_secret' => FACEBOOK_APP_SECRET,
        'default_graph_version' => 'v3.2',
        'presistent_data_handler' => 'session'
    );

    //create facebook object
    $facebook = new Facebook\Facebook($creds);

    //helper
    $helper = $facebook->getRedirectLoginHelper();

    //oauth object
    $oAuth2Client = $facebook->getOAuth2Client();

    if(isset($_GET['code'])){ //get access token
        print_r($_GET['code']);
        try{
            $accessToken = $helper->getAccessToken();
        }catch( Facebook\Exceptions\FacebookResponseException $e){ //graph error
            echo 'Graph returned an error' . $e->getMessage;
        }catch( Facebook\Exceptions\FacebookSDKException $e){ //validation error
            echo 'Facebook SDK returned an error' . $e->getMessage;
        }

        echo '<h1>Short Lived Access Token</h1>';
        print_r((string)$accessToken);

    }else{ //display login url
        $permissions = ['public_profile', 'instagram_basic','pages_show_list'];
        $loginUrl = $helper->getLoginUrl( FACEBOOK_REDIRECT_URI, $permissions);

        echo'<a href="'. $loginUrl .'">
            Login With Facebook
        </a>';

        
        //https://testwebcp.000webhostapp.com/laravel/obtaining_access_token.php?code=AQByY2KjX-KiKwDipwlXyZBpYkn5wJ6dgfCpliYqfhM2W6p45SPJQa5PJkwDrmHyNwSGQ1mAcrKG-9J6YS3ucotvdGETTYzAI1a4sDvQ0U209OXoPUx-Tn-8SuiotwxYVFcIB4lP3LQIrYyYTZtKgehXkutOZ_HRMXhDJm5jAAhf2VHBWNIu0abC93oNE0PwC0NkhM_yQhk6gpspJrrYohTqdVhc_VaI6c7aVLkOtIVZ4bKI4E_vi_zEWaMeZ5lOMUp558VoybjSywWhQGOzP7vElYL4PtElnPie2lyYxdm1mb1DtILWBDJWzDC5CjsWqRNBH1ZeqRoB0SdQMSsrVecF1CqwmFe-YjlG6bCGb8H4BcD-2IdHTurgY0QGF_l0i5s&state=6816fa7759f1897bf4e993af91e06c3e#_=_
    }