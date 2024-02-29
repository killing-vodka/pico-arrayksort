# Pico Array KSort

Pico Ksort plugin. Pico is a stupidly simple, blazing fast, flat file CMS. See https://picocms.org/ for more info.

This plugin is asmall integration for the Twig Template Engine. This plugin directly brings the ksort function from PHP into your tpl file. Sort an array by key, nothing more.

### Why do you need this?

You don't need it.

```
{% set testArray = {
    'banana': 6,
    'apple': 30,
    'cherry': 22
} %}
```
* `sort` filter in action:
```
{% for key, value in testArray|sort %}
    * {{ key }} {{ value }}
{% endfor %}
```
Returns ordered values: `* banana 6 * cherry 22 * apple 30`

* key sorting loop:
```
{% set sortedKeys = testArray|keys|sort %}
{% for key in sortedKeys %}
    * {{ key }} {{ testArray[key] }}
{% endfor %}
```
Ordered by key: `* apple 30 * banana 6 * cherry 22`
* `ksort` filter in action:
```
{% for key, value in testArray|ksort %}
    * {{ key }} {{ value }}
{% endfor %}
```
Same results: `* apple 30 * banana 6 * cherry 22` but smarter.

## Install

If you're using one of [Pico's pre-built release packages](https://github.com/picocms/Pico/releases/latest), you need to first create an empty `plugins/PicoArrayKSort` directory in Pico's installation directory on your server. Next, download the latest source package of `PicoArrayKSort` and upload `PicoArrayKSort.php` into the aforementioned `plugins/PicoReadingTime` directory.

That's all.
