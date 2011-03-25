<?php

class SpecialCreateWikiaPoll extends SpecialPage {

	function SpecialCreateWikiaPoll() {
		SpecialPage::SpecialPage("CreatePoll", "", false);
	}

	public function execute ($subpage) {
		global $wgOut, $wgUser, $wgBlankImgUrl, $wgJsMimeType, $wgExtensionsPath, $wgStylePath;

		// Boilerplate special page permissions
		if ($wgUser->isBlocked()) {
			$wgOut->blockedPage();
			return;
		}
		if (wfReadOnly() && !wfAutomaticReadOnly()) {
			$wgOut->readOnlyPage();
			return;
		}
		if (!$wgUser->isAllowed('createpage') || !$wgUser->isAllowed('edit')) {
			$this->displayRestrictionError();
			return;
		}

		$wgOut->addScript("<script src=\"{$wgStylePath}/common/jquery/jquery-ui-1.8.10.custom.js\" type=\"{$wgJsMimeType}\"></script>");
		$wgOut->addScript("<script src=\"{$wgExtensionsPath}/wikia/WikiaPoll/js/CreateWikiaPoll.js\" type=\"{$wgJsMimeType}\"></script>");

		$wgOut->addStyle(F::app()->getAssetsManager()->getSassCommonURL('/extensions/wikia/WikiaPoll/css/CreateWikiaPoll.scss'));

		if( $subpage != '' ) {
			// We came here from the edit link, go into edit mode
			$wgOut->addHtml(wfRenderModule('WikiaPoll', 'SpecialPageEdit', array('title' => $subpage)));
		} else {
			$wgOut->addHtml(wfRenderModule('WikiaPoll', 'SpecialPage'));
		}
	}
}
?>
