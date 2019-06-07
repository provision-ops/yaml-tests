<?php

namespace ProvisionOps\YamlTests;

class Test {

    /**
     * @var mixed
     */
    private $rawYml;

    /**
     * @var array
     */
    private $commands = array();

    function __construct($name, $raw_yml_object) {
        $this->rawYml = $raw_yml_object;
    }

    private function parseYml() {
        foreach ($this->rawYml as $name => $test_raw) {

            // Simplest: command
            if (is_string($test_raw)) {
                $this->addCommand($test_raw);
            }
        }
    }

    /**
     * Add to the
     * @param $command
     */
    private function addCommand($command) {
        $commands[] = $command;
    }

}