<?php

class CommunityPageSpecialTopAdminsFormatter {
	const TOP_ADMINS_MODULE_LIMIT = 3;

	/**
	 * Returns array with fields to supply topAdmins.mustache template
	 * If there are more than three admins provided returns first two and the count of remaining ones
	 * @param array $allAdminsList
	 * @return array
	 */
	public static function prepareData( array $allAdminsList ) {
		$allAdminsCount = count( $allAdminsList );
		$otherAdminsCount = self::prepareRemainingCount( $allAdminsCount );
		return [
			'topAdminsList' => self::prepareAdminsToShow( $allAdminsCount, $otherAdminsCount, $allAdminsList ),
			'otherAdminsCount' => $otherAdminsCount,
			'haveOtherAdmins' => $otherAdminsCount > 0,
			'allAdminsCount' => $allAdminsCount,
		];
	}

	private function prepareRemainingCount( $topAdminsCount ) {
		if ( $topAdminsCount > self::TOP_ADMINS_MODULE_LIMIT ) {
			return $topAdminsCount - self::TOP_ADMINS_MODULE_LIMIT + 1;
		}
		return 0;
	}

	private function prepareAdminsToShow( $allCount, $otherCount, array $list ) {
		// JPN-491 Randomize top admins
		shuffle( $list );
		return array_slice( $list, 0, $allCount - $otherCount );
	}
}
