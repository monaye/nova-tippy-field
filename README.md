## Nova Tippy Field

Laravel Nova field to display [Tippy](https://atomiks.github.io/tippyjs/) tooltip on the resource index.

On detail will display just like Laravel Nova [Textarea](https://nova.laravel.com/docs/1.0/resources/fields.html#textarea-field).
  
![tooltip-with-icon-and-text](https://user-images.githubusercontent.com/1147313/92666025-f831ad00-f2bc-11ea-9f72-182d7a28c42c.png)
  
![tooltip-with-icon-only](https://user-images.githubusercontent.com/1147313/92666026-f962da00-f2bc-11ea-8183-c793b883ded3.png)
  
![tooltip-with-text-only](https://user-images.githubusercontent.com/1147313/92666029-f9fb7080-f2bc-11ea-9ba7-2e8dd1904b75.png)
  
![tooltip-with-placement](https://user-images.githubusercontent.com/1147313/92666148-5494cc80-f2bd-11ea-9202-2cf6a15a1e52.png)
  
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
            ->text(Str::limit($this->body, 40))
            ->tipContent($this->body)
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
    ->text(Str::limit($this->body, 40))
    ->tipContent($this->body)
```

### tipContent

Pass the text you'd like to display inside the Tippy tooltip. If tooltip content is empty, it will not display the tooltip at all.

```php
Tippy::make('Body')
    ->text(Str::limit($this->body, 40)),
    ->tipContent($this->body)
```

### iconPath & iconUrl & iconPosition

You can directly pass the path of your local SVG file or URL of the icon or both. Icon position also can be set.

```php
Tippy::make('Body')
    ->text(Str::limit($this->body, 40))
    ->tipContent($this->body)
    ->iconUrl(asset('assets/icons/blue-info.svg'))
    ->iconPath(resource_path('icons/eye.svg'))
    ->iconPosition('right')
```

### placement 

placement of the tooltip can be placed in different location. All the available placement position can be found at [Tippy Placement Options](https://atomiks.github.io/tippyjs/#placement)

```php
Tippy::make('Body')
    ->iconUrl(asset('assets/icons/blue-info.svg'))
    ->tipContent($this->body)
    ->placement('bottom')
```
  
    
    
### tippyOptions

You can pass any props directly that available in the [Tippy JS Props](https://atomiks.github.io/tippyjs/v6/all-props/).
*Please note that, some of the props might not work correctly with nova.*

```php
Tippy::make('Body')
    ->text(Str::limit($this->body, 40))
    ->tipContent($this->body)
    ->tippyOptions(['arrow' => false, 'placement' => 'bottom'])
```

### shouldShow

Just like the [Laravel Nova TextArea](https://nova.laravel.com/docs/3.0/resources/fields.html#textarea-field) field, on detail screen, by default Nova Tippy Field will hide the content and only show when you click on `Show Content`. You can always show the content in the detail screen.

```php
Tippy::make('Body')
    ->text(Str::limit($this->body, 40))
    ->tipContent($this->body)
    ->shouldShow()
```

# Author

Hope you find it useful. Feel free to reach out with feedback.

Follow me on twitter: [@winmonaye](https://twitter.com/winmonaye)
