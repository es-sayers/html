# TODO

`Text`
- [ ] Add option to toggle html encoding

`Attributes`
- [ ] Add method for custom attribute
  - [ ] Encode attribute values
  - [ ] Encode attribute names
  - [ ] Add list of attributes

## Other
- [ ] Add classes for elements that arent standard tags. Extend Tag or VoidTag if they can have children
  - [ ] `Text` For rending text content
  - [ ] `Container` For holding groups of siblings


## Planned
### `Tag Groups`
 - Similar to React Fragments
 - Will allow for sibling tag groups without a rendered parent

example:

```php
    $group = Html::group([
        Html::p(),
        Html::br(),
        Html::p(),
    ]);
    echo $group;
    # <p></p>
    # <br/>
    # <p></p>
```

### `Components`
 - Premade structures for common element groups `table`, `form`, `ol`, `li` etc.
 - Allow for easier creation by passing data to them
 - Configurable options
  
example:
```php
    Components::table([
        [1, 2],
        [3, 4]
    ], ['col1', 'col2']);
    # Returns Tag element 'table' with children
```