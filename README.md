# html
 Generate HTML with PHP

## Usage

Basic example
```php
echo Html::div(
        Html::p(
            Html::text('Example text'),
            ['color' => 'blue']
        ),
        ['class' => ['class1', 'class2']]
    );
```
Output:
```html
<div class="class1 class2"><p color="blue">Example text</p></div>
```

## ```Html```
Create HTML tags using the static Html class. 
 ```php
    echo Html::p()->render(); 
    # Output: <p></p>
 ```
 Nesting tags
 ```php
    echo Html::div(Html::p())->render(); 
    # Output: <div><p></p></div>

    echo Html::div([
        Html::p(),
        Html::table()
    ])->render(); 
    # Output: <div><p></p><table></table></div>
 ```
 Adding attributes
 ```php
    echo Html::div([], ['class' => 'class1']); 
    # Output: <div class="class1"></div>

    echo Html::div([], ['color' => 'red', 'class' => ['class1', 'class2']]);
    # Output: <div color="red" class="class1 class2"></div>
 ```
Encode strings for output
 ```php
    echo Html::p(
        Html::text('3 > 2 = TRUE')
    );
    # Output: <p>3 &gt; 2 = TRUE</p>
 ```

## ```Tag```
```Tag``` and ```VoidTag``` objects can be created through the static ```Html``` class

```php
    $tag = Html::p();
    echo $tag->render();
    # Output: <p></p>

    $voidTag = Html::br();
    echo $voidTag->render();
    # Output: <br/>
```

Adding children and attributes
```php
    $array = [1, 2, 3];

    $tag = Html::tr();
    $tag->attribute('class', ['highlight', 'large-text']);
    foreach ($array as $value) {
        $tag->child(Html::td(Html::text($value)));
    }
    echo $tag->render();
    # Output: <tr class="highlight large-text"><td>1</td><td>2</td><td>3</td></tr>
```

Method Chaining
```php
    $tag = Html::div();
    $tag
        ->attribute('color', 'green')
        ->children([
            Html::p(),
            Html::section()
        ]);
    echo $tag;
    # Outputs: <div color="green"><p></p><section></section></div>
```

