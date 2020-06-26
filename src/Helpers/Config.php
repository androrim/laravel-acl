<?php

namespace Junges\ACL\Helpers;

use Illuminate\Support\Arr;

class Config
{
    public static function get($keys)
    {
        $aclFilename = base_path('config') . DIRECTORY_SEPARATOR . 'acl.php';

        if (file_exists($aclFilename)) {
            $acl = include($aclFilename);
        }
        else {
            $acl = include(__DIR__ . '/../../config/acl.php');
        }

        return Arr::get($acl, $keys);
    }
}
