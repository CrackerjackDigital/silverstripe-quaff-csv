<?php
namespace Quaff\Transports\Decoders;

/**
 * Trait to read a stream (or buffer) as a csv file
 *
 * @package Quaff\Transports\Buffers
 */
trait csv {
	/**
	 * @param string $line read from csv
	 * @return array
	 */
	public function decode($line) {
		return str_getcsv($line, ',', '"');
	}

}