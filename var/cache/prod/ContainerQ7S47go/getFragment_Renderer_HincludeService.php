<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fragment.renderer.hinclude' shared service.

$this->privates['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer(($this->services['twig'] ?? $this->load('getTwigService.php')), ($this->privates['uri_signer'] ?? ($this->privates['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('pP4QxzcYRo1efriurstn52cqUe8yzn56BB3XHzfQJTT9J7odKPJS3Kr2Je8TEMSs'))), NULL);

$instance->setFragmentPath('/_fragment');

return $instance;