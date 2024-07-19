<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.factory.credit_slip' shared service.

return $this->services['prestashop.core.grid.factory.credit_slip'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($this->services['prestashop.core.grid.definition.factory.credit_slip'] ?? $this->load('getPrestashop_Core_Grid_Definition_Factory_CreditSlipService.php')), ($this->services['prestashop.core.grid.data.factory.credit_slip_decorator'] ?? $this->load('getPrestashop_Core_Grid_Data_Factory_CreditSlipDecoratorService.php')), ($this->services['prestashop.core.grid.filter.credit_slip_form_factory'] ?? $this->load('getPrestashop_Core_Grid_Filter_CreditSlipFormFactoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()));