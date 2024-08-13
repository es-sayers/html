# html
 Generate HTML with PHP

## Usage

Basic example
```php
echo Html::div(
    Html::p('Example Text', ['class' => 'stylish'])
);
```
Output:
```html
<div><p class="stylish">Example Text</p></div>
```

## ```Html```
Create HTML tags using the static Html class. 
 ```php
echo Html::p('Paragraph text'); 
 ```
 Output:
 ```html
 <p>Paragraph text</p>
 ```
 Nesting tags
 ```php
echo Html::div(
    Html::section([
            Html::h2('Heading'),
            Html::p('Amazing paragraph')
        ]
    )
);
 ```
 Output:
 ```html
<div><section><h2>Heading</h2><p>paragraph</p></section></div>
 ```
 Adding attributes
 ```php
echo Html::div()
    ->id("2")
    ->class(['class1', 'class2']);
 ```
 Output:
 ```html
<div id="2" class="class1 class2"></div>
 ```
 Tag-specific attributes:
 ```php
 echo Html::input()
        ->type("checkbox")
        ->checked(true);
```
Output:
```html
<input type="checkbox" checked/>
```
## Content automatically encoded
```php
echo Html::div('> <')
        ->id(">")
        ->class(['clas"s1', 'class2']);
```
Output:
```html
<div id="&gt;" class="clas&quot;s1 class2">&gt; &lt;</div>
```

## Supported Tags
`a`, `abbr`, `address`, `area`, `article`, `aside`, `audio`, `b`, `base`, `bdi`, `bdo`, `blockquote`, `body`, `br`, `button`, `canvas`, `caption`, `cite`, `code`, `col`, `colgroup`, `data`, `datalist`, `dd`, `del`, `details`, `dfn`, `dialog`, `div`, `dl`, `dt`, `em`, `embed`, `fieldset`, `figcaption`, `figure`, `footer`, `form`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `head`, `header`, `hgroup`, `hr`, `html`, `i`, `iframe`, `img`, `input`, `ins`, `kbd`, `label`, `legend`, `li`, `link`, `main`, `map`, `mark`, `menu`, `meta`, `meter`, `nav`, `noscript`, `object`, `ol`, `optgroup`, `option`, `output`, `p`, `param`, `picture`, `pre`, `progress`, `q`, `rp`, `rt`, `ruby`, `s`, `samp`, `script`, `search`, `section`, `select`, `small`, `source`, `span`, `strike`, `strong`, `style`, `sub`, `summary`, `sup`, `svg`, `table`, `tbody`, `td`, `template`, `textarea`, `tfoot`, `th`, `thead`, `time`, `title`, `tr`, `track`, `u`, `ul`, `var`, `video`, `wbr`

## Supported Attributes
`accept`, `accesskey`, `action`, `align`, `alt`, `async`, `autocomplete`, `autofocus`, `autoplay`, `bgcolor`, `border`, `charset`, `checked`, `cite`, `class`, `color`, `cols`, `colspan`, `content`, `contenteditable`, `controls`, `coords`, `data`, `datetime`, `default`, `defer`, `dir`, `dirname`, `disabled`, `download`, `draggable`, `enctype`, `enterkeyhint`, `for`, `form`, `formaction`, `headers`, `height`, `hidden`, `high`, `href`, `hreflang`, `http-equiv`, `id`, `inert`, `inputmode`, `ismap`, `kind`, `label`, `lang`, `list`, `loop`, `low`, `max`, `maxlength`, `media`, `method`, `min`, `multiple`, `muted`, `name`, `novalidate`, `open`, `optimum`, `pattern`, `ping`, `placeholder`, `popover`, `popovertarget`, `popovertargetaction`, `poster`, `preload`, `readonly`, `rel`, `required`, `reversed`, `rows`, `rowspan`, `sandbox`, `scope`, `selected`, `shape`, `size`, `sizes`, `span`, `spellcheck`, `src`, `srcdoc`, `srclang`, `srcset`, `start`, `step`, `style`, `tabindex`, `target`, `title`, `translate`, `type`, `usemap`, `value`, `width`, `wrap`