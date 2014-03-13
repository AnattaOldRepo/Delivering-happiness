<?php

class AnattaDesign_Storify {

	public static function getInfo( $url ) {
		$result = get_transient( 'community-storify-instagram' );
		if ( $result === false ) {
			$result = wp_remote_get( $url );

			if ( is_wp_error( $result ) ) {
				return false;
			}

			$result = json_decode( $result['body'] );
			set_transient( 'community-storify-instagram', $result, get_field( 'instagram_storify_caching_time', 'option' ) * HOURS_IN_SECONDS );
		}

		/**
		 * Commented out as Storify was returning results correctly but the status code was 404
		 */
		/*
		if( 200 != $result->code ) {
			return self::error( 'Storify response has invalid Code: ' . $result->code );
		}
		*/

		return $result->content;
	}

	public static function getInstagram( $url ) {
		$info = self::getInfo( $url );
		$photos = array();
		foreach( $info->elements as $element ) {
			if ( 'instagram' == $element->source->name ) {
				$type = $element->type;
				$photo = array(
					'image'    => $element->attribution->thumbnail,
					'name'     => $element->attribution->name,
					'username' => $element->source->username,
					'link'     => $element->attribution->href,
					'type'     => $type,
					'src'      => $element->data->$type->src,
					'text'     => ( 'image' === $type ) ? $element->data->image->caption : $element->data->video->title,
					'time'     => date( 'g:i A - j M Y', strtotime( $element->posted_at ) ),
				);
				if ( !$photo[ 'username' ] ) {
					$photo[ 'username' ] = $element->meta->author_name ? $element->meta->author_name : $photo[ 'name' ];
				}
				$photos[ ] = $photo;
			} else if ( 'pinterest' == $element->source->name ) {
				$photo = array(
					//'image'    => $element->meta->thumbnail_url,
					'name'     => $element->meta->title ? $element->meta->title : 'Pinterest',
					'username' => $element->meta->title ? $element->meta->title : 'Pinterest',
					'link'     => $element->permalink,
					'type'     => $element->type,
					'src'      => $element->data->image->src,
					'text'     => $element->data->image->caption,
					'time'     => date( 'g:i A - j M Y', strtotime( $element->posted_at ) ),
				);
				$photos[ ] = $photo;
			}
		}

		return $photos;
	}
}