<?php
namespace Averta\Core\Utility;

class URL
{
    /**
     * Remove query args from url
     *
     * @param string $url
     * @param array $args
     * @return string
     */
    public static function removeQueryArg( $url, $args = [] ){

        if ( is_array( $args ) ) {
            foreach ( $args as $arg ) {
                $pattern = "/(?:&|(\?))$arg=[^&]*(?(1)&|)?/";
                $url = preg_replace( $pattern, '', $url);
            }
        } else {
            $pattern = "/(?:&|(\?))$args=[^&]*(?(1)&|)?/";
            $url = preg_replace( $pattern, '', $url);
        }

        $url = rtrim( $url, '?' );
        return rtrim( $url, '&' );
    }

    /**
     * Check If URL is local or not
     *
     * @param string $url
     *
     * @return bool
     */
	public static function isLocal( $url ){
		$localPatterns = [
			'localhost',
			'.local',
			'192.168.0',
			'127.0.0.1'
		];

		foreach ( $localPatterns as $pattern ) {
			if ( strpos( $url, $pattern ) || strpos( $url, $pattern ) === 0 ) {
				return true;
			}
		}
		return false;
	}

	/**
	 * Get (sub)domain from URL
	 *
	 * @param $url
	 *
	 * @return array|false|int|string
	 */
	public static function getHostDomain( $url ) {
		return parse_url( $url, PHP_URL_HOST ) ?? '';
	}

    /**
	 * Get only main domain of URL
	 *
	 * @param $url
	 *
	 * @return string
	 */
	public static function getDomain( $url ) {
        $parseData = parse_url( $url );
        $domain = preg_replace('/^www\./', '', $parseData['host'] );
    
        $parts = explode(".", $domain);

        return ( array_key_exists(count( $parts ) - 2, $parts ) ? $parts [count( $parts ) - 2 ] : "") . "." . $parts[ count( $parts ) - 1 ];
	}

	/**
	 * Get home part of URL
     *
	 * @param $url
	 *
	 * @return string
	 */
	public static function getHomePart( $url ): string {
		$parts = parse_url( $url );
		return ( $parts["scheme"] ?? "https" ). "://" . $parts["host"] . ( !empty( $parts["port"] ) ? ":". $parts["port"] : '' );
	}
}
