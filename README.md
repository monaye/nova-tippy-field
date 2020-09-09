## Nova Tippy Field

Laravel Nova field to display ![Tippy](https://atomiks.github.io/tippyjs/) tooltip on the resource index.

On detail will display just like Laravel Nova ![Textarea](https://nova.laravel.com/docs/1.0/resources/fields.html#textarea-field).

<!-- ![screenshot of nova simple link button](https://user-images.githubusercontent.com/1147313/91624658-53c37880-e956-11ea-9e34-c9f31c480c3e.png) -->

### Installation

```bash
composer require monaye/nova-tippy-field
```

### Usage

```php
use Monaye\NovaTippyField\Tippy;
```

```php
public function fields(Request $request)
{
    return [
        Tippy::make('Body')
            ->text(str_limit($this->message, 40))
            ->tipContent($this->message)
    ];
}
```

---
## Options

Nova Tippy Field comes with various options that you can use to customise how it displayed and availability to pass all the props available to the underlying Tippy instance as well.

### text

You can pass excerpt text or any text you want to display to user as hoverable element. There are options to display icon as well see [icon]() or [iconUrl]() for detail.


```php
Tippy::make('Body')
    ->text(str_limit($this->message, 40))
    ->tipContent($this->message)
```

### tipContent

Pass the text you'd like to display inside the Tippy tooltip. If tooltip content is empty, it will not display the tooltip at all.

```php
Tippy::make('Body')
    ->text(str_limit($this->message, 40)),
    ->tipContent($this->message)
```

### iconPath & iconUrl & iconPosition

You can directly pass the path of your local SVG file or URL of the icon or both. Icon position also can be set.

```php
Tippy::make('Body')
    ->text(str_limit($this->message, 40))
    ->tipContent($this->message)
    ->iconUrl(asset('assets/icons/blue-info.svg'))
    ->iconPath(resource_path('icons/eye.svg'))
    ->iconPosition('right')
```

### tippyOptions

You can pass any props directly that available in the [Tippy JS Props](https://atomiks.github.io/tippyjs/v6/all-props/).
*Please note that, some of the props might not work correctly with nova.*

```php
Tippy::make('Body')
    ->text(str_limit($this->message, 40))
    ->tipContent($this->message)
    ->tippyOptions(['arrow' => false, 'placement' => 'bottom'])
```

# Author

Hope you find it useful. Feel free to reach out with feedback.

Follow me on twitter: [@winmonaye](https://twitter.com/winmonaye)
