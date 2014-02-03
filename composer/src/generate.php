#!/usr/bin/env php
<?php

function _kcrt_json_encode( $array ) {
	return json_encode( $array, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES );
}

function _kcrt_write_json( $filename, $json_values ) {
	$handle = fopen( $filename, 'w' );
	$status = fwrite( $handle, $json_values );
	fclose( $handle );

	return $status;
}

$src_dir  = dirname( __FILE__ );
$root_dir = dirname( $src_dir );
$packages = require_once "{$src_dir}/packages.php";
$inc_dir  = "{$src_dir}/includes";
$includes = array();

foreach ( glob( "{$inc_dir}/*.php" ) as $filename ) {
	$include = require_once $filename;

	if ( ! empty( $include['packages'] ) ) {
		$basename  = str_replace( '.php', '', basename( $filename ) );
		$json_file = "{$root_dir}/{$basename}.json";

		_kcrt_write_json( $json_file, _kcrt_json_encode( $include ) );
		$includes[ "{$basename}.json" ] = array(
			'sha1' => sha1_file( $json_file ),
		);
	}
}

if ( ! empty( $includes ) ) {
	$packages['includes'] = $includes;
}

_kcrt_write_json( 'packages.json', _kcrt_json_encode( $packages ) );
