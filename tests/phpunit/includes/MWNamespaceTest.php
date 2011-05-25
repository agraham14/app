<?php
/**
 * @author Ashar Voultoiz
 * @copyright Copyright © 2011, Ashar Voultoiz
 * @file
 */

/**
 * Test class for MWNamespace.
 * Generated by PHPUnit on 2011-02-20 at 21:01:55.
 *
 */
class MWNamespaceTest extends MediaWikiTestCase {
	/**
	 * @var MWNamespace
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		$this->object = new MWNamespace;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown() {
	}


#### START OF TESTS #########################################################

	/**
	 * @todo Write more texts, handle $wgAllowImageMoving setting
	 */
	public function testIsMovable() {
		$this->assertFalse( MWNamespace::isMovable( NS_CATEGORY ) );
		# @todo FIXME: Write more tests!!
	}

	/**
	 * Please make sure to change testIsTalk() if you change the assertions below
	 */
	public function testIsMain() {
		// Special namespaces
		$this->assertTrue( MWNamespace::isMain( NS_MEDIA   ) );
		$this->assertTrue( MWNamespace::isMain( NS_SPECIAL ) );

		// Subject pages
		$this->assertTrue( MWNamespace::isMain( NS_MAIN   ) );
		$this->assertTrue( MWNamespace::isMain( NS_USER   ) );
		$this->assertTrue( MWNamespace::isMain( 100 ) );  # user defined

		// Talk pages
		$this->assertFalse( MWNamespace::isMain( NS_TALK      ) );
		$this->assertFalse( MWNamespace::isMain( NS_USER_TALK ) );
		$this->assertFalse( MWNamespace::isMain( 101          ) ); # user defined
	}

	/**
	 * Reverse of testIsMain().
	 * Please update testIsMain() if you change assertions below
	 */
	public function testIsTalk() {
		// Special namespaces
		$this->assertFalse( MWNamespace::isTalk( NS_MEDIA   ) );
		$this->assertFalse( MWNamespace::isTalk( NS_SPECIAL ) );

		// Subject pages
		$this->assertFalse( MWNamespace::isTalk( NS_MAIN   ) );
		$this->assertFalse( MWNamespace::isTalk( NS_USER   ) );
		$this->assertFalse( MWNamespace::isTalk( 100 ) );  # user defined

		// Talk pages
		$this->assertTrue( MWNamespace::isTalk( NS_TALK      ) );
		$this->assertTrue( MWNamespace::isTalk( NS_USER_TALK ) );
		$this->assertTrue( MWNamespace::isTalk( 101          ) ); # user defined
	}

	/**
	 * Regular getTalk() calls
	 * Namespaces without a talk page (NS_MEDIA, NS_SPECIAL) are tested in
	 * the function testGetTalkExceptions()
	 */
	public function testGetTalk() {
		$this->assertEquals( MWNamespace::getTalk( NS_MAIN), NS_TALK );
	}

	/**
	 * Exceptions with getTalk()
	 * NS_MEDIA and NS_SPECIAL do not have talk pages. MediaWiki raise an exception for them.
	 * @expectedException MWException
	 */
	public function testGetTalkExceptions() {
		$this->assertNull( MWNamespace::getTalk( NS_MEDIA ) );
		$this->assertNull( MWNamespace::getTalk( NS_SPECIAL ) );
	}

	/**
	 * Regular getAssociated() calls 
	 * Namespaces without an associated page (NS_MEDIA, NS_SPECIAL) are tested in
	 * the function testGetAssociatedExceptions()
	 */
	public function testGetAssociated() {
		$this->assertEquals( MWNamespace::getAssociated( NS_MAIN ), NS_TALK );
		$this->assertEquals( MWNamespace::getAssociated( NS_TALK ), NS_MAIN );

	}

	### Exceptions with getAssociated()
	### NS_MEDIA and NS_SPECIAL do not have talk pages. MediaWiki raises
	### an exception for them.
	/**
	 * @expectedException MWException
	 */
	public function testGetAssociatedExceptionsForNsMedia() {
		$this->assertNull( MWNamespace::getAssociated( NS_MEDIA   ) );
	}
	/**
	 * @expectedException MWException
	 */
	public function testGetAssociatedExceptionsForNsSpecial() {
		$this->assertNull( MWNamespace::getAssociated( NS_SPECIAL ) );
	}

	/**
	 */
	public function testGetSubject() {
		// Special namespaces are their own subjects
		$this->assertEquals( MWNamespace::getSubject( NS_MEDIA   ), NS_MEDIA   );
		$this->assertEquals( MWNamespace::getSubject( NS_SPECIAL ), NS_SPECIAL );

		$this->assertEquals( MWNamespace::getSubject( NS_TALK      ), NS_MAIN );
		$this->assertEquals( MWNamespace::getSubject( NS_USER_TALK ), NS_USER );
	}

	/**
	 * @todo Implement testExists().
	 */
	public function testExists() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet. Rely on $wgCanonicalNamespaces.'
		);
	}

	/**
	 * @todo Implement testGetCanonicalNamespaces().
	 */
	public function testGetCanonicalNamespaces() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet. Rely on $wgCanonicalNamespaces.'
		);
	}

	/**
	 * @todo Implement testGetCanonicalName().
	 */
	public function testGetCanonicalName() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet. Rely on $wgCanonicalNamespaces.'
		);
	}

	/**
	 * @todo Implement testGetCanonicalIndex().
	 */
	public function testGetCanonicalIndex() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet. Rely on $wgCanonicalNamespaces.'
		);
	}

	/**
	 * @todo Implement testGetValidNamespaces().
	 */
	public function testGetValidNamespaces() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet. Rely on $wgCanonicalNamespaces.'
		);
	}

	/**
	 */
	public function testCanTalk() {
		$this->assertFalse( MWNamespace::canTalk( NS_MEDIA   ) );
		$this->assertFalse( MWNamespace::canTalk( NS_SPECIAL ) );

		$this->assertTrue( MWNamespace::canTalk( NS_MAIN      ) );
		$this->assertTrue( MWNamespace::canTalk( NS_TALK      ) );
		$this->assertTrue( MWNamespace::canTalk( NS_USER      ) );
		$this->assertTrue( MWNamespace::canTalk( NS_USER_TALK ) );

		// User defined namespaces
		$this->assertTrue( MWNamespace::canTalk( 100 ) );
		$this->assertTrue( MWNamespace::canTalk( 101 ) );
	}

	/**
	 */
	public function testIsContent() {
		// NS_MAIN is a content namespace per DefaultSettings.php
		// and per function definition.
		$this->assertTrue( MWNamespace::isContent( NS_MAIN ) );

		// Other namespaces which are not expected to be content
		$this->assertFalse( MWNamespace::isContent( NS_MEDIA    ) );
		$this->assertFalse( MWNamespace::isContent( NS_SPECIAL  ) );
		$this->assertFalse( MWNamespace::isContent( NS_TALK     ) );
		$this->assertFalse( MWNamespace::isContent( NS_USER     ) );
		$this->assertFalse( MWNamespace::isContent( NS_CATEGORY ) );
		// User defined namespace:
		$this->assertFalse( MWNamespace::isContent( 100 ) );
	}

	/**
	 * Similar to testIsContent() but alters the $wgContentNamespaces
	 * global variable.
	 */
	public function testIsContentWithAdditionsInWgContentNamespaces() {	
		// NS_MAIN is a content namespace per DefaultSettings.php
		// and per function definition.
		$this->assertTrue( MWNamespace::isContent( NS_MAIN ) );

		// Tests that user defined namespace #252 is not content:
		$this->assertFalse( MWNamespace::isContent( 252 ) );

		# @todo FIXME: Is global saving really required for PHPUnit?
		// Bless namespace # 252 as a content namespace
		global $wgContentNamespaces;
		$savedGlobal = $wgContentNamespaces;
		$wgContentNamespaces[] = 252;
		$this->assertTrue( MWNamespace::isContent( 252 ) );

		// Makes sure NS_MAIN was not impacted
		$this->assertTrue( MWNamespace::isContent( NS_MAIN ) );

		// Restore global
		$wgContentNamespaces = $savedGlobal;

		// Verify namespaces after global restauration
		$this->assertTrue( MWNamespace::isContent( NS_MAIN ) );
		$this->assertFalse( MWNamespace::isContent( 252 ) );
	}

	public function testIsWatchable() {
		// Specials namespaces are not watchable
		$this->assertFalse( MWNamespace::isWatchable( NS_MEDIA   ) );
		$this->assertFalse( MWNamespace::isWatchable( NS_SPECIAL ) );

		// Core defined namespaces are watchables
		$this->assertTrue( MWNamespace::isWatchable( NS_MAIN ) );
		$this->assertTrue( MWNamespace::isWatchable( NS_TALK ) );

		// Additional, user defined namespaces are watchables
		$this->assertTrue( MWNamespace::isWatchable( 100 ) );
		$this->assertTrue( MWNamespace::isWatchable( 101 ) );
	}

	public function testHasSubpages() {
		// Special namespaces:
		$this->assertFalse( MWNamespace::hasSubpages( NS_MEDIA   ) );
		$this->assertFalse( MWNamespace::hasSubpages( NS_SPECIAL ) );

		// namespaces without subpages
		$this->assertFalse( MWNamespace::hasSubpages( NS_MAIN ) );

		// Some namespaces with subpages
		$this->assertTrue( MWNamespace::hasSubpages( NS_TALK      ) );
		$this->assertTrue( MWNamespace::hasSubpages( NS_USER      ) );
		$this->assertTrue( MWNamespace::hasSubpages( NS_USER_TALK ) );
	}

	/**
	 */
	public function testGetContentNamespaces() {
		$this->assertEquals(
			MWNamespace::getcontentNamespaces(),
			array( NS_MAIN),
			'$wgContentNamespaces is an array with only NS_MAIN by default'
		);

		global $wgContentNamespaces;

		# test !is_array( $wgcontentNamespaces )
		$wgContentNamespaces = '';
		$this->assertEquals( MWNamespace::getcontentNamespaces(), NS_MAIN );
		$wgContentNamespaces = false;
		$this->assertEquals( MWNamespace::getcontentNamespaces(), NS_MAIN );
		$wgContentNamespaces = null;
		$this->assertEquals( MWNamespace::getcontentNamespaces(), NS_MAIN );
		$wgContentNamespaces = 5;
		$this->assertEquals( MWNamespace::getcontentNamespaces(), NS_MAIN );

		# test $wgContentNamespaces === array()	
		$wgContentNamespaces = array();
		$this->assertEquals( MWNamespace::getcontentNamespaces(), NS_MAIN );

		# test !in_array( NS_MAIN, $wgContentNamespaces )
		$wgContentNamespaces = array( NS_USER, NS_CATEGORY );
		$this->assertEquals(
			MWNamespace::getcontentNamespaces(), 
			array( NS_MAIN, NS_USER, NS_CATEGORY ),
			'NS_MAIN is forced in wgContentNamespaces even if unwanted'
		);

		# test other cases, return $wgcontentNamespaces as is
		$wgContentNamespaces = array( NS_MAIN );
		$this->assertEquals(
			MWNamespace::getcontentNamespaces(),
			array( NS_MAIN )
		);

		$wgContentNamespaces = array( NS_MAIN, NS_USER, NS_CATEGORY );
		$this->assertEquals(
			MWNamespace::getcontentNamespaces(),
			array( NS_MAIN, NS_USER, NS_CATEGORY )
		);

	}

	/**
	 * Some namespaces are always capitalized per code definition
	 * in MWNamespace::$alwaysCapitalizedNamespaces
	 */
	public function testIsCapitalizedHardcodedAssertions() {
		// NS_MEDIA and NS_FILE are treated the same
		$this->assertEquals(
			MWNamespace::isCapitalized( NS_MEDIA ),
			MWNamespace::isCapitalized( NS_FILE  ),
			'NS_MEDIA and NS_FILE have same capitalization rendering'
		);

		// Boths are capitalized by default
		$this->assertTrue( MWNamespace::isCapitalized( NS_MEDIA ) );
		$this->assertTrue( MWNamespace::isCapitalized( NS_FILE  ) );

		// Always capitalized namespaces
		// @see MWNamespace::$alwaysCapitalizedNamespaces
		$this->assertTrue( MWNamespace::isCapitalized( NS_SPECIAL   ) );
		$this->assertTrue( MWNamespace::isCapitalized( NS_USER      ) );
		$this->assertTrue( MWNamespace::isCapitalized( NS_MEDIAWIKI ) );
	}

	/**
	 * Follows up for testIsCapitalizedHardcodedAssertions() but alter the
	 * global $wgCapitalLink setting to have extended coverage.
	 *
	 * MWNamespace::isCapitalized() rely on two global settings:
	 *   $wgCapitalLinkOverrides = array(); by default
	 *   $wgCapitalLinks = true; by default
	 * This function test $wgCapitalLinks
 	 *
	 * Global setting correctness is tested against the NS_PROJECT and
	 * NS_PROJECT_TALK namespaces since they are not hardcoded nor specials
	 */
	public function testIsCapitalizedWithWgCapitalLinks() {
		global $wgCapitalLinks;
		// Save the global to easily reset to MediaWiki default settings
		$savedGlobal = $wgCapitalLinks;

		$wgCapitalLinks = true;
		$this->assertTrue( MWNamespace::isCapitalized( NS_PROJECT      ) );
		$this->assertTrue( MWNamespace::isCapitalized( NS_PROJECT_TALK ) );

		$wgCapitalLinks = false;
		// hardcoded namespaces (see above function) are still capitalized:
		$this->assertTrue( MWNamespace::isCapitalized( NS_SPECIAL   ) );
		$this->assertTrue( MWNamespace::isCapitalized( NS_USER      ) );
		$this->assertTrue( MWNamespace::isCapitalized( NS_MEDIAWIKI ) );
		// setting is correctly applied
		$this->assertFalse( MWNamespace::isCapitalized( NS_PROJECT   ) );
		$this->assertFalse( MWNamespace::isCapitalized( NS_PROJECT_TALK ) );

		// reset global state:
		$wgCapitalLinks = $savedGlobal;
	}

	/**
	 * Counter part for MWNamespace::testIsCapitalizedWithWgCapitalLinks() now
	 * testing the $wgCapitalLinkOverrides global.
	 *
	 * @todo split groups of assertions in autonomous testing functions
	 */
	public function testIsCapitalizedWithWgCapitalLinkOverrides() {
		global $wgCapitalLinkOverrides;
		// Save the global to easily reset to MediaWiki default settings
		$savedGlobal = $wgCapitalLinkOverrides;

		// Test default settings
		$this->assertTrue( MWNamespace::isCapitalized( NS_PROJECT      ) );
		$this->assertTrue( MWNamespace::isCapitalized( NS_PROJECT_TALK ) );
		// hardcoded namespaces (see above function) are capitalized:
		$this->assertTrue( MWNamespace::isCapitalized( NS_SPECIAL   ) );
		$this->assertTrue( MWNamespace::isCapitalized( NS_USER      ) );
		$this->assertTrue( MWNamespace::isCapitalized( NS_MEDIAWIKI ) );

		// Hardcoded namespaces remains capitalized
		$wgCapitalLinkOverrides[NS_SPECIAL]   = false;
		$wgCapitalLinkOverrides[NS_USER]      = false;
		$wgCapitalLinkOverrides[NS_MEDIAWIKI] = false;
		$this->assertTrue( MWNamespace::isCapitalized( NS_SPECIAL   ) );
		$this->assertTrue( MWNamespace::isCapitalized( NS_USER      ) );
		$this->assertTrue( MWNamespace::isCapitalized( NS_MEDIAWIKI ) );

		$wgCapitalLinkOverrides = $savedGlobal;
		$wgCapitalLinkOverrides[NS_PROJECT] = false;
		$this->assertFalse( MWNamespace::isCapitalized( NS_PROJECT ) );
		$wgCapitalLinkOverrides[NS_PROJECT] = true ;
		$this->assertTrue( MWNamespace::isCapitalized( NS_PROJECT ) );
		unset(  $wgCapitalLinkOverrides[NS_PROJECT] );
		$this->assertTrue( MWNamespace::isCapitalized( NS_PROJECT ) );

		// reset global state:
		$wgCapitalLinkOverrides = $savedGlobal;
	}

	public function testHasGenderDistinction() {
		// Namespaces with gender distinctions
		$this->assertTrue( MWNamespace::hasGenderDistinction( NS_USER      ) );
		$this->assertTrue( MWNamespace::hasGenderDistinction( NS_USER_TALK ) );

		// Other ones, "genderless"
		$this->assertFalse( MWNamespace::hasGenderDistinction( NS_MEDIA   ) );
		$this->assertFalse( MWNamespace::hasGenderDistinction( NS_SPECIAL ) );
		$this->assertFalse( MWNamespace::hasGenderDistinction( NS_MAIN    ) );
		$this->assertFalse( MWNamespace::hasGenderDistinction( NS_TALK    ) );
		
	}
}

