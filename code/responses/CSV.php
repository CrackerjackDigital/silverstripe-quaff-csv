<?php
namespace Quaff\Responses;

class CSV extends OK {
	private static $has_header_row = true;

	/**
	 * Skip the first row if config.has_header_row = true
	 * @param $options
	 * @return \ArrayList
	 * @throws \Quaff\Exceptions\Response
	 */
	public function items($options) {
		if ($this->isValid()) {
			if ($this->config()->get('has_header_row')) {
				if ($header = $this->getBuffer()->read($responseCode)) {
					
				}
			}
		}
		return $this->models($options);
	}
}