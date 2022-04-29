<?php

if (!defined('ABSPATH')) {
    die('-1');
}

class DotENV
{
    private $options = [];

    public function __construct($options)
    {
        $this->options = $options;

        if (!$this->dotEnvOptionsHandler()) {
            return;
        }

        $this->init();
    }

    public function init()
    {
        if ($this->dotEnvExist()) {
            $values = $this->dotEnvValues();
            return $values;
        }

        return [];
    }

    public function dotEnvOptionsHandler()
    {
        $requireFields = ['dir', 'file'];
        foreach ($requireFields as $key => $field) {
            if (!isset($this->options[$field]) || empty($this->options[$field])) {
                error_log("DotEnv: $field is Empty, DotEnv Exit!");
                return false;
            }
        }

        $path = $this->options['dir'] . DIRECTORY_SEPARATOR . $this->options['file'];
        $this->options['path'] = $path;

        return true;
    }

    public function dotEnvExist()
    {
        return @file_exists($this->options['path']);
    }

    public function dotEnvValues()
    {
        try {
            $output = [];
            $envContent = file_get_contents($this->options['path']);
            $envArray = explode(PHP_EOL, $envContent);
            foreach ($envArray as $key => $env) {
                $val = explode('=', $env);
                $output[$val[0]] = $this->fake_compose($val[1]);
            }
            return $output;
        } catch (\Throwable$th) {
            return [];
        }
    }

    public function fake_compose($value)
    {
        return $this->checkForBool($value);
    }

    public function checkForBool($value)
    {
        if (strcasecmp($value, 'true') == 0) {
            return true;
        } else if (strcasecmp($value, 'false') == 0) {
            return false;
        } else {
            return $value;
        }
    }
}

$dotEnv = new DotENV(['dir' => __DIR__, 'file' => '.env']);
$_ENV = $dotEnv->init();