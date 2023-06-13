<?php

namespace Migratio;

use Illuminate\Support\ServiceProvider;

class MigratioServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$path = database_path('migrations');
		$dirs = glob($path . '/*', GLOB_ONLYDIR);
		$arr = array_merge([$path], $dirs);

		$this->loadMigrationsFrom($arr);
	}
}
