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

#### YouTube
This Plugin converts a youtube-URL to a embedded Video.
You can write:
- ``<p class="youtube">URL</p>`` to use the default Values defined.
- ``<p class="youtube">url=https://www.youtube.com/watch?v=k4CDEhUE8YA;width=WWW;height=HHH</p>`` to overwrite the default Values for this Video

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
