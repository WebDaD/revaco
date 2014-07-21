# Revaco

Responsive Variable Colors. A clear template with 2 colors. Will change header and footer on mobile using multiple css files. Will also use jquery to style navigation



Temporary DemoPage:

http://jsfiddle.net/ExGU3/6/embedded/result/

## Installation

Just download the newest version from subfolder bin.

https://github.com/WebDaD/revaco/blob/master/bin/tpl_revaco_1_15.zip?raw=true

Then install it in joomla3 like any other module

## Features

- Header
- Mobile
- Responsive
- Swipe
- LazyLoad

## Intructions

### Link Effects
YOu can decorate your Links to hava some effects on mouse-hover.
Just add the following class to get an effect: (``<a class="[CLASS/ES]" href="">``)
- `.grow` : Grow the Element
- `.glow` : Let the Element glow
- `.underline` : produce an underline
- `.blod`: have bold font
- `.italic`: have italic font
- `.smooth`: Let all the above magic happen in a smooth movement

### Plugins

#### LazyLoad
This plugin defers the loading of images until they come into the viewspace.
It can be disabled per Image with the following class:
- ``no_lazyload``
Also all images in the following containers are ignored:
- ``simpleimagerotator``

#### YouTube
This Plugin converts a youtube-URL to a embedded Video.
You can write:
- ``<p class="youtube">URL</p>`` to use the default Values defined.
- ``<p class="youtube">url=https://www.youtube.com/watch?v=k4CDEhUE8YA;width=WWW;height=HHH</p>`` to overwrite the default Values for this Video

#### SimpleImageRotator
This Plugin shows different images in a single spot. Just write:
- ``<p class="simpleimagerotator"><img src=""/><img src=""/>...</p>``
You may use as many images as you like
You can also set the transition time for a single rotator:
- ``<p class="simpleimagerotator" data-transition_time="VALUE">`` Wheres VALUE = Time in milliseconds

## MileStones

See Issues


## Plugins
Revaco uses many plugins to have one configuration and not many seperate plugins.

There are some facts about them:
- There is a "Main Switch" for every Plugin
- Plugin JS will only be loaded if active
- If there are configurations for the plugin, they are saved in the details.xml
- The config can be overriden for every single call
- Plugins are used by assining classes to a container (p,div,...)
- The content and (maybe) config are plain written in the container
- There are global plugins (like lazyload) and local ones (like youtube)

## Planed Additional Projects

- Version for Wordpress
- Version for Tools with XML-Config-File (Navigation?)
