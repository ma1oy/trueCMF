<?php

namespace Truth\Support\Interfaces;

interface ViewInterface
{
    public function display($layout, $data);
    public function render($layout, $data);
}