<?php

class SpecialCreateNewWiki extends UnlistedSpecialPage {

	public function __construct() {
		wfLoadExtensionMessages('CreateNewWiki');
		parent::__construct('CreateNewWiki', 'createnewwiki');
	}
	
	public function execute() {
		global $wgUser, $wgOut, $wgExtensionsPath, $wgEnableUserLoginExt;
		wfProfileIn( __METHOD__ );
		
		if ( wfReadOnly() ) {
			$wgOut->readOnlyPage();
			return;
		}
		
		if (!$wgUser->isAllowed('createnewwiki')) {
			$this->displayRestrictionError();
			wfProfileOut( __METHOD__ );
			return;
		}
		
		wfLoadExtensionMessages('CreateNewWiki');
		
		$wgOut->setPageTitle(wfMsg('cnw-title'));
		$wgOut->addHtml(wfRenderModule('CreateNewWiki'));
		$wgOut->addStyle(AssetsManager::getInstance()->getSassCommonURL('extensions/wikia/CreateNewWiki/css/CreateNewWiki.scss'));
		$wgOut->addScript('<script src="'.$wgExtensionsPath.'/wikia/ThemeDesigner/js/ThemeDesigner.js"></script>');
		$wgOut->addScript('<script src="'.$wgExtensionsPath.'/wikia/AjaxLogin/AjaxLogin.js"></script>');
		$wgOut->addScript('<script src="'.$wgExtensionsPath.'/wikia/CreateNewWiki/js/CreateNewWiki.js"></script>');
		$wgOut->addScript('<script src="'.$wgExtensionsPath.'/wikia/CreateNewWiki/js/CreateNewWikiSupplemental.js"></script>');
		
		if($wgEnableUserLoginExt) {
			$wgOut->addStyle(AssetsManager::getInstance()->getSassCommonURL('extensions/wikia/UserLogin/css/UserLoginModal.scss'));
		}
		
		wfProfileOut( __METHOD__ );
	}

}