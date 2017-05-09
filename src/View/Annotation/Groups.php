<?php


namespace Aeris\ZendRestModule\View\Annotation;

/**
 * @Annotation
 * @Target({"METHOD"})
 *
 * Specify a serialization group for a controller action.
 */
class Groups {

	/** @var array<string> */
	protected $groups;

	public function __construct(array $groups) {
		$this->groups = $groups['value'];
	}

	/**
	 * @return array
	 */
	public function getGroups() {
		return $this->groups;
	}

	/**
	 * Creates a new Groups annotation
	 *
	 * This method allow Doctrine\Common\Cache\PhpFileCache compatibility
	 *
	 * @param array $values array containing property values
	 */
	public static function __set_state(array $values)
	{
		return new self(array('value' => $values['groups']));
	}
}
