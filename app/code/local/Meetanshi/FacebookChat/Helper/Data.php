<?php

class Meetanshi_FacebookChat_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isEnable(){
        return Mage::getStoreConfig('facebookchat/general/facebookchat_enable');
    }
    public function getAppId(){
        return Mage::getStoreConfig('facebookchat/general/app_id');
    }
    public function getPageId(){
        return Mage::getStoreConfig('facebookchat/general/page_id');
    }
    public function geThemeColor(){
        return Mage::getStoreConfig('facebookchat/general/theme_color');
    }
    public function getLoginText(){
        return Mage::getStoreConfig('facebookchat/general/login_text');
    }
    public function getLogoutText(){
        return Mage::getStoreConfig('facebookchat/general/logout_text');
    }
}
