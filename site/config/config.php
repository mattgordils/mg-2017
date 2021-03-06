<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

c::set('panel.stylesheet', 'assets/css/panel.css');

// Enable Kirby StaticBuilder locally
c::set([
	'staticbuilder'            => true,
  'staticbuilder.outputdir'  => 'static',
  'staticbuilder.assets'     => ['assets', 'content', 'thumbs'],
  'staticbuilder.baseurl'    => '/mg-2017/',
  'staticbuilder.uglyurls'   => false,
  'staticbuilder.extension'  => '.html',
  'staticbuilder.filter'     => null,
  'staticbuilder.withfiles'  => true
]);

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/
