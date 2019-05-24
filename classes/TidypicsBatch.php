<?php
/**
 * TidypicsBatch class
 *
 */

class TidypicsBatch extends ElggObject {

	/**
	 * {@inheritDoc}
	 * @see ElggObject::initializeAttributes()
	 */
	protected function initializeAttributes() {
		parent::initializeAttributes();
		
		$this->attributes['subtype'] = "tidypics_batch";
	}
}
