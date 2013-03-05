<?php
/**
 * Created by adam
 * Date: 14.02.13
 */

class VideoClipHowToVideo extends SDSFormMapping {

	const type = 'http://sds.wikia.com/vocabs/VideoClipHowToVideo';

	protected function getMapArray( $mapType = 'main' ) {

		$map = array();
		$map['main'] = parent::getMapArray( 'main' );
		$map['main']['videoObject_name'] = array( 'type'=>PandoraSDSObject::TYPE_LITERAL, 'subject'=>'schema:name' );
		$map['main']['videoObject_description'] = array( 'type'=>PandoraSDSObject::TYPE_LITERAL, 'subject'=>'schema:description' );
		$map['main']['provider_name'] = array( 'type'=>PandoraSDSObject::TYPE_COLLECTION, 'subject'=>'schema:provider', 'childType'=>'schema_provider' );
		$map['main']['publisher_name'] = array( 'type'=>PandoraSDSObject::TYPE_COLLECTION, 'subject'=>'schema:publisher', 'childType'=>'schema_organization' );
		$map['main']['videoObject_datePublished'] = array( 'type'=>PandoraSDSObject::TYPE_LITERAL, 'subject'=>'schema:datePublished' );
		$map['main']['videoObject_inLanguage']= array( 'type'=>PandoraSDSObject::TYPE_LITERAL, 'subject'=>'schema:inLanguage' );
		$map['main']['videoObject_subTitleLanguage'] = array( 'type'=>PandoraSDSObject::TYPE_LITERAL, 'subject'=>'schema:subTitleLanguage' );
		$map['main']['videoObject_genre'] = array( 'type'=>PandoraSDSObject::TYPE_COLLECTION, 'subject'=>'schema:genre' );
		$map['main']['type'] = array( 'type'=>PandoraSDSObject::TYPE_LITERAL, 'subject'=>'type', 'value'=>'schema:VideoObject' );
		$map['main']['blank_name'] = array( 'type'=>PandoraSDSObject::TYPE_COLLECTION, 'subject'=>'schema:about', 'value'=> array( '_:howto' ), 'childType' => 'blank_node' );
		$map['main']['additionalType'] = array( 'type'=>PandoraSDSObject::TYPE_LITERAL, 'subject'=>'schema:additionalType', 'value'=>static::type );

		$map['schema_provider'] = array();
		$map['schema_provider']['provider_name'] = array( 'type' => PandoraSDSObject::TYPE_LITERAL, 'subject'=>'schema:name' );
		$map['schema_provider']['provider_id'] = array( 'type' => PandoraSDSObject::TYPE_LITERAL, 'subject' => 'id' );
		$map['schema_provider']['type'] = array( 'type' => PandoraSDSObject::TYPE_LITERAL, 'subject' => 'type', 'value'=>'schema:Organization' );

		$map['schema_organization'] = array();
		$map['schema_organization']['publisher_name'] = array( 'type' => PandoraSDSObject::TYPE_LITERAL, 'subject'=>'schema:name' );
		$map['schema_organization']['publisher_id'] = array( 'type' => PandoraSDSObject::TYPE_LITERAL, 'subject' => 'id' );
		$map['schema_organization']['type'] = array( 'type' => PandoraSDSObject::TYPE_LITERAL, 'subject' => 'type', 'value'=>'schema:Organization' );

		$map['blank_node'] = array();
		$map['blank_node']['blank_id'] = array( 'type' => PandoraSDSObject::TYPE_LITERAL, 'subject' => 'id', 'value' => '_:howtotest1' );
		$map['blank_node']['blank_name'] = array( 'type' => PandoraSDSObject::TYPE_LITERAL, 'subject' => 'schema:name', 'value' => 'How to Test Blank Node 1' );
		$map['blank_node']['type'] = array( 'type' => PandoraSDSObject::TYPE_LITERAL, 'subject' => 'type', 'value' => 'wikia:HowToResult' );

		return $map [ $mapType ];
	}

	public static function canHandle( PandoraSDSObject $data ) {

		$type = static::getSubjectType( $data );
		if ( in_array( 'wikia:HowToResult', $type, true ) ) {
			return true;
		}
		return false;
	}
}