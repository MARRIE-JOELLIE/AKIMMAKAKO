<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.psxdesign.handler.logo_text_upload_handler' shared service.

return $this->services['prestashop.module.psxdesign.handler.logo_text_upload_handler'] = new \PrestaShop\Module\PsxDesign\Handler\LogoTextUploadHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ($this->services['prestashop.module.psxdesign.repository.psxdesign_logo_repository'] ?? $this->load('getPrestashop_Module_Psxdesign_Repository_PsxdesignLogoRepositoryService.php')), ($this->services['prestashop.module.psxdesign.utility.logo_utility'] ?? $this->load('getPrestashop_Module_Psxdesign_Utility_LogoUtilityService.php')), (\dirname(__DIR__, 4).'/img/'));
