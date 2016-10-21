<?php
namespace Quaff\Transports;
use Quaff\Transports\Stream\Stream;

/**
 * Convenience transport with a csv Decoder and csv Reader. Needs a Buffer e.g. 'passthru', Protocols are inherited from Stream.
 *
 * @package Quaff\Transports
 */
abstract class CSVFile extends Stream {
	use Decoders\csv;
	use Readers\csv;

}