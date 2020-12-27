/***** Add Iran Phone Format in Gravity Form ************/
add_filter( 'gform_phone_formats', 'ir_phone_format' );
function ir_phone_format( $phone_formats ) {
    $phone_formats['ir'] = array(
        'label'       => 'IR',
        'mask'        => false,
        'regex'       => '/^(\+98|0|098|)?9\d{9}$/',
        'instruction' => false,
    );
 
    return $phone_formats;
}
