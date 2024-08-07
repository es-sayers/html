# TODO

`Tag`

- Children:
  - Adding
    - [ ] Add at index
    - [ ] Prepend
    - [ ] Append
    - [ ] Add All at index
    - [ ] Prepend All
    - [ ] Append All
  - Removing
    - [ ] Clear All
    - [ ] Remove first
    - [ ] Remove last
    - [ ] Remove at index
    - [ ] Remove by tag name
  - Replacing
    - [ ] Replace at index
    - [ ] Replace First
    - [ ] Replace Last
    - [ ] Replace All
  - Getting
    - [ ] Get child at index
    - [ ] Get children by tag name
- Attributes
  - [ ] Clear all
  - [ ] Clear by name
  - [ ] Add bool `override` argument to `Tag::attribute()` and `Tag::attributes()`
    - `override` default = `true`
    - If `override` = `true`, override existing attribute(s)
    - If `override` = `false`, maintain original attributes

`Text`
- [ ] Add option to toggle html encoding

`Attributes`
- [ ] Add method for custom attribute
  - [ ] Add static call to create attributes
    - [ ] Encode attribute values
    - [ ] Encode attribute names
    - [ ] Add list of attributes



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