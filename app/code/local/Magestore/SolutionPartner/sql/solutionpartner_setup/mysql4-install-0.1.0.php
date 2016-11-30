<?php
/**
 * Magestore
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the Magestore.com license that is
 * available through the world-wide-web at this URL:
 * http://www.magestore.com/license-agreement.html
 * 
 * DISCLAIMER
 * 
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 * 
 * @category    Magestore
 * @package     Magestore_SolutionPartner
 * @copyright   Copyright (c) 2012 Magestore (http://www.magestore.com/)
 * @license     http://www.magestore.com/license-agreement.html
 */

/** @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

/**
 * create solutionpartner table
 */
$installer->run("

DROP TABLE IF EXISTS {$this->getTable('solutionpartner_partner')};

CREATE TABLE {$this->getTable('solutionpartner_partner')} (
  `solutionpartner_id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `compane_name` varchar(255) NOT NULL default '',
  `compane_logo` varchar(255) NOT NULL default '',
  `website` varchar(255) NOT NULL default '',
  `email` varchar(255) NOT NULL default '',
  `phone` varchar(255) NOT NULL default '',
  `address` varchar(255) NOT NULL default '',
  `state` int(11) unsigned NOT NULL default '0',
  `country` int(11) unsigned NOT NULL default '0',
  `short_depscription` text NOT NULL default '',
  `founded_in` int(11) unsigned NOT NULL default '0',
  `certified_dev` int(11) unsigned NOT NULL default '0',
  `number_employees` int(11) unsigned NOT NULL default '0',
  `service` int(11) unsigned NOT NULL default '0',
  `project_year` int(11) unsigned NOT NULL default '0',
  `project_size` int(11) unsigned NOT NULL default '0',
  `hourly_rate` float unsigned NOT NULL default '0',
  `order_quantity` int(11) unsigned NOT NULL default '0',
  `total_revenue` float unsigned NOT NULL default '0',
  `status` smallint(6) unsigned NOT NULL default '1',
  `registered_date` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`solutionpartner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS {$this->getTable('solutionpartner_merchant')};

CREATE TABLE {$this->getTable('solutionpartner_merchant')} (
  `merchant_id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `email` varchar(255) NOT NULL default '',
  `phone` varchar(255) NOT NULL default '',
  `company` varchar(255) NOT NULL default '',
  `state` int(11) NOT NULL default '0',
  `country` int(11) NOT NULL default '0',
  `service` int(11) NOT NULL default '0',
  `budget` int(11) NOT NULL default '0',
  `description` text NOT NULL default '',
  `registered_date` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`merchant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

");

$installer->endSetup();

