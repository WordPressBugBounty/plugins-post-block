<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: callback
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! class_exists( 'FPBLOCK_Field_callback' ) ) {
  class FPBLOCK_Field_callback extends FPBLOCK_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      if ( isset( $this->field['function'] ) && is_callable( $this->field['function'] ) ) {

        $args = ( isset( $this->field['args'] ) ) ? $this->field['args'] : null;

        call_user_func( $this->field['function'], $args );

      }

    }

  }
}

