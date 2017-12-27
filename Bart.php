<?php

namespace chrishaensel;

/**
 * Class Bart
 *
 * @package haensel
 */

class Bart {


	/**
	 * Render a template and replace placeholders with the variables given in the data array
	 *
	 * @param null  $templatePath
	 * @param array $data
	 *
	 * @return bool|mixed|string
	 */
	public function render( $templatePath = null, $data = [] ) {
		$tpl = null;
		if ( ! is_null( $templatePath ) ) {
			if ( $this->templateExists( $templatePath ) ) {
				$tpl = file_get_contents( $templatePath );
				if ( count( $data ) > 0 ) {
					foreach ( $data as $r => $v ) {
						$s_str = "{{" . $r . "}}";
						$tpl   = str_replace( $s_str, $v, $tpl );
					}
				}
			}
		}

		return $tpl;
	}


	/**
	 * Check whether the template file exists
	 *
	 * @param null $templatePath
	 *
	 * @return bool
	 */
	public function templateExists( $templatePath = null ) {
		if ( is_null( $templatePath ) || ! file_exists( $templatePath ) ) {
			return false;
		}

		return true;
	}

}