<?php

class View
{
	const VIEW_BASE_PATH = '/app/views/';

	public $view;
	public $data;

	public function __construct($view) {
		$this->view = $view;
	}

	public static function make($viewName = null) {
		if (!$viewName) {
			throw new InvalidArgumentException("ViewName cannot be NULL");
		} else {
			$viewFilePath = self::getFilePath($viewName);
			if (is_File($viewFilePath)) {
				return new View($viewFilePath);
			} else {
				throw new UnexpectedValueException("View File Doesn't Exist");
			}
		}
	}

	public function with($key, $value = null) {
		$this->data[$key] = $value;
		return $this;
	}

	private static function getFilePath($viewName) {
		$filePath = str_replace('.', '/', $viewName);
		return BASE_PATH.self::VIEW_BASE_PATH.$filePath.'.php';
	}

	public function __call($method, $parameters) {
		if (starts_with($method, 'with')) {
			return $this->with(snake_case(substr($method, 4)), $parameters[0]);
		}
		throw new BadMethodCallException("Method [$method] doesn't exist");
	}
}

?>
