<?php

namespace Like\Eloquent\IdeHelper;

use ArrayAccess;
use Illuminate\Support\Arr;
use RuntimeException;

class Config implements ArrayAccess {
	
	/**
	 * @var array
	 */
	private $config = [];

	public function __construct(array $config) {
		$this->config = $config;
	}

	public function get($key, mixed $defaultVaue) {
		return Arr::get($this->config, $key, $defaultVaue);
	}

	public function offsetExists($offset): bool{
		throw new RuntimeException('Not implemented because we didn\'t need it yet');
	}

	public function offsetGet($offset): int {
		throw new RuntimeException('Not implemented because we didn\'t need it yet');
	}

	public function offsetSet($offset, $value): void {
		throw new RuntimeException('Not implemented because we didn\'t need it yet');
	}

	public function offsetUnset($offset): void {
		throw new RuntimeException('Not implemented because we didn\'t need it yet');
	}
}
