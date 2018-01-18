# Basic Sass and Twig

---

## Whirlwind introduction to SASS

- Visit https://codepen.io/thudfactor/pen/dJjEWO and click the "Fork" button

+++

### Nesting selectors

```scss
.news-teaser__art {
  img {
    max-width: 100%;
  }
}
```

+++ 

### Context selectors

```scss
.news-teaser__art {
  > img
}
```

+++


### Self-selector: &

```scss
.news-teaser__art {
	img {
		max-width: 500px;
	}	
	
	&.news-teaser__art--small {
		img {
			max-width: 300px;	
		}
	}
}
```

@[6-10]

+++

### Functions

Functions take arguments and return a value. 

```scss
@function strip-unit($num) {
  @return $num / ($num * 0 + 1);
}
```

+++

### Using variables 

```scss
$color-shade: #ccc;

.news-teaser__art {
  background-color: $color-shade;
}
```

+++?code=src/scss/_foundation-settings.scss

Foundation settings override file

+++

### Mixins

Mixins are something like macros.

```scss
@mixin full_width_block {
  display: block;
  width: 100%
}

.news-teaser__art {
  img {
    @include full_width_block;
  }
}
```

+++?code=src/scss/_m_typography.scss

Typography mixin  

+++

### @extend

```scss
.news-meta {
  font-size: 12px;
  font-weight: bold;
}

.news-summary {
  @extend .news-meta;
}
```

`@extend` appends the current selector to the selector of the `@extend` rule. This is not as good an idea as it sounds.

+++

### Loops

```scss
@for $i from 1 through 6 {
	h#{$i} {
		@include fontstyle("h#{$i}");
		margin: rem-calc(8 0);
	}
}
```

+++

### More information on Sass

Documentation & more: http://sass-lang.com/

---

## Twig 

Twig is a PHP-based template system used by many tools, including Patternlab and Drupal 8.

+++ 

### Two types of Twig statements

Do something: 

```{% set a_variable = "Hello World" %}```

Print something: 

```{{ a_variable }}````

+++

### Filters

```twig
<h1>{{ a_variable|upper }}</h1>
```

becomes

```twig
<h1>HELLO WORLD</h1>
```

+++ 
### Filters can take arguments

```twig
{% set people = ['John','Paul','George','Ringo'] %}
<p>{{ people|join(', ') }}</p>
```

+++
### the Default filter

```twig
{{ maybe_empty|default('This space left intentionally blank') }}
{% set maybe_empty = 'Hello world' %}
{{ maybe_empty|default('This space left intentionally blank') }}
```

+++
### Functions that return strings

```twig
<p>{{ fake('sentences',{nb: 20, asText: true}) }}</p>
```

Implementation of https://github.com/fzaninotto/Faker.

+++ 

### Default and Faker together

```twig
{{ maybe_empty|default(fake('words',{nb: 5, asText: true})) }}
```

+++

### Comparisons

Similar to many other languages:

- `==`,`>`,`<`, etc.
- For `===` use the `is sameas()` construction
- Booleans are words (`and`,`or`) not symbols.

+++

### Sameas example

```twig
{% set i = 1 %}
{% if i is sameas(true) %}
  <p>“i” is {{ i }}</p>
{% else %}
  <p>“i” is not true.</p>
{% endif %}
```

---

[Day Two, Session 2](https://gitpitch.com/thudfactor/coi-training?p=14)