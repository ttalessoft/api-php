<?php
    namespace src;

    // Setando as configurações do SlimFramework
    function slimConfiguration(): \Slim\Container{
        $conf =[
            'settings'=>[
                'displayErrosDetails'=>getenv('DISPLAY_ERRORS_DETAILS'),
            ],
        ];
        return new \Slim\Container($conf);
    }